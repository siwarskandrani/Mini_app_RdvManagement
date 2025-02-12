<div class="bg-purple-900 text-white p-6 rounded-lg w-full max-w-3xl mx-auto">
    <h2 class="text-center text-2xl font-bold mb-4">Créer votre équipe</h2>

    <div class="bg-purple-800 p-4 rounded-lg">
        <!-- Filtres -->
        <div class="space-y-3">
            <div>
                <label class="block text-sm font-medium">Trier selon</label>
                <select class="w-full bg-purple-700 text-white p-2 rounded">
                    <option>Choisir</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium">Filtrer par équipe</label>
                <select class="w-full bg-purple-700 text-white p-2 rounded">
                    <option>Choisir</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium">Filtrer selon statut</label>
                <select class="w-full bg-purple-700 text-white p-2 rounded">
                    <option>Choisir</option>
                </select>
            </div>
        </div>

        <!-- Recherche -->
        <div class="mt-4">
            <input type="text" wire:model="search" placeholder="Recherche par nom de joueur"
                class="w-full bg-purple-700 text-white p-2 rounded focus:outline-none">
        </div>

        <!-- Slider -->
        <div class="mt-4">
            <label class="block text-sm font-medium">Valeur</label>
            <input type="range" min="4" max="14" step="0.1" wire:model="minValue"
                class="w-full accent-pink-500">
            <div class="flex justify-between text-xs mt-1">
                <span>{{ number_format($minValue, 1) }}</span>
                <span>{{ number_format($maxValue, 1) }}</span>
            </div>
        </div>

        <!-- Boutons de rôle -->
        <div class="flex items-center justify-center gap-2 mt-4">
            @foreach(['all' => 'Tous', 'G' => 'G', 'D' => 'D', 'M' => 'M', 'A' => 'A'] as $key => $label)
                <button wire:click="selectRole('{{ $key }}')"
                    class="px-3 py-1 rounded text-white font-medium 
                    {{ $selectedRole === $key ? 'bg-red-500' : 'bg-purple-700 hover:bg-purple-600' }}">
                    {{ $label }}
                </button>
            @endforeach
        </div>
    </div>
</div>
