<div>
    <div class="col-4 mb-4">
        <label>Search</label>
        <input type="text" class="form-control" wire:model.live="search">
        <button class="btn btn-info mt-3" wire:click="resetData">Reset</button>
    </div>
    <table class="table table-bordered table-striped">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Setting</th>
        </tr>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->price }}</td>
                <td>
                    <button wire:click="delete({{ $course->id }})" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>