<div class="flex-1 p-4">
    <div class="relative max-w-md w-full">
        <div class="absolute top-1 left-2 inline-flex items-center p-2">
            <i class="fas fa-search text-gray-400"></i>
        </div>
        <input
            class="w-full h-10 pl-10 pr-4 py-1 text-base placeholder-gray-500 border rounded-full focus:shadow-outline"
            type="search" placeholder="Buscar...">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2">

        <div class="bg-white p-4 rounded-md">
            <h2 class="text-gray-500 text-lg font-semibold pb-1">Session 1</h2>
            <div class="my1-"></div>
            <div class="bg-gradient-to-r from-pink-300 to-pink-500 h-px  mb-6"></div>

            <div class="chart-container" style="position: relative; height:150px; width:100%">

                <canvas id="usersChart"></canvas>
            </div>
        </div>

        <div class="bg-white p-4 rounded-md">
            <h2 class="text-gray-500 text-lg font-semibold pb-1">Session 2</h2>
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-pink-300 to-pink-500 h-px mb-6"></div>
            <div class="chart-container" style="position: relative; height:150px; width:100%">
                <canvas id="commercesChart"></canvas>
            </div>
        </div>

        <div class="bg-white p-4 rounded-md">
            <h2 class="text-gray-500 text-lg font-semibold pb-4">Session 3</h2>
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-pink-300 to-pink-500 h-px mb-6"></div>
            <table class="w-full table-auto text-sm">
                <thead>
                    <tr class="text-sm leading-normal">
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                            Foto</th>
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                            Nombre</th>
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                            Rol</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light"><img
                                src="https://via.placeholder.com/40" alt="Foto Perfil"
                                class="rounded-full h-10 w-10"></td>
                        <td class="py-2 px-4 border-b border-grey-light">Juan Pérez</td>
                        <td class="py-2 px-4 border-b border-grey-light">Comercio</td>
                    </tr>
                    <!-- Añade más filas aquí como la anterior para cada autorización pendiente -->
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light"><img
                                src="https://via.placeholder.com/40" alt="Foto Perfil"
                                class="rounded-full h-10 w-10"></td>
                        <td class="py-2 px-4 border-b border-grey-light">María Gómez</td>
                        <td class="py-2 px-4 border-b border-grey-light">Usuario</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light"><img
                                src="https://via.placeholder.com/40" alt="Foto Perfil"
                                class="rounded-full h-10 w-10"></td>
                        <td class="py-2 px-4 border-b border-grey-light">Carlos López</td>
                        <td class="py-2 px-4 border-b border-grey-light">Usuario</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light"><img
                                src="https://via.placeholder.com/40" alt="Foto Perfil"
                                class="rounded-full h-10 w-10"></td>
                        <td class="py-2 px-4 border-b border-grey-light">Laura Torres</td>
                        <td class="py-2 px-4 border-b border-grey-light">Comercio</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light"><img
                                src="https://via.placeholder.com/40" alt="Foto Perfil"
                                class="rounded-full h-10 w-10"></td>
                        <td class="py-2 px-4 border-b border-grey-light">Ana Ramírez</td>
                        <td class="py-2 px-4 border-b border-grey-light">Usuario</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light"><img
                                src="https://via.placeholder.com/40" alt="Foto Perfil"
                                class="rounded-full h-10 w-10"></td>
                        <td class="py-2 px-4 border-b border-grey-light">Luis Martínez</td>
                        <td class="py-2 px-4 border-b border-grey-light">Comercio</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-right mt-4">
                <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                    Ver más
                </button>
            </div>
        </div>

        <div class="bg-white p-4 rounded-md mt-4">
            <h2 class="text-gray-500 text-lg font-semibold pb-4">Session 4</h2>
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-pink-300 to-pink-500 h-px mb-6"></div>
            <table class="w-full table-auto text-sm">
                <thead>
                    <tr class="text-sm leading-normal">
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                            Nombre</th>
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                            Fecha</th>
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">
                            Monto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Carlos Sánchez</td>
                        <td class="py-2 px-4 border-b border-grey-light">27/07/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">$1500</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Ana Torres</td>
                        <td class="py-2 px-4 border-b border-grey-light">28/07/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">$2000</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Juan Ramírez</td>
                        <td class="py-2 px-4 border-b border-grey-light">29/07/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">$1800</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">María Gómez</td>
                        <td class="py-2 px-4 border-b border-grey-light">30/07/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">$2100</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Luis González</td>
                        <td class="py-2 px-4 border-b border-grey-light">31/07/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">$1700</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Laura Pérez</td>
                        <td class="py-2 px-4 border-b border-grey-light">01/08/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">$2400</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Pedro Hernández</td>
                        <td class="py-2 px-4 border-b border-grey-light">02/08/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">$1950</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Sara Ramírez</td>
                        <td class="py-2 px-4 border-b border-grey-light">03/08/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">$1850</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Daniel Torres</td>
                        <td class="py-2 px-4 border-b border-grey-light">04/08/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">$2300</td>
                    </tr>

                </tbody>
            </table>
            <!-- Botón "Ver más" para la tabla de Transacciones -->
            <div class="text-right mt-4">
                <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                    Ver más
                </button>
            </div>
        </div>
    </div>
</div>
