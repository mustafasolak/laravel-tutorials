<!doctype html>
<html>

<head>
    <title>@yield("baslik")</title>
    <style>
        #header {
            background-color: antiquewhite;
            height: 100px;
            margin-bottom: 10px;
        }

        #sidebar {
            border: 1px grey dotted;
            width: 300px;
            height: 500px;
            float: left;

        }

        #content {
            border: 1px red dotted;
            height: 500px;
            margin-left: 310px;
        }

        #footer {
            background-color: rgb(227, 213, 195);
            height: 100px;
            margin-top: 10px;
        }

    </style>
</head>

<body>

    <div id="header">
        Üst bölüm
    </div>
    <div id="container">
        <div id="sidebar">
            @yield("solmenu")
        </div>

        <div id="content">
            @yield("icerik")
        </div>
    </div>
    <div id="footer">
        @yield("alt")
    </div>



</body>

</html>
