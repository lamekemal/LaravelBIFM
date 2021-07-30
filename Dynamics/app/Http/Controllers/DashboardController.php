<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devi;
use App\Models\Selling;

class DashboardController extends Controller
{
    //.
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
        // $post = Post::all();
        // dd( $post);
        return view('dashboard.index')
        ->with('sellings', Selling::orderBy('updated_at', 'DESC')->get())
        ->with('devis', Devi::orderBy('updated_at', 'DESC')->get())
        ->with('vsellings', Selling::where('status', '1')
            ->orderBy('updated_at', 'DESC')
            ->get())
        ->with('nvsellings', Selling::where('status', '0')
            ->orderBy('updated_at', 'DESC')
            ->get())
        ->with('vdevis', Devi::where('status', '1')
            ->orderBy('updated_at', 'DESC')
            ->get())
        ->with('nvdevis', Devi::where('status', '0')
            ->orderBy('updated_at', 'DESC')
            ->get());
    }

}
