<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <article class="max-w-screen-md py-8 border-b border-gray-500">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900 hover:underline">{{$post['title']}}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{$post->author->id}}">{{$post['author']}}</a> | {{$post['date']}}
        </div>
        <p class="my-4 font-light">
            {{-- {{Str::limit($post['body'],100)}} --}}
            {{$post['body']}}
        </p>
        {{-- href="/posts/{{$id}}"  --}}
        <a href="/posts" class="font-medium text-blue-500">&laquo; Back to posts</a>
    </article>
</x-layout>