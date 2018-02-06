<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;

class EquipmentController extends Controller
{
    /**
    * Method to return the equipment categories
    * @return Array of categroies
    */
    private function getCategories(){
        return [
            'Serveur' => 'Serveur', 
            'Routeur' => 'Routeur', 
            'Cable' =>  'Cable', 
            'Ecran' => 'Ecran', 
            'Processeur' => 'Processeur',
            'Clavier' => 'Clavier'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('equipment.index', ['equipments' => Equipment::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipment.create', ['categories' => $this->getCategories()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipment = new Equipment();
        $equipment->name = $request->get('name');
        $equipment->category = $request->get('category');
        $equipment->company = $request->get('company');
        $equipment->price = $request->get('price');
        $equipment->save();
        return redirect()->route('equipment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Equipment $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Equipment $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        return view('equipment.edit', [ 'equipment' => $equipment, 'categories' => $this->getCategories()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Equipment $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        $equipment->name = $request->get('name');
        $equipment->category = $request->get('category');
        $equipment->company = $request->get('company');
        $equipment->price = $request->get('price');
        $equipment->save();
        return redirect()->route('equipment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Equipment $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return redirect()->route('equipment.index');
    }
}
