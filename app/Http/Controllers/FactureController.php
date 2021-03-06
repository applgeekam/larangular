<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;


class FactureController extends Controller
{
    public function index ()
    {
        if (Auth::user()->tel === null || Auth::user()->tva === null)
        {
            return redirect()->route('about.user');
        }
        return view('pages.welcome');
    }


    public function show ()
    {
        if (Auth::user()->tel === null || Auth::user()->tva === null)
        {
            return redirect()->route('about.user');
        }
        return view('pages.liste');
    }


    public function list ()
    {
        $factures = Commande::with('client',  'products')->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')->limit(20)->get();
        return response()->json(['data' => $factures], 200);
    }

    public function find (Request $request)
    {
        $factures = Commande::with('client', 'products')->where('user_id', Auth::id())
            ->where('ref',  $request->data['item'])->get();
        return response()->json(['data' => $factures], 200);
    }


    public function download ($id)
    {
        $commande = Commande::find($id);
        view()->share('commande', $commande);
        $pdfs = PDF::loadView('pdf.facture', $commande)->setPaper('a4')->setOption('images', true)->setOption('no-outline', true);
        return $pdfs->download('Facture - ' . $commande->ref . '.pdf');
    }


}
