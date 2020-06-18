<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use Illuminate\Validation\Rule;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Content::all();

        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //VALIDAZIONE 
        // $request->validate([
        //     'nome' => 'required|unique:contents',
        //     'cognome' => 'required|unique:contents',
        //     'ruolo' => 'required',
        //     'caratteristiche' => 'required'
        // ]);
        //VALIDAZIONE CON FUNZIONE
        $request->validate($this->validation());

        $teacher = new Content();
        // $teacher->nome = $data['nome'];
        // $teacher->cognome = $data['cognome'];
        // $teacher->ruolo = $data['ruolo'];
        // $teacher->caratteristiche = $data['caratteristiche'];

        //Alternativa a scrivere tutta quella cosa sopra, 
        //poi questo fill si gestisce in $fillable nel modello Content.php
        
        $teacher->fill($data);

        
        $saved = $teacher->save();
        
        if ($saved) {
            return redirect()->route('contents.show', Content::find($teacher->id))->with('saved', $saved);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //La stringa  tra parentesi sopra dietro le quinte fa questo: $content = Content::find($id);
        return view('teachers.show', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        return view('teachers.edit' , compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $data = $request->all();

        $request->validate($this->validation($content->id));

        $updated = $content->update($data);

        if ($updated) {
            return redirect()->route('contents.show', $content->id);
        }

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //potremmo portarci in WITH() questa referenza in modo da farala passare poi alla vista se volessimo indicare nome e cognome dell'insegnante eliminato
        //$ref = $content->nome . ' ' . $content->cognome;

        $deleted = $content->delete();

        if ($deleted) {
            return redirect()->route('contents.index')->with('deleted', $deleted);
        }
    }


    //UTILITIES PER NON RIPETERE VALIDAZIONE
    private function validation($id = null) {
        return [
            'nome' => 'required',
            'cognome' => [
                'required',
                'max:20',
                Rule::unique('contents')->ignore($id)
            ],
            'ruolo' => 'required|max:20',
            'caratteristiche' => 'required'
        ];
    }
}
