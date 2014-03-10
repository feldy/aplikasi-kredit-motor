<?php 
	include "koneksi.php";
?>
<table width="90%" border="0" style="border: solid 1px #efefef;" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td>
    	<fieldset>
      		<legend>List Tenor</legend>
            <?php
				$cri = $_GET['criteria'];
				$val = $_GET['value'];
				$str = "";
				if ($cri != "") {
					$str = "where $cri = '$val'";
				}
				$rr = "select distinct(mtr.merek)  from m_angsuran ang INNER JOIN m_motor mtr on mtr.kode_motor = ang.kode_motor $str order by mtr.merek";
				//echo $rr;	
            	if (!($query = mysql_query( "select distinct(mtr.merek)  from m_angsuran ang INNER JOIN m_motor mtr on mtr.kode_motor = ang.kode_motor $str order by mtr.merek"))) die("SQL Error");
				while($res = mysql_fetch_array($query)) {
					?>
                    	 <table width="100%" border="0" cellpadding="5" cellspacing="0">
                         	<tr>
                            	<td> <?php echo "<label><h2>&emsp; ".$res[0]."</h2></label>";	?></td>
                            </tr>
                         </table>
					<?php
					$yy = "select 	distinct(mtr.type), mtr.harga
						 from 		m_angsuran ang 
						 INNER JOIN m_motor mtr on mtr.kode_motor = ang.kode_motor 
						 $str	and mtr.merek = '$res[0]'
						 ";
						 //echo $yy;
					if (!($query2 = mysql_query( 
						"select 	distinct(mtr.type), mtr.harga
						 from 		m_angsuran ang 
						 INNER JOIN m_motor mtr on mtr.kode_motor = ang.kode_motor 
						 $str		and mtr.merek = '$res[0]'
						 "))) die("SQL Error");
					while($res2 = mysql_fetch_array($query2)) {
						
						
			?>
            <table width="80%" border="0" align="right" cellpadding="5" cellspacing="0">
              <tr>
              <td>
	              <?php echo "<h3>".$res2[0]." IDR ". number_format($res2[1])."</h3>";	?>
              </td>
              </tr>
              <tr>
                <td>
                	<table align="right" class="table">
                              <thead>
                                <tr>
                                  <th class="text-left">DP (20%) </th>
                                  <th class="text-left">12x</th>
                                  <th class="text-left">24x</th>
                                  <th class="text-left">36x</th>
                                </tr>
                             </thead>
                              <tbody>
								  <?php
                                    if (!($query3 = mysql_query( 
										"select 	* 
										 from 		m_angsuran ang 
										 INNER JOIN m_motor mtr on mtr.kode_motor = ang.kode_motor 
										 where		mtr.type = '$res2[0]' "))) die("SQL Error");
                                    while($res3 = mysql_fetch_array($query3)) {

                                  ?>
                                    <tr>
                                      <td><?php echo number_format($res3[2]);?></td>
                                      <td><a href="?page=pembelian_unit&id_ang=<?php echo $res3[0];?>&tenor=4" ><?php echo number_format($res3[4]);?></a>	</td>
                                      <td><a href="?page=pembelian_unit&id_ang=<?php echo $res3[0];?>&tenor=5" ><?php echo number_format($res3[5]);?></a></td>
                                      <td><a href="?page=pembelian_unit&id_ang=<?php echo $res3[0];?>&tenor=6" ><?php echo number_format($res3[6]);?></a></td>
                                    </tr>
                                    <?php } ?>
                           </tbody>
        </table>
        </td>
              </tr>
            </table>
             <?php	
						
					}
				}
			?>
            
      	</fieldset>
    </td>
  </tr>
</table>
