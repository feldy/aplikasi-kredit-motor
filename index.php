<?php 
	include "koneksi.php";
	$no_pk = "";
	if (isset($_POST['no_pk'])) {
			$no_pk = $_POST['no_pk'];
		}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="lib/metro/css/metro-bootstrap.css">
        <script src="lib/metro/js/jquery/jquery.min.js"></script>
        <script src="lib/metro/js/jquery/jquery.widget.min.js"></script>
        <script src="lib/metro/min/metro.min.js"></script>
    <title>Aplikasi Kredit Motor</title></head>
    <body class="metro">
      	<nav class="navigation-bar">
            <nav class="navigation-bar-content">
            <a href="?page=home" class="element"><span class="icon-grid-view"></span> &nbsp;APLIKASI KREDIT MOTOR</a>
			<span class="element-divider"></span>
          <div class="element">
	                <a class="dropdown-toggle" href="#">
                		<span class="icon-user-2"></span> Customer                    </a>
                    <ul class="dropdown-menu" data-role="dropdown">
                        <li><a href="?page=input_customer">Input Data Customer</a></li>
                        <li><a href="?page=view_customer">View Customer</a></li>
                    </ul>
                </div>
          <span class="element-divider"></span>
          <div class="element">
                	<a class="dropdown-toggle" href="#">
	                	<span class="icon-shipping"></span> Motor                    </a>
                    <ul class="dropdown-menu" data-role="dropdown">
                        <li><a href="?page=input_motor">Input Motor</a></li>
                        <li><a href="?page=input_angsuran">Input List Tenor</a></li>
                        <li><a href="?page=view_angsuran">Lihat Tenor</a></li>
                        <?php
                        	if (!($query = mysql_query("SELECT distinct(merek) FROM M_MOTOR"))) die("SQL Error:". mysql_error());
							$x = mysql_num_fields($query);
							if ($x > 0) {
							 echo "<li class='divider'> </li>";
							}
							$str = "";
							while($res = mysql_fetch_array($query)) {
								echo '<li><a href="#" class="dropdown-toggle">'.$res[0].'</a>';
									echo'<ul class="dropdown-menu" data-role="dropdown">';
                                       if (!($query2 = mysql_query("SELECT distinct(type) FROM M_MOTOR where merek = '$res[0]'"))) die("SQL Error:". mysql_error()); 
                                       while($ser = mysql_fetch_array($query2)) {
                                            echo '<li><a href="?page=view_angsuran&criteria=mtr.type&value='.$ser[0].'">'.$ser[0].'</a></li>';
                                       }
									echo '</ul>';
								echo '</li>';								
							}
						?>
                    </ul>
                </div>
        <span class="element-divider"></span>
          <div class="element">
                	<a class="dropdown-toggle" href="#">
	                	<span class="icon-coins"></span> Transaksi                    </a>
                    <ul class="dropdown-menu" data-role="dropdown">
                        <li><a href="?page=bayar_angsuran">Pembayaran Angsuran</a></li>
                     </ul>
                  </div>
        <span class="element-divider"></span>
          <div class="element">
                	<a class="dropdown-toggle" href="#">
	                	<span class="icon-files"></span> Laporan                    </a>
                    <ul class="dropdown-menu" data-role="dropdown">
                        <li><a href="?page=report">Laporan Penjualan</a></li
                     ></ul>
                  </div>
          <span class="element-divider"></span>
          <div class="element input-element">     
                    <form action="?page=bayar_angsuran" method="post">
                        <div class="input-control text">
                            <input type="text" name="no_pk" placeholder="Cari Nomor PK" value="<?php echo $no_pk;?>">
                            <button class="btn-search"></button>
                        </div>
                    </form>
                </div>
         
          <div class="element place-right">
                    <a class="dropdown-toggle" href="#">
                        <span class="icon-cog"></span>                    </a>
                    <ul class="dropdown-menu place-right" data-role="dropdown">
                        <li><a href="#">Log Out</a></li>
                   </ul>
                </div>
        <span class="element-divider place-right"></span>

          <div class="element place-right">
                    Kelompok ?                </div> 
          </nav>
        </nav>
        <div class="main-content">
        	<br />
        	<?php
            	if ($_GET['page'] == "input_customer") {
					include "form/input_customer.php";
				} else if ($_GET['page'] == "view_customer") {
					include "form/view_customer.php";
				} else if ($_GET['page'] == "input_motor") {
					include "form/input_motor.php";
				} else if ($_GET['page'] == "input_angsuran") {
					include "form/input_angsuran.php";
				} else if ($_GET['page'] == "view_angsuran") {
					include "form/view_angsuran.php";
				}  else if ($_GET['page'] == "pembelian_unit") {
					include "form/pay_angsuran.php";
				} else if ($_GET['page'] == "bayar_angsuran") {
					include "form/bayar_angsuran.php";
				} else {
					include "form/home.php";				
				}
			?>
        </div>
    </body>
</html>