<?php
	include "koneksi.php";
?>
<form action="system/proses_simpan.php" method="post">
  <table width="50%" border="0" align="center" cellpadding="10" cellspacing="3" style="border: solid 1px #efefef;">
    <tr>
      <td><fieldset>
      <legend>Input Tenor</legend>
      
      <table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td colspan="2">
          	<lable>Kode Motor</lable>
              <div class="input-control select" data-role="input-control">
                  <select name="kd" id="kd">
                  <?php 
				  	if (!($query = mysql_query("SELECT * FROM M_MOTOR ORDER BY merek"))) die("SQL Error");
					while($res = mysql_fetch_array($query)) {
						echo '<option value="'.$res[0].'">'.$res[0]." - ".$res[1]." ".$res[2].'</option>';
					}
				  ?>
                  </select>
              </div>              	 </td>
          </tr>
        <tr>
          <td><lable>DP</lable>
              (Fix: 20%)
                <div class="input-control text" data-role="input-control">
                <input name="dp" type="text" id="namdda" placeholder="type number">
                <button class="btn-clear" tabindex="-1"></button>
              </div></td>
          <td>&nbsp;</td>
        </tr>
        
        
        <tr>
          <td>&nbsp;</td>
          <td><lable>12x</lable>
              <div class="input-control text" data-role="input-control">
                <input name="10x" type="text" id="namdda" placeholder="type number">
                <button class="btn-clear" tabindex="-1"></button>
              </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><lable>24x</lable>
              <div class="input-control text" data-role="input-control">
                <input name="16x" type="text" id="namdda" placeholder="type number">
                <button class="btn-clear" tabindex="-1"></button>
              </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><lable>36x</lable>
              <div class="input-control text" data-role="input-control">
                <input name="22x" type="text" id="namdda" placeholder="type number">
                <button class="btn-clear" tabindex="-1"></button>
              </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
                <input name="28x" type="hidden" id="namdda" value="0" placeholder="type number">
              </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
              
                <input name="36x" type="hidden" id="namdda" value="0" placeholder="type number">
               </td>
        </tr>
        
        <tr>
          <td><input name="btn_angsuran" type="submit" id="btn_customer" value="Simpan">
            <input name="Reset" type="reset" value="Reset"></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      
     
     
      </fieldset></td>
    </tr>
  </table>
</form>