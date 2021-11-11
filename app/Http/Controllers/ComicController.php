<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Exception;

class ComicController extends Controller
{
    protected $validCode = [
        'title' => 'required|max:80',
        'type' => 'required|max:60',
        'sale_date' => 'required',
        'price' => 'required',
        'description' => 'required',
        'thumb' => 'nullable|url'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validazione
        $request->validate($this->validCode);

        $data = $request->all();

        $newComic = Comic::create($data);

        return redirect()->route('comics.show', $newComic->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        /* $comic = Comic::find($id); */
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //validazione
        $request->validate($this->validCode);
        
        $data = $request->all();
        
        try {
            $comic->update($data);
        } catch(Exception $e) {
            abort(500);
        }
        
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
