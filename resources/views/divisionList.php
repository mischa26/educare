@extends('adminpanel')

@section('content')

<div class="row">
	<div class="col-md-12">
		<br/>
		<h2 align="center">Division List</h2>
		<br/>
		<div align="right">
			<a href="{{route('division')}}" class="btn btn-primary"></a>
		</div>
		<table class="table table-bordered">
			<tr>
				<th>Division Name</th>
			</tr>
			@foreach($divisions as $row)
			<tr>
				<td>{{$row['divisionname']}}</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>