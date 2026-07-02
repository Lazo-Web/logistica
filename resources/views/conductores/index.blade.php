<x-layouts::app :title="__('Conductores')">
 @include('conductores.nav')
<div>
        <h1 class="flex  justify-center text-2xl  mt-18 uppercase  font-bold">CONDUCTORES</h1>


        @if ($conductores->isEmpty())
            <div
                class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default mt-4">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium font-bold">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Nombre Conductor
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Color
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 bg-white">
                        @foreach ($conductores as $conductor)
                            <tr>
                                <td class="px-4 py-3 text-sm text-slate-700">{{ $conductor->id }}</td>
                                <td class="px-4 py-3 text-sm text-slate-700">
                                    {{ $conductor->created_at?->format('Y-m-d H:i') ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h1 class="flex  justify-center text-2xl font-semibold mb-8 font-Poppins mt-4"> No hay conductores registrados</h1>
            </div>
        @else
            <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">ID</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">Creado</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 bg-white">
                        @foreach ($conductores as $conductor)
                            <tr>
                                <td class="px-4 py-3 text-sm text-slate-700">{{ $conductor->id }}</td>
                                <td class="px-4 py-3 text-sm text-slate-700">
                                    {{ $conductor->created_at?->format('Y-m-d H:i') ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

</x-layouts::app>
