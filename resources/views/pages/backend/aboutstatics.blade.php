<x-admin-layout>
    <x-backend.card class="">

        <x-slot name="title" class="pl-5">

            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf

                <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="about_image" value="" />
                <x-backend.form.input type="text" placeholder="Description" label="Description" name="about_description" value="" />
                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
            {{ __('Testimonials') }}
            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf

                <x-backend.form.input type="text" placeholder="Description" label="Description" name="testimonial_description" value="" />

                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>


            {{ __('Ourskills') }}
            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf

                <x-backend.form.input type="text" placeholder="Upload Description" label="Description" name="skill_description" value="" />

                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>



        </x-slot>
    </x-backend.card>
    </x-app-layout>