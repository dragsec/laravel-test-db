<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utenti;

class UtentiController extends Controller
{
    public function index()
    {
        return Utenti::all();
    }

    public function show(Utenti $utenti)
    {
        return $utenti;
    }

    public function store(Request $request)
    {
        $utenti = Utenti::create($request->all());

        return response()->json($utenti, 201);
    }

    public function update(Request $request, Utenti $utenti)
    {
        $utenti->update($request->all());

        return response()->json($utenti, 200);
    }

    public function delete(Utenti $utenti)
    {
        $utenti->delete();

        return response()->json(null, 204);
    }
}