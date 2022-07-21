<x-admin-layout>
    <x-backend.card class="">

        <x-slot name="title" class="pl-5">
            {{ __('Card') }}

            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Upload Title" label="Title" name="title" value="" />
                <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image" value="" />
                <x-backend.form.input type="text" placeholder="Upload Description" label="Description" name="description" value="" />
                <x-backend.form.input type="text" placeholder="Upload Video-url" label="Video-url" name="video_link" value="" />
                <x-backend.form.input type="text" placeholder="Upload Svg-logo" label="Svg-logo" name="svg_logo" value="" />

                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
            {{ __('Feutures') }}
            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Upload Title" label="Title" name="card_title" value="" />
                <x-backend.form.input type="text" placeholder="Upload Description" label="Description" name="card_description" value="" />

                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>



        </x-slot>
    </x-backend.card>
</x-admin-layout>