
	<!-- Navigation -->
	<nav class="navbar-default navbar-static-side" role="navigation">
		<div class="sidebar-collapse" id="sidetree">
			<ul class="treeview nav metismenu" id="tree">
				<li class="nav-header">
					<div class="dropdown profile-element text-center"> <img src="/img/logo.png" class="img-fluid" />  </div>
					<div class="logo-element"> <img src="/img/logo.png" class="img-fluid" /> </div>
				</li>
				<li> <div class="hitarea expandable-hitarea"><a href="/admin/dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> <span> Dashboard </span> </a></div> </li>
                <li class="expandable">
					<div class="hitarea expandable-hitarea"> <i class="fa fa-sliders" aria-hidden="true"></i> <span>  Blogs </span> <i class="fa fa-angle-down" aria-hidden="true"></i> </div>
					<ul class="category" style="display:none;">
						<li><a href="/admin/blogs"> <span> Blogs </span> </a> </li>
						<li><a href="/admin/blogs/category"> <span> Blog Category </span> </a> </li> 
					</ul>
				</li>

				<li class="expandable">
					<div class="hitarea expandable-hitarea"> <i class="fa fa-sliders" aria-hidden="true"></i> <span>  Quize </span> <i class="fa fa-angle-down" aria-hidden="true"></i> </div>
					<ul class="category" style="display:none;">
						<li><a href="{{route("admin-quize.index")}}"> <span> Quize </span> </a> </li>
						
					</ul>
				</li>

				<li class="expandable">
					<div class="hitarea expandable-hitarea"> <i class="fa fa-sliders" aria-hidden="true"></i> <span> Poll Of Day </span> <i class="fa fa-angle-down" aria-hidden="true"></i> </div>
					<ul class="category" style="display:none;">
						<li><a href="{{route("admin-poll.index")}}"> <span> Poll Of Day </span> </a> </li>
						
					</ul>
				</li>
			
				<li class="expandable">
					<div class="hitarea expandable-hitarea"> <i class="fa fa-sliders" aria-hidden="true"></i> <span>  News </span> <i class="fa fa-angle-down" aria-hidden="true"></i> </div>
					<ul class="category" style="display:none;">
						<li><a href="/admin/news"> <span> News </span> </a> </li>
						<li><a href="/admin/news/category"> <span> News Category </span> </a> </li> 
					</ul>
				</li>

				<li class="expandable">
					<div class="hitarea expandable-hitarea"> <i class="fa fa-sliders" aria-hidden="true"></i> <span>  Videos </span> <i class="fa fa-angle-down" aria-hidden="true"></i> </div>
					<ul class="category" style="display:none;">
						<li><a href="/admin/videos"> <span> Videos </span> </a> </li>
						<li><a href="/admin/videos/category"> <span> Videos Category </span> </a> </li>
						<li><a href="/admin/videos/category/insert"> <span>Add Youtube Videos</span> </a> </li> 
					</ul>
				</li>
				
				<li class="expandable">
					<div class="hitarea expandable-hitarea"> <i class="fa fa-sliders" aria-hidden="true"></i> <span>  Photos </span> <i class="fa fa-angle-down" aria-hidden="true"></i> </div>
					<ul class="category" style="display:none;">
						<li><a href="/admin/photos"> <span> Photos </span> </a> </li>
						<li><a href="/admin/photos/category"> <span> Photos Category </span> </a> </li> 
						<li><a href="/admin/photos/category/gallery"> <span> Gallery </span> </a> </li> 
					</ul>
				</li>
				<li> <div class="hitarea expandable-hitarea"><a href="/admin/teams"><i class="fa fa-sliders" aria-hidden="true"></i> <span> Teams </span> </a></div> </li>
				<li> <div class="hitarea expandable-hitarea"><a href="/admin/players"><i class="fa fa-sliders" aria-hidden="true"></i> <span> Players </span> </a></div> </li>
				<li> <div class="hitarea expandable-hitarea"><a href="/admin/venues"><i class="fa fa-sliders" aria-hidden="true"></i> <span> Venues </span> </a></div> </li>
				<li> <div class="hitarea expandable-hitarea"><a href="/admin/schedules"><i class="fa fa-sliders" aria-hidden="true"></i> <span> Schedules </span> </a></div> </li>
				
			</ul>
		</div>
	</nav>
	
	<div class="nav_footer">
		<div class="nav-fold">
			<span class="pull-left"> <img src="/img/avatar.png" alt="Avatar" class="w-40 img-circle"/> </span>
			<span class="hidden-folded p-x">
				<span class="white"> WorldSeriesT20</span>
				<small class="block"><i class="fa fa-circle text-success m-r-sm"></i>Online</small>
			</span>
		</div>
	</div>
	

