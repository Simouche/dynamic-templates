<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Credentials;
use App\Home;
use App\SocialMedia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $home = Home::all()->first();
        $credentials = Credentials::all()->first();
        $socialMedia = SocialMedia::all();
        $articles = Articles::all();

        return view('index', [
                'home' => $home,
                'credentials' => $credentials,
                'socialMedia' => $socialMedia,
                'articles' => $articles
            ]
        );
    }
}
