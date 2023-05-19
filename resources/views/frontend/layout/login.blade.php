	@guest
		<li class="logn"> <a href="/login" id="login"> Login </a> </li>
		<li> <a href="/register" id="register"> Register </a> </li>
	@else
		<li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="logout">  <i class="fa fa-sign-out"></i> Log out </a>
			<form id="logout-form" action="#" method="POST" style="display: none;">
				@csrf
			</form> 
		</li>
	@endif