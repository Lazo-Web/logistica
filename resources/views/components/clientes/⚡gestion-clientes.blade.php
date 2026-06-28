<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    @include('components.clientes.⚡nav')


    <div class="flex justify-end mb-4 mr-10">
        <button type="button" wire:click="showCreateForm"
            class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-base text-sm px-4 py-2.5 text-center leading-5">Nuevo
            Cliente</button>
    </div>
    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs
        rounded-base border border-default">
        <h2 class="text-lg font-semibold text-heading py-4 px-6 text-center">GESTIÓN DE CLIENTES</h2>
        <table class="w-full text-sm text-left rtl:text-right text-body">
            <thead class="bg-neutral-secondary-soft border-b border-default">
                <tr>
                    <th scope="col" class="px-6 py-3 font-medium">
                        Nombre Cliente
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium">
                        Nif
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium">
                        Dirección
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium">
                        Contacto
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium">
                        Telefono
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-neutral-primary-soft border-b border-default hover:bg-blue-500 hover:text-olive-50">
                    <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap">
                        Lactalis Puleva Nadela
                    </th>
                    <td class="px-6 py-4">
                        5542365W
                    </td>
                    <td class="px-6 py-4">
                        Calle Poeta Curros Enriquez 15
                    </td>
                    <td class="px-6 py-4">
                        Pedro Luarca
                    </td>
                    <td class="px-6 py-4">
                        968102365
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-fg-brand hover:underline text-red-400">Ver</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
