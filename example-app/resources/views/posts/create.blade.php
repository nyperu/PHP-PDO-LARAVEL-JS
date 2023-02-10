<x-layout>
    <x-panel>
        <section class="py-8 max-w-md mx-auto py-8">
            <h1 class="text-lg font-bold mb-4">
                YENİ POST PAYLAŞIMI
            </h1>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700
                " for="title" >
                </label>
                    Title
                <input class="border border-gray-400 p-2 w-full"
                       type="text" name="title"
                       id="title"
                       required
                       value="{{old('title')}}"
                >
                @error('title')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700
                " for="slug" >
                </label>
                Slug
                <input class="border border-gray-400 p-2 w-full"
                       type="text" name="slug"
                       id="slug"
                       value="{{old('slug')}}"
                       required
                >
                @error('slug')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror

                <div class="mb-6">
                    <label for="thumbnail" class="block
                    mb-2 uppercase font-bold text-xs text-gray-700"
                    >
                        THUMBNAIL
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="file" name="thumbnail"
                           id="slug"
                           value="{{old('tumbnail')}}"
                           required
                    >
                </div>

                <div class="mb-6">
                    <label for="excerpt" class="block
                    mb-2 uppercase font-bold text-xs text-gray-700"
                    >
                        EXCERPT
                    </label>
                </div>
                <textarea class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="excerpt"
                    id="excerpt"
                    value="{{old('excerpt')}}"
                    required
                ></textarea>
                @error('excerpt')
                     <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
                <div class="mb-6">
                    <label for="body" class="block
                    mb-2 uppercase font-bold text-xs text-gray-700">
                        BODY
                    </label>
                </div>
                <textarea class="border border-gray-400 p-2 mb-6 w-full"
                          type="text" name="body"
                          id="body"  value="{{old('body')}}"
                          required></textarea>
                @error('body')
                  <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
{{--                KATEGORİ          --}}

                <label for="category_id" class="block
                    mb-2 uppercase font-bold text-xs text-gray-700"
                    >
                    Category
                </label>
                <select name="category_id" id="category_id">
                    @foreach(\App\Models\category::all() as $category)
                        <option value="{{$category->id}}"
                            {{old('category_id'==$category->id ? 'selected' : '')}}
                        >
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
                @error('category')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
                <div class="flex justify-end">
                  <x-submit-button>GÖNDER</x-submit-button>
                </div>
            </form>
        </section>
    </x-panel>
</x-layout>
