<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRquest;
use App\Models\Guitar;
use Illuminate\Http\Request;

class GuitarController extends Controller
{
    /**
     * Display a listing of the resource.
     **/




    public function index()
    {
        //Get
        return view('guitars.index', [
            "guitars" => Guitar::all(),
            "user" => "<script>alert('Hello')</script>"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Get
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormRquest $request)
    {
        //Post
        $data = $request->validated();
        Guitar::create($data);
        // $guitar = new Guitar();

        // $guitar->name = $data['name'];
        // $guitar->brand = $data['brand'];
        // $guitar->description = $data['description'];
        // $guitar->year_made = $data['year_made'];

        // $guitar->save();

        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guitar $guitar)
    {
        //Get


        return view('guitars.show', [
            "strings" => $guitar,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guitar $guitar)
    {
        //Get
        return view('guitars.edit', [
            "guitar" => $guitar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormRquest $request, Guitar $guitar)
    {
        //POST
        $data = $request->validated();
        $guitar->update($data);

        // $guitar->name = $data['name'];
        // $guitar->brand = $data['brand'];
        // $guitar->description = $data['description'];
        // $guitar->year_made = $data['year_made'];

        // $guitar->save();

        return redirect()->route('guitars.show', [$guitar->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Delete
    }
}
