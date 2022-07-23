<x-admin-layout>
    <x-backend.card>
        <x-slot name="title">
        </x-slot>
        <x-slot name="addbutton">
            <a href="{{ route('admin.contactus.create') }}">
                <x-backend.hit-button>
                    {{ __('Add ') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <div class="container flex justify-center mx-auto w-full ">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="border border-gray-900 shadow">
                        <table>
                            <thead class=" w-full rounded-lg shadow-lg">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-200 text-center" width="80">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-200" width="150">
                                        Name </th>
                                    <th class="px-6 py-2 text-xs text-gray-200 overflow:hidden" width="auto">
                                        Email
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-200" width="200">
                                        Subject </th>
                                    <th class="px-6 py-2 text-xs text-gray-200" width="300">
                                        Message </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($item as $items)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6  text-sm text-gray-900">
                                        {{ $items->id }}
                                    </td>
                                    <td class="px-6  text-sm text-gray-900">
                                        {{ $items->name }}
                                    </td>
                                    <td class="px-6 ">
                                        <div class="text-sm text-gray-900 overflow-hidden">
                                            {{ $items->email }}
                                        </div>
                                    </td>
                                    <td class="px-6 ">
                                        <div class="text-sm text-gray-900 overflow-hidden">
                                            <p>{{ $items->subject }}</p>
                                        </div>
                                    </td>
                                    <td class="px-6 ">
                                        <div class="text-sm text-gray-900 overflow-hidden">
                                            <p>{{ $items->message }}</p>
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
    </x-backend.card>
</x-admin-layout>