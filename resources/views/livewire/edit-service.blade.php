<div class="max-w-lg mx-auto p-4">
    <h3 class="text-lg font-semibold text-gray-700 mb-3">Modifier un service</h3>

    @if (session()->has('success'))
        <div class="p-4 mb-4 text-green-700 bg-green-100 border border-green-300 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700" wire:dirty.class="text-red-500 font-semibold" wire:target="form.description">
                Description <span wire:dirty wire:target="form.description">*</span>
            </label>
            <input 
                type="text" 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"
                wire:model="form.description"
            >
            @error('form.description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700" wire:dirty.class="text-red-500 font-semibold" wire:target="form.price">
                Prix <span wire:dirty wire:target="form.price">*</span>
            </label>
            <input 
                type="text" 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"
                wire:model="form.price"
            >
            @error('form.price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <button
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-md"
                type="submit"
            >
                Sauvegarder
            </button>
        </div>
          <!-- Loader -->
          <span wire:loading>Chargement...</span>
    </form>
</div>
