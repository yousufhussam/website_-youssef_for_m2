<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Gameforge</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
    <style type="text/css">
        <!--
        html, body, a {
            padding:0px;
            margin:0px;
            background-color:#541412;
            color:#FFEACE;
            font-family: tahoma;
            font-size:12px;
        }

        a {
            text-align:left;
        }

        a:hover {
            text-decoration:underline;
            color:#FFB45D;
        }


        h1 {
            font-size:18px;
            color:#FFB45D;
            padding:0px;
            padding-left:8px;
            margin:0px;
        }

        h2 {
            font-size:13px;
            margin:0px;
            margin-bottom:10px;
            color:#FFB45D;
        }

        h3 {
            font-size:12px;
            font-weight:bold;
            margin:0px;
            margin-bottom:10px;

        }

        hr {
            margin:13px 0px;
            padding:0px;
            color:#541412;
            background-color:#541412;
            border:0px;
            border-bottom:1px dashed #FFEACE;
            clear:both;
            width:100%;
        }

        * html hr {
            margin:5px 0px;
        }
        -->
    </style>
</head>
<body>
    @yield('content')
    <br/>
</body>
</html>
