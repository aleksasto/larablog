<x-layout>
  <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center ">

        <h1 class="text-4xl mb-2">
          {{$post->title}}
        </h1>

        <x-post-tags :tagsCsv="$post->tags" />

        <div>
          <div class="space-y-6 mt-12">
            {{$post->body}}

          </div>
        </div>
      </div>
    </x-card>
      @If($post->user_id === auth()->id())
    <x-card class="mt-4 p-2 flex space-x-6">
      <a href="/posts/{{$post->id}}/edit">
        <i class="fa-solid fa-pencil"></i> Edit
      </a>

      <form method="POST" action="/posts/{{$post->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
      </form>
    </x-card>
      @EndIf
  </div>
</x-layout>
