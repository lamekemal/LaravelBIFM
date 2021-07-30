<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DeviController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => ['']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('devis.index')
        ->with('devis', Devi::orderBy('updated_at', 'DESC')->get());
    }

    public function traite()
    {
        return view('devis.traite')
        ->with('devis', Devi::where('status', '1')
        ->orderBy('updated_at', 'DESC')
        ->get());
    }

    public function ntraite()
    {
        return view('devis.ntraite')
        ->with('devis', Devi::where('status', '0')
        ->orderBy('updated_at', 'DESC')
        ->get());
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

        Devi::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'slug' => SlugService::createSlug(Devi::class, 'slug',  $request->email),
            'category' => $request->input('category')
        ]);

            return 'Votre requette a été enregistrée!';
        //return redirect('/')->with('message', 'Votre demande a été soumise!');
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
        Devi::where('slug', $slug)
            ->update([
                'status' => $request->input('status')
            ]);

        return redirect('/Devis')->with('message', 'Mise à jour effectuer!');
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
