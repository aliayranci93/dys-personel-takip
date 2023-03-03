<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OgrenimDurumu extends Model
{
    use HasFactory;
    protected $table = 'ogrenim_durumu';
    protected $fillable = ['user_id','ogrenim_durumu_id','okulun_adi_bolumu','mezuniyet_yili'];
    //protected $dates = ['dogum_tarihi'  , 'gorev_baslama_tarihi'  , 'kidem_baslama_tarihi' , 'ilk_memuriyete_giris_tarihi' , 'ihrct_gnl_mdr_en_sn_grv_bslm_tar'  , 'hdtm_dtm_eko_giris_tarihi'  ];

}
