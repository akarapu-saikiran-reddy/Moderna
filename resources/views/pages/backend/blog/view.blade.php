<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            Team
        </x-slot>
        <x-slot name="addbutton">
            <a href="{{ route('admin.blogs') }}">
                <x-backend.hit-button>
                    {{ __('Back ') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <x-backend.form.input type="text" placeholder="{{ $blog->title }}" label="Title" name="title" value="" />
        <x-backend.form.input type="text" placeholder="{{ $blog->description }}" label="Description" name="description" value="" />
        <img src="{{ asset('Upload/images/blog/' . $blog->image) }}" height="250px" width="250px" alt="">
    </x-backend.card>
</x-admin-layout>