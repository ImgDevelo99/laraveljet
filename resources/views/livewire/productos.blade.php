<x-slot name="header">
   <center><h1 class="text-gray-900">BIENVENIDOS AL CRUD LARAVEL</h1></center> 
</x-slot>    

<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            @if(session()->has('message'))
                <h3>{{session('message')}}<h3>
            @endif

            <button wire:click="crear()" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 my3 rounded-md " >Nuevo</button><br>
            
            @if($modal)
                @include('livewire.crear')
            @endif    

<table  class="table-fixed w-full">
    <thead>
        <tr class="bg-indigo-600 text-white">
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">NOMBRE</th>
            <th class="px-4 py-2">CANTIDAD</th>
            <th class="px-4 py-2">PRECIO</th>
            <th class="px-4 py-2">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td class="border px-4 py2">{{$producto->id}}</td>
            <td class="border px-4 py2">{{$producto->nombre}}</td>
            <td class="border px-4 py2">{{$producto->cantidad}}</td>
            <td class="border px-4 py2">{{$producto->precio}}</td>
                <td class="border px-4 py-2 text-center">
                    <button wire:click="editar({{$producto->id}})"class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4">Editar</button>
                    <button wire:click="borrar({{$producto->id}})"class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4">Borrar</button>
                </td>
        </tr>   
        @endforeach

       
    </tbody> 
    </table>       


  </div>
        </div>
             </div>









