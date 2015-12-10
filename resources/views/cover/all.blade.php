@extends('app')

@section('content')

<div class="panel">
	<div class="heading">
		<span class="icon mif-file-text"></span>
		<span class="title">Buku</span>
	</div>
	<div class="content">
		<table style="width:100%" class="table">
			<thead>
				<th>Judul</th>
				<th>Description</th>
			</thead>
			<tbody>
				<?php $i = 1;?>
				@foreach($data as $post)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{ $post->title }}</td>
					<td>{{ $post->description }}</td>
					<td><a href="{{ url('cover/edit ',$post->id) }}"></td>
					<td><a href="{{ url('cover/delete/',$post->id) }}"></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection