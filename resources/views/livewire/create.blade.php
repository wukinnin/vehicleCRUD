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
        wire:click.prevent="store()" 
        class="btn btn-success"
    >
        Save
    </button>
</form>
