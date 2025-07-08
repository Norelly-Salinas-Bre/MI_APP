<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Exports\ClientsExport;
use Maatwebsite\Excel\Facades\Excel;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $clients = Client::when($search, function ($query, $search) {
                $query  ->where('first_name', 'ILIKE', "%$search%")
                        ->orWhere('last_name', 'ILIKE', "%$search%")
                        ->orWhere('document_number', 'ILIKE', "%$search%");
            })->latest()->paginate(10)->withQueryString();

        return view('clients.index', compact('clients', 'search'));
    }

    public function export()
    {
        return Excel::download(new ClientsExport, 'clients.xlsx');
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|regex:/^[a-zA-ZÁÉÍÓÚáéíóúñÑ\s]+$/u|max:50',
            'last_name' => 'required|regex:/^[a-zA-ZÁÉÍÓÚáéíóúñÑ\s]+$/u|max:50',
            'document_type' => 'required|in:CC,CE,TI,PA',
            'document_number' => 'required|digits_between:5,15|numeric|unique:clients',
            'email' => 'required|email|unique:clients',
        ], [
            'first_name.required' => 'El nombre es obligatorio.',
            'first_name.regex' => 'El nombre solo puede contener letras.',
            'last_name.regex' => 'El apellido solo puede contener letras.',
            'document_number.digits_between' => 'El número de documento debe tener entre 5 y 15 dígitos.',
            'document_number.numeric' => 'Solo se permiten números en el número de documento.',
            'email.email' => 'Ingresa un correo electrónico válido.',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')->with('success', 'Cliente creado correctamente.');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'first_name' => ['required', 'regex:/^[a-zA-ZÁÉÍÓÚáéíóúñÑ\s]+$/u', 'max:100'],
            'last_name' => ['required', 'regex:/^[a-zA-ZÁÉÍÓÚáéíóúñÑ\s]+$/u', 'max:100'],
            'document_type' => ['required', 'in:CC,CE,TI,PA'],
            'document_number' => ['required', 'numeric', 'digits_between:6,15', 'unique:clients,document_number,' . $client->id],
            'email' => ['required', 'email', 'max:150', 'unique:clients,email,' . $client->id],
        ]);

        $client->update($request->all());

        return redirect()->route('clients.index')->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Cliente eliminado correctamente.');
    }
}

