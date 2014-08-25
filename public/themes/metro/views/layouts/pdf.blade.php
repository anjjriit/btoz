<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            @font-face {
                font-family: Calibri;
                src: url('{{ theme_asset('font/calibri.ttf')}}');
            }
            @font-face {
                font-family: 'Calibri Bold';
                src: url('{{ theme_asset('font/calibri-bold.ttf')}}');
            }
            div, p, td{padding: 0; margin:0; vertical-align: top}
            body{margin:10px 20px;padding:10px;font-family: Calibri; font-size: 12px}

            h1,h2,h3,h4,h5,h6,th,b,strong{margin:0;padding:0;font-family: "Calibri Bold"; font-weight: normal;}
            .ac {text-align: center}
            .ar{text-align: right}
            .border{border: 1px solid #000}
            .underline{border-bottom: 1px solid #000}
            .small{font-size: .9em}
            table.nomor td{
                width: 20px;
            }
            table.rincian th{
                border: 1px solid #000;
            }
            table.rincian td {
                padding: 2px 10px;
            }
            table.rincian .row td {
                border-left: 1px solid #000;
                border-right: 1px solid #000;
            }

            table.container  tr  td {border: 1px solid #000}
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>