<?php

namespace App\Http\Controllers;

use App\Models\Selling;
use App\Models\Product;
use Illuminate\Http\Request;
use Mail;

class SellingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['store']]);
    }

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

    public function traite()
    {
        return view('selling.traite')
        ->with('sellings', Selling::where('status', '1')
        ->orderBy('updated_at', 'DESC')
        ->get());
    }

    public function ntraite()
    {
        return view('selling.ntraite')
        ->with('sellings', Selling::where('status', '0')
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

        $slug = $request->input('slug');
        $localTitle = Product::where('slug',  $slug)->value('title');
        $localDec = Product::where('slug', $slug)->value('description');
        $localPrice = Product::where('slug', $slug)->value('price');

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

           $msgMail = 'Bonjour,
            Ceci est un message générique de la plateforme BiFm-Tech.'.
            ' Veillez SVP consultez le http://dashboard.bifm-tech.com/ pour traiter la commande ou le message.'.
            '-------------------- BISHOP----------------------'. 'Nom du client : '. $request->input('name').
            ' Adresse Mail : '.  $request->input('email'). ' Contact : '. $request->input('contact'). '  ----Infos Produit---- '.
            'https://www.bifm-tech.com/BiShop/'. $slug. ' Nom et description du produit : '. $localTitle. ' > '.
            $localDec. ' Prix: '. $localPrice;
            $to_name = 'kemal.handill';
            $to_email = 'kemal.handill@gmail.com';
            $data = array('name'=> 'BiFm - Technologie', 'body' => $msgMail);

            Mail::send([], $data, function($message) use ($to_name, $to_email, $msgMail) {
            $message->to($to_email, $to_name)
            ->subject('Comande Bi-Shop client')->setBody($msgMail);;
            $message->from('support@bifm-tech.com','BiFm-Tech');
            });


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
