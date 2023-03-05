<br>
<br>
<br>
<center>
@php
    $kullaniciTuru = $turDegeri; // $turDegeri isimli değişken bize rotadan geliyor.
@endphp

<h1>switch-case Kullanımı</h1>
@switch($kullaniciTuru)
    @case(1)
        Kullanıcı türü : user
        @break
    @case(2)
        Kullanıcı türü : editor
        @break
    @case(3)
        Kullanıcı türü : admin
        @break

    @default
        <!--
            Varsayılan olarak çalışan bölüm
        -->
        Malesef gelen veri herhangi bir tür ile eşleşmedi.
@endswitch

</center>