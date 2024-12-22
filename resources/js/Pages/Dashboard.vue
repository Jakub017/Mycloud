<script setup>
import { Link } from "@inertiajs/vue3";
const props = defineProps({
    user: Object,
    files: Array,
    documentsCount: Number,
    musicCount: Number,
    photosCount: Number,
    videosCount: Number,
});

const formatDate = (date) => {
    return new Date(date).toLocaleDateString("pl-PL");
};

const formatFileSize = (size) => {
    const calculatedSize = size / 1000 / 1000;

    if (calculatedSize > 1000) {
        return (calculatedSize / 1000).toFixed(1) + " GB";
    } else if (calculatedSize >= 1) {
        return calculatedSize.toFixed(1) + " MB";
    } else {
        return (calculatedSize * 1000).toFixed(0) + " KB";
    }
};

const pluralize = (count) => {
    if (count === 0) {
        return count + " plików";
    } else if (count === 1) {
        return count + " plik";
    } else if (count === 2 || count === 3 || count === 4) {
        return count + " pliki";
    } else {
        return count + " plików";
    }
};
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
                                {{ pluralize(documentsCount) }}
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
                                {{ pluralize(musicCount) }}
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
                                {{ pluralize(photosCount) }}
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
                                {{ pluralize(videosCount) }}
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
                                    <tr
                                        v-for="file in files"
                                        :key="file.id"
                                        class="hover:bg-gray-50"
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
                                                        class="fa-solid text-base"
                                                        :class="{
                                                            'fa-file-pdf text-red-600':
                                                                file.file_type ===
                                                                'application/pdf',
                                                            'fa-file text-blue-600':
                                                                [
                                                                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                                                    'application/msword',
                                                                ].includes(
                                                                    file.file_type
                                                                ),
                                                            'fa-sheet-plastic text-green-600':
                                                                [
                                                                    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                                                    'application/vnd.ms-excel',
                                                                ].includes(
                                                                    file.file_type
                                                                ),
                                                            'fa-image text-purple-600':
                                                                [
                                                                    'image/jpeg',
                                                                    'image/png',
                                                                    'image/jpg',
                                                                ].includes(
                                                                    file.file_type
                                                                ),
                                                            'fa-file-video text-pink-600':
                                                                file.file_type ===
                                                                'video/mp4',
                                                            'fa-file-audio text-orange-600':
                                                                file.file_type ===
                                                                'audio/mpeg',
                                                            'fa-file-zipper text-yellow-600':
                                                                [
                                                                    'application/zip',
                                                                    'application/x-rar-compressed',
                                                                ].includes(
                                                                    file.file_type
                                                                ),
                                                        }"
                                                    ></i>
                                                </div>
                                                {{ file.file_name }}
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
                                            {{ formatDate(file.created_at) }}
                                        </td>

                                        <td
                                            class="px-3 py-4 text-sm text-gray-500"
                                        >
                                            {{ formatFileSize(file.file_size) }}
                                        </td>
                                        <td
                                            class="relative py-4 pl-3 text-right text-sm font-medium"
                                        >
                                            <Link
                                                :href="file.file_path"
                                                download
                                                class="text-indigo-600 hover:text-indigo-900 mr-3"
                                                >Pobierz<span class="sr-only"
                                                    >, Lindsay Walton</span
                                                ></Link
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
