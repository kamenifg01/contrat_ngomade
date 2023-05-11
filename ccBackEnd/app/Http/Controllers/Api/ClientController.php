<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return response() -> json($client, 200);
    }

    public function create(){
        $client = Client::all();
        return view('liste_client', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            \DB::beginTransaction();
            $client = Client::create([
                'nom' => $request->nom,
                'numero' => $request->numero,
                'telephone' => $request->telephone,
                'ville' => $request->ville,
            ]);
            \DB::commit();
            return response() -> json($client, 201);
        } catch (\Throwable $th) {
            return response() ->json('{"error" : "Impossible de sauvegarder"}' . $th, 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $client = Client::find($id);
            return response()->json($client, 200);
        } catch (\Throwable $th) {
            return response() ->json('{"error" : "Impossible de sauvegarder"}' . $th, 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $client = Client::find($id);
            $client->update($request->all());
            response()->json("{'Modification reussie'}", 200);
            return $client;
        } catch (\Throwable $th) {
            return response() ->json('{"error" : "Impossible de sauvegarder"}' . $th, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $client = Client::find($id);
            $client -> delete();
            redirect('liste_client');
            return response() -> json([
                'message' => 'Client deleted successfully'
            ]);
        } catch (\Throwable $th) {
            return response() ->json('{"error" : "Impossible de sauvegarder"}' . $th, 404);
        }
    }
}
