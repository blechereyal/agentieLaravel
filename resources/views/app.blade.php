<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/template.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>info@agentie.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+40-700-000-000
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
									<h1 style="color:white">Agency</h1>
                </a>
            </div>

            <div class="left-div">
							@if (Auth::guest())
								<i class="fa fa-user-plus login-icon" style="font-size: 25px;" ></i>
							@else
									<div class="user-settings-wrapper">
											<ul class="nav">

													<li class="dropdown">
															<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
																	<span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
															</a>
															<div class="dropdown-menu dropdown-settings">
																	<div class="media">
																			<a class="media-left" href="#">
																					<img src="{{Auth::user()->gravatarUrl()}}" alt=""
                                                                                         class="img-rounded" />
																			</a>
																			<div class="media-body">
																					<h4 class="media-heading">{{ Auth::user()->name }}</h4>
																					<h5>Welcome</h5>

																			</div>
																	</div>
																	<hr />
																	<h5><strong>Agentie : </strong></h5>
																	We wish you happy browsing.
																	<hr />
																	<a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="{{ url('/auth/logout') }}" class="btn btn-danger btn-sm">Logout</a>

															</div>
													</li>


											</ul>
									</div>
							@endif
						</div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <!-- <li><a  href="index.html">Dashboard</a></li>
                            <li><a href="ui.html">UI Elements</a></li>
                            <li><a href="table.html">Data Tables</a></li>
                            <li><a href="forms.html">Forms</a></li>
                            <li><a href="login.html">Login Page</a></li>
                            <li><a class="menu-top-active" href="blank.html">Blank Page</a></li> -->
														@if (Auth::guest())
															<li><a href="{{ url('/auth/login') }}">Login</a></li>
															<li><a href="{{ url('/auth/register') }}">Register</a></li>
                                                            
														@else
															@if(Auth::user()->role == 'admin')
                                                                <li><a href="{{url('/admin')}}">Admin Panel</a></li>
                                                            @endif
														@endif
                                                        <li><a href="{{ url('/destinations') }}">Destinations</a></li>
                                                        <li>{!! link_to_route('contact', "Contact Us!!") !!}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->

  <div class="content-wrapper">
    <div class="container">
			@yield('content')
		</div>
	</div>


	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 Agency
                </div>

            </div>
        </div>
    </footer>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
