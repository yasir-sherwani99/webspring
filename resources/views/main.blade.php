<!DOCTYPE html>
<html lang="en">

@include('partials._head')

<body>

	@include('partials._nav')
	<div class="container">

		@yield('content')

		<hr/>
		
		@include('partials._footer')

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    </div>
    
		@include('partials._script')

	</body>
</html>
