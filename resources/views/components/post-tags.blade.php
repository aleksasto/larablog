@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
  @foreach($tags as $tag)
  <li class="flex items-center justify-center bg-sky-900 text-white rounded-full py-1 px-3 mr-2 mt-2 text-xs">
    <a href="/?tag={{$tag}}">{{$tag}}</a>
  </li>
  @endforeach
</ul>
