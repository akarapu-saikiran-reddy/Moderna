<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">

            <a href="{{ route('admin.sliders') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <x-backend.form.input type="text" placeholder="{{ $sliders->title }}" label="Title" name="title" value="" />
            <x-backend.form.input type="text" placeholder="{{ $sliders->description }}" label="Description" name="description" value="" />
            <x-backend.form.input type="text" placeholder="{{ $sliders->link }}" label="Description" name="description" value="" />



            </form>
        </x-slot>
    </x-backend.card>
    </x-app-layout>