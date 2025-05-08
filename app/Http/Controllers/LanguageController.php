<?php

// app/Http/Controllers/LanguageController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function setLanguage(Request $request)
    {
        $lang = $request->language;

        if (in_array($lang, ['en', 'ar'])) {
            App::setLocale($lang);              // Set locale for this request
            Session::put('locale', $lang);      // Store in session for future
        }

        return response()->json(['status' => 'success']);
    }
}

