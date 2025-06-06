<div class="container my-3">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-end">
                <a class="btn btn-success" href="{{ route('courses.create') }}">Create</a>
            </div>
            <div>
                <div class="col-4 mb-4">
                    <label>Search</label>
                    <input type="text" class="form-control" wire:model.live="search">
                    {{-- <input type="text" class="form-control"
                        wire:keydown.enter="$set('search', $event.target.value)"> --}}
                    {{-- <button class="btn btn-info mt-3" wire:click="resetData">Reset</button> --}}
                    {{-- <button class="btn btn-info mt-3" wire:click="$refresh">Refresh</button> --}}
                    {{-- <button class="btn btn-info mt-3" wire:click="$set('search', '')">reset</button> --}}
                    <button class="btn btn-info mt-3" wire:click="$set('sortwith', 'name')"
                        wire:click="$toggle('sort')">SortName</button>
                    <button class="btn btn-info mt-3" wire:click="$set('sortwith', 'price')">SortPrice</button>
                    {{-- <button class="btn btn-info mt-3" wire:click="$toggle('sort')">
                        set {{ $sort ? 'asc' : 'desc' }}
                    </button> --}}
                    {{-- <button class="btn btn-info mt-3" wire:click="$toggle('sort')">
                        set {{ $sort ? 'asc' : 'desc' }}
                    </button> --}}
                    {{-- <button class="btn btn-info mt-3" wire:click="$toggle('sort')">
                        set {{ $sort ? 'asc' : 'desc' }}
                    </button> --}}
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
                                {{-- <button wire:confirm="آیا از حذف داده های خود اتمینان دارید؟"
                                    wire:click="delete({{ $course->id }})" class="btn btn-danger">Delete</button> --}}

                                <button wire:confirm.prompt="send id for delete|{{ $course->id }}"
                                    wire:click="delete({{ $course->id }})" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <button class="btn btn-info" wire:click="$parent.changeName('Nima')">Change Name</button>
            </div>
        </div>
    </div>
</div>