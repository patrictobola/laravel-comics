<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comicbooks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url:http,https',
            'price' => 'required|string',
            'series' => 'nullable|string',
            'sale_date' => 'date',
            'type' => 'in:["comic book", "graphic novel"]',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string'
        ]);

        $data = $request->all();

        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->save();

        return to_route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $comics = Comic::all();
        $last_comic = count($comics) - 1;

        // Tasto prev 
        $comic->id <= 1 ? $prev = $last_comic : $prev = $comic->id - 1;
        // Tasto next 
        $comic->id == $last_comic ? $next = 1 : $next = $comic->id + 1;
        // dd($comic->title);
        return view('comicbooks.show', compact('comic', 'prev', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comicbooks.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return to_route('comicbooks.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
