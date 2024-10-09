<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="flex justify-center w-full">
        <article class="max-w-screen-md p-6 bg-white rounded-md shadow-md">
            <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900 hover:underline">{{$post['title']}}</h2>
            <div >
                By
                <a href="/posts?authors={{$post->author->username}}"
                    class="text-base text-gray-500 hover:underline">{{$post->author->name}}</a> 
                in
                <a href="/posts?category={{$post->category->slug}}" class="text-base hover:underline px-2 py-1 rounded-md bg-{{$post->category->color}}-100">{{$post->category->name}}</a> 
                | {{$post->created_at->format('j F Y')}}
            </div>
            <p class="my-4 font-light">
                {{-- {{Str::limit($post['body'],100)}} --}}
                {{$post['body']}}
            </p>
            {{-- href="/posts/{{$id}}"  --}}
            <a href="/posts" class="font-medium text-rose-500">&laquo; Back to posts</a>
        </article>
    </div>
</x-layout>