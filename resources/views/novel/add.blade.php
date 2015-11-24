@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Add Level</div>

				<div class="panel-body">
				<form method="POST" action="{{url('level/add')}}">
					<input type="hidden" value="{{csrf_token()}}" name="_token">
					<table class="table">
						<tr>
							<td>Title</td>
							<td><input type="text" name="title" value="title">
						</tr>
						<tr>
							<td>Nama</td>
							<td><textarea name="contents" value="contents"></textarea></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
