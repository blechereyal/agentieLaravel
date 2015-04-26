@extends('app')

@section('content')
    <div class="col-md-12">
        <h4 class="page-head-line">Contact us:</h4>
    </div>
    <div class="col-md-12">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    <i class="fa fa-times"></i> {{ $error }}
                @endforeach
            </div>
        @endif
        {!! Form::open(array('route' => array('contact_post')))  !!}
        <div class="form-group">
            {!! Form::label('name','Full name') !!}
            {!! Form::text('name',null,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','E-mail Address') !!}
            {!! Form::email('email',null,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone','Phone number') !!}
            {!! Form::text('phone',null,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('comment','Comment') !!}
            {!! Form::textArea('comment',null,array('class' => 'form-control')) !!}
        </div>
        {!! Form::submit('Send!',array('class' => 'btn btn-primary')); !!}
        {!! Form::close() !!}
    </div>
@endsection
