<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gender;
use App\Tp_doc;
use Session;

class CatalogsController extends Controller {
  /*
  * Genders
  */

  public function getGenders() {
    $genders = Gender::all();
    return view('catalogs.genders', compact('genders'));
  }

  public function createGender() {
    return view('catalogs.create_gender');
  }

  public function storeGender(Request $request) {

    $data = $request->all();
    $gender = new Gender;
    $gender->name = $data["nameGender"];

    $gender->save();
    Session::flash('message', 'Genero creado exitosamente');
    return redirect('catalogs/genders');
  }

  public function editGender($id) {
    $gender = Gender::find($id);
    return view('catalogs.edit_gender', ['gender' => $gender]);
  }

  public function updateGender(Request $request) {
    $data = $request->all();

    $gender = Gender::find($data["id_gender"]);
    $gender->name = $data["nameGender"];
    $gender->save();
    Session::flash('message', 'Genero actualizado correctamente');
    return redirect('catalogs/genders');
  }

  public function destroyGender($id) {
    Gender::destroy($id);
    Session::flash('message', 'Genero eliminado correctamente');
    return redirect('catalogs/genders');
  }
  /*
  * Document type
  */
  public function getDocumentype(Request $request) {
    if ($request->ajax()) {
      $tpdoc = Tp_doc::all();
      return response()->json($tpdoc);
    }
    return view('catalogs.documentype');
  }

  public function createDocumentype() {
    return view('catalogs.create_documentype');
  }

  public function storeDocumentype(Request $request) {
    if($request->ajax()){
      Tp_doc::create($request->all());
      return response()->json([
        "mensaje" => "creado"
      ]);
    }
  }

}
