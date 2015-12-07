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
			<table style="width:100%"></table>
		</form>
	</div>
</div>