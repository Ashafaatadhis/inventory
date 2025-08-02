<div>
    @if (session()->has('message'))
        <div class="alert alert-success mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label class="block">Name</label>
            <input type="text" wire:model="name" class="input input-bordered w-full">
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block">UOM</label>
            <input type="text" wire:model="uom" class="input input-bordered w-full">
            @error('uom')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block d">Description</label>
            <textarea wire:model="description" class="textarea textarea-bordered w-full"></textarea>
            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end gap-2">
            <a href="{{ route('products.index') }}" class="btn">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
