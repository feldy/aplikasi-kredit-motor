<form action="system/proses_simpan.php" method="post">
  <table width="50%" border="0" align="center" cellpadding="10" cellspacing="3" style="border: solid 1px #efefef;">
    <tr>
      <td><fieldset>
      <legend>Input Data Motor</legend>
      
      <table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td>
          	<lable>Kode Motor</lable>
              <div class="input-control text" data-role="input-control">
            <input name="kd" type="text" id="kd" placeholder="type text">
            <button class="btn-clear" tabindex="-1"></button>
          </div>     </td>
          <td>
          	 <lable>OTR</lable>
      <div class="input-control text" data-role="input-control">
            <input name="otr" type="text" id="namdda" placeholder="type number">
            <button class="btn-clear" tabindex="-1"></button>
          </div></td>
        </tr>
        <tr>
          <td>
          		 <lable>Merk</lable>
              <div class="input-control select" data-role="input-control">
                  <select name="merk" id="merk">
                    <option value="Honda">Honda</option>
                    <option value="Yamaha">Yamaha</option>
                    <option value="Kawasaki">Kawasaki</option>
                    <option value="Suzuki">Suzuki</option>
                </select>
              </div>          </td>
          <td>
          	 <lable>Harga</lable>
      <div class="input-control text" data-role="input-control">
        <input name="harga" type="text" id="harga" placeholder="type number">
        <button class="btn-clear" tabindex="-1"></button>
      </div>          </td>
        </tr>
        <tr>
          <td>
          	<lable>Type</lable>
              <div class="input-control text" data-role="input-control">
                <input name="type" type="text" id="type" placeholder="type text">
                <button class="btn-clear" tabindex="-1"></button>
              </div>          </td>
          <td>
          	<lable>Tahun</lable>
      <div class="input-control text" data-role="input-control">
        <input name="tahun" type="text" id="tahun" placeholder="type number">
        <button class="btn-clear" tabindex="-1"></button>
      </div>          </td>
        </tr>
        
        <tr>
          <td><input name="btn_motor" type="submit" id="btn_customer" value="Simpan">
            <input name="Reset" type="reset" value="Reset"></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      
     
     
      </fieldset></td>
    </tr>
  </table>
</form>