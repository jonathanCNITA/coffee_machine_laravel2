<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Boisson;

class BoissonsController extends Controller
{
	

	public function orderByPrice() {
		$boissons = Boisson::orderBy('prix')->get();

		return view('pages/listeBoissons', ['boissons'=>$boissons]);
	}

	public function orderByName() {
		$boissons = Boisson::orderBy('nom')->get();

		return view('pages/listeBoissons', ['boissons'=>$boissons]);
	}


	/*==============================================================*\

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boissons = Boisson::all();
        //$boissons = DB::select('select * from boissons');
		return view('pages.listeBoissons', ['boissons'=>$boissons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addDrink = new Boisson();
        $addDrink->code = substr($request->input('name'), 0, 3);
        $addDrink->nom  = $request->input('name');
        $addDrink->prix = $request->input('price');
        $addDrink->save();

        return redirect('boissons');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $boisson = Boisson::find($id);
        //$boisson = DB::select('SELECT * FROM boissons WHERE id =' . $id);
		return view('pages.infoBoisson', ['boisson'=>$boisson]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boisson = Boisson::find($id);
        return view('formulaires.edit', [ 'boisson' => $boisson ]);
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
        $updateDrink = Boisson::find($id);
        $updateDrink->nom = $request->input('name');
        $updateDrink->prix = $request->input('price');
        $updateDrink->save();

        return redirect('boissons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Boisson::destroy($id);
        return redirect('boissons');
    }
}
