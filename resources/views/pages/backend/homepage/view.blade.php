<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            Homepage
        </x-slot>
        <x-slot name="addbutton">
            <a href="{{ route('admin.homepage') }}">
                <x-backend.hit-button>
                    {{ __('Back ') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <x-backend.form.input type="text" placeholder="{{ $home->title }}" label="Title" name="title" value="" />
        <x-backend.form.input type="text" placeholder="{{ $home->description }}" label="Description" name="description" value="" />
        <div class="pl-8"> {{__('Image')}}
            <img src="{{ asset('Upload/images/homepage/'.$home->image) }}" height="350px" width="350px" alt="">
        </div>
    </x-backend.card>
</x-admin-layout>