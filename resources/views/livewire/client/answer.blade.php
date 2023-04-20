<div class="d-flex flex-column gap-2 ms-4 ps-5">
    
    <button  wire:click="$set('question_created.open',true)" class="bg-none">
        <i class="fas fa-reply"></i>
        Responder
    </button>

    @if ($question_created['open'])
        
    <div class="d-flex gap-2 ">
        <figure class="p-0 m-0">
            <img src="{{ auth()->user()->image }}" class="user__post" alt="">
        </figure>

        <form class="flex-grow-1">
            <textarea class="form-control" placeholder="Escriba su respuesta"></textarea>

            {{-- @error('question_edit.body')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror --}}

            <div class="d-flex justify-content-end gap-1 mt-2">
                <span  wire:click="$set('question_created.open',false)" type="submit"
                    class="btn btn-outline-danger btn__out px-4 py-2 align-self-end">Cancelar</span>
                <button type="submit"
                    class="btn btn-outline-primary btn__out px-4 py-2 align-self-end">Responder</button>
            </div>

        </form>
    </div>
    @endif
    
</div>
