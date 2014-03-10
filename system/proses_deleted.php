<?php
	include "../koneksi.php";
	if (isset($_GET['page']) == "customer") {
		$id = $_GET['id_deleted'];
		if (!($query = mysql_query("DELETE FROM M_CUSTOMER where no_pk = '$id'"))) die("-> ".mysql_error());
		echo "<script> window.location.href='../?page=view_customer'</script>";
	}	
	
?>