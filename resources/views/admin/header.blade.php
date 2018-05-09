
<!-- logo -->
<div class="logo hidden-xs">
	<a href="index-2.html" class="logo-expanded"> <img src="{{ asset('img/icon.png') }}" alt="logo"> <span class="nav-text">Laravel</span> </a>
</div>
<!-- end logo -->
<button type="button" class="navbar-toggle pull-left">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-toggle ion-navicon-round"></span>
</button>

<!-- Search -->
<form role="search" class="navbar-left app-search pull-left hidden-xs">
	<input type="text" placeholder="Search..." class="form-control">
</form>
<!-- End Search -->

<!-- Right navbar -->
<ul class="list-inline navbar-right top-menu top-right-menu">
	<!-- Messages -->
	<li class="dropdown">
		<a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="fa fa-envelope-o "></i> <span class="badge badge-sm up bg-purple count">4</span> </a>
		<ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
			<li>
				<p>
					Messages
				</p>
			</li>
			<li>
				<a href="#"> <span class="pull-left"><img src="{{ asset('img/avatar-2.jpg') }}" class="img-circle thumb-sm m-r-15" alt="img"></span> <span class="block"><strong>Hammond Burke</strong></span> <span class="media-body block">New tasks
					<br>
					<small class="text-muted">3 seconds ago</small></span> </a>
			</li>
			<li>
				<a href="#"> <span class="pull-left"><img src="{{ asset('img/avatar-3.jpg') }}" class="img-circle thumb-sm m-r-15" alt="img"></span> <span class="block"><strong>Ray Shannon</strong></span> <span class="media-body block">New file add
					<br>
					<small class="text-muted">5 minutes ago</small></span> </a>
			</li>
			<li>
				<a href="#"> <span class="pull-left"><img src="{{ asset('img/avatar-4.jpg') }}" class="img-circle thumb-sm m-r-15" alt="img"></span> <span class="block"><strong>Hammond Burke</strong></span> <span class="media-body block">New file add
					<br>
					<small class="text-muted">12 minutes ago</small></span> </a>
			</li>
			<li>
				<a href="#"> <span class="pull-left"><img src="{{ asset('img/avatar-5.jpg') }}" class="img-circle thumb-sm m-r-15" alt="img"></span> <span class="block"><strong>Ray Shannon</strong></span> <span class="media-body block">New tasks needs to be done
					<br>
					<small class="text-muted">15 minutes ago</small></span> </a>
			</li>
			<li>
				<p class="text-center">
					<a href="inbox.html">All Messages</a>
				</p>
			</li>
		</ul>
	</li>
	<!-- End messages -->
	<!-- Notification -->
	<li class="dropdown">
		<a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="fa fa-bell-o"></i> <span class="badge badge-sm up bg-pink count">5</span> </a>
		<ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
			<li class="noti-header">
				<p>
					Notifications
				</p>
			</li>
			<li>
				<a href="#"> <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span> <span>New user add
					<br>
					<small class="text-muted">2 minutes ago</small></span> </a>
			</li>
			<li>
				<a href="#"> <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span> <span>Use file add
					<br>
					<small class="text-muted">4 minutes ago</small></span> </a>
			</li>
			<li>
				<a href="#"> <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span> <span>Send project demo files to client
					<br>
					<small class="text-muted">2 hour ago</small></span> </a>
			</li>
			<li>
				<a href="#"> <span class="pull-left"><i class="fa fa-cloud-upload fa-2x text-success"></i></span> <span>Download project
					<br>
					<small class="text-muted">3 hour ago</small></span> </a>
			</li>
			<li>
				<a href="#"> <span class="pull-left"><i class="fa fa-cloud-download fa-2x text-warning"></i></span> <span>Upload projects
					<br>
					<small class="text-muted">5 hour ago</small></span> </a>
			</li>

			<li>
				<p class="text-center">
					<a href="#">All notifications</a>
				</p>
			</li>
		</ul>
	</li>
	<!-- End Notification -->

	<!-- User Menu Dropdown -->
	<li class="dropdown text-center">
		<a data-toggle="dropdown" class="dropdown-toggle" href="#"> 
		<img alt="" src="{{ asset('img/avatar-2.jpg') }}" class="img-circle profile-img thumb-sm"> <span class="username">Shahjalal </span> <span class="caret"></span> </a>
		<ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
			<li>
				<a href="profile.html"><i class="fa fa-briefcase"></i>Profile</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-cog"></i> Settings</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-bell"></i><span class="pull-left"> Issues</span> <span class="label label-info pull-right mail-info">5</span></a>
			</li>
			<li>
				<a href="">
					<i class="fa fa-sign-out"></i> Log Out
				</a>
			</li>
		</ul>
	</li>
	<!-- End User Menu Dropdown -->
</ul>
<!-- End Right Navbar -->