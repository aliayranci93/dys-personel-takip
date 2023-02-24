<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KatildigiAkademikKurslar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('katildigi_akademik_kurslar', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('kurulus');
            $table->text('konusu');
            $table->text('yili');
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
        Schema::dropIfExists('katildigi_akademik_kurslar');
    }
}
