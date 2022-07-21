<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">

            <a href="{{ route('admin.aboutus') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="" />
                @error('title')
                <div class="alert alert-danger mt-1 mb-1">
                    {{ $message }}
                </div>
                @enderror
                <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description" value="" />
                @error('desciption')
                <div class="alert alert-danger mt-1 mb-1">
                    {{ $message }}
                </div>
                @enderror
                <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image" value="" />
                @error('image')
                <div class="alert alert-danger mt-1 mb-1">
                    {{ $message }}
                </div>
                @enderror
                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-admin-layout>