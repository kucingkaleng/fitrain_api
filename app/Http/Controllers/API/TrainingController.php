<?php

namespace App\Http\Controllers\API;

// Requests
use Illuminate\Http\Request;
// Models
use App\SubCategory;
use App\Training;
// Others
use App\Http\Controllers\Controller;
use Validator;

class TrainingController extends Controller
{

  public function index()
  {
    $trainings = Training::all();
    $trainings->load('category');
    $trainings->load('sub_category');

    return response()->json($trainings);
  }

  public function store(Request $req)
  {
    // Validations
    $validation = $this->validation($req->all());
    if ($validation->fails()) {
      return response()->json(['errors' => $validation->errors()]);
    }

    // Cek sub kategori apakah satu rumpun dengan parent kategori
    $sub_category = SubCategory::find($req->sub_category_id);

    if ($sub_category->category_id != $req->category_id) {
      $res = [
        'error' => 'sub category invalid'
      ];
      return response()->json($res, 400);
    }

    $training = Training::create($req->all());
    return response()->json('ok');
  }

  public function validation ($req) {
    return $validation = Validator::make($req, [
      'category_id' => 'required|integer',
      'sub_category_id' => 'integer',
    ]);
  }

  public function show($id)
  {
    //
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}
