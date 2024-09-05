<?php
namespace App\Http\Controllers;

use App\Models\Freight;
use Illuminate\Http\Request;

class FreightController extends Controller
{
    public function index()
    {
        $freights = Freight::all();
        return view('freight-list', compact('freights'));
    }
    public function show($id)
    {
        $freight = Freight::findOrFail($id);
        return view('freight-details',[
            'freight' => $freight,
            'title' => 'Detalhes do frete ' . $freight->name
        ]);
    }
}
