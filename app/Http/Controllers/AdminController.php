<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class AdminController extends Controller {

    public function admin() {
        return View::make('home.home');
    }
}
