<?php

namespace App\Http\Controllers;

use App\Models\Crime;
use App\Models\UserEvents;
use Illuminate\Http\Request;

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
        $crimes = Crime::paginate(5);
        $important = Crime::cursor()->filter(function ($crime) {
            return $crime->important > 0;
        });

        return view('home', compact('crimes', 'important'));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eventos($id)
    {
        //f
        $userEvents = UserEvents::cursor()->filter(function ($event) use ($id) {
            return $event->user_id == $id && $event->status == 1;
        });

        var_dump($userEvents);

        $crime = null;

        foreach ($userEvents as $event) {
            $crime = Crime::find($event->id);
        }

        return view ('userEvents', compact('crime', 'userEvents'));
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
}
