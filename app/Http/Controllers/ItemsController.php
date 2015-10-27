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

	/**
     * 
     * Index - if the user is logged in, allow them to proceed.
     *  	   Otherwise, redirect to the log in page.
     */

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

	/**
     * 
     * Show - Show the contents of a particular item
     * Parameter - Id # of specific item 	  
     */

	public function show($id)
	{
		$item = Item::findOrFail($id);
		
		return view('items.show', compact('item'));
	}

	/**
     * 
     * Create - Displays the Add Item page
     */

	public function create()
	{		
		return view('items.create');
	}

	/**
     * 
     * Store - Processes $_POSTs from the Add Item page
     * Parameter - CreateItemRequest
     */

	public function store(Requests\CreateItemRequest $request)
	{
		$input = $request->all();
		$input['user_id'] = Auth::id();

		Item::create($input);

		return redirect('items');
	}
}

