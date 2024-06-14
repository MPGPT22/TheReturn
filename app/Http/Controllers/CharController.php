<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Characters;


class CharController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('creator', ['except' => ['index','indexPublic','show','showPublic',]]);
       $this->middleware('admin', ['except' => ['indexPublic','showPublic']]);
    }
    public function index()
    {
        $now = Carbon::now();
        $chars = DB::table('characters')->orderBy('created_at', 'desc')->get();

        return view('pages.chars.list')->withList($chars);
    }
    public function set_public($id)
    {
        $char = Characters::find($id);
        $char->public = 1;
        $char->save();


        return redirect()->route('characters.index');
    }
    public function set_not_public($id)
    {
        $char = Characters::find($id);
        $char->public = 0;
        $char->save();

        return redirect()->route('characters.index');
    }

    public function indexPublic()
    {
        $now = Carbon::now();
        $chars = DB::table('characters')->orderBy('created_at', 'desc')->get();

        return view('pages.chars.listPublic')->withList($chars)->withNow($now);
    }
}
