@php
    $articleId = Route::current()->parameter('articleId');
    $articleList = config('info.articles');
    if (!$articleId) {
        $articleId = 0;
    }
    $article = $articleList[$articleId];
@endphp
<x-layout>
    <x-slot:title>Blog</x-slot>
    <!-- Post -->
    <article class="bg-gray-50 dark:bg-gray-900 pb-12 sm:pb-16 lg:pb-24">
        <!-- Post Header -->
        <header>
          <!-- Image -->
          <div class="aspect-h-2 aspect-w-3 w-full sm:aspect-h-1">
            <img
              src="{{ asset($article['image']) }}"
              class="object-cover object-center"
            />
          </div>

          <!-- Post Header Content -->
          <div class="px-5 lg:px-0">
            <!-- Article Information -->
            <div
              class="mx-auto mb-8 max-w-prose border-b border-gray-300/70 pb-8 pt-10 text-lg sm:pt-16"
            >
              <a
                href="{{ url('/projects/technology')}}"
                class="transition-color relative text-sm font-medium uppercase tracking-widest text-red-700 dark:text-red-300 duration-300 ease-in-out hover:text-red-600 dark:hover:text-red-200"
                >{{ __($article['category']) }}</a
              >

              <h2
                class="mt-3.5 text-4xl font-medium tracking-normal text-gray-900 dark:text-gray-100 decoration-red-300 decoration-3 transition duration-300 ease-in-out group-hover:underline sm:mt-5 sm:text-5xl sm:leading-tight md:tracking-tight lg:text-6xl"
              >
                {{ $article['title'] }}
              </h2>

              <div>
                <p class="mt-4 text-base leading-loose text-gray-600 dark:text-gray-300">
                    {{ $article['description'] }}
                </p>
              </div>

              <!-- Author meta -->
              <div class="mt-6 flex items-center sm:mt-8">
                <a href="{{ url('/about') }}" class="mr-3 flex-shrink-0">
                  <div class="relative">
                    <img
                      class="h-8 w-8 rounded-xl object-cover object-center sm:h-9 sm:w-9"
                      src="{{ asset('images/author.jpeg') }}"
                      alt=""
                    />
                    <span
                      class="absolute inset-0 rounded-xl shadow-inner"
                      aria-hidden="true"
                    ></span>
                  </div>
                </a>

                <div class="flex items-center text-sm lg:text-[15px]">
                  <span class="hidden text-gray-500 dark:text-gray-400 sm:inline-block"
                    >By&nbsp;</span
                  >
                  <a
                    class="font-medium text-gray-700 dark:text-gray-300 hover:underline"
                    href="{{ url('/about') }}"
                    >{{ __(config('info.sitename'))}}</a
                  >

                  <x-icons.calendar />
                  <span class="ml-1 text-gray-500 dark:text-gray-400">Nov 2, 2020</span>

                  <span class="hidden items-center sm:flex">
                    <x-icons.clock />
                    <span class="ml-1 text-gray-500 dark:text-gray-400">15 min read</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </header>

        <div class="px-5 lg:px-0">
          <!-- Post Content -->
          <!-- Uses the official Tailwind CSS Typography plugin -->
          <div
            class="prose dark:prose-invert mx-auto sm:prose-lg first-letter:text-4xl first-letter:font-bold first-letter:tracking-[.15em] prose-a:transition prose-a:duration-300 prose-a:ease-in-out hover:prose-a:text-red-700 prose-img:rounded-xl"
          >
           <p>DS lab project deals with creating your own virtual lab which helps student to simulate data structures</p>
            <figure>
                <img src="{{ asset('images/dept-cseet.jpeg') }}" />
                <figcaption>
                  Department of Computer Science and Engineering and Emerging Technologies.
                </figcaption>
              </figure>
          <p>Music mania project deals with creating creating your own own music app where you can listen music like spotify</p>
          </div>
          <!-- Post Footer -->
          <footer
            class="divide-y-gray-300/70 mx-auto mt-12 max-w-prose divide-y text-lg sm:mt-14"
          >
            <!-- Tags -->
            <ul class="-m-1 flex flex-wrap justify-start pb-8 sm:pb-10">
              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-300 sm:px-6 sm:py-2"
                  >
                    Trends
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-300 sm:px-6 sm:py-2"
                  >
                    Tips
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-300 sm:px-6 sm:py-2"
                  >
                    Lists
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-300 sm:px-6 sm:py-2"
                  >
                    Lessons
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-300 sm:px-6 sm:py-2"
                  >
                    Learnings
                  </span>
                </a>
              </li>
            </ul>

            <!-- Social Share Buttons -->
            <div class="py-8 sm:py-10">
                <div class="flex items-center justify-between">
                  <span class="text-lg font-medium text-gray-900 dark:text-gray-100"> Share </span>

                  <!-- Social Links -->
                  <ul class="flex items-center space-x-3">
                    @foreach (config('info.sociallinks') as $link)
                    <li>
                        <a
                            href="{{ url($link['url'])}}" target="_blank"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                        >
                            <x-dynamic-component :component="$link['name']" />
                        </a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>

            <!-- Author Details -->
            <div class="py-8 sm:py-10">
              <div class="flex w-full items-center justify-between">
                <div class="flex flex-col sm:flex-row">
                  <!-- Image -->
                  <div class="flex-shrink-0">
                    <div class="relative w-fit">
                      <img
                        class="h-20 w-20 rounded-2xl object-cover object-center sm:h-24 sm:w-24"
                        src="{{ asset('images/author.jpeg') }}"
                        alt=""
                      />
                      <span
                        class="absolute inset-0 rounded-2xl shadow-inner"
                        aria-hidden="true"
                      ></span>
                    </div>
                  </div>

                  <!-- Content -->
                  <div class="mt-5 text-left sm:ml-6 sm:mt-0">
                    <div class="flex items-center justify-between">
                      <div class="'flex flex-col">
                        <p class="text-xs uppercase tracking-widest text-red-600 dark:text-red-200">
                            {{ __('About Author') }}
                        </p>
                        <h1
                          class="mt-1 text-xl font-medium tracking-normal text-gray-900 dark:text-gray-100 md:tracking-tight lg:leading-tight"
                        >
                        {{ __(config('info.sitename'))}}
                        </h1>
                      </div>
                    </div>

                    <p class="mt-2.5 text-base leading-loose text-gray-500 dark:text-gray-400">
                    Hi!! I am a UG sophomore at Ramdeobaba college. I am interested in domains ranging from web development to animation.
                            I am also involved in extracurricular activities like swimming, music & design, and am part of REEF club.
                            I brim with curiosity to explore and try new things. I am ambitious, friendly, and a team-oriented individual.
                    </p>

                    <!-- Author Social Links -->
                    <ul class="mt-3.5 flex items-center space-x-3">
                        @foreach (config('info.sociallinks') as $link)
                            <li>
                                <a href="{{ url($link['url'])}}" @if (!($loop->last)) class="group" @endif>
                                <x-dynamic-component :component="$link['name']" />
                                </a>
                            </li>
                        @endforeach
                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </article>
</x-layout>
