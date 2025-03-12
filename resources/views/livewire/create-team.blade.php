{{-- <div class="bg-purple-900 text-white p-6 rounded-lg w-full max-w-3xl mx-auto">
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
</div> --}}
<div class="flex justify-center items-center min-h-screen bg-white">
    <!-- Conteneur pour l'image et le formulaire -->
    <div class="flex flex-col md:flex-row w-3/4 rounded-lg shadow-lg border border-black/30">
      
      <!-- Image à gauche -->
      <div class="w-full md:w-1/2 p-4"> <!--md:flex-row : À partir de 768px (taille de medium)de largeur d'écran et plus, les enfants seront organisés en ligne (au lieu de colonne). -->
        <img src="5243321-1.jpeg" class="w-full h-full object-cover rounded-lg" /> 
      </div>
  
      <!-- Formulaire à droite -->
      <div class="w-full md:w-1/2 p-6">
        <div class="w-full max-w-md mx-auto p-6  border-black/30">
          <h2 class="text-3xl font-bold text-center mb-6">Sign up</h2>
          
          <div class="mb-4">
            <label class="block text-sm font-semibold text-black">Name</label>
            <input type="text" placeholder="Siwar Skandrani" 
                   class="w-full p-3 mt-1 rounded-lg border border-black/40 text-black 
                          placeholder-black/40 focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
  
          <div class="mb-4">
            <label class="block text-sm font-semibold text-black">Email</label>
            <input type="email" placeholder="siwarskandrani@gmail.com"
                   class="w-full p-3 mt-1 rounded-lg border border-black/40 text-black 
                          placeholder-black/40 focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
  
          <div class="mb-6">
            <label class="block text-sm font-semibold text-black">Password</label>
            <input type="password" placeholder="●●●●●●●"
                   class="w-full p-3 mt-1 rounded-lg border border-black/40 text-black 
                          placeholder-black/40 focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
  
          <button class="w-full py-3 rounded-lg bg-blue-600 text-white font-semibold text-center hover:bg-blue-700">
            Sign up
          </button>
        </div>
      </div>
    </div>
  </div>
  