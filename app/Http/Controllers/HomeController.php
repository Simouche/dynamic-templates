<?php

namespace App\Http\Controllers;


use App\Carousel;
use App\MenuTitle;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        $settings = Profile::all()->first();
        $menus = MenuTitle::where('visible', true)->orderBy('id', 'asc')->get();
        $carousel = Carousel::all()->first();

        return view('index', [
                'settings' => $settings,
                'menus' => $menus,
                'carousel' => $carousel
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
            $credentials = Profile::all()->first();
            $message->to($credentials->reception_email, 'Contact')
                ->subject('Formulaire de contact')
                ->from($validatedData['email']);
        });

        return redirect(route('home'));
    }
}
