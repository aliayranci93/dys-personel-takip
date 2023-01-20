<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<form class="form-horizontal" method="POST" action="{{route('personel-kaydet')}}">
    @csrf
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sira_no">Sıra No</label>  
  <div class="col-md-4">
  <input id="sira_no" name="sira_no" type="text" placeholder="SıraNo" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kimlik_no">Kimlik No</label>  
  <div class="col-md-4">
  <input id="kimlik_no" name="kimlik_no" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emekli_sicil_no">Emekli Sicil No</label>  
  <div class="col-md-4">
  <input id="emekli_sicil_no" name="emekli_sicil_no" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kurum_sicil_no">Kurum Sicil No</label>  
  <div class="col-md-4">
  <input id="kurum_sicil_no" name="kurum_sicil_no" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dogum_tarihi">Doğum Tarihi</label>  
  <div class="col-md-4">
  <input id="dogum_tarihi" name="dogum_tarihi" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dogum_yeri">Doğum Yeri</label>  
  <div class="col-md-4">
  <input id="dogum_yeri" name="dogum_yeri" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="medeni_hali">Medeni Hali</label>
  <div class="col-md-4">
    <select id="medeni_hali" name="medeni_hali" class="form-control">
      <option value="1">Evli</option>
      <option value="2">Bekar</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="ev_adresi">Ev Adresi</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="ev_adresi" name="ev_adresi">sbi</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cep_tel">Cep Tel</label>  
  <div class="col-md-4">
  <input id="cep_tel" name="cep_tel" type="text" placeholder="(05xx)" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ev_tel">Ev Telefonu</label>  
  <div class="col-md-4">
  <input id="ev_tel" name="ev_tel" type="text" placeholder="+90" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="gorev_baslama_tarihi">Görev Başlangıç Tarihi</label>  
  <div class="col-md-4">
  <input id="gorev_baslama_tarihi" name="gorev_baslama_tarihi" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emekli_muktesebi">Emekli Muktesebi</label>  
  <div class="col-md-4">
  <input id="emekli_muktesebi" name="emekli_muktesebi" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="kadro_derecesi">Kadro Derecesi</label>
  <div class="col-md-4">
    <select id="kadro_derecesi" name="kadro_derecesi" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="odemeye_esas_ayligi">Ödeme Esas Aylığı</label>  
  <div class="col-md-4">
  <input id="odemeye_esas_ayligi" name="odemeye_esas_ayligi" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kazanilmis_hak_ayligi">Kazanılmış Hak Aylığı</label>  
  <div class="col-md-4">
  <input id="kazanilmis_hak_ayligi" name="kazanilmis_hak_ayligi" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kidem_baslama_tarihi">Kıdem Başlama Tarihi</label>  
  <div class="col-md-4">
  <input id="kidem_baslama_tarihi" name="kidem_baslama_tarihi" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="gorev_unvani">Unvanı</label>  
  <div class="col-md-4">
  <input id="gorev_unvani" name="gorev_unvani" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sozlesmeli_olup_olmadigi">Sözleşmeli Mi ?</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="sozlesmeli_olup_olmadigi-0">
      <input type="radio" name="sozlesmeli_olup_olmadigi" id="sozlesmeli_olup_olmadigi-0" value="" checked="checked">
      Evet
    </label> 
    <label class="radio-inline" for="sozlesmeli_olup_olmadigi-1">
      <input type="radio" name="sozlesmeli_olup_olmadigi" id="sozlesmeli_olup_olmadigi-1" value=0>
      Hayır
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ilk_memuriyete_giris_tarihi">İlk Memuriyet Giriş Tarihi</label>  
  <div class="col-md-4">
  <input id="ilk_memuriyete_giris_tarihi" name="ilk_memuriyete_giris_tarihi" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ilk_memuriyete_giris_kurumu">İlk Mumuriyet Giriş Kurumu</label>  
  <div class="col-md-4">
  <input id="ilk_memuriyete_giris_kurumu" name="ilk_memuriyete_giris_kurumu" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ihrct_gnl_mdr_en_sn_grv_bslm_tar">İhracat Genel Müdürlüğü En Son Göreve Başlama Tarihi</label>  
  <div class="col-md-4">
  <input id="ihrct_gnl_mdr_en_sn_grv_bslm_tar" name="ihrct_gnl_mdr_en_sn_grv_bslm_tar" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hdtm_dtm_eko_giris_tarihi">Dtm Eko Giriş Tarihi</label>  
  <div class="col-md-4">
  <input id="hdtm_dtm_eko_giris_tarihi" name="hdtm_dtm_eko_giris_tarihi" type="text" placeholder="SBİ" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="halen_gorev_yaptigi_daire">Halen Görev Yaptığı Daire</label>  
  <div class="col-md-4">
  <input id="halen_gorev_yaptigi_daire" name="halen_gorev_yaptigi_daire" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button type="submit" id="button1id" name="button1id" class="btn btn-success">Kaydet</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Vazgeç</button>
  </div>
</div>
</fieldset>
</form>
