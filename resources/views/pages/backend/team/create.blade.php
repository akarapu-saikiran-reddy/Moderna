<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="addbutton" class="pl-5">
            <a href="{{ route('admin.team') }}">
                <x-backend.hit-button>
                    {{ __('Back') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <form action="{{ route('admin.team.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="" />
            <x-backend.form.input type="text" placeholder="Role" label="Role" name="role" value="" />
            <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description" value="" />
            <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image" value="" />
            <x-backend.submit-button>
                {{ __('Save') }}
            </x-backend.submit-button>
        </form>
    </x-backend.card>
    </x-app-layout>