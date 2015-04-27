<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Contacte;
use App\Cita;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CitasController extends Controller {
    
    protected $rules = [
		'titol' => ['required', 'min:3'],
                'dataCita' => ['required','date'],
                'descripcio' => ['required', 'min:3'],
                'lloc' => ['required', 'min:3'],
	];

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
         * Show the form for attach Contacte to Cita
         * 
         * @param Cita $cita
         * @return Response
         */
	public function addContactes(Cita $cita)
	{
                $contactes = Contacte::all();
                return view('citas.addContactes', compact ('cita','contactes'));
	}
        
        /**
         * Sync the given Cita with the Contactes id.
         * 
         * @param Cita $cita
         * @return Response
         */
        public function sync(Cita $cita){
            $input = Input::all();
            //var_dump($cita);
            //var_dump($input);
            $cita->contactes()->sync($input['contactes'], false);
            return Redirect::route('citas.index')->with('message', 'Contactes afegits a '.$cita->titol);
        }
        
        /**
         * Show the form for detach Contacte from Cita
         * 
         * @param Cita $cita
         * @return type
         */
        public function removeContactes(Cita $cita)
	{
                $contactes = $cita->contactes;
                return view('citas.removeContactes', compact ('cita','contactes'));
	}
        
        /**
         * Sync the given Cita with the Contactes id.
         * 
         * @param Cita $cita
         * @return Response
         */
        public function detach(Cita $cita){
            $input = Input::all();
            $cita->contactes()->detach($input['contactes']);
            return Redirect::route('citas.index')->with('message', 'Contactes trets de '.$cita->titol);
        }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules);
        
                $input = Input::all();
                $input['slug'] = str_replace(" ", "-", (strtolower($input['titol'])));
                Cita::create($input);
                return Redirect::route('citas.index')->with('message', 'Cita creada');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Cita  $cita
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
	public function update(Cita $cita, Request $request)
	{
		$this->validate($request, $this->rules);
        
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
