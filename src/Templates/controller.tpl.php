<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\[[model_uc]];
use App\Dtssp;

class [[controller_name]]Controller extends Controller
{
  
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(Request $request)
  {
    return view('[[view_folder]].index', []);
  }

  public function create(Request $request)
  {
    return view('[[view_folder]].add', [
      []
    ]);
  }

  public function edit(Request $request, $id)
  {
    $[[model_singular]] = [[model_uc]]::findOrFail($id);
    return view('[[view_folder]].edit', [
      'model' => $[[model_singular]]
    ]);
  }

  public function show(Request $request, $id)
  {
    $[[model_singular]] = [[model_uc]]::findOrFail($id);
    return view('[[view_folder]].show', [
      'model' => $[[model_singular]]
    ]);
  }

  public function viewdata(Request $request)
  {  
  
    /* $jointable = 
    [
        ['table'=>'salary AS b','on'=>'a.id=b.emp_id','join'=>'JOIN']
    ];*/
    $
    $columns = [     
        [[foreach:columns]]
        ['db'=>'[[i.name]]', 'dt' => 0],               
        [[endforeach]]  
    ];
    //$where = 'salary >25000';
    echo json_encode(
      Dtssp::simple($_GET, '[[model_plural]]', 'id', $columns,$jointable=null,$where=null)     
    );
  }


  public function update(Request $request) {
    //
    /*$this->validate($request, [
    'name' => 'required|max:255',
  ]);*/

  $[[model_singular]] =  [[model_uc]]::findOrFail($request->id);
  
  [[foreach:columns]]  
  [[if:i.name!='id']]
  $[[model_singular]]->[[i.name]] = $request->[[i.name]];
  [[endif]]
  [[endforeach]] 
  $[[model_singular]]->save();

  return redirect('/[[route_path]]');

}

public function store(Request $request)
{
  $[[model_singular]] = new [[model_uc]];
  
  [[foreach:columns]]  
  [[if:i.name!='id']]
  $[[model_singular]]->[[i.name]] = $request->[[i.name]];
  [[endif]]
  [[endforeach]] 
  $[[model_singular]]->save();

  return redirect('/[[route_path]]');
}

public function destroy(Request $request, $id) {

  $[[model_singular]] = [[model_uc]]::findOrFail($id);

  $[[model_singular]]->delete();
  return "OK";

}


}
