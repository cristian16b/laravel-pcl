<div class="w-full">
    <div class="flex flex-wrap justify-between items-center mb-16">
        <div class="w-auto pr-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">Nombre</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('name') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" 
            id="nombre" wire:model="nombre" type="text" placeholder="Nombre completo...">
            @error('nombre')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-auto px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="descripcion">Descripción</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('name') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="descripcion" wire:model="descripcion" type="text" placeholder="Descrip...">
            @error('descripcion')
                <span class="text-red-500 text-xs italic py-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-auto px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="direccion">Dirección</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('name') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="direccion" wire:model="direccion" type="text" placeholder="Domicilio ...">
            @error('direccion')
                <span class="text-red-500 text-xs italic py-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-auto pl-3 text-right">
            <div class="pt-5">
                <button wire:click="store()" class="px-3 py-2 bg-purple-200 text-purple-500 hover:bg-purple-500 hover:text-purple-100 rounded">Agregar empresa</button>
            </div>
        </div>
    </div>
</div>