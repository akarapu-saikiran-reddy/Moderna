<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            Services
        </x-slot>
        <x-slot name="addbutton">
            <a href="{{ route('admin.service-cards') }}">
                <x-backend.hit-button>
                    {{ __('Back ') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <x-backend.form.input type="text" placeholder="{{ $servicescard->title }}" label="Title" name="title" value="" />
        <x-backend.form.input type="text" placeholder="{{ $servicescard->description }}" label="Description" name="description" value="" />
        <x-backend.form.input type="text" placeholder="{{ $servicescard->logo }}" label="Description" name="logo" value="" />
        </form>

    </x-backend.card>
</x-admin-layout>