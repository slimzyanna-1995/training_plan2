<?php

namespace App\Http\Controllers;

use App\Petition;
use Illuminate\Http\Request;
use App\Http\Resources\PetitionResource;
use App\Http\Resources\PetitionCollection;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response\Json\AnonymousResourceCollection
     */
    public function index()
    {

        // return new PetitionResource(Petition::all());
        return new petitionCollection(Petition::all());
        // return new PetitionResource(Petition::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return PetitionResource
     */
    public function store(Request $request)
    {
        $petition = Petition::create($request->only([
            'title', 'description', 'category', 'author', 'signees'
        ]));

        // return response()->json($petition, 200);
        return new PetitionResource($petition);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Petition  $petition
     * @return PetitionResource
     */
    public function show(Petition $petition)
    {
        return new PetitionResource($petition);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petition $petition)
    {
        $petition->update($request->only([
            'title', 'description', 'category', 'author', 'signees'
        ]));

        return new PetitionResource($petition);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petition $petition)
    {
    $petition = Petition::where('id', '>', 100)->delete();

    return response()->json($petition);
    }
}
