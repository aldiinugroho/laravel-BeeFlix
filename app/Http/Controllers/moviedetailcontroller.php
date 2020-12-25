<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movies;

class moviedetailcontroller extends Controller
{
    // returning data
    public function alldata() {
        $datamain = movies::select('movies.id as movieID','movies.*','genres.*')
                    ->join('genres', 'genres.id', '=', 'movies.genre_id')
                    ->where('genre_id','=','1')
                    ->get();
        
        $datamain1 = movies::select('movies.id as movieID','movies.*','genres.*')
                    ->join('genres', 'genres.id', '=', 'movies.genre_id')
                    ->where('genre_id','=','2')
                    ->get();
        
        $datamain2 = movies::select('movies.id as movieID','movies.*','genres.*')
                    ->join('genres', 'genres.id', '=', 'movies.genre_id')
                    ->where('genre_id','=','3')
                    ->get();
        
        // dd($datamain);
        return view('index',['data_main'=>$datamain, 'data_main1'=>$datamain1, 'data_main2'=>$datamain2]);
    }

    public function detail($id) {
        $fixID = $id;
        $detaildata = movies::select('movies.id as movieID','movies.*','genres.*')
        ->join('genres', 'genres.id', '=', 'movies.genre_id')
        ->where('movies.id','=',$fixID)
        ->get();

        $episodedata = movies::select('movies.id as movieID','movies.*','episodes.*')
        ->join('episodes', 'episodes.movie_id', '=', 'movies.id')
        ->where('movies.id','=',$fixID)
        ->paginate(3);
        // dd($episodedata);

        return view('detail',['detail_data'=>$detaildata, 'detail_episode'=>$episodedata]);
    }

    public function categoryS($genre_id) {
        $detailcateg = movies::select('movies.id as movieID','movies.*','genres.*')
        ->join('genres', 'genres.id', '=', 'movies.genre_id')
        ->where('genre_id','=',$genre_id)
        ->get();

        $detailnamecat = movies::select('genres.name as gName')
        ->join('genres', 'genres.id', '=', 'movies.genre_id')
        ->where('genre_id','=',$genre_id)->take(1)->get();
        // dd($detailnamecat);

        return view('forCategory',['datacat_main'=>$detailcateg, 'datacatname_main'=>$detailnamecat]);
    }
    
}
