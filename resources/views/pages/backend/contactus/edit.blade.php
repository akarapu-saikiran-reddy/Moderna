<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">

            <a href="{{ route('admin.contactus') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.contactus.update', $contactus->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="{{ $contactus->title }}" />
                <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description" value="{{ $contactus->description }}" />
                <img src="{{ asset('Upload/images/contactus/' . $contactus->image) }}" height="150px" width="150px" alt="">
                <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image" value="{{ asset('Upload/images/about/' . $contactus->image) }}" />
                <x-backend.submit-button>
                    {{ __('Update') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-admin-layout>