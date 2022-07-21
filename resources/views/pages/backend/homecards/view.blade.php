<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">

            <a href="{{ route('admin.homecards') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <x-backend.form.input type="text" placeholder="{{ $homecards->title }}" label="Title" name="title"
                value="" />
            <x-backend.form.input type="text" placeholder="{{ $homecards->description }}" label="Description"
                name="description" value="" />
            <x-backend.form.input type="text" placeholder="{{ $homecards->logo }}" label="Description"
                name="description" value="" />

        </x-slot>
    </x-backend.card>
    </x-app-layout>
