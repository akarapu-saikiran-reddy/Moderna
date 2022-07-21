<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="addbutton" class="pl-5">
            <a href="{{ route('admin.blogs') }}">
                <x-backend.hit-button>
                    {{ __('Back') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <div>
            <h1> {{ __('Recent Posts') }}
            </h1>
            <form action="{{ route('admin.blog.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="" />
                <x-backend.form.input type="text" placeholder="Link" label="Link" name="link" value="" />
                <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description" value="" />
                <x-backend.form.input type="file" placeholder="Upload-Image" label="Image" name="image" value="" />
                <br>
                <div>
                    <x-backend.submit-button>
                        {{ __('Save') }}
                    </x-backend.submit-button>
                </div>
            </form>
        </div>
    </x-backend.card>
</x-admin-layout>