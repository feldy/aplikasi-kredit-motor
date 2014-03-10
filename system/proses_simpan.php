<?php
	include "../koneksi.php";
	if (isset($_POST['btn_customer'])) {
		$nama = $_POST['nama'];
		$ktp = $_POST['ktp'];
		$tlp = $_POST['tlp'];
		$alamat = $_POST['alamat'];
		$tgl = $_POST['tgl'];
		$penjamin = $_POST['penjamin'];
		$penghasilan = $_POST['penghasilan'];
		$pengeluaran = $_POST['pengeluaran'];


	if (!($query = mysql_query("INSERT INTO M_CUSTOMER VALUES ('','$nama', '$alamat', '$tlp',  '$tgl', '$penjamin', $penghasilan, $pengeluaran, '$ktp')"))) die("-> ".mysql_error());
		echo "<script> window.location.href='../?page=input_customer'</script>";
	} else if (isset($_POST['btn_motor'])) {
		$kd = $_POST['kd'];
		$otr = $_POST['otr'];
		$merk = $_POST['merk'];
		$harga = $_POST['harga'];
		$type = $_POST['type'];
		$tahun = $_POST['tahun'];


	if (!($query = mysql_query("INSERT INTO M_MOTOR VALUES ('$kd','$merk', '$type', $otr,  $harga, $tahun, '1')"))) die("-> ".mysql_error());
		echo "<script> window.location.href='../?page=input_motor'</script>";
	} else if (isset($_POST['btn_angsuran'])) {
		$kd = $_POST['kd'];
		$dp = $_POST['dp'];
		$x10 = $_POST['10x'];
		$x16 = $_POST['16x'];
		$x22 = $_POST['22x'];
		$x28 = $_POST['28x'];
		$x36 = $_POST['36x'];



	if (!($query = mysql_query("INSERT INTO M_ANGSURAN VALUES ('','$kd',$dp, 0, $x10, $x16,  $x22, $x28, $x36, '1')"))) die("-> ".mysql_error());
		echo "<script> window.location.href='../?page=input_angsuran'</script>";
	}	
	else if (isset($_POST['btn_beli'])) {
		$nasabah = $_POST['nasabah'];
		$motor = $_POST['motor'];
		$jatuh_tempo = $_POST['jatuh_tempo'];
		$tenor = $_POST['tenor'];
		$id_angsuran = $_POST['id_angsuran'];
		$no_pk = $_POST['no_pk'];
		$jml_bayar = $_POST['jml_bayar'];
		$dp = $_POST['dp'];
		
	if (!($query = mysql_query("INSERT INTO M_PENJUALAN VALUES ('$no_pk', '$nasabah','$motor','$id_angsuran','$jatuh_tempo','$tenor',now(), '1', $jml_bayar, $dp)"))) die("-> ".mysql_error());
		//if (!($query = mysql_query("INSERT INTO M_PENJUALAN VALUES ('ee', 'ee','ee','$id_angsuran','$jatuh_tempo','$tenor','a', '1', 1, 1)"))) die("-> ".mysql_error());
		echo "<script> window.location.href='../?page=pay_angsuran'</script>";
	}	else if (isset($_POST['btn_bayar'])) {
		$no_pk = $_POST['no_pk'];

	if (!($query = mysql_query("INSERT INTO T_ANGSURAN VALUES ('','$no_pk', now(), '1')"))) die("-> ".mysql_error());
		echo "<script> window.location.href='../?page=report'</script>";
	}
?>