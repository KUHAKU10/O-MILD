@extends('app')

@section('content')
<div class="panel">
	<div class="heading">
		<span class="title">
			<span class="class .header"> Edit Novel</span>
		</span>
	</div>
	<div class="content">
		<form method="POST" action="{{ url('cover/update') }}" enctype="multipart/form-date">
			<table style="width:100%">
				<tr>
					<td>Judul Novel/Buku</td>
					<td>
						<div class="input-control text full-size">
							<input type="text" name="title" value="{{ $data->title }}">
							<input type="hidden" name="id" value="{{ $data->id }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						</div>
					</td>
				</tr>
				<tr>
					<td>Sampul</td>
					<td>
						<img src="{{ url('images/'. $data->cover) }}">
							<div class="input-control file full-size" data-role="input">
								<input type="file" name="cover">
								<button class="button"><span class="mif-folder"></span></button>
							</div>
					</td>
				</tr>
				<tr>
					<td>Description</td>
					<td></td>
				</tr>
			</table>
		</form>
	</div>
</div>