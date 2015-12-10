@extends('app')

@section('content')
<div class="panel">
	<div class="heading">
		<span class="title">
			<span class="class .header">Buat Cover Cerita</span>
		</span>
	</div>
	<div class="content">
		<form method="POST" action="{{ url('cover/save')}}" enctype="multipart/form-data">
			<table style="width:100%">
				<tr>
					<td>Judul Novel/Buku</td>
					<td>
						<div class="input-control text full-size">
							<input type="text" name="title">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						</div>
					</td>
				</tr>
				<tr>
					<td>Sampul</td>
					<td>
						<div class="input-control file full-size" data-role="input">
							<input type="file" name="cover">
							<button class="button"><span class="mif-folder"></span></button>
						</div>
					</td>
				</tr>
				<tr>
					<td>Description</td>
					<td>
						<div class="input-control textarea full-size">
							<textarea name="description"></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button class="button info block-shadow-info text-shadow" type="submit">Submit</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
@endsection