<form>
    <input type="hidden" wire:model="post_id">

    <div class="form-group">
        <label for="exampleFormControlInput1">Make:</label>
        <input 
            type="text" 
            class="form-control" 
            id="exampleFormControlInput1" 
            placeholder="Enter make" 
            wire:model="make"
        >
        @error('make') 
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput2">Model:</label>
        <textarea 
            class="form-control" 
            id="exampleFormControlInput2" 
            wire:model="model" 
            placeholder="Enter Model"
        ></textarea>
        @error('model') 
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <button 
        wire:click.prevent="update()" 
        class="btn btn-dark"
    >
        Update
    </button>

    <button 
        wire:click.prevent="cancel()" 
        class="btn btn-danger"
    >
        Cancel
    </button>
</form>
