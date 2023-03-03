 <!-- end: Modal small -->
        <!--Modal large -->
        <div class="modal fade" id="modal-3" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
        
        <form method="POST" action="{{route('egitim-durumu-kaydet')}}">
        @csrf
        <input id="user_id" name="user_id" type ="hidden">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title">Eğitim Durumu</h4>
                        <button aria-hidden="true" data-bs-dismiss="modal" class="btn-close" type="button">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb20">
                 
                        <label for="ogrenim_durumu_id">Öğrenim Tipi</label>
                             <select name="ogrenim_durumu_id" class="form-control" required="">
                                <option value="">Seçiniz</option>
                                @foreach ($OgrenimDurumuTipleri as $OgrenimDurumuTip)
                                             <option value="{{$OgrenimDurumuTip->id}}">{{$OgrenimDurumuTip->ad}}</option>
                                @endforeach
                             </select>
                             <label for="okulun_adi_bolumu">Okul Adı</label>
                             <input id="okulun_adi_bolumu" type="text" class="form-control" name="okulun_adi_bolumu" placeholder="" required="">

                             <label for="mezuniyet_yili">Mezuniyet Yılı</label>
                             <input id="mezuniyet_yili" type="text" class="form-control" name="mezuniyet_yili" placeholder="" required="">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button data-bs-dismiss="modal" class="btn btn-b" type="button">Close</button>
                        <button type="submit" id="button1id" name="button1id" class="btn btn-sm">Kaydet</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
        <!-- end: Modal large -->
        <!-- Page Content -->
    

