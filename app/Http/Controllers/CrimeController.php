<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Crime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $crimes = Crime::get();            
        // $crimesolved
        // $crimesnew
        // $crimesinscribe
        //var_dump($crimes); 
        return view('home', compact('crimes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('createCrime');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crime = request()->except('_token');

        Crime::create($crime);

        return redirect()->route('home');
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
        $crime = Crime::find($id);
        
        return view ('showCrime', compact('crime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crime = Crime::find($id);

        return view ('editCrime', compact('crime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  /$request/
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $crime = request()->except('_token', '_method');

        Crime::where('id', '=', $id)->update($crime);

        return redirect()->route('home');
    
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
        Crime::destroy($id);

        return redirect()->route('home');
    }

    public function inscribe($id){

        $crime = Crime::find($id);
        $user = User::find(Auth::id());

        $user->crime()->attach($crime);

        return redirect()->route('home');
    }

    public function unscribe($id){

        $crime = Crime::find($id);
        $user = User::find(Auth::id());
                
        $user->crime()->detach($crime);

        return redirect()->route('home');
    }
}

