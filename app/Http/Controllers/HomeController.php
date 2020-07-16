<?php

namespace App\Http\Controllers;


use App\MenuTitle;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        $settings = Profile::all()->first();
        $menus = MenuTitle::where('visible',true)->orderBy('id','asc')->get();

        return view('index', [
                'settings' => $settings,
                'menus'=>$menus
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
            $credentials = Settings::all()->first();
            $message->to($credentials->reception_email, 'Contact')
                ->subject('Formulaire de contact')
                ->from($validatedData['email']);
        });

        return redirect(route('home'));
    }
}
