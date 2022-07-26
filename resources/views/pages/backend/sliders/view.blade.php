<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            Sliders
        </x-slot>
        <x-slot name="addbutton">
            <a href="{{ route('admin.sliders') }}">
                <x-backend.hit-button>
                    {{ __('Back ') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <x-backend.form.inputdisabled type="text" placeholder="{{ $homesliders->title }}" label="Title" name="title" value="" />
        <x-backend.form.inputdisabled type="text" placeholder="{{ $homesliders->description }}" label="Description" name="description" value="" />
        <x-backend.form.inputdisabled type="text" placeholder="{{ $homesliders->link }}" label="Description" name="description" value="" />
        </form>
    </x-backend.card>
</x-admin-layout>