<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has("search")){
            $hotels = hotel::where('name','LIKE','%'.$request->search.'%')->get();

        }
        else{
            $hotels = hotel::all(); 
        }
        return view('list',['hotels'=>$hotels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name'=> 'required',
        //     'location'=> 'required',
        //     'price'=> 'required',
        //     'image'=> 'required',
        //     'facilate'=> 'required',
        //     'synopis'=> 'required',

        // ]);
        $hotels= $request->all();
        hotel::create( [
        'name'=>request('name'),
        "image"=>$request->file('image')->store('post-image'),
        "location"=>request('location'),
        "price"=>request('price'),
        "facilate"=>request('facilate'),
        "synopsis"=>request('synopsis')
        ]);
        return redirect("/list")->with("Succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(hotel $id)
    {
        $hotel=hotel::find($id);
        return view('detail',['hotels'=>$hotel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(hotel $id)
    {
        $hotel=hotel::find($id);
        return view('edit',['hotels'=>$hotel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        hotel::find($id)->update( [
            'name'=>request('name'),
            "image"=>$request->file('image')->store('post-image'),
            "location"=>request('location'),
            "price"=>request('price'),
            "facilate"=>request('facilate'),
            "synopsis"=>request('synopsis')
            ]);
            return redirect("/list")->with("Succes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel $id)
    {
        $film = hotel::find($id);
        $film->each->delete();
        return redirect("/list");
    }
}
