<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrat = contrat::all();
        return response() -> json($contrat, 200);
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
            $contrat = contrat::create([
                'type' => $request->type,
                'numero' => $request->numero,
                'dateSignature' => $request->dateSignature,
                'duree' => $request->duree,
                'id_client' => $request->client,
            ]);
            \DB::commit();
            return response() -> json($contrat, 201);
        } catch (\Throwable $th) {
            return response() ->json('{"error" : "Impossible de sauvegarder"}' . $th, 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        try {
            $contrat = Contrat::find($id);
            return response()->json($contrat, 200);
        } catch (\Throwable $th) {
            return response() ->json('{"error" : "Impossible de sauvegarder"}' . $th, 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $contrat = Contrat::find($id);
            $contrat->update($request->all());
            response()->json("{'Modification reussie'}", 200);
            return $contrat;
        } catch (\Throwable $th) {
            return response() ->json('{"error" : "Impossible de sauvegarder"}' . $th, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        try {
            Contrat::find($id)-> delete();
            return response() -> json([
                'message' => 'Participant deleted successfully'
            ]);
        } catch (\Throwable $th) {
            return response() ->json('{"error" : "Impossible de sauvegarder"}' . $th, 404);
        }
    }
}
