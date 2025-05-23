<section>
    <form wire:submit.prevent="handleSubmit">
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control" wire:model="title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input name="description" type="text" class="form-control" wire:model.live="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        {{-- <button wire:click="remove" class="btn btn-primary">Remove</button> --}}
        {{-- <button type="button" wire:click="doSumthing" class="btn btn-primary">Submit</button> --}}
        {{-- <input type="text" wire:keydown.enter="doSumthing"> --}}
        <input type="text" wire:keydown.ctrl.enter="doSumthing($event.target.value)">
        {{-- <div wire:loading wire:target="remove">
            <div class="spinner-grow text-success" role="status">
            </div>
        </div> --}}
        {{-- <div wire:loading.flex> --}}
            {{-- <div wire:loading.delay> --}}
                <div wire:loading.delay.longest>

                    <div class="spinner-grow text-success" role="status">
                    </div>
                </div>
    </form>
</section>