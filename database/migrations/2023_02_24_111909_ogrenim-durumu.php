<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OgrenimDurumu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ogrenim_durumu', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('ogrenim_durumu_id');
            $table->text('okulun_adi_bolumu');
            $table->text('mezuniyet_yili');
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
        Schema::dropIfExists('ogrenim_durumu');
    }
}
