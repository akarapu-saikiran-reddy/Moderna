<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">

            <a href="{{ route('admin.service-cards') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.service-cards.update', $servicescard->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="{{ $servicescard->title }}" />
                <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description" value="{{ $servicescard->description }}" />
                <x-backend.form.input type="text" placeholder="Upload logo" label="logo" name="logo" value="{{ asset('Upload/images/about/' . $servicescard->image) }}" />
                <x-backend.submit-button>
                    {{ __('Update') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-admin-layout>