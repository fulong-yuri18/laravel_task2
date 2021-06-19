<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
	public function add(Request $request)
	{
			return view('index');
	}
	public function create(Request $request)
	{
			$this->validate($request, Person::$rules);
			$person = new Person;
			$form = $request->all();
			unset($form['_token_']);
			$person->fill($form)->save();
			return view('thanks');
	}

	public function show(Request $request){
		return view('index');
	}
}
