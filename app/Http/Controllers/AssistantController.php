<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AssistantController extends Controller
{
    //Gerencia os assistentes
    public function index()
    {
        Gate::authorize('manage-assistants');

        // Busca todos os usuários que têm role_id igual a 3 (assistentes)
        $assistants = User::where('role_id', 3)->get();

        return view('assistant.index', ['assistants' => $assistants]);
    }

    //View form create assistant
    public function create()
    {
        Gate::authorize('manage-assistants');
        return view('assistant.create');
    }

    //Cria usuario assistant
    public function store(Request $request): RedirectResponse
    {
        Gate::authorize('manage-assistants');

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'role_id' => 3,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);



        return redirect(route('assistants.index'));
    }

    //Deleta usuario assistente
    public function destroy($id)
    {
        Gate::authorize('manage-assistants');

        User::destroy($id);

        return redirect(route('assistants.index'));

    }
}
