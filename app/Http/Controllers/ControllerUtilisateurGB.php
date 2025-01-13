<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerUtilisateurGB extends Controller
{
    public function SelectDerniers()
    {
        $biens = DB::table('agence_biens')
                ->orderBy('id', 'DESC')
                ->limit(4)
                ->get();
        return view('Users.AccueilUser', compact('biens'));
    }

    public function Select()
    {
        $biens = DB::table('agence_biens')
                ->get();
        return view('Users.Biens', compact('biens'));
    }

    public function Details($id)
    {
        $bien = DB::table('agence_biens')->where('id', $id)->first();
        return view('Users.Details', compact('bien'));
    }

    public function Recherche(Request $request)
    {
        $surface_min = $request->input('surface_mi');
        $piece_min = $request->input('piece_mi');
        $budget_max = $request->input('budget_ma');
        $mot_clef = $request->input('clef_m');

        $query = DB::table('agence_biens')->where(function ($query) use ($surface_min, $piece_min, $budget_max, $mot_clef) {
            if (!empty($surface_min)) {
                $query->where('surface', '>=', $surface_min);
            }

            if (!empty($piece_min)) {
                $query->where('piece', '>=', $piece_min);
            }

            if (!empty($budget_max)) {
                $query->where('prix', '<=', $budget_max);
            }

            if (!empty($mot_clef)) {
                $query->where('titre', 'LIKE', "%$mot_clef%")
                    ->orWhere('description', 'LIKE', "%$mot_clef%")
                    ->orWhere('chambre', 'LIKE', "%$mot_clef%")
                    ->orWhere('adresse', 'LIKE', "%$mot_clef%")
                    ->orWhere('ville', 'LIKE', "%$mot_clef%")
                    ->orWhere('code_postal', 'LIKE', "%$mot_clef%")
                    ->orWhere('options', 'LIKE', "%$mot_clef%");
            }
        })->get();

        $values = [
            'surface_mi' => $surface_min,
            'piece_mi' => $piece_min,
            'budget_ma' => $budget_max,
            'clef_m' => $mot_clef,
        ];

        if ($query->isEmpty()) {
            $message = "Désolé, aucune propriété n'a été trouvée pour les critères spécifiés.";
            return "$message";
        }

        return view('Users.Recherche', compact('query', 'values'));
    }
}