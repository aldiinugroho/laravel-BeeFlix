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
    <link rel="stylesheet" href={{URL::asset('./cssnjs/detail.css')}}>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body class="force">
    {{-- header --}}
    <div class="detail-back-cont">
        <a href="{{url('/')}}"><p class="detail-back">Back</p></a>
    </div>

    {{-- content --}}
    <div class="cont-Main">
        {{-- genre --}}

        <div class="cont-One-Genre">
            @foreach ($datacatname_main as $p)
            <div class="conf-genre"><H1>{{$p->gName}}</H1></div>
            @endforeach
            <div class="cont-Mov">
                @foreach ($datacat_main as $i)
                <a href="/detail/{{$i->movieID}}">
                    <div class="banner-Movie">
                        <div class="onDetail">{{$i->title}}</div>
                        <img src={{URL::asset($i->photo)}} alt="itaewon">
                    </div>
                </a>
                @endforeach
                
            </div>
        </div>


</body>
</html>