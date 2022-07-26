<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            {{ __('Pricing') }}
            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.inputdisabled type="text" placeholder="Upload Title" label="Title" name="pricing_title" value="" />
                <x-backend.form.inputdisabled type="text" placeholder="Upload Description" label="Description" name="pricing_description" value="" />
                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
            {{ __('Ourskills') }}
            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.inputdisabled type="text" placeholder="Upload Title" label="Title" name="skill_title" value="" />
                <x-backend.form.inputdisabled type="text" placeholder="Upload Description" label="Description" name="skill_description" value="" />
                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-admin-layout>