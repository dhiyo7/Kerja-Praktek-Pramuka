<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?
		$table = '
		<table border="1">
			<tr>
				<th>No.</th>
				<th>Nama Sekolah</th>
				<th>No gudep</th>
				<th>Alamat</th>
			</tr>';

			$no = 1;
			foreach($data as $d){
				$table .= '
				<tr>
					<td>'.$no++. '</td>
					<td>'.$d->nama_sekolah. '</td>
					<td>'.$d->no_gudep++. '</td>
					<td>'.$->alamat++. '</td>
				</tr>';
				$table .= '
				</table>';

				echo $table;
				?>
</body>
</html>