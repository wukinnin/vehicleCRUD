<form>
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
        wire:click.prevent="store()" 
        class="btn btn-success"
    >
        Save
    </button>
</form>
