<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <article class="max-w-screen-md p-8 bg-white shadow-lg rounded-xl">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900 hover:underline">{{$post['title']}}</h2>
        <div >
            By
            <a href="/posts?author={{$post->author->username}}"
                class="text-base text-gray-500 hover:underline">{{$post->author->name}}</a> 
            in
            <a href="/posts?category={{$post->category->slug}}"
                class="text-base text-gray-500 hover:underline">{{$post->category->name}}</a>
            | {{$post->created_at->format('j F Y')}}
        </div>
        <p class="my-4 font-light">
            {{-- {{Str::limit($post['body'],100)}} --}}
            {{$post['body']}}
        </p>
        {{-- href="/posts/{{$id}}"  --}}
        <a href="/posts" class="font-medium text-indigo-500">&laquo; Back to posts</a>
    </article>
</x-layout>