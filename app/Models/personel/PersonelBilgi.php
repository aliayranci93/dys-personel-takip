<?php

namespace App\Models\personel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonelBilgi extends Model
{
    protected $table = 'personel_bilgi';
    protected $fillable = ['sira_no','kimlik_no','emekli_sicil_no','kurum_sicil_no','dogum_tarihi','dogum_yeri','medeni_hali','ev_adresi','ev_tel','cep_tel','gorev_unvani','gorev_baslama_tarihi','kadro_derecesi','emekli_muktesebi','odemeye_esas_ayligi','kazanilmis_hak_ayligi','kidem_baslama_tarihi','sozlesmeli_olup_olmadigi','ilk_memuriyete_giris_tarihi','ilk_memuriyete_giris_kurumu','hdtm_dtm_eko_giris_tarihi','ihrct_gnl_mdr_en_sn_grv_bslm_tar','halen_gorev_yaptigi_daire'];
    protected $dates = ['dogum_tarihi'  , 'gorev_baslama_tarihi'  , 'kidem_baslama_tarihi' , 'ilk_memuriyete_giris_tarihi' , 'ihrct_gnl_mdr_en_sn_grv_bslm_tar'  , 'hdtm_dtm_eko_giris_tarihi'  ];
}
