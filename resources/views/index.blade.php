<!DOCTYPE html>
<html lang="en">
    {{-- ALDI NUGROHO --}}
    {{-- 2201816796 --}}
    {{-- Web Programming --}}
    {{-- LE01 --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeFlix</title>
    <link rel="stylesheet" href={{URL::asset('./cssnjs/index.css')}}>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body class="force">
    {{-- header --}}
    <div class="cont-Head">
        <div><a href="{{ url('/') }}"><H1>BeeFlix</H1></a></div>
        <div class="cont-nav">
            <div><a href="/category/1">Drama</a></div>
            <div><a href="/category/2">Kids</a></div>
            <div><a href="/category/3">Tv Show</a></div>
        </div>
    </div>

    {{-- content --}}
    <div class="cont-Main">
        {{-- genre --}}

        <div class="cont-One-Genre">
            <div class="conf-genre"><H1><a href="/category/1">Drama</a></H1></div>
            <div class="cont-Mov">
                @foreach ($data_main as $i)
                <a href="{{$i->movieID}}">
                    <div class="banner-Movie">
                        <div class="onDetail">{{$i->title}}</div>
                        <img src={{URL::asset($i->photo)}} alt="itaewon">
                    </div>
                </a>
                @endforeach
                
            </div>
        </div>

        <div class="cont-One-Genre">
            <div class="conf-genre"><H1><a href="/category/2">Kids</a></H1></div>
            <div class="cont-Mov">
                @foreach ($data_main1 as $i)
                <a href="{{$i->movieID}}">
                    <div class="banner-Movie">
                        <div class="onDetail">{{$i->title}}</div>
                        <img src={{URL::asset($i->photo)}} alt="itaewon">
                    </div>
                </a>
                @endforeach
                
            </div>
        </div>

        <div class="cont-One-Genre">
            <div class="conf-genre"><H1><a href="/category/3">Tv Show</a></H1></div>
            <div class="cont-Mov">
                @foreach ($data_main2 as $i)
                <a href="{{$i->movieID}}">
                    <div class="banner-Movie">
                        <div class="onDetail">{{$i->title}}</div>
                        <img src={{URL::asset($i->photo)}} alt="itaewon">
                    </div>
                </a>
                @endforeach
                
            </div>
        </div>
        
    </div>


</body>
</html>