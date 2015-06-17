<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Series;
use App\Product;

class SeriesController extends Controller {

	public function index() {
        $series = Series::all();

        return view('series', compact('series'));
    }

    public function show($series_id) {
        $products = Product::where('series_id', '=', $series_id)
                    ->orderBy('id', 'asc')
                    ->get();
        return view('products', compact('products'));
    }

}
