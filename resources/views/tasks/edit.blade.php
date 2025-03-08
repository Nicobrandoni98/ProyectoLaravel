<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar la tarea {{$task->name}}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-5">

                    <div class="p-4">
                        <a href="{{route('tasks.index')}}"
                            class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                            Volver al listado
                        </a>
                    </div>

                    @include('tasks.partials.form')


                </div>
            </div>
        </div>
    </div>
</x-app-layout>