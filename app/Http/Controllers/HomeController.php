<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

    /**
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function contactPost(Request $request)
    {
        $this->validate($request,array(
            'name' => 'required|min:3',
            'phone' => 'required|digits:10',
            'email' => 'required|email',
            'comment' => 'required|min:10'
        ));
        Mail::send('emails.contact', ['email' => $request->get('email'), 'name' => $request->get('name'), 'phone' =>
            $request->get('phone'), 'comment' => $request->get('comment')],
            function
        ($message)
        {
            $message->to('blechereyal@gmail.com', 'Blecher Eyal')->subject('Contact Alert!');
        });
        return redirect('/');
    }


}
