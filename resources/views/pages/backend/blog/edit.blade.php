<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            Blogs
        </x-slot>
        <x-slot name="addbutton" class="pl-5">
            <a href="{{ route('admin.blogs') }}">
                <x-backend.hit-button>
                    {{ __('Back') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <form action="{{ route('admin.blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="{{ $blog->title }}" />
            <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description" value="{{ $blog->description }}" />
            <x-backend.form.input type="text" placeholder="Link" label="Link" name="link" value="{{ $blog->link }}" />
            <img src="{{ asset('Upload/images/blog/' . $blog->image) }}" height="150px" width="150px" alt="">
            <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image" value="{{ asset('Upload/images/about/' . $blog->image) }}" />
            <x-backend.submit-button>
                {{ __('Update') }}
            </x-backend.submit-button>
        </form>

    </x-backend.card>
</x-admin-layout>