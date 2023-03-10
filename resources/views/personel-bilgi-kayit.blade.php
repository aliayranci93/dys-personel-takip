@extends('katmanlar.anakatman')
@section('icerik')
@include('popup.egitim_durumu')
<section id="page-content">
   <div class="container">
      <div class="row">
         <div class="content col-lg-12">
            <div class="card">
               <div class="card-header">
                  <span class="h4">Üye Kayıt Ekranı</span>
                  <p class="text-muted">Türkiye Cumhuriyeti Ticaret Bakanlığı Takip Sistemi</p>
               </div>
               <div class="card-body">
                  <form method="POST" action="{{route('personel-kaydet')}}">
                     @csrf                           
                     <div class="tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                           <li class="nav-item">
                              <a  class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tabProfile" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                           </li>
                           <li class="nav-item">
                              <a disabled class="nav-link" style="color: red !important;" id="contact-tab" data-bs-toggle="tab" href="#tabBilling" role="tab" aria-controls="contact" aria-selected="false">Billing Information</a>
                           </li>
                           <li class="nav-item">
                              <a disabled class="nav-link" style="color: red !important;" id="profile-tab" data-bs-toggle="tab" href="#tabPassword" role="tab" aria-controls="profile" aria-selected="false">Password</a>
                           </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade active show" id="tabProfile" role="tabpanel" aria-labelledby="tab-profile">
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="sira">Sıra No</label>
                                    <input id="sira_no" type="text" class="form-control" name="sira_no" placeholder="Sıra No" required="">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="kimlik">Kimlik Numarası</label>
                                    <input id="kimlik_no" type="text" class="form-control" name="kimlik_no" placeholder="Kimlik Numaranız" required="">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="gender">Medeni Hali</label>
                                    <select id="medeni_hali" class="form-select" name="medeni_hali" required="">
                                       <option value="">Seçiniz</option>
                                       <option>Evli</option>
                                       <option>Bekar</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="dateofbirth">Doğum Tarihi</label>
                                    <input id="dogum_tarihi" class="form-control" type="date" name="dogum_tarihi" required="">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="görevtarih">Göreve Başlama Tarihi</label>
                                    <input id="gorev_baslama_tarihi" class="form-control" type="date" name="gorev_baslama_tarihi" required="">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="ilk_memuriyete_giris_tarihi">Dtm Eko Giriş Tarihi</label>
                                    <input id="ilk_memuriyete_giris_tarihi" class="form-control" type="date" name="ilk_memuriyete_giris_tarihi" required="">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="hdtm_dtm_eko_giris_tarihi">İlk Memuriyet Giriş Tarihi</label>
                                    <input id="hdtm_dtm_eko_giris_tarihi" class="form-control" type="date" name="hdtm_dtm_eko_giris_tarihi" required="">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="ihrct_gnl_mdr_en_sn_grv_bslm_tar">İhracat Genel Müdürlüğü En Son Göreve Başlama Tarihi</label>
                                    <input id="ihrct_gnl_mdr_en_sn_grv_bslm_tar" class="form-control" type="date" name="ihrct_gnl_mdr_en_sn_grv_bslm_tar" required="">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="kidem_baslama_tarihi">Kıdem Başlama Tarihi</label>
                                    <input id="kidem_baslama_tarihi" class="form-control" type="date" name="kidem_baslama_tarihi" required="">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="cep_tel">Cep Telefonu</label>
                                    <input id="cep_tel" class="form-control" type="cep_tel" name="cep_tel" placeholder="Cep Telefonu" required="">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="ev_tel">Ev Telefonu</label>
                                    <input id="ev_tel" class="form-control" type="tel" name="ev_tel" placeholder="Ev Telefonu" required="">
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="ev_adresi">Ev Adresi</label>
                                       <textarea class="form-control" id="ev_adresi" name="ev_adresi" placeholder="EV Adresi"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="dogum_yeri">Doğum Yeri</label>
                                       <input id="dogum_yeri" type="text" class="form-control" name="dogum_yeri" placeholder="Doğum Yeriniz" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="halen_gorev_yaptigi_daire">Halen Görev Yaptığı Daire</label>
                                       <input id="halen_gorev_yaptigi_daire" type="text" class="form-control" name="halen_gorev_yaptigi_daire" placeholder="Halen Görev Yaptığı Daire" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="gorev_unvani">Ünvanı</label>
                                       <input id="gorev_unvani" type="text" class="form-control" name="gorev_unvani" placeholder="Ünvanı" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="ilk_memuriyete_giris_kurumu">ilk Mumuriyet Giriş Kurumu</label>
                                       <input id="ilk_memuriyete_giris_kurumu" type="text" class="form-control" name="ilk_memuriyete_giris_kurumu" placeholder="lk Mumuriyet Giriş Kurumu" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label class="radio-inline" for="sozlesmeli_olup_olmadigi">Sözleşmeli Mi</label>
                                       <input type="radio" name="sozlesmeli_olup_olmadigi" id="sozlesmeli_olup_olmadigi" value="1" checked="checked">
                                       Evet
                                       <label class="radio-inline" for="sozlesmeli_olup_olmadigi">
                                       <input type="radio" name="sozlesmeli_olup_olmadigi" id="sozlesmeli_olup_olmadigi" value="0">
                                       Hayır
                                       </label>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="emekli_muktesebi">Emekli Muktesebi</label>
                                       <input id="emekli_muktesebi" type="text" class="form-control" name="emekli_muktesebi" placeholder="Emekli Muktesebi" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="odemeye_esas_ayligi">Ödeme Esas Aylığı</label>
                                       <input id="odemeye_esas_ayligi" type="text" class="form-control" name="odemeye_esas_ayligi" placeholder="Ödeme Esas Aylığı" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="kazanilmis_hak_ayligi">Kazanılmış Hak Aylığı</label>
                                       <input id="kazanilmis_hak_ayligi" type="text" class="form-control" name="kazanilmis_hak_ayligi" placeholder="Kazanılmış Hak Aylığı" required="">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="city">Emekli Sicil No</label>
                                       <input id="emekli_sicil_no" type="text" class="form-control" name="emekli_sicil_no" placeholder="Emekli Sicil Numaranız" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Kurum Sicil No</label>
                                       <input id="kurum_sicil_no" type="text" class="form-control" name="kurum_sicil_no" placeholder="Kurum Sicil No" required="">
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="country">Kadro Derecesi</label>
                                    <select id="kadro_derecesi" name="kadro_derecesi" class="form-select" required="">
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
                           </div>
                          
                          
                        </div>
                        <div class="mt-4">
                           <button type="submit" id="button1id" name="button1id" class="btn btn-sm">Kaydet</button>
                           <button type="button" id="button2id" class="btn btn-secondary btn-sm">Vazgeç</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
   $(document).on("click", "#egitim_durum_add_btn", function () {
   
    var myBookId = $(this).data('id');
    //debugger;
    //alert(myBookId);
    $("#user_id").val( myBookId );
   });
</script>
@endsection