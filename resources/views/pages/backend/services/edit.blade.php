<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            servicess
        </x-slot>
        <x-slot name="addbutton" class="pl-5">
            <a href="{{ route('admin.services') }}">
                <x-backend.hit-button>
                    {{ __('Back') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <form action="{{ route('admin.services.update', $services->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="{{ $services->title }}" />
            <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description" value="{{ $services->description }}" />
            <img src="{{ asset('Upload/images/services/' . $services->image) }}" height="150px" width="150px" alt="">
            <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image" value="{{ asset('Upload/images/servicesp/' . $services->image) }}" />
            <x-backend.submit-button>
                {{ __('Update') }}
            </x-backend.submit-button>
        </form>
    </x-backend.card>
</x-admin-layout>