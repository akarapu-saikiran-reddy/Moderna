<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">

            <a href="{{ route('admin.homepage') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <x-backend.form.input type="text" placeholder="{{ $home->title }}" label="Title" name="title" value="" />
            <x-backend.form.input type="text" placeholder="{{ $home->description }}" label="Description" name="description" value="" />
            <img src="{{ asset('Upload/images/homepage/' . $home->image) }}" height="250px" width="250px" alt="">
            </form>
        </x-slot>
    </x-backend.card>
</x-admin-layout>