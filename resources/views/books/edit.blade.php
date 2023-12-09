

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- {{ __("You're logged in!") }} -->
                    <a href="/books">Index Buku</a>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-8 pb-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- {{ __("You're logged in!") }} -->
                    <h1>Edit Book</h1>
                    <form action="/books/{{$book->id}}" enctype="multipart/form-data" method="post">
                        @method('PUT')
                        @csrf
                        Title: <input type="text" name="title"/> <br/>
                        Foto: <input type="file" name="photo" /><br/>
                        Description:
                        <textarea name="description"></textarea> <br/>
                        <button type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
