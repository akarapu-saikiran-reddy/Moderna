<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">

            <a href="{{ route('admin.homepage') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.homepage.update', $home->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="{{ $home->title }}" />
                <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description" value="{{ $home->description }}" />
                <img src="{{ asset('Upload/images/homepage/' . $home->image) }}" height="150px" width="150px" alt="">
                <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image" value="{{ asset('Upload/images/homepage/' . $home->image) }}" />
                <x-backend.submit-button>
                    {{ __('Update') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-admin-layout>