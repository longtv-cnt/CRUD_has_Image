<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class LearnController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('learn.index');

    }
    public function create()
    {
        return view('learn.create');

    }
    public function store(Request $request)
    {

    //
    }
    public function showCategory($id)
    {
        //
    }
    public function edit($id)
    {
        $post = Posts::find($id);
        r

    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
