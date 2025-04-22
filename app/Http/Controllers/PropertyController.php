<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = DB::select("SELECT * FROM properties");

        return view('property/index')->with('properties', $properties);
    }

    public function create()
    {
        return view('property/create');
    }

    public function store(Request $request)
    {

        // echo "Título: " . $request->title;
        // echo "<br>";
        // echo "Descrição: " . $request->description;
        // echo "<br>";
        // echo "Valor de Locação: " . $request->rental_price;
        // echo "<br>";
        // echo "Valor de Compra: " . $request->sale_price;
        // echo "<br>";
        // echo "<br>";

        // dd($request);

        $property = [
            $request->title,
            $request->description,
            $request->rental_price,
            $request->sale_price
        ];

        DB::insert("INSERT INTO properties (title, description, rental_price, sale_price) VALUES (?, ?, ?, ?)", $property);

        return redirect()->action([PropertyController::class, 'index']);
    }
}