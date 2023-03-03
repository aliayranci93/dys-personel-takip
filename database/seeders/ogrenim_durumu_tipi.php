<?php

namespace Database\Seeders;
use App\Models\OgrenimDurumuTipi;
use Illuminate\Database\Seeder;

class ogrenim_durumu_tipi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OgrenimDurumuTipi::create([
            'ad' => '4 YILLIK Y.O.',
            'olusturan_kullanici' => 'Admin', 
            'guncelleyen_kullanici' => 'Admin'
        ]);
        OgrenimDurumuTipi::create([
            'ad' => '3 YILLIK Y.O.',
            'olusturan_kullanici' => 'Admin', 
            'guncelleyen_kullanici' => 'Admin'
        ]);
        OgrenimDurumuTipi::create([
            'ad' => '2 YILLIK Y.O.',
            'olusturan_kullanici' => 'Admin', 
            'guncelleyen_kullanici' => 'Admin'
        ]);
        OgrenimDurumuTipi::create([
            'ad' => 'LİSE / DENGİ',
            'olusturan_kullanici' => 'Admin', 
            'guncelleyen_kullanici' => 'Admin'
        ]);
        OgrenimDurumuTipi::create([
            'ad' => 'ORTAOKUL',
            'olusturan_kullanici' => 'Admin', 
            'guncelleyen_kullanici' => 'Admin'
        ]);
        OgrenimDurumuTipi::create([
            'ad' => 'İLKOKUL',
            'olusturan_kullanici' => 'Admin', 
            'guncelleyen_kullanici' => 'Admin'
        ]);
    }
}
