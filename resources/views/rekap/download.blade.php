<!DOCTYPE html>
<html>
<head>
	<title>Rekap Data</title>
	<style>
		table {
			border: 1px solid black;
			border-collapse: collapse;
			width: 100%;
			text-align: center;
		}
		tr, td, th {
			border: 1px solid black;
		}
		
	</style>
</head>
<body>
	<section>
		<div>
			<div class="left">
				<h3>Rekap Data :</h3>
				<h4></h4>	
			</div>
		</div>
		<table>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Badan Usaha</th>
					<th>Kabupaten/Kota</th>
					<th>a1</th>
					<th>a2</th>	
					<th>a3</th>
					<th>a4</th>
					<th>a5</th>
					<th>a6</th>
				</tr>
			</thead>
			<tbody>
				@foreach($kta as $index => $value)
					<tr style="page-break-after: always;">
						<td>{{ $loop->iteration }}</td>
						<td>{{ $value->nama_bu }}</td>
						<td>{{$value->domisili}}</td>
						<td>{{ $value->a1 }}</td>
						<td>{{ $value->a2 }}</td>
						<td>{{ $value->a3 }}</td>
						<td>{{ $value->a4 }}</td>
						<td>{{ $value->a5 }}</td>
						<td>{{ $value->a6 }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div align="right">
			<h4>Pencetak</h4>
			<p>{{ Auth::user()->name }}</p>
		</div>
		<p align="center">&copy; 2018 SMKN 13 Bandung</p>
	</section>
</body>
</html>