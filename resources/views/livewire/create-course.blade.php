<div class="container border my-4 rounded">
    <div class="row">
        <div class="col">
            <section>
                <form wire:submit.prevent="save">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" wire:model="name">
                        @error('name')
                            <span class="text-bg-danger px-3 py-2 rounded my-2 d-inline-block"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" wire:model.live="price">
                        @error('price')
                            <span class="text-bg-danger px-3 py-1 rounded my-2 d-inline-block"> {{ $message }} </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </section>
        </div>
    </div>
</div>