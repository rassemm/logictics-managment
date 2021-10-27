<?php

namespace App\Http\Controllers;

use App\Benne;
use PDF;
use App\Transporteur;
use Illuminate\Http\Request;
use App\Exports\BenneExport;
use Maatwebsite\Excel\Facades\Excel;
class BenneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $bennes = Benne::all();
        return view('benne.index',compact('bennes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('benne.create');
    }


    public function affecter(){
        $bennes = Benne::where('transporteur_id',null)->get();
        $bennesAff = Benne::whereNotNull('transporteur_id')->with('transporteur')->get();
        $transporteurs = Transporteur::all();
        return view('benne.affecte',compact(['bennes','bennesAff','transporteurs']));
    }

    public function nonAffecter(){
        $bennes = Benne::where('transporteur_id',null)->get();
        return view('benne.nonaffecte',compact(['bennes']));
    }

    public function storeTransporteur(Request $request)
    {
          
        $request->validate (['transporteur_id'       => 'required','benne_id'        =>  'required',        ]);

        $tid= $request->input('transporteur_id');
        $bid= $request->input('benne_id');
     
        $benne = Benne::find($bid);
        $benne->transporteur_id = $tid;
        $benne->save();

        $trans = Transporteur::find($tid);
        $trans->assignBenne($benne);
        
        toastr()->success('Bene affectée avec succes!');
        return redirect()->route('benne.benneAffecter');
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
            'nbenne'       => 'required|',
            'long'        =>  'required',
            'larg'         =>  'required|',
            'haut'       => 'required|',
            'req'       => 'required|',
          
                     ]);
     $benne = new Benne();
     $benne->nbenne= $request->input('nbenne');
     $benne->long= $request->input('long');
     $benne->larg= $request->input('larg');
     $benne->haut= $request->input('haut');
     $benne->req= $request->input('req');
     $benne->save();
    toastr()->success('benne crée avec succes!');
     return redirect()->route('benne.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Benne  $benne
     * @return \Illuminate\Http\Response
     */
    public function show(Benne $benne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Benne  $benne
     * @return \Illuminate\Http\Response
     */
    public function edit(Benne $benne)
    {
        $benne=Benne::find($id);
        return view('benne.edit',compact('benne'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Benne  $benne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Benne $benne)
    {
        $request->validate ([
            'nbenne'       => 'required|',
            'long'        =>  'required',
            'larg'         =>  'required|',
            'haut'       => 'required|',
            'req'       => 'required|',
          
                     ]);
     $benne =Benne::find($id);
     $benne->nbenne= $request->input('nbenne');
     $benne->long= $request->input('long');
     $benne->larg= $request->input('larg');
     $benne->haut= $request->input('haut');
     $benne->req= $request->input('req');
     $benne->save();
    toastr()->success('benne crée avec succes!');
     return redirect()->route('benne.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Benne  $benne
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $benne = Benne::find($id);
        $benne->delete();
        toastr()->error('Data has been deleted successfully!');
                return redirect('/benne');
    }
    public function generatePDF()
    {
        $bennes = Benne::get();

        $pdf = PDF::loadView('myPDF', compact('bennes'))->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);;

        return $pdf->download('benne.pdf');
    }
    public function export() 
    {
        return Excel::download(new BenneExport, 'benne.xlsx');
    }
    public function ExportView()
    {
       return view('benne.index');
    }
}
