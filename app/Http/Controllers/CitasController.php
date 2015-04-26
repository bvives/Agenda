<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Contacte;
use App\Cita;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CitasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$citas = Cita::all();
                return view('citas.index', compact('citas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('citas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//$this->validate($request, $this->rules);
        
                $input = Input::all();
                $input['slug'] = str_replace(" ", "-", (strtolower($input['titol'])));
                Cita::create($input);
                return Redirect::route('citas.index')->with('message', 'poblacio creada');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Cita $cita)
	{
		return view('citas.show', compact('cita'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Cita  $cita
	 * @return Response
	 */
	public function edit(Cita $cita)
	{
		return view('citas.edit', compact('cita'));
	}

        /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Cita $cita)
	{
		//$this->validate($request, $this->rules);
        
                $input = array_except(Input::all(), '_method');
                $input['slug'] = str_replace(" ", "-", (strtolower($input['titol'])));
                $cita->update($input);
                return Redirect::route('citas.index')->with('message', 'poblacio editada');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Cita $cita)
	{
		$cita->delete();
                return Redirect::route('citas.index')->with('message', 'cita deleted.');
	}
        /**
         * 
         * 
         * @param type $param
         * 
         * @return Response
         */
}
