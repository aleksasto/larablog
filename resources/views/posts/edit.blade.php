<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold mb-1">Edit Post</h2>
      <p class="mb-4">{{$post->title}}</p>
    </header>

    <form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="title" class="inline-block mb-2">Title</label>
        <input type="text" class="border border-gray-200 rounded-full p-2 w-full" name="title"
          placeholder="Example: Laravel Developer" value="{{$post->title}}" />

        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="tags" class="inline-block mb-2">
          Tags (Comma Separated)
        </label>
        <input type="text" class="border border-gray-200 rounded-full p-2 w-full" name="tags"
          placeholder="Example: Laravel, Frontend, Backend, Life, etc" value="{{$post->tags}}" />

        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block mb-2">
          Article
        </label>
        <textarea class="border border-gray-200 rounded-2xl p-2 w-full" name="body" rows="10"
          placeholder="Include tasks, requirements, salary, etc">{{$post->body}}</textarea>

        @error('body')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-sky-900 text-white rounded-full py-2 px-4 hover:bg-sky-500">
          Update Post
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
