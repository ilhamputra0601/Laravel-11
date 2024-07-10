<x-layout title="Article By {{ $post->author->name}} In {{ $post->category->name }} ">
<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex justify-between items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                        <div>
                            <a href="/posts?author={{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                            <a href="/posts?category={{ $post->category->slug }}">
                                <span class="bg-{{ $post->category->color }}-100 ml-2 text-primary-800 text-sm sm:text-md font-medium me-2 px-2.5 py-0.5 rounded ">{{ $post->category->name }}</span>
                            </a>
                            <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->author->email }}</p>
                            <p class="text-base text-gray-500 dark:text-gray-400"><time> {{ $post->created_at->diffForHumans() }}</time></p>
                        </div>
                    </div>
                    <button type="button" onclick="history.back()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back</button>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
            </header>
            <figure class="aspect-video">
                <img class="w-full h-full object-cover" src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png"  alt="">
                <figcaption>Digital art by {{ $post->author->name }}</figcaption>
            </figure>
            <p class="mb-3 text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:me-3 first-letter:float-start">{{ $post->body }}</p>
        </article>
    </div>
  </main>
  <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
  <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($relatedPosts as $item)
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
                <figure class="aspect-video">
                    <img class=" object-cover" src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png"  alt="">
                </figure>
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
            @endforeach
        </div>
    </div>
</aside>
</section>


</x-layout>
