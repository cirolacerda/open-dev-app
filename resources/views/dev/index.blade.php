<!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search Devs ') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="/devs" method="POST">
                    @csrf

                    <div class="grid gap-6 mb-6 md:grid-cols-2">

                        <div>
                            <label for="type"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type:</label>
                            <select name="type" id="type"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">---Select Type---</option>
                                <option selected value="user">User</option>
                                <option value="org">Organization</option>
                            </select>
                        </div>

                        <div>
                            <label for="location"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location:</label>
                            <input type="text" value="Brazil" id="location" name="location"
                                placeholder="Location ex. Brazil"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="language"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Language:</label>
                            <input type="text" value="php" id="language" name="language" placeholder="Language"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <div>
                            <label for="repos"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repositories
                                >:</label>
                            <input type="number" value="30" id="repos" name="repos"
                                aria-describedby="helper-text-explanation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Number" required />
                        </div>

                        <div>
                            <label for="followers"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Followers
                                >:</label>
                            <input type="number" value="20" id="followers" name="followers"
                                aria-describedby="helper-text-explanation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Number" required />
                        </div>
                    </div>

                    <x-primary-button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Search
                    </x-primary-button>
                </form>


            </div>
        </div>
    </div>

    @if (isset($devs) && $devs->count())
        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">

                    @component('dev.components.list', [
                        'devs' => $devs,
                    ])
                    @endcomponent

                </div>
            </div>
        </div>
    @endif

</x-app-layout>
