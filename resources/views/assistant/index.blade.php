<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Assistants') }}
            </h2>
        </x-slot>



        <!-- Table -->
        <div class="overflow-x-auto">
            <div
                class="min-w-screen min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-800 font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    <div class="flex items-end justify-end">
                        <a href="{{ route('assistants.create') }}">
                            <x-primary-button>
                                {{ __('Create') }}
                            </x-primary-button>
                        </a>

                    </div>

                    <div class="bg-white dark:bg-gray-700 shadow-md rounded my-6">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr
                                    class="bg-gray-200 dark:bg-gray-500  text-gray-600 dark:text-gray-200 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">NAME</th>
                                    <th class="py-3 px-6 text-left">E-MAIL</th>
                                    <th class="py-3 px-6 text-center">STATUS</th>
                                    <th class="py-3 px-6 text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 dark:text-gray-200 text-sm font-light">
                                @foreach ($assistants as $assistant)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="font-medium">{{ $assistant->name }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left">
                                            <div class="flex items-center">
                                                <span>{{ $assistant->email }}</span>
                                            </div>
                                        </td>

                                        <td class="py-3 px-6 text-center">
                                            <span
                                                class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Active</span>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex item-center justify-center">
                                                <div class="w-4 mr-2 transform hover:text-green-500 hover:scale-110">
                                                    <a
                                                        href="{{ route('assistants.index', ['assistant' => $assistant->id]) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="w-4 mr-2 transform hover:text-green-500 hover:scale-110">
                                                    <a
                                                        href="{{ route('assistants.index', ['assistant' => $assistant->id]) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                                    <form id="form_{{ $assistant->id }}"
                                                        action="{{ route('assistants.destroy', ['assistant' => $assistant->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <label
                                                            onclick="document.getElementById('form_{{ $assistant->id }}').submit()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </label>

                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </x-app-layout>
</div>
