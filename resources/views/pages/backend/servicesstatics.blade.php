<x-admin-layout>
    <x-backend.card class="">

        <x-slot name="title" class="pl-5">
            {{ __('Cards') }}

            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Upload Title" label="Title" name="services_title"
                    value="" />
                <x-backend.form.input type="text" placeholder="Upload Description" label="Description"
                    name="services_description" value="" />
                <x-backend.form.input type="text" placeholder="Upload Video-url" label="Video-url"
                    name="services_video_link" value="" />
                <x-backend.form.input type="text" placeholder="Upload Svg-logo" label="Svg-logo"
                    name="services_svg_logo" value="" />

                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
            {{ __('Pricing') }}
            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Upload Title" label="Title" name="pricing_title"
                    value="" />
                <x-backend.form.input type="text" placeholder="Upload Description" label="Description"
                    name="pricing_description" value="" />

                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>


            {{ __('Ourskills') }}
            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Upload Title" label="Title" name="skill_title"
                    value="" />
                <x-backend.form.input type="text" placeholder="Upload Description" label="Description"
                    name="skill_description" value="" />

                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>



        </x-slot>
    </x-backend.card>
    </x-app-layout>
