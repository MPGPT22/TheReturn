<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = DB::table('characters')->orderBy('created_at', 'desc')->where('public', 1)->take(2)->get();
        $spells = DB::table('skills')->orderBy('created_at', 'desc')->where('public', 1)->first();
        $skills = DB::table('spells')->orderBy('created_at', 'desc')->where('public', 1)->first();
        $states = DB::table('states')->orderBy('created_at', 'desc')->where('public', 1)->first();
        $armors = DB::table('armors')->orderBy('created_at', 'desc')->where('public', 1)->first();
        $items = DB::table('items')->orderBy('created_at', 'desc')->where('public', 1)->first();
        $weapons = DB::table('weapons')->orderBy('created_at', 'desc')->where('public', 1)->first();

         return view('pages.home', ['characters' => $characters, 'spells' => $spells, 'skills' => $skills, 'states' => $states, 'armors' => $armors, 'items' => $items,'weapons' => $weapons,  ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data $data)
    {
        //
    }
}
