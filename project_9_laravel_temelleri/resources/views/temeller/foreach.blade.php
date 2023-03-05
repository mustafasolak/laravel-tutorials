<br>
<br>
<br>
<center>
    @php
        $kategoriler = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP'];
    @endphp

    <h1>foreach Kullanımı</h1>

   @foreach ($kategoriler as $kategori)
       {{$kategori}}<br>
   @endforeach

</center>
