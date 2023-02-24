<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SurekliYurtdisiGorevi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surekli_yurtdisi_gorevi', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('gorev_yeri');
            $table->text('unvani');
            $table->text('baslangic_bitis_donemi');
            $table->text('olusturan_kullanici')->default('');
            $table->text('guncelleyen_kullanici')->default('');
            $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surekli_yurtdisi_gorevi');
    }
}
