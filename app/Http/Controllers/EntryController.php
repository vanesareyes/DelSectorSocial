<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Entry;
use App\Language;
use App\Category;
use App\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $categories = Category::all();
        $entries = Entry::all()->sortByDesc('id');// para que te nuestra desde lo último al primero
        return view('createEntries')->with('languages', $languages)
                                    ->with('categories', $categories)
                                    ->with('entries', $entries);
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
         //** HAY QUE ACLARAR QUE TODAVÍA FALTAN LAS VALIDACIONES **

    // 1ERO CREO UNA ENTRADA
        $entry = new Entry();

        $entry->language_id = $request->input('language_id');
        $entry->author_id = Auth()->user()->id;
        $title = $entry->title = $request->input('title')." y algo";
        $entry->definition = $request->input('definition');
        $entry->recommendedEntry1 = $request->input('recommendedEntry1');
        $entry->recommendedEntry2 = $request->input('recommendedEntry2');
        $entry->howToUse = $request->input('howToUse');
        
        $guardo = $entry->save();
    
    // 2DO VEO SI SE GUARDÓ ESA ENTRADA, O SEA, SI DA "TRUE"
        if ($guardo) {
            $entrada = Entry::where('title', $title)->first(); //BUSCO ESA ENTRADA CREADA
            $entrada_id = $entrada->id;  //SOLAMENTE BUSCO EL ID PARA PONERLO EN LOS RECURSOS QUE PUDO HABER PUESTO

            $sources = $request->input('sources'); // PONGO TODAS LAS FUENTES EN LA VARIABLE $SOURCES 
            
            foreach ($sources as $source) { //HAGO UN FOREACH PARA ENTRAR EN CADA UNA DE LAS FUENTES (VACIAS O COMPLETAS)
                
                    if ($source['titulo-link'] != null and $source['link'] != null) { //LO CONDICIONO PARA QUE NO CREE FUENTES VACIAS
                        //SOLO SE GUARDAN LAS FUENTES (INPUTS) QUE SE COMPLETARON
                        $newSource = new Source();
                        
                        $newSource->name = $source['titulo-link'];
                        $newSource->link = $source['link'];
                        $newSource->entry_id = $entrada_id; // ACÁ UTILIZO LA $ENTRADA_ID QUE HABÍA ALMACENADO EL ID DE LA ENTRADA QUE SE CREO PREVIAMENTE

                        $newSource->save();
                    }
                }
                
            
        } else {
            // ESTO ES PROVISORIO, PERO EN CASO DE QUE NO SE GUARDE LA ENTRADA ME MANDA DE NUEVO A LA PÁGINA ANTERIO CON UNA NO TIFICACIÓN DE QUE NO SE GUARDÓ LA ENTRADA
            return redirect()->route('createEntries')->with('message', 'La entrada no pudo ser creada'); //hay que poner un condicional para que en la vista aparezca en danger(rojo) y no verde (el fondo)
        }
    // 3ERO CREAR LAS RELACIONES CON LAS CATEGORIAS
        if ($guardo) {
             //BUSCO ESA ENTRADA CREADA
            $entrada_id = $entrada->id;  //SOLAMENTE BUSCO EL ID PARA PONERLO EN LOS RECURSOS QUE PUDO HABER PUESTO

            $categories = $request->input('categories'); // PONGO TODAS LAS Categorias EN LA VARIABLE $categories 
            
             //HAGO UN FOREACH PARA ENTRAR EN CADA UNA DE LAS Categorias (VACIAS O COMPLETAS)
                
                if ( count($categories) > 0 ) { //LO CONDICIONO PARA QUE no entré si viene sin nada, es algo más de seguridad
                    //por las dudas llamé denuevo a la entrada que ya se creó (porque me había dado un error, pero se puede probar de nuevo solo llamar a la que lla había hecho más arriba)                                        
        
                    // Se supone que acá entra a cada elemento del array categories
                    //category tendría que ser el numero del ID de las categorias que se seleccionaron
                   foreach ($categories as  $category) {
    
                        $entrada->categories()->attach($category);//tengo un ejemplo en web.php en la ruta prueba

                   }
                }
            
        } else {
            // ESTO ES PROVISORIO, PERO EN CASO DE QUE NO SE GUARDE LA ENTRADA ME MANDA DE NUEVO A LA PÁGINA ANTERIO CON UNA NO TIFICACIÓN DE QUE NO SE GUARDÓ LA ENTRADA
            return redirect()->route('createEntries')->with('message', 'La entrada no pudo ser creada'); //hay que poner un condicional para que en la vista aparezca en danger(rojo) y no verde (el fondo)
        }

        // SI YA SE CREO TODO BIEN ME VA A MANDAR A LA PÁGINA ANTERIO, PERO CON UNA NOTIFICACIÓN DE QUE SE GUARDÓ CON EXITO
        return redirect()->route('createEntries')->with('message', 'La entrada fue creada con exito!');
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
