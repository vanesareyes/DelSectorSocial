<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

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
    public function create(Request $form)
    {
      $entry = new Entry();

      $form->validate([
          'title' => 'required',
          'definition' => 'required',
          'recommendedEntry1' => 'required',
          'howToUse' => 'required'
      ]);

      $entry->user_id=$form["user_id"];
      $entry->title=$form["title"];
      $entry->definition=["definition"];
      $entry->recommendedEntry1=["recommendedEntry1"];
      $entry->recommendedEntry2=$form["recommendedEntry2"];
      $entry->howToUse=$form["howToUse"];
      $entry->language_id=$form["language"];
      $entry->campaign_id=$form["campaign"];
      $entry->source_id=$form["source"];
      $entry->save();
      return redirect("index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
