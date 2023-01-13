<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OlusturPersonelBilgi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personel_bilgi', function (Blueprint $table) {
            $table->id();
            $table->integer('sira_no')->nullable();
            $table->text('kimlik_no')->nullable();
            $table->text('emekli_sicil_no')->nullable();
            $table->text('kurum_sicil_no')->nullable();
            $table->timestamp('dogum_tarihi',$precision=0)->nullable();
            $table->text('dogum_yeri')->nullable();
            $table->text('medeni_hali')->nullable();
            $table->longText('ev_adresi')->nullable();
            $table->text('ev_tel')->nullable();
            $table->text('cep_tel')->nullable();
            $table->text('gorev_unvani')->nullable();
            $table->timestamp('gorev_baslama_tarihi',$precision=0)->nullable();
            $table->text('kadro_derecesi')->nullable();
            $table->text('emekli_muktesebi')->nullable();
            $table->text('odemeye_esas_ayligi')->nullable();
            $table->text('kazanilmis_hak_ayligi')->nullable();
            $table->timestamp('kidem_baslama_tarihi',$precision=0)->nullable();
            $table->integer('sozlesmeli_olup_olmadigi');
            $table->timestamp('ilk_memuriyete_giris_tarihi',$precision=0)->nullable();
            $table->text('ilk_memuriyete_giris_kurumu')->nullable();
            $table->timestamp('hdtm_dtm_eko_giris_tarihi',$precision=0)->nullable();
            $table->timestamp('ihrct_gnl_mdr_en_sn_grv_bslm_tar',$precision=0)->nullable();
            $table->text('halen_gorev_yaptigi_daire')->nullable();
            $table->text('olusturan_kullanici');
            $table->timestamp('olusturma_tarihi',$precision=0)->useCurrent();
            $table->text('guncelleyen_kullanici');
            $table->timestamp('guncellenme_tarihi',$precision=0)->useCurrent();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
