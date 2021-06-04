<html>
<head>
	<title>Laporan Order</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Order</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Cart ID</th>
				<th>Nama Penerima</th>
				<th>Nomor Telepon</th>
				<th>Alamat</th>
				<th>Provinsi</th>
				<th>Kota</th>
				<th>Kecamatan</th>
				<th>Kelurahan</th>
				<th>Kode Pos</th>
			</tr>
		</thead>
		<tbody>
			@foreach($order as $o)
			<tr>
				<td>{{$p->cart_id}}</td>
				<td>{{$p->nama-penerima}}</td>
				<td>{{$p->no_tlp}}</td>
				<td>{{$p->alamat}}</td>
				<td>{{$p->provinsi}}</td>
				<td>{{$p->kota}}</td>
				<td>{{$p->kecamatan}}</td>
				<td>{{$p->kelurahan}}</td>
				<td>{{$p->kodepos}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
