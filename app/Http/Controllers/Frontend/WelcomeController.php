<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Category;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $menus = Menu::take(8)->get();

        $categories = Category::all();

        return view('welcome', compact('menus', 'categories'));

    }
    public function thankyou()
    {
        return view('thankyou');
    }


}
