<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">

            <a href="{{ route('admin.sliders') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.sliders.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="" />
                <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description" value="" />
                <x-backend.form.input type="text" placeholder="Upload-link" label="link" name="link" value="" />
                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-admin-layout>