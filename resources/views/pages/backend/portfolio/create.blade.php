<x-admin-layout>
    <x-backend.card class="">
        <x-slot name="addbutton" class="pl-5">
            <a href="{{ route('admin.blogs') }}">
                <x-backend.hit-button>
                    {{ __('Back') }}
                </x-backend.hit-button>
            </a>
        </x-slot>
        <form action="{{ route('admin.portfolio.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-backend.form.input type="file" placeholder="" label="App" name="app" value="" />

            <x-backend.submit-button>
                {{ __('Save') }}
            </x-backend.submit-button>
        </form>
        <form action="{{ route('admin.portfolio.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-backend.form.input type="file" placeholder="" label="Card" name="card" value="" />

            <x-backend.submit-button>
                {{ __('Save') }}
            </x-backend.submit-button>
        </form>
        <form action="{{ route('admin.portfolio.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-backend.form.input type="file" placeholder="" label="Web" name="web" value="" />

            <x-backend.submit-button>
                {{ __('Save') }}
            </x-backend.submit-button>
        </form>
    </x-backend.card>
</x-admin-layout>