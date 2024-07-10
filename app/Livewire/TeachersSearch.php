<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Teacher;

class TeachersSearch extends Component
{
    use WithPagination;

    public $search = '';
    protected $queryString = ['search'];
    protected $layout = 'layouts.app'; // Specify the layout here

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function clear()
    {
        $this->search = '';
        $this->resetPage(); // Reinicia la paginación
    }

    public function render()
    {
        $searchTerm = '%' . $this->search . '%';
        if (trim($this->search) == '') {
            $teachers = Teacher::paginate(10); // Retorna todos los profesores si la búsqueda está vacía
        } else {
            $teachers = Teacher::whereRaw('LOWER(first_name) LIKE ?', [strtolower($searchTerm)])
                ->orWhereRaw('LOWER(last_name) LIKE ?', [strtolower($searchTerm)])
                ->paginate(10);
        }
        return view('livewire.teachers-search', [
            'teachers' => $teachers
        ]);
    }
}