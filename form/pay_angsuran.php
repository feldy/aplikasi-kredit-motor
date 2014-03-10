<script language="javascript">
	function onClickGenerate() {
		var time = new Date().format('HHMMss');
		var str = time + document.getElementById('nasabah').value.substring(0,2) + document.getElementById('motor').value.substring(0,3) + document.getElementById('tenor').value.substring(0,2);
		document.getElementById('no_pk').value = str;
		document.getElementById('no_pk2').value = str;
	}
</script>


<form action="system/proses_simpan.php" method="post">
  <table width="50%" border="0" align="center" cellpadding="10" cellspacing="3" style="border: solid 1px #efefef;">
    <tr>
      <td><fieldset>
      <legend>Pembelian Unit</legend>
      <?php 
			include "koneksi.php";
		
			$id_ang = $_GET['id_ang'];
			$tenor = $_GET['tenor'];
			if (!($query7 = mysql_query("SELECT * FROM M_ANGSURAN where kode_angsur = $id_ang "))) die("SQL Error");
			while($res7 = mysql_fetch_array($query7)) {
				
		?>
      <table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td colspan="2"><lable>Nasabah</lable>
            <div class="input-control select" data-role="input-control">
            <select value="<?php echo $nasabah; ?>" name="nasabah" id="nasabah">
              <?php 
				  	if (!($query = mysql_query("SELECT * FROM M_CUSTOMER ORDER BY nasabah"))) die("SQL Error");
					while($res = mysql_fetch_array($query)) {
						echo '<option value="'.$res[0].'">'.$res[1].'</option>';
					}
				  ?>
            </select>
          </div></td>
          </tr>
        <tr>
          <td width="50%">Jumlah Bayar
<div class="input-control text " data-role="input-control" >
            <input value="<?php echo "Rp. ".number_format($res7[$tenor]); ?>"  type="text"  disabled="disabled" />
            <button class="btn-clear" tabindex="-1"></button>
          </div></td>
          <td width="50%">DP
            <div class="input-control text " data-role="input-control" >
            <input value="<?php echo "Rp. ".number_format($res7[2]); ?>"  type="text"  disabled="disabled" />
            <button class="btn-clear" tabindex="-1"></button>
          </div></td>
          </tr>
        <tr>
          <td>
          	<lable></lable>
          	Motor
          	<div class="input-control select" data-role="input-control">
          	  <select value="<?php echo $motor; ?>"  disabled="disabled">
                <?php 
				  	if (!($query = mysql_query("SELECT * FROM M_MOTOR ORDER BY merek"))) die("SQL Error");
					while($res = mysql_fetch_array($query)) {
					?>
                <option value="<?php echo $res[0];?>" selected="selected" <?php if ($res[0] == $res7[1]) { echo "selected='selected'";}?>><?php echo $res[0]." - ".$res[1]." ".$res[2];?></option>
                <?php	
					}
				  ?>
              </select>
          	</div>            </td>
          <td><lable>Jatuh Tempo</lable>
            <div class="input-control text" data-role="datepicker"
        data-format="dd/mm/yyyy"
        data-position="top"
        data-effect="fade">
            <input name="jatuh_tempo" type="text" id="jatuh_tempo" placeholder="click">
            <button class="btn-date" type="button" tabindex="-1"></button>
            </div></td>
        </tr>
        <tr>
          <td><lable>Tenor</lable>
            <div class="input-control select" data-role="input-control">
          	<select disabled="disabled">
              <option value="10x" <?php if ($tenor == 4 ){ echo 'selected="selected"';}?>>10x</option>
              <option value="16x" <?php if ($tenor == 5 ){ echo 'selected="selected"';}?>>16x</option>
              <option value="22x" <?php if ($tenor == 6 ){ echo 'selected="selected"';}?>>22x</option>
              <option value="28x" <?php if ($tenor == 7 ){ echo 'selected="selected"';}?>>28x</option>
            	<option value="36x" <?php if ($tenor == 8 ){ echo 'selected="selected"';}?>>36x</option>
            </select>
            </div></td>
          <td valign="top"><label>Generate No PK
          <button onclick="onClickGenerate()" type="button" style="margin-top: -13px; margin-left: 0px;"><span class="icon-cycle"></span></button> </label>
            <div class="input-control text " data-role="input-control" >
            <input value="<?php echo $no_pk; ?>" type="text" id="no_pk2" disabled="disabled" style="margin-top: -5px;" >
            <button class="btn-clear" tabindex="-1"></button> 
            </div></td>
        </tr>
        <tr>
          <td><input name="btn_beli" type="submit" id="btn_beli" value="Beli">
            <input name="Reset" type="reset" value="Reset"></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <?php } ?>
     
     
      <span class="input-control text">
      <input name="tenor" type="hidden" id="tenor" value="<?php 
				if ($tenor == 4 ){ echo '10x';}
				elseif ($tenor == 5 ){ echo '16x';}
				elseif ($tenor == 6 ){ echo '22x';}
				elseif ($tenor == 7 ){ echo '28x';}
				elseif ($tenor == 8 ){ echo '36x';}
			?>" />
      </span>
      <span class="input-control text">
      <input name="no_pk" type="hidden" id="no_pk" value="<?php echo $id_ang;?>" />
      </span>
      <span class="input-control text">
      <input name="motor" type="hidden" id="motor" value="<?php echo $res7[1];?>" />
      </span>
      <span class="input-control text">
      <input name="id_angsuran" type="hidden" id="id_angsuran" value="<?php echo $id_ang;?>" />
      </span>
      <span class="input-control text ">
      <input value="<?php echo $res7[$tenor]; ?>" name="jml_bayar" type="hidden" id="jml_bayar"  />
      </span>
      <span class="input-control text ">
      <input value="<?php echo $res7[2]; ?>" name="dp" type="hidden" id="dp"  />
      </span>
      </fieldset></td>
    </tr>
  </table>
</form>