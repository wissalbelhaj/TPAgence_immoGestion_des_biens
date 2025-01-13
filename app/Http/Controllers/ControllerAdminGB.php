<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerAdminGB extends Controller


{
    public function Select(){

        $biens = DB::table('agence_biens')
                ->select('*')
                ->get();
         return view('Admins.Bieens',compact('biens'));
     }

     public function Ajouter(Request $request){

        $titre=$request->titre;
        $surface=$request->surface;
        $prix=$request->prix;
        $description=$request->description;
        $piece=$request->piece;
        $chambre=$request->chambre;
        $etage=$request->etage;
        $adresse=$request->adresse;
        $ville=$request->ville;
        $code_postal=$request->code_postal;
        $options=$request->options;
        $request->validate([
            'image' => 'required|image',
        ]);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $ImageName=time().'_'.$image->getClientOriginalName();
            $path=$image->storeAs('public/images',$ImageName);

        }
        else{
            return"false";
        }
   
        DB::table('agence_biens')->insert([
            'titre' => $titre,
            'surface' => $surface,
            'prix' => $prix,
            'description' => $description,
            'piece' => $piece,
            'chambre' => $chambre,
            'etage' => $etage,
            'adresse' => $adresse,
            'ville' => $ville,
            'code_postal' => $code_postal,
            'options' => $options,
            'image' => $ImageName,
        ]);
        
            return to_route('Admin.Biens');
     }
     public function Supprimer($id){
        DB::table('agence_biens')
        ->where('id', $id)
        ->delete();
        
        return to_route('Admin.Biens');
     }
     public function PModifier($id){
        $bien = DB::table('agence_biens')->where('id', $id)->first();
        $option = DB::table('options')->get();
         return view('Admins.PModifier',compact('bien','option'));
     }
     public function Modifier(Request $request ,$id){
        $titre=$request->titre;
        $surface=$request->surface;
        $prix=$request->prix;
        $description=$request->description;
        $piece=$request->piece;
        $chambre=$request->chambre;
        $etage=$request->etage;
        $adresse=$request->adresse;
        $ville=$request->ville;
        $code_postal=$request->code_postal;
        $options=$request->options;
        $request->validate([
            'image' => 'required|image',
        ]);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $ImageName=time().'_'.$image->getClientOriginalName();
            $path=$image->storeAs('public/images',$ImageName);
        }
        else{
            return"false";
        }
        DB::table('agence_biens')
            ->where('id', $id)
            ->update([
                'titre' => $titre,
                'surface' => $surface,
                'prix' => $prix,
                'description' => $description,
                'piece' => $piece,
                'chambre' => $chambre,
                'etage' => $etage,
                'adresse' => $adresse,
                'ville' => $ville,
                'code_postal' => $code_postal,
                'options' => $options,
                'image' => $ImageName,
            ]);
          return to_route('Admin.Biens');

     }
     public function SelectO(){
        $options = DB::table('options')->get();
        return view('Admins.Ajouter', compact('options'));
    }
    public function SelectOption(){
        $options = DB::table('options')->get();
        return view('Admins.Options', compact('options'));
    }

    public function SupprimerOption($id){
        DB::table('options')->where('id', $id)->delete();
        return to_route('Admin.SelectOption');
    }

    public function ModifierOption(Request $request ,$id){
        $nom=$request->nom;
        DB::table('options')->where('id', $id)->update(['nom' => $nom]);
        return to_route('Admin.SelectOption');
    }

    public function PModifierO($id){
        $option = DB::table('options')
                ->where('id', $id)->first();
        return view('Admins.ModifierOption',compact('option'));
     }
     public function AjouterOption(Request $request){
        $nom=$request->nom;
        DB::table('options')
        ->insert(['nom' => $nom]);
        return to_route('Admin.SelectOption');
     }

}
