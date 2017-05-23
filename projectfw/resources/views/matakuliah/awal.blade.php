@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data MataKuliah</strong>
		<a href="{{url('matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">MataKuliah</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table table-hover table-bordered table-condensed">
	<thead>
		<tr  class="info">
			<th>No.</th>
			<th>Nama Matakuliah</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $matakuliah)
		<td>{{ $x++ }}</td>
		<td>{{ $matakuliah->nama_mk or 'title Kosong' }}</td>
		<td>{{ $matakuliah->keterangan or 'keterangan Kosong' }}	</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('matakuliah/edit/'.$matakuliah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('matakuliah/lihat/'.$matakuliah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('matakuliah/hapus/'.$matakuliah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	