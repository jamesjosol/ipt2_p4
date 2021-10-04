<?php

namespace App\Http\Controllers;

use App\Events\UserLog;
use App\Models\Item;
use App\Models\Log;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        $items = Item::get();
        $logs = Log::get();
        return view('pages.dashboard', compact('items', 'logs'));
    }


    public function store(Request $request) {
        $request->validate([
            'name'          => 'required|string',
            'description'   => 'required|string',
            'price'         => 'required|numeric',
            'quantity'      => 'required|numeric',
        ]);

        $item = Item::create($request->all());

        event(new UserLog("Created an item with ID#$item->id"));   
        return back()->with('info', 'New item has been created.');
    }


    public function update(Request $request) {

        $request->validate([
            'id'            => 'required|numeric',
            'name'          => 'required|string',
            'description'   => 'required|string',
            'price'         => 'required|numeric',
            'quantity'      => 'required|numeric',
        ]);
        $item = Item::find($request->id);
        $item->update($request->all());

        event(new UserLog("Updated an item with ID#$request->id"));   

        return redirect('/dashboard')->with('info', "Item with ID# $item->id has been updated.");
    }

    public function destroy(Request $request) {
        $item = Item::find($request->id);
        $id = $request->id;
        $item->delete();

        event(new UserLog("Deleted an item with ID#$id"));   

        return redirect("/dashboard")->with('info', "Item with ID#$id has been deleted");
    }
}
