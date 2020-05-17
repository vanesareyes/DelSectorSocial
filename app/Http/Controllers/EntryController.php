<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Entry;
use App\Language;
use App\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $languages = Language::all();
        return view('createEntries')->with('languages', $languages);
        // $form->validate([
        //   'title' => 'required',
        //   'definition' => 'required',
        //   'recommendedEntry1' => 'required',
        //   'howToUse' => 'required'
        // ]);

        // $entry = new Entry();

        // $entry->user_id=$form["user_id"];
        // $entry->title=$form["title"];
        // $entry->definition=["definition"];
        // $entry->recommendedEntry1=["recommendedEntry1"];
        // $entry->recommendedEntry2=$form["recommendedEntry2"];
        // $entry->howToUse=$form["howToUse"];
        // $entry->language_id=$form["language"];
        // $entry->campaign_id=$form["campaign"];
        // $entry->source_id=$form["source"];
        // $entry->save();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        dd($request);
        $entry = new Entry();

        $entry->language_id = $request->input('language_id');
        $entry->author_id = Auth()->user()->id;
        $title = $entry->title = $request->input('title')." y algo";
        $entry->definition = $request->input('definition');
        $entry->recommendedEntry1 = $request->input('recommendedEntry1');
        $entry->recommendedEntry2 = $request->input('recommendedEntry2');
        $entry->howToUse = $request->input('howToUse');
        
        $guardo = $entry->save();
    
        if ($guardo) {
            $entrada = Entry::where('title', $title)->get();
            $entrada_id = $entrada[0]->id;
            


                $source = new Source();
                
                $source->title = $request->input('title');
                $source->link = $request->input('link');
                $source->entry_id = $entrada_id;

                $source->save();

        } else {
            # code...
        }
        

        dd($entrada[0]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Entry $entry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entry $entry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entry $entry)
    {
        //
    }
}
