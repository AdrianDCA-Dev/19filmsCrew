<div>

    <div class="comment_area clearfix mb-50">
        <div class="section-heading style-2">
            <h4>Comentarios</h4>
            <div class="line"></div>
        </div>

        <ul>
            <!-- Single Comment Area -->
            @forelse ($post->comments->sortByDesc('id') as $comment)

                <li class="single_comment_area">
                    <!-- Comment Content -->
                    <div class="comment-content d-flex">
                        <div class="comment-author">
                            <img src="{{asset('assets/usu.png')}}" alt="author">
                        </div>
                        <!-- Comment Meta -->
                        <div class="comment-meta">
                            <a href="#" class="comment-date">{{ $comment->created_at->diffForHumans() }}</a>
                            <h6>{{ $comment->user->name }}</h6>
                            <p>{{ $comment->content }}</p>
                            @auth
                                @if (auth()->user()->id === $comment->user_id)
                                    <button class="cursor-pinter" wire:click="deleteComment({{$comment->id}})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                @endif
                            @endauth
                        </div>
                    </div>

                </li>
            @empty
                <div class="bg-gray-200 rounded-lg shadow-lg px-3 my-4">
                    <p class="text-gray-700">
                        No hay comentarios.
                    </p>
                </div>
            @endforelse

        </ul>
    </div>
</div>

<div class="post-a-comment-area">

    <div class="section-heading style-2">
        <h4>Escribe tu comentario:</h4>
        <div class="line"></div>
    </div>

    <!-- Reply Form -->
    <div class="contact-form-area">
        <form action="" method="POST" class="mt-2" wire:submit.prevent="comment">
            @csrf
                <!-- Reply Form -->
                <div class="contact-form-area">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-12">
                                <textarea name="" class="form-control" id="message" placeholder="Escribe tu comentario..." wire:model.lazy="content"></textarea>
                                @if (session('error'))
                                    <p class="text-sm text-red-500">
                                        {{ session('error') }}
                                    </p>
                                @endif
                            </div>
                            <div class="col-12">
                                <div class="mt-4">
                                    <input type="submit"
                                           class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-full cursor-pointer"
                                           value="Comentar">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

        </form>

    </div>
</div>
