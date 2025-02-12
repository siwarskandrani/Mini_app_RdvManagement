<div class="m-auto w-1/2 mb-4 bg-gray-100 p-4 rounded-lg shadow-md">
    <div class="mb-3 flex justify-between items-center">
        <a 
            href="create/Rdv"
            class="text-white p-2 bg-blue-700 hover:bg-blue-900 rounded-sm transition"
            wire:navigate
        >
            Create Rdv
        </a>
    </div>

    <div class="overflow-hidden rounded-lg shadow">
        <table class="w-full border-collapse bg-white rounded-lg shadow-md">
            <thead class="text-xs uppercase bg-gray-200 text-gray-700 font-semibold">
                <tr>
                    <th class="px-6 py-3 text-left">Client</th>
                    <th class="px-6 py-3 text-left">Service</th>
                    <th class="px-6 py-3 text-left">Date et Heure</th>
                    <th class="px-6 py-3 text-left">Status</th>
                    <th class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($this->rdvs as $rdv)
                    <tr wire:key="{{$rdv->id}}" class="border-b border-gray-300 odd:bg-gray-100 even:bg-white">
                        <td class="px-6 py-3">{{$rdv->client->name}}</td>
                        <td class="px-6 py-3">{{$rdv->service->description}}</td>
                        <td class="px-6 py-3">{{$rdv->date_rdv}}</td>
                        <td class="px-6 py-3">{{$rdv->status}}</td>
                        <td class="px-6 py-3 flex space-x-2">
                            <a class="text-blue-600 hover:text-blue-800 p-2 transition" 
                               href="/rdvs/{{$rdv->id}}/edit"
                               wire:navigate
                            >
                                Edit
                            </a>    
                            <button class="text-white p-2 bg-red-600 hover:bg-red-700 rounded-sm transition" 
                                    wire:click="delete({{$rdv->id}})"
                                    wire:confirm="Are you sure you want to delete this RDV?" 
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
        {{ $this->rdvs->links() }} 
    </div>
</div>
