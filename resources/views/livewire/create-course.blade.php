<div class="container border my-4 rounded">
    <div class="row">
        <div class="col">
            <section>
                <form wire:submit.prevent="save">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" wire:model="name">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" wire:model.live="price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </section>
        </div>
    </div>
</div>