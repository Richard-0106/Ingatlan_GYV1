<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategoriak;
class KategoriaController extends Controller
{
    public function index()
    {
        $kategoriak= response()->json(Kategoriak::all());
        return $kategoriak;
    }
}
