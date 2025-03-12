<div class="max-w-lg mx-auto p-4">
    @if (session()->has('success'))
        <div class="p-4 mb-4 text-green-700 bg-green-100 border border-green-300 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <h3 class="text-lg font-semibold text-gray-700 mb-3">Créer un service</h3>

    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <input 
                type="text" 
                id="description" 
                wire:model="form.description" 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md"
            >
            @error('form.description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Prix</label>
            <input 
                type="text" 
                id="price" 
                wire:model="form.price" 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md"
            >
            @error('form.price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-md">
                Sauvegarder
            </button>
        </div>


        <!-- Loader -->
        <span wire:loading>Chargement...</span>
    </form>
</div>
