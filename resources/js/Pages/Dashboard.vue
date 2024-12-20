<script setup>
import { Link } from "@inertiajs/vue3";
const props = defineProps({
    user: Object,
});
</script>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
    layout: AppLayout,
};
</script>

<template>
    <div class="flex flex-col gap-12">
        <div class="flex flex-col w-full">
            <h1 class="text-3xl font-bold">Cześć, {{ user.name }}!</h1>
            <div>
                <dl
                    class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4"
                >
                    <div
                        class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6"
                    >
                        <dt>
                            <div
                                class="absolute rounded-md bg-blue-500 p-3 size-12 flex justify-center items-center"
                            >
                                <i
                                    class="fa-solid fa-file text-2xl text-white"
                                ></i>
                            </div>
                            <p
                                class="ml-16 truncate text-sm font-medium text-gray-500"
                            >
                                Dokumenty
                            </p>
                        </dt>
                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                            <p class="text-xl font-semibold text-gray-900">
                                56 plików
                            </p>
                            <div
                                class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6"
                            >
                                <div class="text-sm">
                                    <Link
                                        href="#"
                                        class="font-medium text-indigo-600 hover:text-indigo-500"
                                        >Wszystkie pliki</Link
                                    >
                                </div>
                            </div>
                        </dd>
                    </div>
                    <div
                        class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6"
                    >
                        <dt>
                            <div
                                class="absolute rounded-md bg-orange-500 p-3 size-12 flex justify-center items-center"
                            >
                                <i
                                    class="fa-solid fa-file-audio text-2xl text-white"
                                ></i>
                            </div>
                            <p
                                class="ml-16 truncate text-sm font-medium text-gray-500"
                            >
                                Muzyka
                            </p>
                        </dt>
                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                            <p class="text-xl font-semibold text-gray-900">
                                12 plików
                            </p>

                            <div
                                class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6"
                            >
                                <div class="text-sm">
                                    <a
                                        href="#"
                                        class="font-medium text-indigo-600 hover:text-indigo-500"
                                        >Wszystkie pliki</a
                                    >
                                </div>
                            </div>
                        </dd>
                    </div>
                    <div
                        class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6"
                    >
                        <dt>
                            <div
                                class="absolute rounded-md bg-purple-500 p-3 size-12 flex justify-center items-center"
                            >
                                <i
                                    class="fa-solid fa-image text-2xl text-white"
                                ></i>
                            </div>
                            <p
                                class="ml-16 truncate text-sm font-medium text-gray-500"
                            >
                                Zdjęcia
                            </p>
                        </dt>
                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                            <p class="text-xl font-semibold text-gray-900">
                                500 plików
                            </p>

                            <div
                                class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6"
                            >
                                <div class="text-sm">
                                    <a
                                        href="#"
                                        class="font-medium text-indigo-600 hover:text-indigo-500"
                                        >Wszystkie pliki</a
                                    >
                                </div>
                            </div>
                        </dd>
                    </div>
                    <div
                        class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6"
                    >
                        <dt>
                            <div
                                class="absolute rounded-md bg-pink-500 p-3 size-12 flex justify-center items-center"
                            >
                                <i
                                    class="fa-solid fa-film text-2xl text-white"
                                ></i>
                            </div>
                            <p
                                class="ml-16 truncate text-sm font-medium text-gray-500"
                            >
                                Filmy
                            </p>
                        </dt>
                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                            <p class="text-xl font-semibold text-gray-900">
                                4 pliki
                            </p>

                            <div
                                class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6"
                            >
                                <div class="text-sm">
                                    <a
                                        href="#"
                                        class="font-medium text-indigo-600 hover:text-indigo-500"
                                        >Wszystkie pliki</a
                                    >
                                </div>
                            </div>
                        </dd>
                    </div>
                </dl>
            </div>
            <div class="flex flex-col gap-3 mt-12">
                <h2 class="text-2xl font-bold">Ostatnie pliki</h2>
                <div>
                    <div class="flow-root overflow-hidden">
                        <div class="w-full">
                            <table class="w-full text-left">
                                <thead class="bg-white">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="relative isolate py-3.5 pr-3 text-left text-sm font-semibold text-gray-900"
                                        >
                                            Nazwa
                                            <div
                                                class="absolute inset-y-0 right-full -z-10 w-screen border-b border-b-gray-200"
                                            ></div>
                                            <div
                                                class="absolute inset-y-0 left-0 -z-10 w-screen border-b border-b-gray-200"
                                            ></div>
                                        </th>
                                        <th
                                            scope="col"
                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell"
                                        >
                                            Data utworzenia
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                        >
                                            Rozmiar
                                        </th>
                                        <th
                                            scope="col"
                                            class="relative py-3.5 pl-3"
                                        >
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td
                                            class="relative py-4 pr-3 text-sm font-medium text-gray-900"
                                        >
                                            <div
                                                class="flex items-center gap-1"
                                            >
                                                <div
                                                    class="w-5 flex justify-center items-center"
                                                >
                                                    <i
                                                        class="fa-solid fa-file text-base text-blue-600"
                                                    ></i>
                                                </div>
                                                Lista obecności
                                            </div>

                                            <div
                                                class="absolute bottom-0 right-full h-px w-screen bg-gray-100"
                                            ></div>
                                            <div
                                                class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"
                                            ></div>
                                        </td>
                                        <td
                                            class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell"
                                        >
                                            20 gru 2024
                                        </td>

                                        <td
                                            class="px-3 py-4 text-sm text-gray-500"
                                        >
                                            2 MB
                                        </td>
                                        <td
                                            class="relative py-4 pl-3 text-right text-sm font-medium"
                                        >
                                            <a
                                                href="#"
                                                class="text-indigo-600 hover:text-indigo-900 mr-3"
                                                >Pobierz<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></a
                                            >
                                            <a
                                                href="#"
                                                class="text-red-600 hover:text-red-700"
                                                >Usuń<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></a
                                            >
                                        </td>
                                    </tr>

                                    <tr>
                                        <td
                                            class="relative py-4 pr-3 text-sm font-medium text-gray-900"
                                        >
                                            <div
                                                class="flex items-center gap-1"
                                            >
                                                <div
                                                    class="w-5 flex justify-center items-center"
                                                >
                                                    <i
                                                        class="fa-solid fa-sheet-plastic text-base text-green-600"
                                                    ></i>
                                                </div>
                                                Wypłaty pracowników
                                            </div>

                                            <div
                                                class="absolute bottom-0 right-full h-px w-screen bg-gray-100"
                                            ></div>
                                            <div
                                                class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"
                                            ></div>
                                        </td>
                                        <td
                                            class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell"
                                        >
                                            21 gru 2024
                                        </td>

                                        <td
                                            class="px-3 py-4 text-sm text-gray-500"
                                        >
                                            450 KB
                                        </td>
                                        <td
                                            class="relative py-4 pl-3 text-right text-sm font-medium"
                                        >
                                            <a
                                                href="#"
                                                class="text-indigo-600 hover:text-indigo-900 mr-3"
                                                >Pobierz<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></a
                                            >
                                            <a
                                                href="#"
                                                class="text-red-600 hover:text-red-700"
                                                >Usuń<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></a
                                            >
                                        </td>
                                    </tr>

                                    <tr>
                                        <td
                                            class="relative py-4 pr-3 text-sm font-medium text-gray-900"
                                        >
                                            <div
                                                class="flex items-center gap-1"
                                            >
                                                <div
                                                    class="w-5 flex justify-center items-center"
                                                >
                                                    <i
                                                        class="fa-solid fa-file-pdf text-base text-red-600"
                                                    ></i>
                                                </div>
                                                Umowa o pracę
                                            </div>

                                            <div
                                                class="absolute bottom-0 right-full h-px w-screen bg-gray-100"
                                            ></div>
                                            <div
                                                class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"
                                            ></div>
                                        </td>
                                        <td
                                            class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell"
                                        >
                                            22 gru 2024
                                        </td>

                                        <td
                                            class="px-3 py-4 text-sm text-gray-500"
                                        >
                                            3 MB
                                        </td>
                                        <td
                                            class="relative py-4 pl-3 text-right text-sm font-medium"
                                        >
                                            <a
                                                href="#"
                                                class="text-indigo-600 hover:text-indigo-900 mr-3"
                                                >Pobierz<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></a
                                            >
                                            <a
                                                href="#"
                                                class="text-red-600 hover:text-red-700"
                                                >Usuń<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></a
                                            >
                                        </td>
                                    </tr>

                                    <tr>
                                        <td
                                            class="relative py-4 pr-3 text-sm font-medium text-gray-900"
                                        >
                                            <div
                                                class="flex items-center gap-1"
                                            >
                                                <div
                                                    class="w-5 flex justify-center items-center"
                                                >
                                                    <i
                                                        class="fa-solid fa-image text-base text-purple-600"
                                                    ></i>
                                                </div>
                                                Zdjęcie z wakacji
                                            </div>

                                            <div
                                                class="absolute bottom-0 right-full h-px w-screen bg-gray-100"
                                            ></div>
                                            <div
                                                class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"
                                            ></div>
                                        </td>
                                        <td
                                            class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell"
                                        >
                                            23 gru 2024
                                        </td>

                                        <td
                                            class="px-3 py-4 text-sm text-gray-500"
                                        >
                                            7 MB
                                        </td>
                                        <td
                                            class="relative py-4 pl-3 text-right text-sm font-medium"
                                        >
                                            <a
                                                href="#"
                                                class="text-indigo-600 hover:text-indigo-900 mr-3"
                                                >Pobierz<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></a
                                            >
                                            <a
                                                href="#"
                                                class="text-red-600 hover:text-red-700"
                                                >Usuń<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></a
                                            >
                                        </td>
                                    </tr>

                                    <tr>
                                        <td
                                            class="relative py-4 pr-3 text-sm font-medium text-gray-900"
                                        >
                                            <div
                                                class="flex items-center gap-1"
                                            >
                                                <div
                                                    class="w-5 flex justify-center items-center"
                                                >
                                                    <i
                                                        class="fa-solid fa-file-zipper text-base text-yellow-600"
                                                    ></i>
                                                </div>
                                                Paczka ikon
                                            </div>

                                            <div
                                                class="absolute bottom-0 right-full h-px w-screen bg-gray-100"
                                            ></div>
                                            <div
                                                class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"
                                            ></div>
                                        </td>
                                        <td
                                            class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell"
                                        >
                                            23 gru 2024
                                        </td>

                                        <td
                                            class="px-3 py-4 text-sm text-gray-500"
                                        >
                                            30 MB
                                        </td>
                                        <td
                                            class="relative py-4 pl-3 text-right text-sm font-medium"
                                        >
                                            <a
                                                href="#"
                                                class="text-indigo-600 hover:text-indigo-900 mr-3"
                                                >Pobierz<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></a
                                            >
                                            <a
                                                href="#"
                                                class="text-red-600 hover:text-red-700"
                                                >Usuń<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></a
                                            >
                                        </td>
                                    </tr>

                                    <tr
                                        v-for="upload in uploads"
                                        :key="upload.id"
                                    >
                                        <td
                                            class="relative py-4 pr-3 text-sm font-medium text-gray-900"
                                        >
                                            <div
                                                class="flex items-center gap-1"
                                            >
                                                <div
                                                    class="w-5 flex justify-center items-center"
                                                >
                                                    <i
                                                        class="fa-solid fa-music text-base text-orange-600"
                                                    ></i>
                                                </div>
                                                {{ upload.file_name }}
                                            </div>

                                            <div
                                                class="absolute bottom-0 right-full h-px w-screen bg-gray-100"
                                            ></div>
                                            <div
                                                class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"
                                            ></div>
                                        </td>
                                        <td
                                            class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell"
                                        >
                                            20 gru 2024
                                        </td>

                                        <td
                                            class="px-3 py-4 text-sm text-gray-500"
                                        >
                                            {{ upload.file_size }}
                                        </td>
                                        <td
                                            class="relative py-4 pl-3 text-right text-sm font-medium"
                                        >
                                            <a
                                                href="#"
                                                class="text-indigo-600 hover:text-indigo-900 mr-3"
                                                >Pobierz<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></a
                                            >
                                            <a
                                                href="#"
                                                class="text-red-600 hover:text-red-700"
                                                >Usuń<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></a
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
