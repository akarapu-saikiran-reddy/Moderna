<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            Features
        </x-slot>
        <x-slot name="addbutton" class="pl-5">
            <a href="{{ route('admin.features') }}">
                <x-backend.hit-button>
                    {{ __('Back') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <form action="{{ route('admin.features.update', $features->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="{{ $features->title }}" />
            <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description" value="{{ $features->description }}" />
            <x-backend.form.input type="file" placeholder="Image" label="Image" name="image" value="{{ $features->image}}" />
            <x-backend.submit-button>
                {{ __('Update') }}
            </x-backend.submit-button>
        </form>
    </x-backend.card>
</x-admin-layout>