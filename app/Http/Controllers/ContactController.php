<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller {

	public function create() {
        return view('contacts');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'content' => 'required'
        ]);

        Contact::create($request->all());
        return redirect('contacts/create');
    }

}
