<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $group = null)
    {
        $documents = $group ? Document::where('group_name', $group)->get() : Document::all();
        return view('documents.index', compact('documents', 'group'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx',
            'group_name' => 'required|string|max:255',
            'document_name' => 'required|string|max:255',
        ]);

        $file = $request->file('file');
        $path = $file->store('public/documents');

        $document = Document::create([
            'link' => Storage::url($path),
            'group_name' => $request->group_name,
            'document_name' => $request->document_name,
        ]);

        return redirect()->route('documents.create')->with('success', 'Documento creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        Storage::delete(str_replace('/storage/', 'public/', $document->link));
        $document->delete();

        return response()->json(null, 204);
    }

    public function create()
    {
        return view('documents.create');
    }

}
