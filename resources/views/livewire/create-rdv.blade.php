<div class="max-w-lg mx-auto p-4">
    @if (session()->has('success'))
        <div class="p-4 mb-4 text-green-700 bg-green-100 border border-green-300 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="client_id" class="block text-sm font-medium text-gray-700">Client</label>
            <select id="client_id" wire:model="form.client_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                <option value="">Sélectionner un client</option>
                @foreach(App\Models\Client::all() as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
            @error('form.client_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="service_id" class="block text-sm font-medium text-gray-700">Service</label>
            <select id="service_id" wire:model="form.service_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                <option value="">Sélectionner un service</option>
                @foreach(App\Models\Service::all() as $service)
                    <option value="{{ $service->id }}">{{ $service->description }}</option>
                @endforeach
            </select>
            @error('form.service_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="date_rdv" class="block text-sm font-medium text-gray-700">Date & Heure</label>
            <input type="datetime-local" id="date_rdv" wire:model="form.date_rdv" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
            @error('form.date_rdv') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Statut</label>
            <select id="status" wire:model="form.status" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                <option value="en attente">En attente</option>
                <option value="confirmé">Confirmé</option>
                <option value="annulé">Annulé</option>
            </select>
            @error('form.status') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-md">
                Sauvegarder
            </button>
        </div>
    </form>
</div>
