<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">

            <a href="{{ route('admin.blogs') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <x-backend.form.input type="text" placeholder="{{ $blog->title }}" label="Title" name="title"
                value="" />
            <x-backend.form.input type="text" placeholder="{{ $blog->description }}" label="Description"
                name="description" value="" />
            <img src="{{ asset('Upload/images/blog/' . $blog->image) }}" height="250px" width="250px" alt="">


            </form>
        </x-slot>
    </x-backend.card>
    </x-app-layout>
