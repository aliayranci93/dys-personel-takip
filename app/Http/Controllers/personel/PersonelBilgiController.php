<?php

namespace App\Http\Controllers\personel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personel\PersonelBilgi;
use App\Models\OgrenimDurumu;
use Yajra\DataTables\DataTables;


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
       $personelBilgiKayit=PersonelBilgi::create($personelBilgi);

        return  redirect()->route('personel-duzenle-ekran', $personelBilgiKayit->id)->with('message', 'State saved correctly!!!');
        
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
        
        $personelBilgi = PersonelBilgi::find($id);

        $ogrenimDurumlari=OgrenimDurumu::where('user_id',$personelBilgi->id)->get();

        return view('personel-bilgi-duzenle',compact('personelBilgi','ogrenimDurumlari'));
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
       // dd($id);
        PersonelBilgi::destroy($id);

        return back();
    }

    public function egitimDurumuKaydet(Request $request)
    {
        //dd($request);
        $ogrenimDurumu=$request->all();
        //dd($ogrenimDurumu);
        $ogrenimDurumu=OgrenimDurumu::create($ogrenimDurumu);

        return response()->json(['success'=>'Product saved successfully.']);
    }

    public function egitimDurumuGetir(Request $request)
    {
      //  dd($request->ajax());
      //  if ($request->ajax()) {
        $data = OgrenimDurumu::latest()->get();
        //dd( $data);
  
        return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

      //  }

     
    }

  
}
