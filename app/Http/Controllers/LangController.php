<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LangController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function change(Request $requst)
    {
        App::setLocale($requst->lang);
        session()->put('locale', $requst->lang);

        return redirect()->back();
    }
}
