<?php
	include "koneksi.php";
?>


	<?php
		
		
			$str = "SELECT 		cust.nasabah, cust.no_pk , motor.merek, motor.type, jul.tenor, cust.alamat, jul.jumlah_bayar, jul.jatuh_tempo, cust.no_ktp
					FROM 		M_PENJUALAN jul
					INNER JOIN 	M_CUSTOMER cust on cust.no_pk = jul.kode_customer
					INNER JOIN 	M_MOTOR motor on motor.kode_motor = jul.kode_motor
					WHERE 		jul.no_pk = '$no_pk' ";
    		if (!($query = mysql_query($str))) die("SQL Error". mysql_error());
			$res = mysql_fetch_array($query);
			$numROW = mysql_num_rows($query);
				
?>
    <table width="50%" border="0" align="center" cellpadding="10" cellspacing="3" style="border: solid 1px #efefef;">
        <tr>
            <td>
                <fieldset>
                    <legend>Pembayaran Angsuran</legend>
					<div class="element input-element place-right">
<form action="?page=bayar_angsuran" method="post">
                                        <div class="input-control text">
                                            <input type="text" placeholder="Nomor PK" name="no_pk" value="<?php echo $no_pk;?>">
                                            <button class="btn-search"></button>
                                        </div>
                                    </form>
                                </div>
                                
                     <?php

                            		if (!($query2 = mysql_query("SELECT count(*) FROM T_ANGSURAN where no_pk = '".$no_pk."'"))) die("SQL Error");
									$res2 = mysql_fetch_array($query2);
						
									
					 	if ($numROW > 0) {
								if ($res2[0] == intval($res[4], 10)) {
									echo "<h3>Terima Kasih, Cicilan Anda Sudah <strong>LUNAS<strong> !</h3>";
								} else {
						
					 ?>
                    <table width="100%" border="0" cellspacing="0" cellpadding="3">
                        <tr>
                            <td colspan="2">                            </td>
                        </tr>
                        <tr>
                            <td>
                                <lable>Nasabah</lable>
                                <div class="input-control text" data-role="input-control">
                                    <input disabled="disabled" name="nama" type="text" id="nama" value="<?php echo $res[1]." - ".$res[0];?>">
                                    <button class="btn-clear" tabindex="-1"></button>
                                </div></td>
                            <td>
                           
                                <lable>Cicilan Ke-</lable>
                                <div class="input-control text" data-role="input-control">
                                  <input disabled="disabled" name="nama2" type="text" id="nama2" value="<?php echo $res2[0] + 1;?>" />
                                  <button class="btn-clear" tabindex="-1"></button>
                                </div></td>
                        </tr>
                        <tr>
                            <td>
                                <lable>Motor</lable>
                                <div class="input-control text" data-role="input-control">
                                    <input disabled="disabled" name="ktp" type="text" id="ktp" value="<?php echo $res[2]." ".$res[3];?>">
                                    <button class="btn-clear" tabindex="-1"></button>
                                </div>                            </td>
                            <td>
                                <lable>Jumlah Bayar</lable>
                                <div class="input-control text" data-role="input-control">
                                    <input disabled="disabled"  name="penjamin" type="text" id="penjamin" value="<?php echo "Rp.".number_format($res[6]);?>" placeholder="type text">
                                    <button class="btn-clear" tabindex="-1"></button>
                                </div>                            </td>
                        </tr>
                        <tr>
                            <td>
                                <lable>Tenor</lable>
                                <div class="input-control text" data-role="input-control">
                                    <input disabled="disabled"  name="tlp" type="text" id="tlp"  value="<?php echo $res[4];?>">
                                    <button class="btn-clear" tabindex="-1"></button>
                                </div>                            </td>
                            <td>
                                <lable>Jatuh Tempo</lable>
                                <div class="input-control text" data-role="input-control">
                                    <input disabled="disabled"  name="penghasilan" type="text" id="penghasilan" value="<?php echo $res[7];?>" placeholder="type number">
                                    <button class="btn-clear" tabindex="-1"></button>
                                </div>                            </td>
                        </tr>
                        <tr>
                            <td>
                                <lable>Alamat</lable>
                                <div class="input-control textarea" data-role="input-control">
                                  <textarea disabled="disabled"  name="alamat" id="alamat" placeholder="type text"><?php echo $res[5];?></textarea>
                                </div>                          </td>
                            <td valign="top">
                                <lable>No KTP</lable>
                                <div class="input-control text" data-role="input-control">
                                  <input disabled="disabled"  name="pengeluaran" type="text" id="pengeluaran" value="<?php echo $res[8];?>" placeholder="type number" />
                                  <button class="btn-clear" tabindex="-1"></button>
                                </div>                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            	<form action="system/proses_simpan.php" method="post">
                                	<input name="btn_bayar" type="submit" id="btn_bayar" value="Bayar Cicilan ke-<?php echo $res2[0] + 1?>">
                                    <input name="no_pk" type="hidden" id="no_pk24243" value="<?php echo $no_pk;?>" />
                                </form>
                                
                                </td>
                        </tr>
                    </table>
                    <? }} else {
						echo "<h3>Nomor PK tidak Ditemukan !</h3>";
					}
					
					?>
                </fieldset>
            </td>
        </tr>
    </table>
    <?php  ?>
