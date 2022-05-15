<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingatlanok;
class IngatlanController extends Controller
{
    //
    public function indexEredeti()
    {
        return Ingatlanok::get();
    }
    public function index()
  {
    $ingatlanok = response()->json(Ingatlanok::with('kategoria')->get());
    return $ingatlanok;
  }
  public function destroy($id){
    $ingatlanok=Ingatlanok::find($id);
    $ingatlanok->delete();
  }

  public function update(Request $request, $id)
  {
      $ingatlanok = Ingatlanok::find($id);

      $ingatlanok->update($request->all());
      return $ingatlanok;
  }
  
  public function store(Request $request)
    {
       // Ingatlanok::create($request->all());
       echo $request;
       $ingatlanok = new Ingatlanok();
      
      $ingatlanok->kategoria = $request->kategoria;
      //  //hozzáfüzések
      $ingatlanok->leiras=$request->leiras;
      $ingatlanok->hirdetesDatuma=$request->hirdetesDatuma;
      $ingatlanok->tehermentes=$request->tehermentes;
      
      $ingatlanok->ar=0;
      $ingatlanok->kepUrl=$request->kepUrl;
      
      $ingatlanok->save();
       Ingatlanok::find($ingatlanok->kategoria);
    }
}
