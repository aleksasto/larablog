<x-layout>
  <x-card class="p-10 mx-4">
    <header>
      <h1 class="text-3xl text-center font-bold my-6 uppercase">
        Manage Posts
      </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
      <tbody>
        @unless($posts->isEmpty())
        @foreach($posts as $post)
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300">
            <a href="/posts/{{$post->id}}"> {{$post->title}} </a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300">
            <a href="/posts/{{$post->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                class="fa-solid fa-pen-to-square"></i>
              Edit</a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300">
            <form method="POST" action="/posts/{{$post->id}}">
              @csrf
              @method('DELETE')
              <button class="text-red-500">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
        @else
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300">
            <p class="text-center">No Posts Found</p>
          </td>
        </tr>
        @endunless

      </tbody>
    </table>
  </x-card>
</x-layout>
