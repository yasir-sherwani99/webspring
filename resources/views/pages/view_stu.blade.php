@extends('main')

@section('content')

<div class="row">
	<div class="col-md-12">
		@if(Session::has('success'))

	        <div class="alert alert-success" role="alert">
                   
		        <strong>Success:</strong> {{ Session::get('success') }}
	           
            </div> 

        @endif
		<table class="table">
			<caption class="text-center"><label>View All Students</label></caption>
			<thead>
				<tr>
					<th>Sr. #</th>
					<th>Student Name</th>
					<th>Father Name</th>
					<th>Gender</th>
					<th>School Name</th>
					<th>Roll No</th>
					<th>Class</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>	
			</thead>	
			<tbody>
				@php
					$i = 1;
				@endphp
				@foreach($students as $sstudents)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{ $sstudents->student }}</td>
					<td>{{ $sstudents->father }}</td>
					<td>{{ $sstudents->gender }}</td>
					<td>{{ $sstudents->school }}</td>
					<td>{{ $sstudents->roll }}</td>
					<td>{{ $sstudents->classs }}</td>
				<!--	<td><button class="btn btn-danger">Delete</button></td> -->
					<td>
						<form method="POST" action=" students/{{ $sstudents->id }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" class="btn btn-danger btn-sm" name="submit" value="Delete">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>	
					</td>	
					<td>
						{!! Html::linkRoute('students.edit', 'Edit', array(($sstudents->id))) !!}
					</td>
				</tr>	
				@endforeach
			</tbody>	
		</table>	
	</div>	
</div>

@endsection