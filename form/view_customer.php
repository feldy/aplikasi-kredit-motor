 <?php
 	include "koneksi.php";
 
 ?>
<table width="90%" border="0" align="center" cellpadding="10" cellspacing="3">
  <tr>
    <td>
    <fieldset>
      <legend>Data Customer</legend>
    <table align="center" class="table">
      <thead>
        <tr>
          <th class="text-left">#</th>
          <th class="text-left">Nasabah</th>
          <th class="text-left">Alamat</th>
          <th class="text-left">No KTP</th>
          <th class="text-left">No HP</th>
          <th class="text-left">Tanggal Lahir</th>
          <th class="text-left">Penjamin</th>
          <th class="text-left">Penghasilan</th>
          <th class="text-left">Pengeluaran</th>
          <th class="text-left">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
      	if (!($query = mysql_query("SELECT * FROM M_CUSTOMER ORDER BY no_pk"))) die("SQL Error");
		while($res = mysql_fetch_array($query)) {
	  ?>
        <tr>
          <td><?php echo $res[0];?></td>
          <td class="right"><?php echo $res[1];?></td>
          <td class="right"><?php echo $res[2];?></td>
          <td class="right"><?php echo $res[8];?></td>
          <td class="right"><?php echo $res[3];?></td>
          <td class="right"><?php echo $res[4];?></td>
          <td class="right"><?php echo $res[5];?></td>
          <td class="right"><?php echo $res[6];?></td>
          <td class="right"><?php echo $res[7];?></td>
          <td class="right"><a href="system/proses_deleted.php?page=customer&id_deleted=<?php echo $res[0];?>" class="icon-remove"></a></td>
        </tr>
        <?php } ?>
      </tbody>
      <tfoot>
      </tfoot>
    </table>
    </fieldset>
    </td>
  </tr>
</table>
