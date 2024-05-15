<?php

namespace App\Http\Controllers;

use App\Http\Resources\CupcakeResource;
use App\Models\Cupcake;
use Illuminate\Http\Request;

class CupcakeController extends Controller
{
    public function index()
    {
        $cupcakes = Cupcake::all();
        return CupcakeResource::collection(Cupcake::paginate(10));
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $vaidateData = $request->validate([
            'title' => 'required|string',
            'imageSource' => 'required|string',
            'quantity' => 'required|integer',
            'isAvailable' => 'boolean',
            'isAdvertised' => 'boolean',
            'price' => 'required|numeric'
        ]);

        // Créer un new cupcake
        $cupcake = new Cupcake();
        $cupcake->name = htmlspecialchars($vaidateData['title']);
        $cupcake->image = htmlspecialchars($vaidateData['imageSource']);
        $cupcake->quantity = $vaidateData['quantity'];
        $cupcake->is_available = $vaidateData['isAvailable'];
        $cupcake->is_advertised = $vaidateData['isAdvertised'];
        $cupcake->price = $vaidateData['price'];

        // on enregistre le new cupcake dans le BDD
        $cupcake->save();


        // // on renvoie une réponse JSON
        return CupcakeResource::make($cupcake)->response()->setStatusCode(201);
    }
   
    public function show(Cupcake $cupcake)
    {
        // Find le cupcake dans la BDD
       // $cupcake = Cupcake::findOrFail($cupcake->id);

        // on affihce le cupcake via une réponse JSON
        return CupcakeResource::make($cupcake);
    }
   
    public function update(Request $request, Cupcake $cupcake)
    {
        // Valider les données du formulaire
        $vaidateData = $request->validate([
            'title' => 'required|string',
            'imageSource' => 'required|string',
            'quantity' => 'required|integer',
            'isAvailable' => 'boolean',
            'isAdvertised' => 'boolean',
            'price' => 'required|numeric'
        ]);

        // Find le cupcake dans la BDD
        //$cupcake = Cupcake::findOrFail($cupcake->id);

        // Update du cupcake
        $cupcake->name = $vaidateData['title'];
        $cupcake->image = $vaidateData['imageSource'];
        $cupcake->quantity = $vaidateData['quantity'];
        $cupcake->is_available = $vaidateData['isAvailable'];
        $cupcake->is_advertised = $vaidateData['isAdvertised'];
        $cupcake->price = $vaidateData['price'];

        $cupcake->save();
        
        // on renvoie une réponse JSON
        return CupcakeResource::make($cupcake);

    }

   
    public function destroy(Cupcake $cupcake)
    {
        // on find le cupcake avec l'id
        $cupcake = Cupcake::findOrFail($cupcake->id);

        // on supprime le cupcake
        $cupcake->delete();

        //on renvoie une reponse JSON
        return CupcakeResource::make($cupcake)->response();

    }
}
