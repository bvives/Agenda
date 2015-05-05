<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Cita;
use App\Contacte;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;

use Illuminate\Http\Request;

class ContactesController extends Controller {

        protected $rules = [
		'nom' => ['required', 'min:3'],
                'email' => ['required', 'min:3'],
                'tlf' => ['required', 'min:3'],
	];
        
        
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contactes = Contacte::all();
                //App::setLocale(\Session::get('locale'));
                return view('contactes.index', compact('contactes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('contactes.create');
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
                $input['slug'] = str_replace(" ", "-", (strtolower($input['nom'])));
                Contacte::create($input);
                return Redirect::route('contactes.index')->with('message', 'Contacte creat');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Contacte $contacte)
	{
		return view('contactes.show', compact('contacte'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Contacte $contacte)
	{
		return view('contactes.edit', compact('contacte'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Contacte $contacte, Request $request)
	{
		$this->validate($request, $this->rules);
        
                $input = array_except(Input::all(), '_method');
                $input['slug'] = str_replace(" ", "-", (strtolower($input['nom'])));
                $contacte->update($input);
                return Redirect::route('contactes.index')->with('message', 'contacte editat');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Contacte $contacte)
	{
		$contacte->delete();
                return Redirect::route('contactes.index')->with('message', 'contacte deleted.');
	}

}
