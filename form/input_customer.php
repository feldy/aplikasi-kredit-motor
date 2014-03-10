<form action="system/proses_simpan.php" method="post">
  <table width="50%" border="0" align="center" cellpadding="10" cellspacing="3" style="border: solid 1px #efefef;">
    <tr>
      <td><fieldset>
      <legend>Input Data Customer</legend>
      
      <table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td>
          	<lable>Nasabah</lable>
          <div class="input-control text" data-role="input-control">
            <input name="nama" type="text" id="nama" placeholder="type text">
            <button class="btn-clear" tabindex="-1"></button>
          </div>          </td>
          <td>
          	 <lable>Tanggal Lahir</lable>
      <div class="input-control text" data-role="datepicker"
       
        data-format="dd/mm/yyyy"
        data-position="bottom"
        data-effect="fade">
        <input name="tgl" type="text" id="tgl" placeholder="click">
        <button class="btn-date" type="button"></button>
       </div>          </td>
        </tr>
        <tr>
          <td>
          		 <lable>Nomor KTP</lable>
              <div class="input-control text" data-role="input-control">
                <input name="ktp" type="text" id="ktp" placeholder="type number">
                <button class="btn-clear" tabindex="-1"></button>
              </div>          </td>
          <td>
          	 <lable>Penjamin</lable>
      <div class="input-control text" data-role="input-control">
        <input name="penjamin" type="text" id="penjamin" placeholder="type text">
        <button class="btn-clear" tabindex="-1"></button>
      </div>          </td>
        </tr>
        <tr>
          <td>
          	<lable>Nomor Telepon</lable>
              <div class="input-control text" data-role="input-control">
                <input name="tlp" type="text" id="tlp" placeholder="type number">
                <button class="btn-clear" tabindex="-1"></button>
              </div>          </td>
          <td>
          	<lable>Penghasilan</lable>
      <div class="input-control text" data-role="input-control">
        <input name="penghasilan" type="text" id="penghasilan" placeholder="type number">
        <button class="btn-clear" tabindex="-1"></button>
      </div>          </td>
        </tr>
        <tr>
          <td>            
               <lable>Alamat</lable>
              <div class="input-control textarea" data-role="input-control">
                <textarea name="alamat" id="alamat" placeholder="type text"></textarea>
              </div>          </td>
          <td valign="top">
          	<lable>Pengeluaran</lable>
      <div class="input-control text" data-role="input-control">
        <input name="pengeluaran" type="text" id="pengeluaran" placeholder="type number">
        <button class="btn-clear" tabindex="-1"></button>
      </div>          </td>
        </tr>
        <tr>
          <td><input name="btn_customer" type="submit" id="btn_customer" value="Simpan">
            <input name="Reset" type="reset" value="Reset"></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      
     
     
      </fieldset></td>
    </tr>
  </table>
</form>