<style>

h4{
    font-family: Arial, Helvetica, sans-serif;
}

#users {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#users td, #users th {
  border: 1px solid #ddd;
  padding: 8px;
}

#users tr:nth-child(even){background-color: #f2f2f2;}

#users tr:hover {background-color: #ddd;}

#users th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<h4>{{$titulo}}</h4>
<table class="table-auto w-full" id="users">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Apellido</th>
                <th class="px-4 py-2">Correo</th>
                <th class="px-4 py-2">Clave</th>
                <th class="px-4 py-2">Empresa</th>
                <th class="px-4 py-2">Año</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr class="text-center">
                    <td class="border px-4 py-2">{{ $item->id }}</td>
                    <td class="border px-4 py-2">{{ $item->nombre }}</td>
                    <td class="border px-4 py-2">{{ $item->apellido }}</td>
                    <td class="border px-4 py-2">{{ $item->correo }}</td>
                    <td class="border px-4 py-2">{{ $item->clave }}</td>
                    <td class="border px-4 py-2">{{ $item->empresa_id }}</td>
                    <td class="border px-4 py-2">{{ $item->anio }}</td>
                </tr>
            @empty
                <tr class="text-center">
                    <td colspan="4" class="py-3 italic">No hay información</td>
                </tr>
            @endforelse
        </tbody>
    </table>