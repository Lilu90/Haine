<?php

namespace App\Http\Controllers;


use App\Models\Brand;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class BrandController extends BaseController
{
    public function brand() {
        $brands = Brand::all();
        return view('admin.brand.brands', [ 'brands' => $brands ]);
    }

    public function create(Request $request) {
        $numeleLaBrand = $request->get('brand_name');
        if(Brand::where('name', $numeleLaBrand)->first()) {
            throw new \Exception("Brandul cu numele {$numeleLaBrand} deja exista");
        }
        $brand = new Brand();
        $brand->name = $numeleLaBrand;
        $brand->save();
        return $this->brand();
    }

    public function delete(Request $request, $brand_id) {
        Brand::find( $brand_id )->delete();
        return $this->brand();
    }
}

