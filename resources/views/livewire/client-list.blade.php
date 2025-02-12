<div class="m-auto w-1/2 mb-4 bg-gray-100 p-4 rounded-lg shadow-md">
    <div class="mb-3 flex justify-between items-center">
        <a 
            href="/create/clients"
            class="text-white p-2 bg-blue-700 hover:bg-blue-800 rounded-sm transition"
            wire:navigate
        >
            Create Client
        </a>
    </div>

    <div class="overflow-hidden rounded-lg shadow">
        <table class="w-full border-collapse bg-white rounded-lg shadow-md">
            <thead class="text-xs uppercase bg-gray-200 text-gray-700 font-semibold">
                <tr>
                    <th class="px-6 py-3">Client name</th>
                    <th class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($this->clients as $client)
                    <tr wire:key="{{$client->id}}" class="border-b border-gray-300 odd:bg-gray-100 even:bg-white">
                        <td class="px-6 py-3">{{$client->name}}</td>
                        <td class="px-6 py-3">
                            <a class="text-blue-600 hover:text-blue-800 p-2 transition" 
                               href="clients/{{$client->id }}/edit"
                               wire:navigate
                            >
                                Edit
                            </a>    
                            <button class="text-white p-2 bg-red-600 hover:bg-red-700 rounded-sm transition" 
                                    wire:click="delete({{$client->id}})"
                                    wire:confirm="Are you sure you want to delete this client?" 
                            >
                                Delete
                            </button>    
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-3 flex justify-center">
        {{ $this->clients->links() }} 
    </div>
</div>
