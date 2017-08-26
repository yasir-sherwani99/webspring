@extends('main')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		@if(Session::has('success'))

	           <div class="alert alert-success" role="alert">
                   
		          <strong>Success:</strong> {{ Session::get('success') }}
	           
                </div> 

            @endif
		<form method="post" action="{{ action('PostController@store') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<table class="table">
				<caption class="text-center"><b>Student Registration Form</b></caption>
				<tr>
					<td>Students's Name:</td>
					<td><input type="text" name="student1" placeholder="" class="form-control"></td>
				</tr>
				<tr>
					<td>Father's Name:</td>
					<td><input type="text" name="father1" placeholder="" class="form-control"></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>
						<input type="radio" name="gender1" value="Male"> Male <br/>
						<input type="radio" name="gender1" value="Female"> Female 
					</td>
				</tr>
				<tr>
					<td>School Name:</td>
					<td>
						<input type="text" name="school1" placeholder="" class="form-control">
					</td>
				</tr>
				<tr>
					<td>Roll No:</td>
					<td>
						<input type="text" name="roll1" placeholder="" class="form-control">
					</td>
				</tr>
				<tr>
					<td>Class:</td>
					<td>
						<select name="classs1" class="form-control">
							<option value="">Select Class</option>
							<option value="9th">9th</option>
							<option value="10th">10th</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Add Student" class="btn btn-primary">
					</td>
				</tr>	
			</table>	
		</form>	
	</div>	
</div>
@endsection