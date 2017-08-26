@extends('main')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form method="post" action="{{ URL::route('students.update', $student->id) }}">
			<input type="hidden" name="_method" value="PUT">
		<table class="table">
			<caption class="text-center"><b>Edit Student Registration</b></caption>
			<tr>
				<td>Student Name</td>
				<td><input type="text" name="student" class="form-control" value="{{ $student->student }}"></td>
			</tr>
			<tr>
				<td>Father Name</td>
				<td><input type="text" name="father" class="form-control" value="{{ $student->father }}"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
				<!--	<input type="radio" name="gender" value="Male"> Male <br/>
					<input type="radio" name="gender" value="Female"> Female  -->
					<select name="gender">
						<option value="{{ $student->gender }}">{{ $student->gender }}</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>	
				</td>
			</tr>
			<tr>
				<td>School Name</td>
				<td><input type="text" name="school" class="form-control" value="{{ $student->school }}"></td>
			</tr>
			<tr>
				<td>Roll No</td>
				<td><input type="text" name="roll" class="form-control" value="{{ $student->roll }}"></td>
			</tr>
			<tr>
				<td>Class</td>
				<td>
					<select name="classs" class="form-control">
						<option value="{{ $student->classs }}">{{ $student->classs }}</option>
						<option value="9th">9th</option>
						<option value="10th">10th</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" name="submit" value="Update Student" class="btn btn-success">
				</td>
			</tr>	
		</table>
		</form>	
	</div>	
</div>

@endsection