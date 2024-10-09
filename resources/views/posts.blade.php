<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    {{-- <h3>ini adalah halaman </h3> --}}
    {{-- @dump($posts) --}}
    {{-- <form action="/posts" method="GET">
        @if(request('category'))
        <input type="hidden" name="category" value="{{request('category')}}">
        @endif
        @if(request('author'))
        <input type="hidden" name="author" value="{{request('author')}}">
        @endif
        
        <input type="text" placeholder="Search for article" name="search" type="search">
        <button class="bg-indigo-500" type="submit">search</button>
    </form> --}}
    <form class="max-w-md mx-auto">   
        @csrf
        @if(request('category'))
        <input type="hidden" name="category" value="{{request('category')}}">
        @endif
        @if(request('author'))
        <input type="hidden" name="author" value="{{request('author')}}">
        @endif
        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" name="search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50" placeholder="Search Mockups, Logos..." autocomplete="off"/>
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-indigo-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
        </div>
    </form>
    {{-- <div class="flex justify-between w-full mb-4"> --}}
        {{$posts->links()}}
    {{-- </div> --}}
    <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
        @forelse ($posts as $post)   
            <article class="max-w-screen-md p-6 bg-white rounded-md shadow-md">
                <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900 hover:underline">{{$post['title']}}</h2>
                <div class="">
                    By
                    <a href="/posts?author={{$post->author->username}}" class="text-base text-gray-500 hover:underline">{{$post->author->name}}</a> 
                    in
                    <a href="/posts?category={{$post->category->slug}}" class="text-base hover:underline px-2 py-1 rounded-md bg-{{$post->category->color}}-100">{{$post->category->name}}</a> 
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