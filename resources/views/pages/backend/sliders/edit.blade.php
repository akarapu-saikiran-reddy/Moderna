<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">

            <a href="{{ route('admin.sliders') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.sliders.update', $homeslider->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="{{ $homeslider->title }}" />
                <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description" value="{{ $homeslider->description }}" />

                <x-backend.form.input type="text" placeholder="Edit-link" label="link" name="link" value="{{ asset('Upload/images/sliders/' . $homeslider->link) }}" />
                <x-backend.submit-button>
                    {{ __('Update') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
    </x-app-layout>