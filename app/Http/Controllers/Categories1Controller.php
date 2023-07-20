<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use \Illuminate\Contracts\View\View as ViewInterface;
use Lilia\Lilia;

class Categories1Controller extends Controller {

    public function categories(): ViewInterface {
        return View::make('home.home');
    }

    public function testme() {
        $this->categories();
    }

}









