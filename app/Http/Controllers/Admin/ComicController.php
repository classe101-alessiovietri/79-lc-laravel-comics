<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Requests
use App\Http\Requests\Comic\StoreComicRequest;
use App\Http\Requests\Comic\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        // $request->validate([
        //     'title' => 'required|max:70',
        //     'description' => 'required',
        //     'thumb' => 'nullable|max:2048',
        //     'price' => 'required|numeric|min:2|max:100',
        //     'series' => 'nullable|max:64',
        //     'sale_date' => 'nullable|date',
        // ], [
        //     'title.required' => 'Il titolo è obbligatorio',
        //     'title.max' => 'Il titolo non può essere più lungo di 70 caratteri',
        // ]);

        $comic = new Comic();
        $comic->title = $request->input('title');
        $comic->description = $request->input('description');
        $comic->thumb = $request->input('thumb');
        $comic->price = $request->input('price');
        $comic->series = $request->input('series');
        $comic->sale_date = $request->input('sale_date');
        $comic->type = $request->input('type');
        $comic->artists = $request->input('artists');
        $comic->writers = $request->input('writers');
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|max:70',
            'description' => 'required',
            'thumb' => 'nullable|max:2048',
            'price' => 'required|numeric|min:2|max:100',
            'series' => 'nullable|max:64',
            'sale_date' => 'nullable|date',
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo non può essere più lungo di 70 caratteri',
        ]);

        $comic->title = $request->input('title');
        $comic->description = $request->input('description');
        $comic->thumb = $request->input('thumb');
        $comic->price = $request->input('price');
        $comic->series = $request->input('series');
        $comic->sale_date = $request->input('sale_date');
        $comic->type = $request->input('type');
        $comic->artists = $request->input('artists');
        $comic->writers = $request->input('writers');
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        dd('destroy');
    }
}
