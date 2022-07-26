<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            Teams
        </x-slot>
        <x-slot name="addbutton" class="pl-5">
            <a href="{{ route('admin.portfolio') }}">
                <x-backend.hit-button>
                    {{ __('Back') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <img src="{{ asset('Upload/images/portfolio/app/' . $portfolio->app) }}" height="150px" width="150px" alt="">
        <img src="{{ asset('Upload/images/portfolio/web/' . $portfolio->web) }}" height="150px" width="150px" alt="">
        <img src="{{ asset('Upload/images/portfolio/card/' . $portfolio->card) }}" height="150px" width="150px" alt="">
        </form>
    </x-backend.card>
</x-admin-layout>