<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="images/favicon.ico"/>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>LaraBlog | Your #1 choice!</title>
</head>

<body class="max-w-6xl mx-auto">
<nav class="flex justify-between items-center mb-4">


    @auth
    <a href="/posts/create"
       class="ml-4 inline-block mt-4 rounded-full font-semibold py-2.5 px-4 bg-sky-900 text-white hover:bg-sky-500">Post
        Article</a>

    <a href="/posts/manage"
       class="ml-3 inline-block mt-4 rounded-full font-semibold py-2.5 px-4 bg-sky-900 text-white hover:bg-sky-500">Manage
        Posts</a>

    <span class="ml-auto mr-6 font-bold mt-6 inline-block">
          Welcome {{auth()->user()->name}}
        </span>

    <form class="inline" method="POST" action="/logout">
        @csrf
        <button
            class="mr-5 inline-block mt-4 rounded-full font-semibold py-2.5 px-4 bg-sky-900 text-white hover:bg-sky-500 mr-3"
            type="submit">Logout
        </button>
    </form>

    @else
    <a href="/register"
       class="ml-auto inline-block text-sm rounded-full font-semibold mt-4 py-2.5 px-4 bg-sky-900 text-white hover:bg-sky-500">Register</a>

    <a href="/login"
       class="ml-4 inline-block text-sm rounded-full font-semibold mt-4 py-2.5 px-4 bg-sky-900 text-white hover:bg-sky-500">Login</a>

    @endauth

</nav>

<main>
    {{$slot}}
</main>

<x-flash-message/>
</body>

</html>
