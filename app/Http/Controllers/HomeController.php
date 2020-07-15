<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Credentials;
use App\Home;
use App\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function contact(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'bail|required|max:50',
                'email' => 'bail|required|email',
                'message' => 'bail|required'
            ]
        );
        $data = array(
            "name" => $validatedData['name'],
            "message" => $validatedData['message']
        );

        Mail::send('mail', $validatedData, function ($message) use ($validatedData) {
            $credentials = Credentials::all()->first();
            $message->to($credentials->contact_email, 'Contact')
                ->subject('Formulaire de contact')
                ->from($validatedData['email']);
        });

        return redirect(route('home'));
    }
}
