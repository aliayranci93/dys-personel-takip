<?php

namespace App\Http\Controllers\personel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personel\PersonelBilgi;

class PersonelBilgiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personelBilgi = PersonelBilgi::simplePaginate(10);
       // dd($personelBilgi);
        return view('personel-bilgi-listesi',compact('personelBilgi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('personel-bilgi-kayit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
       $personelBilgi=$request->all();
       $personelBilgi['olusturan_kullanici']='Admin';
       $personelBilgi['guncelleyen_kullanici']='Admin';
       PersonelBilgi::create($personelBilgi);

        return view('personel-bilgi-kayit');
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $personelBilgi = PersonelBilgi::find($id);

        return view('personel-bilgi-duzenle',compact('personelBilgi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       

        $personelBilgi=$request->all();
        unset($personelBilgi['_token']);
        unset($personelBilgi['button1id']);
       //dd($personelBilgi);
        PersonelBilgi::whereId($request->id)->update($personelBilgi);
       

        return view('personel-bilgi-kayit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
