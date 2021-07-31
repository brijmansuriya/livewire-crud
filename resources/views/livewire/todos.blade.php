<div class="py-12 m-5">
            @if (session()->has('message'))
                    <div class="flex">
                        <div class="alert alert-secondary" role="alert">
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
            @endif
            <button class="btn btn-success mb-3" wire:click="create()">Create Todo</button>
            @if ($isOpen)
                @include('livewire.create')
            @endif
            <table class="table" border='1'>
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Desc</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                        <tr>
                            <td>{{ $todo->id }}</td>
                            <td>{{ $todo->title }}</td>
                            <td>{{ $todo->description }}</td>
                            <td>
                                <button class="btn btn-warning" wire:click="edit({{ $todo->id }})">Edit</button>
                                <button class="btn btn-danger" wire:click="delete({{ $todo->id }})">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
</div>
