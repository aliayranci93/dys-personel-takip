<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class YabanciDiller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yabanci_diller', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('belge_durumu_id');//belge var yok 0-> yok 1-> var
            $table->text('grubu_derecesi');
            $table->text('ay_yil');
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
        Schema::dropIfExists('yabanci_diller');
    }
}
