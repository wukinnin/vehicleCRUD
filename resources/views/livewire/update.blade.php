<form>
    <input type="hidden" wire:model="post_id">
    <div class="form-group">
        <label for="exampleFormControlInput1">Make:</label>
        <input 
            type="text" 
            class="form-control" 
            id="exampleFormControlInput1" 
            placeholder="Enter Make" 
            wire:model="make"
        >
        @error('make') 
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div class="form-group">
        <label for="exampleFormControlInput2">Model:</label>
        <input 
            type="text" 
            class="form-control" 
            id="exampleFormControlInput2" 
            placeholder="Enter Model" 
            wire:model="model"
        >
        @error('model') 
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <br>
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
