<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('baslik')</title>
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

</head>

<body>




    {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> --}}
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.js') }}"></script>

    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            //your code
            $(".ckeditor").ckeditor();
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            $("h1").css('color', 'red');
            $("p").css({
                'color': 'blue',
                'font-size': '18px'
            });
            $(".ckeditor").ckeditor();
        });
    </script>




</body>

</html>
