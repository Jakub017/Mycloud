<script setup></script>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
    layout: AppLayout,
};
</script>

<template>
    <div class="bg-white">
        <div class="w-full">
            <div class="w-full">
                <h1 class="text-3xl font-bold text-center">
                    Porównaj nasze plany cenowe
                </h1>
            </div>
            <p class="mt-4 text-base leading-8 text-gray-600 text-center">
                Zyskaj więcej miejsca na dane dzięki pakietowi w korzystnej
                cenie.
            </p>
            <div class="mt-4 flex justify-center">
                <fieldset
                    class="grid grid-cols-2 gap-x-1 rounded-full p-1 text-center text-xs font-semibold leading-5 ring-1 ring-inset ring-gray-200"
                >
                    <legend class="sr-only">Payment frequency</legend>
                    <!-- Checked: "bg-indigo-600 text-white", Not Checked: "text-gray-500" -->
                    <label
                        class="cursor-pointer rounded-full px-2.5 py-1 bg-indigo-600 text-white"
                    >
                        <input
                            type="radio"
                            name="frequency"
                            value="monthly"
                            class="sr-only"
                        />
                        <span>Miesięcznie</span>
                    </label>
                    <!-- Checked: "bg-indigo-600 text-white", Not Checked: "text-gray-500" -->
                    <label class="cursor-pointer rounded-full px-2.5 py-1">
                        <input
                            type="radio"
                            name="frequency"
                            value="annually"
                            class="sr-only"
                        />
                        <span>Rocznie</span>
                    </label>
                </fieldset>
            </div>
            <div
                class="isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-2 xl:grid-cols-4"
            >
                <div class="rounded-3xl p-8 xl:p-7 ring-1 ring-gray-200">
                    <div class="flex items-center justify-between gap-x-4">
                        <h3
                            id="tier-freelancer"
                            class="text-lg font-semibold leading-8 text-gray-900"
                        >
                            10 GB
                        </h3>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-gray-600">
                        The essentials to provide your best work for clients.
                    </p>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <!-- Price, update based on frequency toggle state -->
                        <span
                            class="text-4xl font-bold tracking-tight text-gray-900"
                            >$15</span
                        >
                        <!-- Payment frequency, update based on frequency toggle state -->
                        <span
                            class="text-sm font-semibold leading-6 text-gray-600"
                            >/month</span
                        >
                    </p>
                    <a
                        href="#"
                        aria-describedby="tier-freelancer"
                        class="mt-6 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300"
                        >Buy plan</a
                    >
                    <ul
                        role="list"
                        class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10"
                    >
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Maksymalny rozmiar pliku: 100 MB
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Up to 1,000 subscribers
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Basic analytics
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            48-hour support response time
                        </li>
                    </ul>
                </div>

                <div class="rounded-3xl p-8 xl:p-7 ring-1 ring-gray-200">
                    <div class="flex items-center justify-between gap-x-4">
                        <h3
                            id="tier-enterprise"
                            class="text-lg font-semibold leading-8 text-gray-900"
                        >
                            20 GB
                        </h3>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-gray-600">
                        Dedicated support and infrastructure for your company.
                    </p>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <!-- Price, update based on frequency toggle state -->
                        <span
                            class="text-4xl font-bold tracking-tight text-gray-900"
                            >$60</span
                        >
                        <!-- Payment frequency, update based on frequency toggle state -->
                        <span
                            class="text-sm font-semibold leading-6 text-gray-600"
                            >/month</span
                        >
                    </p>
                    <a
                        href="#"
                        aria-describedby="tier-enterprise"
                        class="mt-6 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300"
                        >Wybieram</a
                    >
                    <ul
                        role="list"
                        class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10"
                    >
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Maksymalny rozmiar pliku: 500 MB
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Unlimited subscribers
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Advanced analytics
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            1-hour, dedicated support response time
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Marketing automations
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Custom reporting tools
                        </li>
                    </ul>
                </div>
                <div class="rounded-3xl p-8 xl:p-7 ring-2 ring-indigo-600">
                    <div class="flex items-center justify-between gap-x-4">
                        <h3
                            id="tier-startup"
                            class="text-lg font-semibold leading-8 text-indigo-600"
                        >
                            30 GB
                        </h3>
                        <p
                            class="rounded-full bg-indigo-600/10 px-2.5 py-1 text-xs font-semibold leading-5 text-indigo-600"
                        >
                            Najpopulniejszy
                        </p>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-gray-600">
                        A plan that scales with your rapidly growing business.
                    </p>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <!-- Price, update based on frequency toggle state -->
                        <span
                            class="text-4xl font-bold tracking-tight text-gray-900"
                            >50 zł</span
                        >
                        <!-- Payment frequency, update based on frequency toggle state -->
                        <span
                            class="text-sm font-semibold leading-6 text-gray-600"
                            >/miesiąc</span
                        >
                    </p>
                    <a
                        href="#"
                        aria-describedby="tier-startup"
                        class="mt-6 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-600 text-white shadow-sm hover:bg-indigo-500"
                        >Wybieram</a
                    >
                    <ul
                        role="list"
                        class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10"
                    >
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Maksymalny rozmiar pliku: 1 GB
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Up to 10,000 subscribers
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Advanced analytics
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            24-hour support response time
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Marketing automations
                        </li>
                    </ul>
                </div>
                <div class="rounded-3xl p-8 xl:p-7 ring-1 ring-gray-200">
                    <div class="flex items-center justify-between gap-x-4">
                        <h3
                            id="tier-enterprise"
                            class="text-lg font-semibold leading-8 text-gray-900"
                        >
                            40 GB
                        </h3>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-gray-600">
                        Dedicated support and infrastructure for your company.
                    </p>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <!-- Price, update based on frequency toggle state -->
                        <span
                            class="text-4xl font-bold tracking-tight text-gray-900"
                            >$60</span
                        >
                        <!-- Payment frequency, update based on frequency toggle state -->
                        <span
                            class="text-sm font-semibold leading-6 text-gray-600"
                            >/month</span
                        >
                    </p>
                    <a
                        href="#"
                        aria-describedby="tier-enterprise"
                        class="mt-6 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300"
                        >Buy plan</a
                    >
                    <ul
                        role="list"
                        class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10"
                    >
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Brak limitu rozmiaru pliku
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Unlimited subscribers
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Advanced analytics
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            1-hour, dedicated support response time
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Marketing automations
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-indigo-600"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Custom reporting tools
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
