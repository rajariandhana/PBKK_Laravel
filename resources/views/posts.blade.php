<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    {{-- <h3>ini adalah halaman </h3> --}}
    {{-- @dump($posts) --}}
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
        @foreach ($posts as $post)   
            <article class="max-w-screen-md p-6 bg-white rounded-md shadow-md">
                <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900 hover:underline">{{$post['title']}}</h2>
                <div class="">
                    By
                    <a href="/authors/{{$post->author->username}}" class="text-base text-gray-500 hover:underline">{{$post->author->name}}</a> 
                    in
                    <a href="/categories/{{$post->category->slug}}" class="text-base hover:underline px-2 py-1 rounded-md bg-{{$post->category->color}}-100">{{$post->category->name}}</a> 
                    | {{$post->created_at->format('j F Y')}}
                </div>
                <p class="my-4 font-light">
                    {{-- {{Str::limit($post['body'],100)}} --}}
                    {{$post['body']}}
                </p>
                {{-- href="/posts/{{$id}}"  --}}
                <a href="/posts/{{$post['slug']}}" class="font-medium text-indigo-500">Read more &raquo;</a>
            </article>
        @endforeach
    </div>
</x-layout>