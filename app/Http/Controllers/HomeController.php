<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $message = new Contact();
        $message->name_user = $request->get('name');
        $message->email_user = $request->get('email');
        $message->message_user = $request->get('message');
        $message->ip_user = $request->ip();
        $message->save();
        return redirect()->route('home')->with('info','Ваше сообщение отправлено  мы свяжемся с вами в ближайшее время.');

    }
}
