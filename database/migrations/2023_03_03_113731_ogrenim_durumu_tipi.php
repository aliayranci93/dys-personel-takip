<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OgrenimDurumuTipi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ogrenim_durumu_tipi', function (Blueprint $table) {
            $table->id();
            $table->text('ad');
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
        Schema::dropIfExists('ogrenim_durumu_tipi');    
    }
}
