<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Construction;
use App\Models\Terrain;
use App\Models\Lot;
use App\Models\Realisation;
use App\Models\Location;
use App\Models\Message;
use App\Models\Appart;
use App\Models\Temoignage;
use App\Models\Offre;
use App\Models\DimensionTerrain;
use App\Models\TypeProjet;

use Illuminate\Support\Facades\Validator;

class websiteController extends Controller
{

    public function index()
    {
        $offres = Terrain::take(3)->get();
        $construction = Construction::take(3)->get();
        $lot = Lot::take(3)->get();
        $temoignage = Temoignage::take(3)->get();
        $offre = Offre::all();
        //dd($temoignage);
        return view('front.index',compact('offres','construction','lot','temoignage','offre'));
    }

    public function locative()
    {
      $lot = Lot::take(3)->get();
      return view('front.locative',compact('lot'));
    }

    public function offre_speciale()
    {
      $offre = Offre::orderBy('id','desc')->paginate(9);
      return view('offre_speciale',compact('offre'));
    }

    public function location_maison()
    {
      $location = Location::orderBy('id','desc')->paginate(9);
      return view('front.location',compact('location'));
    }

    public function vente_apparts()
    {
      $appart = Appart::orderBy('id','desc')->paginate(9);
      return view('front.appart',compact('appart'));
    }

    public function services()
    {
    	return view('front.services');
    }

    public function construction()
    {
      $construction = Construction::orderBy('id','desc')->paginate(9);
    	return view('front.construction',compact('construction'));
    }

    public function singleTerrains($id)
    {
      $single = Terrain::find($id);
      $other = Construction::take(3)->get();
      return view('front.single_terrain',compact('single','other'));
    }

    public function singleLocation($id)
    {
      $single = Location::find($id);
      $other = Terrain::take(4)->get();
      return view('front.single_location',compact('single','other'));
    }

    public function singleAppart($id)
    {
      $single = Appart::find($id);
      $other = Terrain::take(4)->get();
      return view('front.single_appart',compact('single','other'));
    }

    public function singleConstruction($id)
    {
      $single = Construction::find($id);
      $other = Construction::take(3)->get();
      return view('front.single_construction',compact('single','other'));
    }

    public function dimension()
    {

      $dimension2 = DimensionTerrain::select()->where('dimension','=','200m²')->orderBy('id','desc')->paginate(9);
      return view('front.dimension_terrain',compact('dimension2'));
    }

    public function dimension3()
    {
      $dimension3 = DimensionTerrain::select()->where('dimension','=','300m²')->orderBy('id','desc')->paginate(9);
      return view('front.dimension3',compact('dimension3'));
    }

    public function dimension4()
    {
      $dimension4 = DimensionTerrain::select()->where('dimension','=','400m²')->orderBy('id','desc')->paginate(9);
      return view('front.dimension4',compact('dimension4'));
    }

    public function dimension5()
    {
      $dimension5 = DimensionTerrain::select()->where('dimension','=','500m²')->orderBy('id','desc')->paginate(9);
      return view('front.dimension5',compact('dimension5'));
    }

    public function dimension6()
    {
      $dimension6 = DimensionTerrain::select()->where('dimension','=','600m²')->orderBy('id','desc')->paginate(9);
      return view('front.dimension6',compact('dimension6'));
    }

    public function projet()
    {
      $villa_basse = TypeProjet::select()->where('type','=','Villa basse')->orderBy('id','desc')->take(3)->get();
      $duplex = TypeProjet::select()->where('type','=','Duplex')->orderBy('id','desc')->take(3)->get();
      $immeuble = TypeProjet::select()->where('type','=','Immeuble R+')->orderBy('id','desc')->take(3)->get();
      $courComm = TypeProjet::select()->where('type','=','Cour commune')->orderBy('id','desc')->take(3)->get();
      //dd($villa_basse);
      return view('front.type_projet',compact('villa_basse','duplex','immeuble','courComm'));
    }

    public function triplex()
    {
      $villa_triplex = TypeProjet::select()->where('type','=','Triplex')->orderBy('id','desc')->paginate(9);
      return view('front.villa_triplex',compact('villa_triplex'));
    }

    public function duplex()
    {
      $duplex = TypeProjet::select()->where('type','=','Duplex')->orderBy('id','desc')->paginate(9);
      return view('front.duplex',compact('duplex'));
    }

    public function singleRealisation($id)
    {
      $single = Realisation::find($id);
      $other = TypeProjet::select()->where('type','=','Villa basse')->orderBy('id','desc')->take(3)->get();
      return view('front.single_realisation',compact('single','other'));
    }

    public function singleDimension3($id)
    {
      $single = DimensionTerrain::find($id);
      $other = Construction::take(3)->get();
      return view('front.single_dimension3',compact('single','other'));
    }

    public function singleType($id)
    {
      $single = TypeProjet::find($id);
      $other = Construction::take(3)->get();
      return view('front.single_type',compact('single','other'));
    }

    public function singleLot($id)
    {
      $single = Lot::find($id);
      $other = Construction::take(3)->get();
      return view('front.single_lot',compact('single','other'));
    }

    public function etat()
    {
    	return view('front.etat');
    }

    public function dp()
    {
      return view('front.description');
    }

    public function cv()
    {
      return view('front.conception');
    }

    public function rp()
    {
      return view('front.rendu');
    }

    public function rb()
    {
      return view('front.realBat');
    }

    public function devis()
    {
      return view('front.devis');
    }

    public function offres()
    {
      //$terrains = Terrain::orderBy('id','desc')->paginate(9);
    	return view('front.offres');
    }

    public function presentation()
    {
    	return view('front.presentation');
    }

    public function send_msg(Request $request)
    {
    
    Message::create([
        'nom' => htmlspecialchars($request->nom),
        'prenom' => htmlspecialchars($request->prenom),
        'mail' => htmlspecialchars($request->mail),
        'numero' => htmlspecialchars($request->numero),
        'message' => htmlspecialchars($request->message),
    ]);

    session()->flash('message', 'Oppération éffectuée avec succès.');
    return redirect()->back();

    }
   	
   	public function contacts()
   	{
   		return view('front.contact');
   	}

   	public function realisations()
   	{
      $realisation = Realisation::orderBy('id','desc')->paginate(9);
   		return view('front.realisation',compact('realisation'));
   	}
}
