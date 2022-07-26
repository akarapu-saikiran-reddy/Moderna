<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            Home
        </x-slot>
        <x-slot name="addbutton" class="pl-5">
            <a href="{{ route('admin.homepage') }}">
                <x-backend.hit-button>
                    {{ __('Back') }}
                </x-backend.hit-button>
            </a>
        </x-slot>

        <form action="{{ route('admin.homepage.update', $home->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="{{ $home->title }}" />
            <textarea name="description" id="" cols="93" rows="1" class="border-blue-400 border-solid border-2 ml-6">{{ $home->description }}</textarea>
            <img src="{{ asset('Upload/images/homepage/'.$home->image) }}" height="150px" width="150px" alt="">
            <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image" value="{{ asset('Upload/images/about/'.$home->image) }}" />
            <x-backend.submit-button>
                {{ __('Update') }}
            </x-backend.submit-button>
        </form>

    </x-backend.card>
</x-admin-layout>