<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('website.frontend.home');

        // $data = DB::table('youtube')
        // ->where('publish', 'Yes')
        // ->limit(3)
        // ->get();

        // $news = DB::table('news')
        // ->where('publish', 'Yes')
        // ->limit(3)
        // ->get();
        // return view('tampilan.page.home',compact('data','news') ,[
        //     'title'     => 'home',
        // ]);

      
    }
}
