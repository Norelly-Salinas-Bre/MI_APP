<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        return response()->json(Document::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'legal_case_id' => 'required|exists:legal_cases,id',
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $document = Document::create($validated);
        return response()->json($document, 201);
    }
}
