<?php

use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerQuery;
use App\Http\Controllers\ControllerTest;
use App\Http\Controllers\ControllerUtilisateur;
use App\Http\Controllers\ExerciceController;
use App\Http\Controllers\ExerciceControllerRessource;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\StagiaireGController;
use App\Http\Controllers\UtilisateurController;
use App\Models\Stagiaire;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get("/",function(){return view('Interface');})->name('Interface');
Route::get("/User",'App\Http\Controllers\ControllerUtilisateurGB@SelectDerniers')->name('Accueil');
Route::get("/Biens",'App\Http\Controllers\ControllerUtilisateurGB@Select')->name('Biens');
Route::get("/Details/{id}",'App\Http\Controllers\ControllerUtilisateurGB@Details')->name('Details');
Route::post("/Recherche",'App\Http\Controllers\ControllerUtilisateurGB@Recherche')->name('Recherche');
Route::get("/GestionBiens",'App\Http\Controllers\ControllerAdminGB@Select')->name('Admin.Biens');
Route::get("/AjouterPage",'App\Http\Controllers\ControllerAdminGB@SelectO');
Route::post("/Ajouter",'App\Http\Controllers\ControllerAdminGB@Ajouter')->name('Ajouter');
Route::get("/Supprimer/{id}",'App\Http\Controllers\ControllerAdminGB@Supprimer')->name('Admin.Supprimer');
Route::get("/EditerBien/{id}",'App\Http\Controllers\ControllerAdminGB@PModifier')->name('Admin.PModifier');//no
Route::post("/Modifier/{id}",'App\Http\Controllers\ControllerAdminGB@Modifier')->name('Admin.Modifier');
Route::get("/GestionOptions",'App\Http\Controllers\ControllerAdminGB@SelectOption')->name('Admin.SelectOption');
Route::get("/SupprimerOption/{id}",'App\Http\Controllers\ControllerAdminGB@SupprimerOption')->name('Admin.SupprimerOption');
Route::get("/EditerOption/{id}",'App\Http\Controllers\ControllerAdminGB@PModifierO')->name('Admin.PModifierO');
Route::post("/EditerOption/{id}",'App\Http\Controllers\ControllerAdminGB@ModifierOption')->name('Admin.ModifierOption');
Route::get("/AjouterOption",function(){return view('Admins.AjouterOptions');});
Route::post("/AjouterOption",'App\Http\Controllers\ControllerAdminGB@AjouterOption')->name('AjouterOption');



















