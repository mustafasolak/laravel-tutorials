<br>
<br>
<br>
<center>
    @php
        $sayac = 1;
    @endphp

    <h1>while Kullanımı</h1>

    @while ($sayac <= 10)
        Sayı : {{ $sayac }} <br>

        @php    $sayac++;   @endphp
    @endwhile

</center>
