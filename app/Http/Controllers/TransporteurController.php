<?php

namespace App\Http\Controllers;

use App\Transporteur;
use Illuminate\Http\Request;

class TransporteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $transporteurs = Transporteur::with('bennes')->latest()->paginate(5);
        return view('trans.index',compact('transporteurs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('trans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $request->validate ([
            'nom'            => 'required|', 
            'tel'        => 'required|min:8|max:10',
            'cin'         =>  'required',
            'zone'          =>  'required|',
            'matricule'       => 'required|',
            'type'       => 'required|',
            'garntie'        => 'required|',
            'montant'    => 'required|',
            'rq'           => 'required|',
                     ]);
     $transporteur = new Transporteur();
     $transporteur->nom= $request->input('nom');
     $transporteur->tel= $request->input('tel');
     $transporteur->cin= $request->input('cin');
     $transporteur->zone= $request->input('zone');
     $transporteur->matricule= $request->input('matricule');
     $transporteur->type= $request->input('type');
     $transporteur->garntie= $request->input('garntie');
     $transporteur->montant= $request->input('montant');
     $transporteur->rq   = $request->input('rq');
     $transporteur->save();
    toastr()->success('transporteur crée avec succes!');
     return redirect()->route('trans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transporteur  $transporteur
     * @return \Illuminate\Http\Response
     */
    public function show(Transporteur $transporteur)
    {
        return view('trans.show',compact('transporteur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transporteur  $transporteur
     * @return \Illuminate\Http\Response
     */
    public function edit( Transporteur $transporteur,$id)
    {
        $transporteur=Transporteur::find($id);
        return view('trans.edit',compact('transporteur'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transporteur  $transporteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate ([
            'nom'            => 'required|', 
            'tel'        => 'required|min:8|max:10',
            'cin'         =>  'required',
            'zone'          =>  'required|',
            'matricule'       => 'required|',
            'type'       => 'required|',
            'garntie'        => 'required|',
            'montant'    => 'required|',
            'rq'           => 'required|',
                     ]);
     $transporteur =Transporteur::find($id);
     $transporteur->nom= $request->input('nom');
     $transporteur->tel= $request->input('tel');
     $transporteur->cin= $request->input('cin');
     $transporteur->zone= $request->input('zone');
     $transporteur->matricule= $request->input('matricule');
     $transporteur->type= $request->input('type');
     $transporteur->garntie= $request->input('garntie');
     $transporteur->montant= $request->input('montant');
     $transporteur->rq   = $request->input('rq');
     $transporteur->save();
    toastr()->warning('transporteur modifier avec succes!');
     return redirect()->route('trans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transporteur  $transporteur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transporteur = Transporteur::find($id);
        $transporteur->delete();
        toastr()->error('Data has been deleted successfully!');
                return redirect('/trans');
    }
}
