@foreach ($personelBilgi as $personel)
    <p> {{ $personel->sira_no }} <a href="{{route('personel-edit-ekran',$personel->id)}}">EDİT</a></p>
@endforeach
