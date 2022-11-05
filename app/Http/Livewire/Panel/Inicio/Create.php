<?php

namespace App\Http\Livewire\Panel\Inicio;

use App\Models\Inicio;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $tipo;
    public $Titulo;
    public $image;
    public $images = [];
    public $content;
    public $urlyoutube;

    protected $rules = [
        'tipo' => 'required|min:3|max:255',
        'Titulo' => 'required|min:3|max:255'
    ];

    protected $messages = [
        'tipo.required' => 'El Tipo es requerido',
        'Titulo.min' => 'El Titulo debe tener al menos 3 caracteres',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        'content' => 'required',
    ];


    public function addImage($image)
    {
        $this->images[] = $image;
    }

    public function store()
    {
        $this->validate();

        if ($this->image) {
            $image = $this->image->store('public/inicio');
        }

        $inicio = new Inicio();

        $inicio->tipo = $this->tipo;
        $inicio->Titulo = $this->Titulo;
        $inicio->image = $this->image ? $image : null;
        $inicio->content = $this->content;
        $inicio->urlyoutube = $this->urlyoutube;
        $inicio->save();

        foreach ($this->images as $image) {
            $img = Image::where('path', $image)->first();

            if (strpos($inicio->content, $image)) {
                $img->update([
                    'imageable_id' => $inicio->id,
                    'imageable_type' => Inicio::class,
                ]);
            } else {
                Storage::delete('public/', $img->path);
                $img->delete();
            }
        }

        return redirect()->route('panel.inicio.index')->with('success', 'Inicio creado correctamente');
    }
    public function render()
    {
        return view('livewire.panel.inicio.create');
    }
}
