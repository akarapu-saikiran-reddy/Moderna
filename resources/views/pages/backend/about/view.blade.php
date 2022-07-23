<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            about
        </x-slot>
        <x-slot name="addbutton">
            <a href="{{ route('admin.aboutus') }}">
                <x-backend.hit-button>
                    {{ __('Back ') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <x-backend.form.input type="text" placeholder="{{ $about->title }}" label="Title" name="title" value="" />
        <x-backend.form.input type="text" placeholder="{{ $about->description }}" label="Description" name="description" value="" />

        <div class="pl-8"> {{__('Image')}}
            <img src="{{ asset('Upload/images/about/' . $about->image) }}" height="350px" width="350px" alt="">
        </div>
    </x-backend.card>
</x-admin-layout>