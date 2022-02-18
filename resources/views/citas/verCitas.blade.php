<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis citas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <span class="icon-more"> <a type="button" href="{{route('citas.create')}}" class="btn btn-primary">Crear una Nueva Cita</a></span>
                <!-- <h1>INTERFAZ PRODUCTOS</h1>-->
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th>ID</th>
                            <th class="border px-4 py-2">NOMBRE</th>
                            <th class="border px-4 py-2">DESCRIPCIÓN</th>
                            <th class="border px-4 py-2">CATEGORÍA</th>
                            <th class="border px-4 py-2">PRECIO</th>
                            <th class="border px-14 py-1">IMAGEN</th>
                            <th class="border px-14 py-1">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>->id</td>
                            <td>->nombre</td>
                            <td>->descripcion</td>
                            <td>->categoria</td>
                            <td>->precio</td>
                            <td class="border px-14 py-1">
                                <img src="..." width="60%">
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center rounded-lag text-lg" role="group">
                                    <!--Botón editar-->
                                    <a type="button"  href="" class="btn btn-success">Editar mi cita</a>
                                    &nbsp;&nbsp;
                                    <!--Botón eliminar-->
                                    <form action="" method="POST" class="formEliminar">

                                        <button type="submit" class="btn btn-danger">Eliminar esta cita</button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <div>

                </div>
            </div>
        </div>
    </div>



</x-app-layout>
<!--AQUI SE MANDA  ALLAMAR TODO LO QUE TENGA QUE VER CON BOOTSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="fonts/fonts/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>