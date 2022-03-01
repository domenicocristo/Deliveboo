<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\User;

use App\Models\Food;

class PageController extends Controller
{
    public function homepage() {
        return view('pages.homepage');
    }

    public function dashboard() {
        $check =  Auth::User() -> id;
        
        return view('pages.dashboard',compact('check'));
    }

    public function statistics() {

        return view('pages.statistics');
    }

    public function create() {
        return view('pages.create');
    }

    public function edit() {
        return view('pages.edit');
    }


    public function getRestaurantMenu($id) {

        return view('pages.restaurant', ['userId' => $id]);
    }

    public function cartPage() {
        return view('pages.cart');
    }

    public function registerPage() {
        return view('pages.registerpage');
    }
    
    public function loginPage() {
        return view('pages.loginpage');
    }
}