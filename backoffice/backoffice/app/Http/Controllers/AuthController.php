<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'codigo' => 'required', // Campo do email/código no formulário
            'pin'    => 'required', // Campo da palavra-passe no formulário
        ]);

        try {
            // Procura o administrador na base de dados correta 'banco_contas', tabela 'administrador'
            $funcionario = DB::connection('mysql')
                ->table('administrador')
                ->where('email', $request->codigo)
                ->first();

            // Verificação se o utilizador existe e se a palavra-passe coincide com o hash
            if ($funcionario && Hash::check($request->pin, $funcionario->palavra_passe)) {
                
                // Login efetuado com sucesso: guarda os dados na sessão
                session([
                    'codigo_funcionario' => $funcionario->id,
                    'nome_funcionario'   => $funcionario->nome ?? 'Administrador'
                ]);

                return redirect()->intended('/dashboard');
            } else {
                return back()->withErrors(['codigo' => 'Credenciais inválidas. Email ou palavra-passe incorretos.']);
            }

        } catch (\Exception $e) {
            return back()->withErrors(['codigo' => 'Erro ao ligar à base de dados MySQL: ' . $e->getMessage()])->withInput();
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
}