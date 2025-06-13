<div class="create">
    <h3>Create a New Book</h3>

    <form wire:submit="save">
        <div class="field">
            <label>Book Title:</label>
            <input type="text" wire:model="title" />
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="field">
            <label>Book Author:</label>
            <input type="text" wire:model="author" />
            @error('author')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="field">
            <label>Book Rating:</label>
            <input type="text" wire:model="rating" />
            @error('rating')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Add Book</button>
        </div>
    </form>
</div>
