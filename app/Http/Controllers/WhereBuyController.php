<?php namespace App\Http\Controllers;

use App\Deptstore;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class WhereBuyController extends Controller {

    public function index() {
        $type = 'official';
        return view('whereBuy', compact('type'));
    }

	public function show($type) {
        if ($type != 'deptstore') {
            return view('whereBuy', compact('type'));
        } else {
            $deptstores = Deptstore::orderBy('sequence','asc')->get();
            return view('whereBuy', compact('type', 'deptstores'));
        }
    }

}
