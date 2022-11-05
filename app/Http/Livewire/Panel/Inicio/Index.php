<?php

namespace App\Http\Livewire\Panel\Inicio;

use App\Models\Inicio;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;
    public $sort = 'id';
    public $order = 'desc';

    protected $listeners = [
        'delete' => 'delete',
    ];

    public function delete($id)
    {
        $inicio = Inicio::find($id);
        $inicio->delete();
    }

    public function order($sort)
    {
        $this->order = $this->order == 'desc' ? 'asc' : 'desc';
        $this->sort = $sort;
    }
    public function render()
    {
        $inicios = Inicio::where('tipo', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->order)
            ->paginate(8);
        return view('livewire.panel.inicio.index', compact('inicios'));
    }
}
