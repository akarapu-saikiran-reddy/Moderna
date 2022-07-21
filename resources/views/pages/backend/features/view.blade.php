<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">

            <a href="{{ route('admin.features') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <x-backend.form.input type="text" placeholder="{{ $features->title }}" label="Title" name="title" value="" />
            <x-backend.form.input type="text" placeholder="{{ $features->description }}" label="Description" name="description" value="" />
            <x-backend.form.input type="text" placeholder="{{ $features->logo }}" label="Description" name="description" value="" />

        </x-slot>
    </x-backend.card>
</x-admin-layout>