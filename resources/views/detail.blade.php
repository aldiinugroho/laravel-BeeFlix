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
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
</style>
<body class="force">
    {{-- Back --}}
    <div class="detail-back-cont">
        <a href="{{url('/')}}"><p class="detail-back">Back</p></a>
    </div>

    {{-- detail --}}
    <div class="detail-main-first">
        <div class="detail-main">

            @foreach ($detail_data as $i)
            <div class="detail-cont">
                {{-- img --}}
                <div class="detail-img-conf">
                    <img src={{URL::asset($i->photo)}} alt="itaewon">
                </div>
                
                {{-- detail --}}
                <div class="detail-movie-detail">
                    <div>
                        <H1 class="detailwidth-cek">{{$i->title}}</H1>
                    </div>
                    <div>
                        <p class="detailwidth-cek">Rating {{$i->rating}}</p>
                    </div>
                    <div>
                        <p class="detailwidth-cek">{{$i->description}}</p>
                    </div>
                    <div class="detail-category-set">
                        <div>
                            <p>Category :</p>
                        </div>
                        <div>
                            <a class="detail-category-detail" href="/category/{{$i->genre_id}}">{{$i->name}}</a>
                        </div>
                    </div>
                </div>
    
    
            </div>
            @endforeach
    
            <div class="detail-episode-main-cont">
                <div><H2>Episode</H2></div>
                <div class="detail-episode-cont">
                    <div class="detail-episode-cek">episode</div>
                    <div class="detail-episode-cek">judul</div>
                </div>
                @foreach ($detail_episode as $o)
                    <div class="detail-episode-cont">
                        <div class="detail-episode-cek">episode {{$o->episode}}</div>
                        <div class="detail-episode-cek">{{$o->title}}</div>
                    </div>
                @endforeach
                
            </div>
            <div class="pagination">
                {{ $detail_episode->links() }}
            </div>
        </div>
        
        
    </div>
</body>
</html>