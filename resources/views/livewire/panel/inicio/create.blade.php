<div>
    <div>
        <form method="POST" wire:submit.prevent="store">
            <div>
                <div class="mb-6">
                    <x-label for="tipo" class="mb-1 text-base">Tipo</x-label>
                    <x-input type="text" class="w-full bg-gray-50" name="tipo" id="tipo"
                             placeholder="Tipo del Inicio " wire:model.lazy="tipo"
                             :value="old('tipo')">
                    </x-input>
                    @error('tipo')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <x-label for="Titulo" class="mb-1 text-base">Titulo</x-label>
                    <x-input type="text" class="w-full bg-gray-50" name="Titulo" id="Titulo"
                             placeholder="Titulo del inicio " wire:model.lazy="Titulo"
                             :value="old('Titulo')">
                    </x-input>
                    @error('Titulo')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <x-label for="content" class="mb-1 text-base">Contenido</x-label>
                    <textarea name="content" id="content" wire:model.lazy="content" cols="30" rows="5"
                              class="w-full bg-gray-50 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                              placeholder="Contenido"></textarea>
                    @error('content')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <x-label for="image" class="mb-1 text-base">Imagen</x-label>
                    <x-input type="file" class="w-full bg-gray-50" name="image" id="image" wire:model="image"
                             accept="image/*" />

                    <div class="items-center my-5 w-80">
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" alt=""
                                 class="w-full object-cover rounded-md shadow-md">
                        @endif
                    </div>

                    @error('image')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

            </div>
            <div class="mb-6">
                <x-label for="urlyoutube" class="mb-1 text-base">Url Youtube</x-label>
                <x-input type="text" class="w-full bg-gray-50" name="urlyoutube" id="urlyoutube"
                         placeholder="Url Youtube " wire:model.lazy="urlyoutube"
                         :value="old('urlyoutube')">
                </x-input>
                @error('urlyoutube')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
        </form>
    </div>
</div>
@push('scripts')
    <script>
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }
            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        this._initRequest();
                        this._initListeners(resolve, reject, file);
                        this._sendRequest(file);
                    }));
            }
            abort() {
                if (this.xhr) {
                    this.xhr.abort();
                }
            }
            _initRequest() {
                const xhr = this.xhr = new XMLHttpRequest();
                xhr.open('POST', "{{ route('images.upload') }}", true);
                xhr.setRequestHeader('X-CSRF-TOKEN', "{{ csrf_token() }}");
                xhr.responseType = 'json';
            }
            _initListeners(resolve, reject, file) {
                const xhr = this.xhr;
                const loader = this.loader;
                const genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', () => reject(genericErrorText));
                xhr.addEventListener('abort', () => reject());
                xhr.addEventListener('load', () => {
                    const response = xhr.response;
                    if (!response || response.error) {
                        return reject(response && response.error ? response.error.message : genericErrorText);
                    }
                    /* almacenar el path de la imagen en el componenet co la funcion addImage de livewire */
                @this.addImage(response.path)
                    resolve({
                        default: response.url
                    });
                });
                if (xhr.upload) {
                    xhr.upload.addEventListener('progress', evt => {
                        if (evt.lengthComputable) {
                            loader.uploadTotal = evt.total;
                            loader.uploaded = evt.loaded;
                        }
                    });
                }
            }
            _sendRequest(file) {
                const data = new FormData();
                /* nombre de donde se almacena la imagen para el backend */
                data.append('upload', file);
                this.xhr.send(data);
            }
        }

        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        }
    </script>
@endpush

