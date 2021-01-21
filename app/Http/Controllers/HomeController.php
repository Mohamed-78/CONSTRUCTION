<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use Image as InterventionImage;
use App\Models\Terrain;
use App\Models\Lot;
use App\Models\Construction;
use App\Models\Realisation;
use App\Models\Message;
use App\Models\Location;
use App\Models\Appart;
use App\Models\Temoignage;
use App\Models\Offre;
use App\Models\DimensionTerrain;
use App\Models\TypeProjet;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $terrain = Terrain::select()->orderBy('id','desc')->get();
        $off = Offre::all();
        $real = Realisation::all();
        $const = Construction::all();
        $msg = Message::all();
        return view('admin.home',compact('terrain','off','real','msg','const'));
    }

    public function ajouter_terrain()
    {
        return view('admin.Add.add_terrain');
    }

    public function ajouter_appart()
    {
        return view('admin.Add.add_appart');
    }

    public function ajouter_construction()
    {
        return view('admin.Add.add_construction');
    }

    public function ajouter_dimensionT()
    {
        return view('admin.Add.add_dimension');
    }

    public function ajouter_projet()
    {
        return view('admin.Add.add_projet');
    }

    public function ajouter_offre()
    {
        return view('admin.Add.add_offre');
    }

     public function ajouter_temoignage()
    {
        return view('admin.Add.add_temoignage');
    }

    public function ajouter_realisation()
    {
        return view('admin.Add.add_realisation');
    }

    public function ajouter_lot()
    {
        return view('admin.Add.add_lot');
    }

    public function ajouter_location()
    {
        return view('admin.Add.add_location');
    }

    public function temoignage()
    {
        $temoignage = Temoignage::select()->orderBy('id','desc')->get();
        return view('admin.temoignage',compact('temoignage'));
    }

    public function update_terrain($id)
    {
        $single = Terrain::find($id);
        return view('admin.Update.update_terrain',compact('single'));
    }

    public function update_apparts($id)
    {
        $single = Appart::find($id);
        return view('admin.Update.update_apparts',compact('single'));
    }

    public function update_const($id)
    {
        $single = Construction::find($id);
        return view('admin.Update.update_construction',compact('single'));
    }

    public function update_dimensionT($id)
    {
        $single = DimensionTerrain::find($id);
        return view('admin.Update.update_dimension',compact('single'));
    }

     public function update_typePr($id)
    {
        $single = TypeProjet::find($id);
        return view('admin.Update.update_typeProjet',compact('single'));
    }

    public function update_offre($id)
    {
        $single = Offre::find($id);
        return view('admin.Update.update_offre',compact('single'));
    }

    public function update_temoin($id)
    {
        $single = Temoignage::find($id);
        return view('admin.Update.update_temoin',compact('single'));
    }

    public function update_temo(Request $request, $id)
    {

    if(request()->hasFile('photo')){
        $img = request()->file('photo');
        $photo = md5($img->getClientOriginalExtension().time()).$img->getClientOriginalExtension();
        $source = $img;
        $target = 'admin/media/' .$photo;
                //dd($source, $target);
        InterventionImage::make($source)->fit(100,100)->save($target);
    }
//dd($photo);
    $temo = Temoignage::find($id);
    DB::table('temoignages')
    ->where([
        ['id', $id],
    ])->update([
        'nom' => $request->nom ?? $temo->nom, 
        'photo' => $photo ?? $temo->image,
        'msg' => $request->msg ?? $temo->msg,

    ]);
    session()->flash('message','Operation effectuée avec succès');
    return redirect()->back();

}

    public function update_lot($id)
    {
        $single = Lot::find($id);
        return view('admin.Update.update_lot',compact('single'));
    }

    public function update_locations($id)
    {
        $single = Location::find($id);
        return view('admin.Update.update_location',compact('single'));
    }

    public function view_msg($id)
    {
        $single = Message::find($id);
        return view('admin.Update.view_msg',compact('single'));
    }

    public function update_real($id)
    {
        $single = Realisation::find($id);
        return view('admin.Update.update_realisation',compact('single'));
    }

    public function add_terrains(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(372, 253)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $terrain = Terrain::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'dimension' => $request->dimension,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updated_terrain(Request $request, $id)
    {
        $updated = Terrain::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(372, 253)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'dimension' => $request->dimension,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_terrain($id)
    {
        $terrain = Terrain::find($id);
        $terrain->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_apparts($id)
    {
        $appart = Appart::find($id);
        $appart->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_location($id)
    {
        $location = Location::find($id);
        $location->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

     public function delete_msg($id)
    {
        $message = Message::find($id);
        $message->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_lot($id)
    {
        $lot = Lot::find($id);
        $lot->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_const($id)
    {
        $construction = Construction::find($id);
        $construction->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_offre($id)
    {
        $offre = Offre::find($id);
        $offre->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_typePr($id)
    {
        $type = TypeProjet::find($id);
        $type->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_dimensionT($id)
    {
        $dimension = DimensionTerrain::find($id);
        $dimension->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_real($id)
    {
        $realisation = Realisation::find($id);
        $realisation->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }


    public function construction()
    {
        $construction = Construction::select()->orderBy('id','desc')->get();
        return view('admin.construction',compact('construction'));
    }

    public function lot()
    {
        $lot = Lot::select()->orderBy('id','desc')->get();
        return view('admin.lot',compact('lot'));
    }

    public function offre()
    {
        $Offre = Offre::select()->orderBy('id','desc')->get();
        return view('admin.offre',compact('Offre'));
    }

     public function dimensionTerrain()
    {
        $dimension = DimensionTerrain::select()->orderBy('id','desc')->get();
        return view('admin.dimensionT',compact('dimension'));
    }


     public function TypeProjet()
    {
        $type = TypeProjet::select()->orderBy('id','desc')->get();
        return view('admin.typeP',compact('type'));
    }

    public function location()
    {
        $location = Location::select()->orderBy('id','desc')->get();
        return view('admin.location',compact('location'));
    }

    public function appart()
    {
        $appart = Appart::select()->orderBy('id','desc')->get();
        return view('admin.appart',compact('appart'));
    }

     public function real()
    {
        $realisation = Realisation::select()->orderBy('id','desc')->get();
        return view('admin.real',compact('realisation'));
    }

    public function add_locations(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(1200, 800)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $terrain = Location::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updated_location(Request $request, $id)
    {
        $updated = Location::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(1200, 800)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function add_lots(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(372, 253)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $terrain = Lot::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updated_lot(Request $request, $id)
    {
        $updated = Lot::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(372, 253)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function add_offre(Request $request)
    {

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(648, 494)->save($target);
        } 
        $offre = Offre::create([
            'infos' => $request->infos,
            'cout' => $request->cout,
            'photo' => $photo,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function add_typePr(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(396, 267)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(396, 267)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $type = TypeProjet::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'type' => $request->type,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updated_typePr(Request $request, $id)
    {
        $updated = TypeProjet::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(396, 267)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(396, 267)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'type' => $request->type,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function add_dimensionsT(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(396, 267)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(396, 267)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $dimension = DimensionTerrain::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'dimension' => $request->dimension,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updated_dimensionsT(Request $request, $id)
    {
        $updated = DimensionTerrain::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(396, 267)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(396, 267)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'dimension' => $request->dimension,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function add_const(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(372, 253)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $construction = Construction::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updated_constr(Request $request, $id)
    {
        $updated = Construction::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(372, 253)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updated_offre(Request $request, $id)
    {
        $updated = Offre::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(648, 494)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        $updated->update([
            'infos' => $request->infos,
            'cout' => $request->cout,
            'photo' => $photo,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function add_realisation(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(557, 237)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(557, 237)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $realisation = Realisation::create([
            'titre' => $request->titre,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

     public function updated_real(Request $request, $id)
    {
        $updated = Realisation::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(557, 237)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(557, 237)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function message()
    {
        $messages = Message::orderBy('id','desc')->get();
        return view('admin.message',compact('messages'));
    }

    public function add_apparts(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(1200, 800)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $appart = Appart::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updated_apparts(Request $request, $id)
    {
        $updated = Appart::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(1200, 800)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function add_temoin(Request $request)
    {
       
        $fileName = null;
        if(request()->hasFile('photo')){
                $img = request()->file('photo');
                $photo = md5($img->getClientOriginalExtension().time()).$img->getClientOriginalExtension();
                $source = $img;
                $target = 'admin/media/'.$photo;

                InterventionImage::make($source)->fit(100,100)->save($target);
                
                $equipe = Temoignage::create([
                    'photo' => $photo,
                    'nom' => $request->nom, 
                    'msg' => $request->msg, 
                ]);
                session()->flash('message','Operation effectuée avec succès');
                return redirect()->back();
        }
        
    }
}
