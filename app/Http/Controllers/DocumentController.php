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
    public function index(Request $request, $path = null)
    {
        // Dividir la ruta en carpetas individuales
        $folders = $path ? explode('/', $path) : [];
        $parent = null;

        // Navegar a través de las carpetas para encontrar la carpeta padre
        foreach ($folders as $folder) {
            $parent = Document::where('name', $folder)->where('parent_id', $parent ? $parent->id : null)->first();
            if (!$parent) {
                abort(404, 'Folder not found');
            }
        }

        // Obtener los documentos y subcarpetas dentro de la carpeta padre
        $documents = $parent ? $parent->children : Document::whereNull('parent_id')->get();

        // Devolver la vista con los documentos y la ruta actual
        return view('documents.index', compact('documents', 'path', 'parent'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'file' => 'nullable|file',
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:documents,id',
        ]);
        dd($request->all());

        // Inicializar variables
        $link = null;

        // Verificar si se ha subido un archivo
        if ($request->hasFile('file')) {
            // Almacenar el archivo subido en el sistema de archivos
            $file = $request->file('file');
            $path = $file->store('public/documents');
            $link = Storage::url($path);
        }

        // Crear un nuevo registro en la base de datos con la información del documento o carpeta
        $document = Document::create([
            'link' => $link,
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);

        // Redirigir al usuario a la página de creación de documentos con un mensaje de éxito
        return redirect()->route('documents.create')->with('success', 'Documento o carpeta creado exitosamente.');
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

    // Modificar el método create en el controlador DocumentController
    public function create()
    {
        $folders = Document::whereNull('link')->get(); // Obtener todas las carpetas
        return view('documents.create', compact('folders'));
    }

    public function createFolder(Request $request)
    {

        $request->validate([
            'folder_name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:documents,id',
        ]);


        $document = Document::create([
            'name' => $request->folder_name,
            'parent_id' => $request->parent_id,
        ]);


        return redirect()->back();
    }

    public function createFile(Request $request)
    {
        $request->validate([
            'file_upload' => 'nullable|file',
            'file_name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:documents,id',
        ]);

        // Inicializar variables
        $link = null;

        // Verificar si se ha subido un archivo
        // Verificar si se ha subido un archivo
        if ($request->hasFile('file_upload')) {
            // Almacenar el archivo subido en el sistema de archivos
            $file = $request->file('file_upload');
            $path = $file->store('public/documents');
            $link = Storage::url($path);
        }


        $document = Document::create([
            'link' => $link,
            'name' => $request->file_name,
            'parent_id' => $request->parent_id,
        ]);


        return redirect()->back();
    }

    public function showSpecificFolder($rootId, $subIds = null)
    {
        // Obtener la carpeta raíz por ID
        $parent = Document::findOrFail($rootId);

        // Si hay subcarpetas, navegar a través de ellas
        if ($subIds) {
            $subIdsArray = explode('/', $subIds);
            foreach ($subIdsArray as $subId) {
                $parent = Document::where('id', $subId)->where('parent_id', $parent->id)->firstOrFail();
            }
        }

        // Obtener los documentos y subcarpetas dentro de la carpeta padre
        $documents = $parent->children;

        // Devolver la vista con los documentos y la carpeta padre
        return view('documents.specific', compact('documents', 'parent', 'rootId', 'subIds'));
    }

}
