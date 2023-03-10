Veriler <br>

@php
 $sayac= 1;   
@endphp

@foreach ($veriler as $veri)
    {{$sayac}} - 
    İsim : {{$veri->isim}}  <br>
    Soyisim : {{$veri->soyisim}}<hr>
    @php
        $sayac++;   
    @endphp
@endforeach