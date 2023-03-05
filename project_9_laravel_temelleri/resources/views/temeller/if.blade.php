<br>
<br>
<br>
<center>
@php
    $kullaniciAdi = "admin";
    $parola = "qwe12";
    $kullaniciTuru = 1;
@endphp

<h1>if Kullanımı</h1>
@if ($kullaniciAdi == "admin" && $parola == "qwe12")
    <h3>Hoşgeldiniz, Sn. admin</h3>
@else
    <h3>Hatalı giriş bilgileri !</h3>
@endif




</center>