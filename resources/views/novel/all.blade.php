@extends('app')

@section('content')

<div class="panel">
	<div class="heading">
		<span class="icon mif-file-text"></span>
		<span class="title">Cerita</span>
	</div>
	<div class="content">
		<table style="width:100%" class="table">
		<thead>
			<th>No.</th>
			<th>Title</th>
			<th colspan="2">Action</th>
		</thead>
		<tbody>
		<?php $i=1;?>
			@foreach($data as $key)
				<tr>
					<td>{{ $i++}}</td>
					<td>{{ $key->title }}</td>
					<td><a href="{{ url('novel/edit	',$key->id) }}">Edit</a></td>
					<td><a href="{{ url('novel/delete ',$key->id) }}">Delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>

@endsection