@extends('master-mahasiswa')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Nilai Ujian Pratikum</strong>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Mahasiswa</th>
			<th>NIM Mahasiswa</th>	
			<th>Nama Matakuliah</th>
			<th>Nilai</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaJadwalPratikum as $jadwal_pratikum)
		<td>{{ $x++ }}</td>
		<td>{{ $jadwal_pratikum->mahasiswa->nama or 'nama Kosong' }}</td>
		<td>{{ $jadwal_pratikum->mahasiswa->nim or 'nim Kosong' }}</td>
		<td>{{ $jadwal_pratikum->aslab_pratikum->matakuliah->nama_mk or 'matakuliah Kosong' }}	</td>
		<td>{{ $jadwal_pratikum->nilai }}</td>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	