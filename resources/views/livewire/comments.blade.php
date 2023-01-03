<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <form wire:submit.prevent="submit" class="mt-5">
        <div class="flex flex-col">
            <label for="comment">Deixe um comentário</label>
            <textarea wire:model="comment" class="mt-2" name="comment" id="comment" cols="30" rows="10"></textarea>
        </div>
        <button wire:click="submit" class="bg-green-700 w-full py-1 mt-2 font-bold text-center text-white text-base rounded-full hover:cursor-pointer hover:bg-green-600 hover:shadow-lg">COMENTAR</button>
    </form>
    <p class="mt-5">Últimos comentários:</p>
    @foreach ($comments as $comment)
        <div class="p-2 shadow-md">
            {{ $comment->text }}
            {{ $comment->created_at }}
        </div>
    @endforeach
</div>