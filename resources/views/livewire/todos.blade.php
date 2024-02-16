<div class="flex flex-column text-center mt-3">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit="addtodo">
        <input type="text" wire:model.lazy="body" style="background-color:rgb(240, 240, 240)">
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
