<?php

namespace App\Http\Controllers;

use App\Models\Selling;
use App\Models\Product;
use Illuminate\Http\Request;

class SellingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('selling.index')
        ->with('sellings', Selling::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $slug = $request->input('slug');
        Selling::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'slug' => $slug,
            'contact' => $request->input('contact'),

            'title' =>  Product::where('slug',  $slug)->value('title'),
            'description' => Product::where('slug', $slug)->value('description'),
            'price' => Product::where('slug', $slug)->value('price'),
            'image_path' => Product::where('slug', $slug)->value('image_path')
        ]);

        return redirect('/BiShop')->with('message', 'Votre commande a été prise en compte!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        Selling::where('slug', $slug)
        ->update([
            'status' => $request->input('status')
        ]);

    return redirect('/Selling')->with('message', 'Mise à jour effectuer!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
