<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
class RoomController extends Controller
{

    function index()
    {
        $rooms=Room::all();

        return view('admin.dashboard',['rooms'=> $rooms]);
    }

    function home()
    {
        $rooms=Room::all();
        return view('home',['rooms'=> $rooms]);
    }
    function create()
    {
        return view('admin.create');
    }
    function store(Request $request)
    {

        echo "asasdasdasd";
        $request->validate([
            'name' =>      'required|unique:rooms|max:255',
            'image'=>      'required',
            'typeroom'=>    'required',
            'number'=>'required',
            'area'=>'required',
            'price'=>'required',

        ]);

        $name = $request->name;
        $image = $request->image;
        $area = $request->area;
        $number=$request->number;
        $price = $request->price;
        $typeroom=$request->typeroom;

    $rooms= new Room;
    $rooms->name=$name;
    $rooms->image=$image;
    $rooms->area= $area;
    $rooms->number= $number;
    $rooms->price=$price;
    $rooms->typeroom=$typeroom;
    $rooms->save();
    return redirect()->route('dashboard');


    }
}
