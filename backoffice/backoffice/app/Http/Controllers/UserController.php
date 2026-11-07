<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // Obtém os dados da tabela 'administrador' e força a conversão para objetos limpos
        $users = DB::connection('mysql')->table('administrador')->get()->map(function ($item) {
            $obj = (object) $item;
            $obj->name = $obj->name ?? $obj->nome ?? 'Sem Nome';
            return $obj;
        });

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Lógica de gravação
    }

    public function edit(string $id)
    {
        return view('users.edit');
    }

    public function update(Request $request, string $id)
    {
        // Lógica de atualização
    }

    public function destroy(string $id)
    {
        // Lógica de eliminação
    }
}