<x-admin-layout>
    <x-backend.card>
        <x-slot name="title">
        </x-slot>
        <x-slot name="addbutton">
            <a href="{{ route('admin.team.create') }}">
                <x-backend.hit-button>
                    {{ __('Add ') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <div class="container flex justify-center mx-auto w-full  ">
            <div class="flex flex-col ">
                <div class="w-full  ">
                    <div>
                        <table>
                            <thead class="bg-blue-600 w-full ">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-200 text-center" width="80">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-200" width="200">
                                        Title </th>
                                    <th class="px-6 py-2 text-xs text-gray-200 overflow:hidden" width="auto">
                                        Description
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-200" width="100">
                                        Logo </th>
                                    <th class="px-6 py-2 text-xs text-gray-200" width="240">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-blue-100">
                                @foreach ($item as $items)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-2 text-sm text-gray-700">
                                        {{ $items->id }}
                                    </td>
                                    <td class="px-6 py-2">
                                        <div class="text-sm text-gray-700 overflow-hidden">
                                            {{ $items->title }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-2">
                                        <div class="text-sm text-gray-700 overflow-hidden">
                                            <p>{{ $items->description }}</p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-2 text-sm text-gray-700">
                                        {!! $items->logo !!}
                                    </td>
                                    <td class="px-6 py-2">
                                        <a href="{{ route('admin.service-cards.view', $items->id) }}" class="px-4 py-1 text-sm text-white  rounded">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAACWUlEQVRIie2UvU9TURjGf+9tKSGyaChRg5FBXExcBCPE0t5o4uBHcSgohH8CEyFgMIGIdMG/wJhI1JoOtMrioL2AwaE6aOIkCSQYYsCPQRKptvd1oNb29obiYFh4lnvv857n456cHNjFTkO2Gp6bj+zL/PJcRjUMHAEO5UfLwIKIJnxVmnjWFv/6TwGt85Ga6oxcQ6QfqK1Qch1hPFNlT7xqi/+oGBBK9TRg5BKonqhgXAKFdyp2x2wwvljMG8UfZ+a6jiLZdJm5kBTbDvkyvlpfxleLigk8dTQ9bqgx3z7T3eT6B4HZiN9jG2ngcKm5DFjBWNSttWldGVT0loNeQo0Wy3z0GcD7h/Wo3Cs3J2kFY9HI+4hvdc0YFbRXERXVSX+9DsePxcZCVlcrcKFI1aiSuwuEC1tkvugKo3Le2VBy9h2AtVUZEbgOckDgICL9a6syAqDoRJkOuRS0Oi8WAtTgttsWqPBm8ym95bNNLuvdeO2mBRkvBPxPGAAiMuA+9jQDiOqkcyLCfYDq3J4WN6Uo/YWAVDD2BMexy6/qA/DX6zCqUYUVhRVUo/46+yaATa6vXEfSMh9Pb77mEUpdrUPsNNBYulaGUqHYmFvLUKrzBiKjDnrRk/3Z8vzs1JeSAID2me4mQ3OzwH6HaFrRCVFNAxiG96RNrs/l5H1C7YBlxhf+Fixr1dOAZKeAZrfWW+AtKh2WGVsqJstOkWU++IjWBAQZAta3Yfxd0UG05pTTHCpc16fnuvd6s3YYQztUaZL8da2wLMIHbElkvUbyZeDht20U2cUO4TcaMNaWMv1vRAAAAABJRU5ErkJggg==">
                                        </a>
                                    </td>
                                    <td class="px-6 py-2">
                                        <a href="{{ route('admin.service-cards.edit', $items->id) }}" class="px-4 py-1 text-sm text-white  rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" viewBox="0 0 64 64" style=" fill:#228BE6;">
                                                <path d="M22 51c-1-1-4-1-4-1l-.425-1.274c-.362-1.086-1.215-1.939-2.301-2.301L14 46c0 0 .5-2.5-1-4l25-25 8 10L22 51zM52 21l-9-9 4.68-4.68c0 0 3.5-1.5 7 2s2 7 2 7L52 21zM9 50l-1.843 4.476c-.614 1.49.877 2.981 2.367 2.367L14 55 9 50z"></path>
                                            </svg></a>
                                    </td>
                                    <td class="px-6 py-2">
                                        <a href="{{ route('admin.service-cards.delete', $items->id) }}" class="px-4 py-1 text-sm text-white  rounded" onclick="return confirm('Are You Sure Do You Want To Delete This User?');">
                                            <span x-on:click="open = true">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAAA5UlEQVRYhe2WQQ6CMBBF/wDBM8hV9BAy7L2AF3BnPATucS/xEF4F7mAhjBtZ2ARLK5EY+3eTdn5f/iymgNe/i1ya7lm2gciJgKVmVndEu8Xlch3rFbgABCK5/jgACJAEIrmNV+QCIEACAHFZviSomKU/G6u3I1DMYo83LB0YcBzBV6WY5ZMkTP2zJ/B7AHqkpnpygKnlATyAB/AAswNYf0j0nW6qTZo9ASMAATUANMwrW/MmTddPj2rojnEEnciZiPYC3BSzFUC/EjugcAaIo+ig2hYB0dbhw1l1QBGH4dGmz+u/9ACiA0+zGseYwQAAAABJRU5ErkJggg==">
                                        </a>
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