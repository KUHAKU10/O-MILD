@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Level Data</div>

				<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<td>Title</td>
							<td>Content</td>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $key)
							<tr>
								<td>{{ $key->title }}</td>
								<td>{{ $key->contents }}</td>
								<td><a href="{{ url('novel/edit/' .$key->id) }}">Edit</a></td>
								<td><a href="{{ url('novel/destroy/' .$key->id) }}">Delete</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
