<br>
<br>
<br>
<center>
    <h1>for Kullanımı</h1>

    @for ($sayac = 1; $sayac <= 10; $sayac++)
        {{ $sayac }} 'in karesi = {{ $sayac * $sayac }} <br>
    @endfor

</center>

@for ($disSayac = 1; $disSayac <= 10; $disSayac++)
    @for ($icSayac = 1; $icSayac <= $disSayac; $icSayac++)
        *
    @endfor
    <br>
@endfor


@for ($disSayac = 9; $disSayac >= 1; $disSayac--)
    @for ($icSayac = 1; $icSayac <= $disSayac; $icSayac++)
        *
    @endfor
    <br>
@endfor