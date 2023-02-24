<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MasterDoktora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_doktora', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('okulun_adi');
            $table->text('bolumu');
            $table->integer('mezuniyet_yili');




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
        Schema::dropIfExists('master_doktora');
    }
}
