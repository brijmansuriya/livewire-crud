<form>
    <div>
        <div>
            <div>
                <label>Title:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title">
                @error('title')
                <div class="alert alert-secondary" role="alert">
                 <span>{{ $message }}</span>
                </div>
                 @enderror
            </div>
            <div>
                <label>Description:</label>
                <textarea  class="form-control mb-2"  id="exampleFormControlInput2" wire:model="description"
                    placeholder="Enter Description"></textarea>
                @error('description')
                <div class="alert alert-secondary" role="alert">
                    <span>{{ $message }}</span>
                  </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="mb-2">
        <span>
            <button class="btn btn-warning" wire:click.prevent="store()" type="button">Save</button>
        </span>
        <span>
            <button class="btn btn-danger " wire:click="closeModal()" type="button">Cancel</button>
        </span>
    </div>
</form>
