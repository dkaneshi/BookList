<div>
    <header class="flex justify-between">
        <div>
            <h2>Hi, {{ $name }}</h2>
            <p>{{ $subtitle }}</p>
        </div>

        <form wire:submit="$refresh">
            <span class="mr-2">Your Name: </span>
            <input wire:model.live.debounce.500ms="name" type="text" />
            <button>Update</button>
        </form>
    </header>
</div>
