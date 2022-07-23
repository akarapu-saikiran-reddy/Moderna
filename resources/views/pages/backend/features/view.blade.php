<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            features
        </x-slot>
        <x-slot name="addbutton">
            <a href="{{ route('admin.features') }}">
                <x-backend.hit-button>
                    {{ __('Back ') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <x-backend.form.input type="text" placeholder="{{ $features->title }}" label="Title" name="title" value="" />
        <x-backend.form.input type="text" placeholder="{{ $features->logo }}" label="logo" name="logo" value="" />
        <x-backend.form.input type="text" placeholder="{{ $features->description }}" label="Description" name="description" value="" />
    </x-backend.card>
</x-admin-layout>