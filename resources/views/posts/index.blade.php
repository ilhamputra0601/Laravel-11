<x-layout title=" {{ isset($title) && $title ?  $title  : 'All Posts' }}">
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ isset($count) && $count ?  $count  : 'Our Blog' }}</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">{{ isset($subtitle) && $subtitle ?  $subtitle  : 'All Posts' }}</p>
        </div>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $item)
            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <a href="/posts?category={{ $item->category->slug }}">
                    <span class="bg-{{ $item->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                        {{ $item->category->name }}
                    </span>
                    </a>
                    <span class="text-sm">{{ $item->created_at->diffForHumans() }}</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight truncate text-gray-900 dark:text-white"><a href="/posts/{{ $item->slug }}">{{ $item->title }}</a></h2>
                <p class="mb-5 font-light line-clamp-4 text-gray-500 dark:text-gray-400">{{ Str::limit( $item->body,150) }}</p>
                <div class="flex justify-between items-center">
                    <a href="/posts?author={{ $item->author->username }}">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $item->author->name }}" />
                        <span class="font-medium dark:text-white">
                            {{ $item->author->name }}
                        </span>
                    </div>
                </a>
                    <a href="/posts/{{ $item->slug }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </article>
            @empty
        </div>
        <section class=" bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500">404</h1>
                    <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Something's missing.</p>
                    <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Sorry, we can't find that page. You'll find lots to explore on the home page. </p>
                    <a href="#" class="inline-flex text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Back to Homepage</a>
                </div>
            </div>
        </section>
        @endforelse
    </div>
    {{ $posts->links() }}
  </section>
</x-layout>
