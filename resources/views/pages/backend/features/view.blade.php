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
        <x-backend.form.inputdisabled type="text" placeholder="{{ $features->title }}" label="Title" name="title" value="" />
        <div class="pl-8"> {{__('Image')}}
            <img src="{{ asset('Upload/images/feature/' . $features->image) }}" height="350px" width="350px" alt="">
        </div>
        <x-backend.form.inputdisabled type="text" placeholder="{{ $features->description }}" label="Description" name="description" value="" />
    </x-backend.card>
</x-admin-layout>