<script setup>
import { Link, useForm } from "@inertiajs/vue3";
const props = defineProps({
    uploads: Array,
});

const form = useForm({
    file: null,
});

const handleFileUpload = (event) => {
    form.file = event.target.files[0];

    if (form.file) {
        store();
    }
};

const store = () => form.post(route("drive.store"));

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

const formatDate = (date) => {
    return new Date(date).toLocaleDateString("pl-PL");
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
        <div class="flex flex-col gap-3">
            <h1 class="text-3xl font-bold">Mój dysk</h1>
            <form
                id="uploadForm"
                class="w-full"
                enctype="multipart/form-data"
                @submit.prevent="store"
            >
                <div
                    class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10"
                >
                    <div class="text-center">
                        <i
                            class="fa-solid fa-upload text-4xl text-gray-400 group-hover:text-indigo-600"
                        ></i>
                        <div class="mt-4 flex text-sm/6 text-gray-600">
                            <label
                                for="file-upload"
                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500"
                            >
                                <span>Wybierz plik z urządzenia</span>
                                <input
                                    id="file-upload"
                                    @change="handleFileUpload"
                                    type="file"
                                    class="sr-only"
                                />
                            </label>
                            <p class="pl-1">lub przeciągnij i upuść</p>
                        </div>
                        <p class="text-xs/5 text-gray-600">
                            .png, .jpeg, .jpg, .pdf, .docx, .mp4, .mp3, .zip,
                            .rar do 50MB
                        </p>
                    </div>
                </div>
            </form>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="text-2xl font-bold">Twoje pliki</h2>
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
                                <!--
                                <tr>
                                    <td
                                        class="relative py-4 pr-3 text-sm font-medium text-gray-900"
                                    >
                                        <div class="flex items-center gap-1">
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

                                    <td class="px-3 py-4 text-sm text-gray-500">
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
                                        <div class="flex items-center gap-1">
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

                                    <td class="px-3 py-4 text-sm text-gray-500">
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
                                        <div class="flex items-center gap-1">
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

                                    <td class="px-3 py-4 text-sm text-gray-500">
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
                                        <div class="flex items-center gap-1">
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

                                    <td class="px-3 py-4 text-sm text-gray-500">
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
                                        <div class="flex items-center gap-1">
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

                                    <td class="px-3 py-4 text-sm text-gray-500">
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

                                <tr>
                                    <td
                                        class="relative py-4 pr-3 text-sm font-medium text-gray-900"
                                    >
                                        <div class="flex items-center gap-1">
                                            <div
                                                class="w-5 flex justify-center items-center"
                                            >
                                                <i
                                                    class="fa-solid fa-file-video text-base text-pink-600"
                                                ></i>
                                            </div>
                                            Poradnik programowania w Laravelu
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

                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        450 MB
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
                                        <div class="flex items-center gap-1">
                                            <div
                                                class="w-5 flex justify-center items-center"
                                            >
                                                <i
                                                    class="fa-solid fa-file-audio text-base text-orange-600"
                                                ></i>
                                            </div>
                                            The Weeknd - Timeless
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
                                        24 gru 2024
                                    </td>

                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        15 MB
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
                                -->

                                <tr
                                    v-for="upload in uploads"
                                    :key="upload.id"
                                    class="hover:bg-gray-50"
                                >
                                    <td
                                        class="relative py-4 pr-3 text-sm font-medium text-gray-900"
                                    >
                                        <div class="flex items-center gap-1">
                                            <div
                                                class="w-5 flex justify-center items-center"
                                            >
                                                <i
                                                    class="fa-solid text-base"
                                                    :class="{
                                                        'fa-file-pdf text-red-600':
                                                            upload.file_type ===
                                                            'application/pdf',
                                                        'fa-file text-blue-600':
                                                            [
                                                                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                                                'application/msword',
                                                            ].includes(
                                                                upload.file_type
                                                            ),
                                                        'fa-sheet-plastic text-green-600':
                                                            [
                                                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                                                'application/vnd.ms-excel',
                                                            ].includes(
                                                                upload.file_type
                                                            ),
                                                        'fa-image text-purple-600':
                                                            [
                                                                'image/jpeg',
                                                                'image/png',
                                                                'image/jpg',
                                                            ].includes(
                                                                upload.file_type
                                                            ),
                                                        'fa-file-video text-pink-600':
                                                            upload.file_type ===
                                                            'video/mp4',
                                                        'fa-file-audio text-orange-600':
                                                            upload.file_type ===
                                                            'audio/mpeg',
                                                        'fa-file-zipper text-yellow-600':
                                                            [
                                                                'application/zip',
                                                                'application/x-rar-compressed',
                                                            ].includes(
                                                                upload.file_type
                                                            ),
                                                    }"
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
                                        {{ formatDate(upload.created_at) }}
                                    </td>

                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        {{ formatFileSize(upload.file_size) }}
                                    </td>
                                    <td
                                        class="relative py-4 pl-3 text-right text-sm font-medium"
                                    >
                                        <a
                                            download
                                            href="{{ Storage::url($upload->file_path) }}"
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
</template>
