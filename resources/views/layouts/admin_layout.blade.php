<!DOCTYPE html>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CLASS SCHEDULER</title>
	<link type="text/css" href="{{ asset('css/bootstrap_css/css/bootstrap.min.css') }}" rel="stylesheet"> 	
	<link type="text/css" href="{{ asset('css/bootstrap_css/css/bootstrap-responsive.min.css') }}" rel="stylesheet"> 
	<link type="text/css" href="{{ asset('css/backend_css/theme.css') }}" rel="stylesheet"> 
	<link type="text/css" href="{{ asset('css/images/icons/css/font-awesome.css') }}" rel="stylesheet">
	<link type="image" href="{{ asset('picture/logo.png') }}">
	<link type="image" href="{{ asset('picture/download.jpg') }}">
	<script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
	<link type="text/css" href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600')}}" rel='stylesheet'>
	</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>
				
			  	<a class="brand" href="/home">
					 <img src="{{ asset('picture/download.png') }}" style="width:50px;height:50px;"> 
					  CLASS SCHEDULER
				  </a>
				  <br>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<li class=""><a href="#">
							<i class="icon-envelope"></i>
						</a></li>
						<li class=""><a href="#">
							<i class="icon-eye-open"></i>
						</a></li>
						<li class=""><a href="#">
							<i class="icon-bar-chart"></i>
						</a></li>
					</ul>

					
				
					<ul class="nav pull-right">
						{{-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Item No. 1</a></li>
								
								<li><a href="#">Don't Click</a></li>
								<li class="divider"></li>
								<li class="nav-header">Example Header</li>
								<li><a href="#">A Separated link</a></li>
															</ul>
						</li>
						
						<li><a href="#">
							Support                                        
						</a></li> --}}  
						<li class="nav-user">                                      
							<a>
								@if (session('status'))
									<div class="alert alert-success" role="alert">
										{{ session('status') }}
									</div>
								@endif
							<strong>Hi! </strong>{{ Auth::user()->name }}
								
							</a>	
						</li>
						<li class="nav-user">
							<a href="{{ route('logout') }}">
								<i class="menu-icon icon-signout"></i>
								Logout
							</a>	
						</li>

					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
    </div><!-- /navbar -->

     <!--menu--------------------------------------------------------->
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						{{-- <ul class="widget widget-menu unstyled">
							
							<li>
								<a href="/admin/activity">
									<i class="menu-icon icon-bullhorn"></i>
									News Feed
								</a>
							</li>
							
							<li>
								<a href="/admin/task">
									<i class="menu-icon icon-tasks"></i>
									Tasks
									<b class="label orange pull-right">19</b>
								</a>
							</li>
						</ul><!--/.widget-nav--> --}}

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="/home">
								<i class="menu-icon icon-dashboard"></i>
								Dashboard
							</a>
						</li>
								<li><a href="/admin/scheduler"><i class="menu-icon icon-calendar"></i>Scheduler</a></li>
								<li><a href="/admin/checklist"><i class="menu-icon icon-list"></i>Checklist</a></li>
								<li><a href="/admin/table"><i class="menu-icon icon-user"></i>Faculty</a></li>
								<li><a href="/admin/section_table"><i class="menu-icon icon-paste"></i>Sections</a></li>
								<li><a href="/admin/programme_table"><i class="menu-icon icon-save"></i>Programs</a></li>
								<li><a href="/admin/room_table"><i class="menu-icon icon-home"></i>Rooms</a></li>
								<li><a href="/admin/course_table"><i class="menu-icon icon-book"></i>Courses</a></li>
								<li><a href="/admin/department_table"><i class="menu-icon icon-group"></i>Department</a></li>
								<li><a href="/admin/college_table"><i class="menu-icon icon-building"></i>Colleges</a></li>
								<li><a href="/admin/room_utilization"><i class="menu-icon icon-home"></i>Room Utilization</a></li>
                         </ul>

						<ul class="widget widget-menu unstyled">
							<li>
								
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="/admin/other_login">
											<i class="icon-inbox"></i>
											Login
										</a>
									</li>
									<li>
										<a href="/admin/user_profile">
											<i class="icon-inbox"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="/admin/user_listing">
											<i class="icon-inbox"></i>
											All Users
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="{{ route('logout') }}">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
    <body>
		@yield('content')
	</body>
	

	

</html>