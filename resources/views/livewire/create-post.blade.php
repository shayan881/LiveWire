<section>
    <form wire:submit.prevent="handleSubmit">
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control" wire:model="title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input name="description" type="text" class="form-control" wire:model="description">
        </div>
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
        {{-- <button type="button" wire:click="doSumthing" class="btn btn-primary">Submit</button> --}}
        <input type="text" wire:keydown.enter="doSumthing">
    </form>
</section>