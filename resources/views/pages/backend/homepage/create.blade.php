<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="addbutton" class="pl-5">
            <a href="{{ route('admin.homepage') }}">
                <x-backend.hit-button>
                    {{ __('Back') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <form action="{{ route('admin.homepage.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="" />
            <h1>Description</h1>
            <textarea name="description" id="" cols="93" rows="1" class="border-blue-400 border-solid border-2 ml-6"></textarea>
            <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image" value="" />
            <x-backend.submit-button>
                {{ __('Save') }}
            </x-backend.submit-button>
        </form>
    </x-backend.card>
</x-admin-layout>