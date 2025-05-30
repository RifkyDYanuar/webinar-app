<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-md font-semibold">Team Baru</h2>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('team.store') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="nama_team" :value="__('Nama Team')" />
                        <x-text-input id="nama_team" class="block mt-1 w-full" type="text" name="nama_team" :value="old('nama_team')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('nama_team')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                    
                        <x-primary-button class="ms-3">
                            {{ __('Tambah') }}
                        </x-primary-button>
                    </div>
                </form>
                </div>    
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-md font-semibold">Data Team</h2>
                </div>
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full  w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider ">
                                        Nama Team
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($data as $team)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100 text-center ">
                                            {{ $team->nama_team }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="">Detail</a>
                                            <a href="{{ route('team.edit', $team->id) }}" class="text-blue-600 dark:text-blue-400 hover:underline">{{ __('Edit') }}</a>
            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</x-app-layout>
