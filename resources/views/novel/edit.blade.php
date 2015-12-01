@extends('app')

@section('content')
<div class="panel">
	<div class="heading">
		<span class="title">
			<span class="class .header">Edit a Post</span>
		</span>
	</div>
	<div class="content">
		<form method="POST" action="{{ url('novel/update') }}" enctype="multipart/form-data">
			<table class="table">
						<tr>
							<td>Title</td>
							<td><input type="text" name="title" value="{{ $data-> title }}"></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><textarea name="contents" value="contents">{{ $data->contents }}</textarea></td>
						</tr>
						<tr>
							<td></td>
							<td><button class="btn btn-primary">Submit</button></td>
						</tr>	
					</table>
		</form>
	</div>
</div>
@endsection