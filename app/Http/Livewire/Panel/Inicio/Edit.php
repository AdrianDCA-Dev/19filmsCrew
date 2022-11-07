<?php

namespace App\Http\Livewire\Panel\Inicio;

use App\Models\Inicio;
use App\Models\Image;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $tipo;
    public $Titulo;
    public $image;
    public $images = [];
    public $content;
    public $urlyoutube;

    public $image_new;
    public $inicio_id;

    protected $validationAttributes  = [
        'tipo' => 'Tipo',
        'Titulo' => 'Titulo',
        'content' => 'contenido',
        'image_new' => 'imagen',
        'urlyoutube' => 'urlyoutube',
    ];
    public function rules()
    {
        return [
            'tipo' => 'required|string|max:255|unique:inicios,tipo,' . $this->inicio_id,
        ];
    }
    public function mount(Inicio $inicio)
    {
        $this->tipo = $inicio->tipo;
        $this->Titulo = $inicio->Titulo;
        $this->image = $inicio->image;
        $this->content = $inicio->content;
        $this->urlyoutube = $inicio->urlyoutube;

        $this->images = $inicio->images->pluck('id')->toArray();
        $this->inicio_id = $inicio->id;
    }

    public function addImage($image)
    {
        $this->images[] = $image;
    }

    public function update()
    {

        $this->validate();

        if ($this->image_new) {
            $image = $this->image_new->store('public/inicio');
            Storage::delete($this->image);
        }


        $inicio = Inicio::find($this->inicio_id);

        $inicio->tipo = $this->tipo;
        $inicio->Titulo = $this->Titulo;
        $inicio->image = $this->image_new ? $image : $this->image;
        //$inicio->image = $this->image ? $image : null;
        $inicio->content = $this->content;
        $inicio->urlyoutube = $this->urlyoutube;
        $inicio->save();


        foreach ($this->images as $image) {
            $img = Image::where('path', $image)
                ->where('imageable_id', $this->inicio_id)
                ->where('imageable_type', Inicio::class)
                ->first();

            if (strpos($this->inicio->content, $image)) {
                $img->update([
                    'imageable_id' => $this->post_id,
                    'imageable_type' => Inicio::class,
                ]);
            } else {
                Storage::delete('public/' . $image);
                if ($img) {
                    $img->delete();
                }
            }
        }

        return redirect()->route('panel.inicio.index')->with('success', 'Inicio actualizado correctamente');
    }

    public function render()
    {
        return view('livewire.panel.inicio.edit');
    }
}
