<x-layout>
    <x-slot:title>About</x-slot>
    <!-- Post -->
    <article class="bg-gray-50 dark:bg-gray-900 pb-12 sm:pb-16 lg:pb-24">
        <!-- Post Header -->
        <header>
            <!-- Image -->
            <div class="aspect-h-2 aspect-w-3 w-full sm:aspect-h-1">
                <img
                    src="images/post-header-image.jpeg"
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
                        >{{ __('Technology') }}</a
                    >

                    <h2
                        class="mt-3.5 text-4xl font-medium tracking-normal text-gray-900 decoration-red-300 decoration-3 transition duration-300 ease-in-out group-hover:underline sm:mt-5 sm:text-5xl sm:leading-tight md:tracking-tight lg:text-6xl"
                    >
                        About Me
                    </h2>

                    <div>
                        <p class="mt-4 text-base leading-loose text-gray-600">
                            I am Gunjan Pandya.
                            <br/>
                            From Nagpur,Maharashtra
                            <br/>
                            I am currently an undergraduate student pursuing degree in Computer Science Engineering along with specialization in Artificial Intelligence
                            and Machine Learning from Shri Ramdeobaba College of Engineering and Management,Nagpur,Maharashtra.
                            <br/>
                            Now I am excited to be here and ready to embark on this new journey.Looking forward to learning and growing with you all.
                        </p>
                    </div>

                    <!-- Author meta -->
                    <div class="mt-6 flex items-center sm:mt-8">
                        <a href="{{ url('/about') }}" class="mr-3 flex-shrink-0">
                            <div class="relative">
                                <img
                                    class="h-8 w-8 rounded-xl object-cover object-center sm:h-9 sm:w-9"
                                    src="images/author.jpeg"
                                    alt=""
                                />
                                <span
                                    class="absolute inset-0 rounded-xl shadow-inner"
                                    aria-hidden="true"
                                ></span>
                            </div>
                        </a>

                        <div class="flex items-center text-sm lg:text-[15px]">
                            <span class="hidden text-gray-500 sm:inline-block"
                                >By&nbsp;</span
                            >
                            <a
                                class="font-medium text-gray-700 hover:underline"
                                href="{{ url('/about') }}"
                                >{{ __(config('info.sitename')) }}</a
                            >

                            <x-icons.calendar />
                            <span class="ml-1 text-gray-500">Nov 2, 2020</span>

                            <span class="hidden items-center sm:flex">
                                <x-icons.clock />
                                <span class="ml-1 text-gray-500">15 min read</span>
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
                class="prose mx-auto sm:prose-lg first-letter:text-4xl first-letter:font-bold first-letter:tracking-[.15em] prose-a:transition prose-a:duration-300 prose-a:ease-in-out hover:prose-a:text-red-700 dark:text-red-300 prose-img:rounded-xl"
            >
                <!-- Your existing content here... -->

                <h2>Education</h2>
                <p>
                    <ul>
                        <li>12th<br/> Kendriya Vidyalaya<br/>Apr 2022-2023<br/>Grade-78% </li>
                        <li>10th<br/> Kendriya Vidyalaya<br/>Apr 2019-2020<br/>Grade-82% </li>
                    </ul>
                </p>
            </div>
            <div class="px-5 lg:px-0">
            <!-- Post Content -->
            <!-- Uses the official Tailwind CSS Typography plugin -->
            <div
                class="prose mx-auto sm:prose-lg first-letter:text-4xl first-letter:font-bold first-letter:tracking-[.15em] prose-a:transition prose-a:duration-300 prose-a:ease-in-out hover:prose-a:text-red-700 dark:text-red-300 prose-img:rounded-xl"
            >
                <!-- Your existing content here... -->

                <h2>Technical Skills</h2>
                <p>
                    <ul>
                        <li>C</li>
                        <li>Java</li>
                        <li>Python</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Javacript</li>
                        <li>React.js</li>
                    </ul>
                </p>
            </div>
            <div
                class="prose mx-auto sm:prose-lg first-letter:text-4xl first-letter:font-bold first-letter:tracking-[.15em] prose-a:transition prose-a:duration-300 prose-a:ease-in-out hover:prose-a:text-red-700 dark:text-red-300 prose-img:rounded-xl"
            >
                <!-- Your existing content here... -->

                <h2>Soft Skills</h2>
                <p>
                    <ul>
                        <li>Communication:Written and Verbal</li>
                        <li>Multitasking</li>
                        <li>Leadership<li>
                        <li>Networking</li>
                        <li>Quick learning</li>
                    </ul>
                </p>
            </div>
            <div
                class="prose mx-auto sm:prose-lg first-letter:text-4xl first-letter:font-bold first-letter:tracking-[.15em] prose-a:transition prose-a:duration-300 prose-a:ease-in-out hover:prose-a:text-red-700 dark:text-red-300 prose-img:rounded-xl"
            >
                <!-- Your existing content here... -->

                <h2>Hobbies and Interests</h2>
                <p>
                    <ul>
                        <li>learning new technologies</li>
                        <li>Website Development</li>
                        <li>Reading Novels<li>
                    </ul>
                </p>
            </div>


            <!-- Post Footer -->
            <footer
                class="divide-y-gray-300/70 mx-auto mt-12 max-w-prose divide-y text-lg sm:mt-14"
            >
                <!-- Tags -->
                <ul class="-m-1 flex flex-wrap justify-start pb-8 sm:pb-10">
                    <!-- Tag items -->
                    <!-- Add your tags here... -->
                </ul>

                <!-- Social Share Buttons -->
                <div class="py-8 sm:py-10">
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-medium text-gray-900"> Share </span>

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
                                        src="images/author.jpeg"
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
                                        <p class="text-xs uppercase tracking-widest text-red-600">
                                            {{ __('About Author') }}
                                        </p>
                                        <h1
                                            class="mt-1 text-xl font-medium tracking-normal text-gray-900 md:tracking-tight lg:leading-tight"
                                        >
                                            {{ __(config('info.sitename'))}}
                                        </h1>
                                    </div>
                                </div>

                                <p class="mt-2.5 text-base leading-loose text-gray-500">
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
