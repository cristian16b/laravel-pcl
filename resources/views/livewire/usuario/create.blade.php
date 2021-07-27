<div class="w-full">
    <div class="flex flex-wrap justify-between items-center mb-16">
        <div class="w-auto pr-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">Nombre</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('name') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" 
            id="nombre" wire:model="nombre" type="text" placeholder="Ingrese">
            @error('nombre')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-auto px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="descripcion">Apellido</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('apellido') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="apellido" wire:model="apellido" type="text" placeholder="Ingrese">
            @error('apellido')
                <span class="text-red-500 text-xs italic py-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-auto px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="direccion">Correo</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('name') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="correo" wire:model="correo" type="text" placeholder="Ingrese">
            @error('correo')
                <span class="text-red-500 text-xs italic py-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-auto px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="direccion">Clave</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('name') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="clave" wire:model="clave" type="text" placeholder="Ingrese">
            @error('clave')
                <span class="text-red-500 text-xs italic py-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-auto px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="direccion">Año</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('name') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="anio" wire:model="anio" type="text" placeholder="Ingrese">
            @error('anio')
                <span class="text-red-500 text-xs italic py-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-auto px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="direccion">Grupo</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('name') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="grupo" wire:model="grupo" type="text" placeholder="Ingrese">
            @error('grupo')
                <span class="text-red-500 text-xs italic py-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-auto px-6">
            <label  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="empresa_id">Empresa</label>
            <select wire:model="empresa" id="empresa_id">
                <option selected="selected">Seleccione una empresa</option>
                @foreach($this->listaEmpresas as $selectableEmpresa)
                    <option value="{{ $selectableEmpresa->id }}">
                        {{ $selectableEmpresa->nombre }} - {{ $selectableEmpresa->descripcion }} - {{ $selectableEmpresa->domicilio }}
                    </option>
                @endforeach
            </select>
            @error('empresa')
                <span class="text-red-500 text-xs italic py-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-auto pl-3 text-right">
            <div class="pt-5">
                <button wire:click="store()" class="px-3 py-2 bg-purple-200 text-purple-500 hover:bg-purple-500 hover:text-purple-100 rounded">Agregar Usuario</button>
            </div>
        </div>
    </div>
</div>