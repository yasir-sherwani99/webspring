@extends('main')

@section('content')

		<div class="row">
			<div class="col-md-12">
				<h2>About our Blog </h2>
				<p>About: {{ $data['fullname'] }} </p>
				<p>Email: {{ $data['email'] }}</p>
			</div>
		</div>

@endsection