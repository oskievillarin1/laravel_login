<?php

namespace App\Http\Controllers;

use App\Item;
use App\Http\Requests;
use App\Http\CreateItemRequests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Redirect;

class ItemsController extends Controller
{
	public function index()
	{
		if (Auth::check())
		{
			$items = Item::latest()->get();
		
			return view('items.index', compact('items'));
		} else
		{
			return Redirect::to('auth/login');
		}
	}


	public function show($id)
	{
		$item = Item::findOrFail($id);
		
		return view('items.show', compact('item'));
	}

	public function create()
	{		
		return view('items.create');
	}

	public function store(Requests\CreateItemRequest $request)
	{
		$input = $request->all();
		$input['user_id'] = Auth::id();

		Item::create($input);

		return redirect('items');
	}
}

