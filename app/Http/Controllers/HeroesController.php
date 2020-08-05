<?php

namespace App\Http\Controllers;
use App\Hero;
use App\Http\Resources\Heroes as HeroResource;
use App\Http\Resources\HeroesCollection;


use Illuminate\Http\Request;

class HeroesController extends Controller
{
    public function index()
    {
        return new HeroesCollection(Hero::all());
    }

    public function show($id)
    {
        return new HeroResource(Hero::findOrFail($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nickname' => 'required|max:255',
        ]);

        $hero = Hero::create($request->all());

        return (new HeroResource($hero))
                ->response()
                ->setStatusCode(201);
    }

    public function delete($id)
    {
        $player = Hero::findOrFail($id);
        $player->delete();

        return response()->json(null, 204);
    }

}
