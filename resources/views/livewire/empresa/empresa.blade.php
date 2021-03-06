<div>  
    @if($update)
        @include('livewire.empresa.update')
    @else
        @include('livewire.empresa.create')
    @endif
<table class="table-auto w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Descripción</th>
                <th class="px-4 py-2">Dirección</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr class="text-center">
                    <td class="border px-4 py-2">{{ $item->id }}</td>
                    <td class="border px-4 py-2">{{ $item->nombre }}</td>
                    <td class="border px-4 py-2">{{ $item->descripcion }}</td>
                    <td class="border px-4 py-2">{{ $item->direccion }}</td>
                    <td class="border px-4 py-2">
                        <button wire:click="edit({{ $item->id }})" 
                            class="px-2 py-1 bg-blue-200 text-blue-500 hover:bg-blue-500 hover:text-white rounded">
                            Editar
                        </button>
                        <button wire:click="destroy({{ $item->id }})" 
                            class="px-2 py-1 bg-red-200 text-red-500 hover:bg-red-500 hover:text-white rounded">
                            Borrar
                        </button>
                        <a  href="{{url('/imprimir/qr/') . '/' . $item->id  .'/' . $item->nombre }}"
                            class="px-2 py-1 bg-gren-200 text-green-500 hover:bg-green-500 hover:text-white rounded">
                            QR
                        </a>
                        <!-- <div class="visible-print text-center">
                            {!! QrCode::size(200)->generate($item->nombre); !!}
                            <p></p>
                        </div> -->
                    </td>
                </tr>
            @empty
                <tr class="text-center">
                    <td colspan="4" class="py-3 italic">No hay información</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <a href="{{url('/')}}"
                            class="px-2 py-1 bg-gren-200 text-green-500 hover:bg-red-500 hover:text-white rounded">
                            Volver
</a>
</div>