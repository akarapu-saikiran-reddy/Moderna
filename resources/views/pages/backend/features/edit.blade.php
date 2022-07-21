<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">

            <a href="{{ route('admin.features') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.features.update', $features->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="{{ $features->title }}" />
                <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description" value="{{ $features->description }}" />


                <x-backend.form.input type="logo" placeholder="Upload Image" label="logo" name="logo" value="{{ $features->logo }}" />
                <x-backend.submit-button>
                    {{ __('Update') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-admin-layout>