<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class ClothesController extends Controller {

    public function clothes() {
        return View::make('home.home');
    }
}
