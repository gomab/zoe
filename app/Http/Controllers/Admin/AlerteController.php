<?php

namespace App\Http\Controllers\Admin;

use App\Alerte;
use App\Espece;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlerteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alrtes = Alerte::latest()->get();


        return view('admin.alerte.index', compact('alrtes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especes = Espece::all();

        return view('admin.lot.create', compact('especes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * Validation champs
         */

        $this->validate($request, [

        ]);


        $this->validate($request, [
            'libelle' => 'required',
            'type'    => 'required',
            'numCasier' => 'required',
            'salle'     => 'required',
            //  'quantite'  => 'required',
            'entree'    => 'required',
            'sortie'    => 'required',
        ]);

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
