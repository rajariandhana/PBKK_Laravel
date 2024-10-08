<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <form action="/posts" method="GET">
        @if(request('category'))
        <input type="hidden" name="category" value="{{request('category')}}">
        @endif
        @if(request('author'))
        <input type="hidden" name="author" value="{{request('author')}}">
        @endif
        
        <input type="text" placeholder="Search for article" name="search" type="search">
        <button class="bg-indigo-500" type="submit">search</button>
    </form>
    {{-- <h3>ini adalah halaman </h3> --}}
    {{-- @dump($posts) --}}
    {{$posts->links()}}
<div class="flex flex-col gap-y-6">
    @forelse ($posts as $post)   

        <article class="max-w-screen-md p-8 bg-white shadow-lg rounded-xl">
            <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900 hover:underline">{{$post['title']}}</h2>
            <div class="">
                By
                <a href="/posts?author={{$post->author->username}}" class="text-base text-gray-500 hover:underline">{{$post->author->name}}</a> 
                in
                <a href="/posts?category={{$post->category->slug}}" class="text-base text-gray-500 hover:underline">{{$post->category->name}}</a> 
                | {{$post->created_at->format('j F Y')}}
            </div>
            <p class="my-4 font-light">
                {{-- {{Str::limit($post['body'],100)}} --}}
                {{$post['body']}}
            </p>
            {{-- href="/posts/{{$id}}"  --}}
            <a href="/posts/{{$post['slug']}}" class="font-medium text-indigo-500">Read more &raquo;</a>
        </article>

    @empty
    <div class="text-red-500">
        Im sorry the content are not found
    </div>
    @endforelse
</div>
</x-layout>