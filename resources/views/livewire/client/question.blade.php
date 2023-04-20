<div>
    <div class="d-flex align-content-start gap-3">
        <figure class="p-0 m-0">
            <img src="{{ auth()->user()->image }}" class="user__post" alt="">
        </figure>
        <div class="flex-grow-1 ">
            <form wire:submit.prevent="store" class="d-flex gap-3 flex-column">
                <div class="form-floating">
                    <textarea wire:model.defer="message" name="comment" value="{{ old('comment') }}" class="form-control"
                        placeholder="Leave a comment here" id="floatingTextarea2" style="height: 90px"></textarea>
                    @error('message')
                        <span class="text-danger mt-2">{{ $message }}</span>
                    @enderror
                    <label for="floatingTextarea2">Escribe un comentario</label>
                </div>

                <button type="submit"
                    class="btn btn-outline-primary btn__out px-4 py-2 align-self-end">Comentar</button>

            </form>

        </div>
    </div>



    <div class="">
        <h6 class="fw-bold mb-4">Comentarios:</h6>
        <div class="post__coments d-flex flex-column gap-5">


            @foreach ($questions as $question)
                <div wire:key="question-{{ $question->id }}" class="post__coment d-flex flex-column gap-3">
                    <div class=" d-flex gap-3">
                        <div class="">
                            {{-- <img src="{{ $question->user->profile_photo_url }}" class="user__post" alt=""> --}}
                            <img src="{{ $question->user->image }}" class="user__post" alt="">
                        </div>
                        <div class="flex-grow-1 ">
                            <div class="d-flex gap-2 justify-content-between align-items-center mb-2">
                                <div
                                    class="d-flex flex-wrap gap-2 justify-content-between justify-content-lg-start flex-fill">
                                    <h6 class="user__postname fw-bold p-0 m-0">{{ $question->user->name }}</h6>
                                    <p class="time__comment p-0 m-0 text-muted ">
                                        {{ $question->created_at->diffForHumans() }}</p>
                                </div>

                                <div class="">
                                    <div class="btn-group dropstart">
                                        <button type="button" class="coment__puntos" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical fs-5"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><button class="dropdown-item"
                                                    wire:click="edit({{ $question->id }})">Editar</button></li>
                                            <li><button class="dropdown-item"
                                                    wire:click="destroy({{ $question->id }})">Eliminar</button></li>

                                        </ul>
                                    </div>
                                </div>

                            </div>

                            @if ($question->id == $question_edit['id'])
                                <form class="me-0 me-lg-4" wire:submit.prevent="update">
                                    <textarea wire:model="question_edit.body" class="form-control"></textarea>

                                    @error('question_edit.body')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror

                                    <div class="d-flex justify-content-end gap-1 mt-2">
                                        <span wire:click="cancel" type="submit"
                                            class="btn btn-outline-danger btn__out px-4 py-2 align-self-end">Cancelar</span>
                                        <button type="submit"
                                            class="btn btn-outline-primary btn__out px-4 py-2 align-self-end">Comentar</button>
                                    </div>

                                </form>
                            @else
                                <p class="comment__paragraph p-0 m-0">{{ $question->body }}</p>
                            @endif


                        </div>
                    </div>

                    @livewire('client.answer', compact('question'), key('answere-' . $question->id))

                </div>
            @endforeach





        </div>
    </div>

    {{-- @dump($question_edit) --}}

</div>
