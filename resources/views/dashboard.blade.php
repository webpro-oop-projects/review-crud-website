<x-app-layout>

    <body class="font-sans antialiased bg-[#F5EFEB] text-black/50">
        <div class="text-black/50">

            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                    <main class="mt-6 w-full h-auto">
                        <!-- Main content here -->
                        <section class="relative bg-cover bg-center w-full h-[60vh] text-white" style="background-image: url('{{ asset('images/thing.gif') }}');">
                        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Overlay for better text visibility -->
                            <div class="relative flex items-center justify-center h-full">
                                <div class="text-center p-6">
                                    <!-- <div class="text-4xl md:text-6xl font-bold mb-4">
                                        <span class="text-[#FFBF18]">Rate</span><span class="text-[#FFBF18]">-</span><span class="text-[#4F48EC]">View</span>
                                    </div> -->
                                    <img src="{{ asset('images/logo.png') }}" alt="Rate-View Logo" class="h-96">
                                    <p class="text-lg md:text-xl mb-6">Rate Shows That You Have Viewed</p>
                                    <a href="{{ route('register') }}" class="bg-[#2F4156] hover:bg-[#567C8D] text-white font-semibold py-3 px-6 rounded transition">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                        </section>


                        <div>
                            <h1 class="text-center text-3xl p-5 text-[#C5C6C7]">Recommendations</h1>
                        </div>
                        <div class="mt-4 grid grid-cols-2  sm:grid-cols-4 gap-x-5 gap-y-5">

                        <div class="relative rounded-xl overflow-hidden">
                        <img src="./images/perfectblue.jpg" class="object-cover h-full w-full -z-10" alt="">
                        <div class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">

                                <a href="#" class="p-2.5 bg-gray-800/80 bg-white rounded-lg text-white self-end hover:bg-red-600/80">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                </a>

                            <div class="self-center flex flex-col items-center space-y-2">
                                <span class="capitalize text-white font-medium drop-shadow-md">Perfect Blue</span>
                                <span class="text-gray-100 text-xs">+12 Movies</span>

                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-xl overflow-hidden ">
                        <img src="./images/dune.jpg" class="object-cover w-full h-full -z-10" alt="">
                        <div class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">

                                <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                </a>

                            <div class="self-center flex flex-col items-center space-y-2">
                                <span class="capitalize text-white font-medium drop-shadow-md">Dune</span>
                                <span class="text-gray-300 text-xs">+24 Movies</span>

                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-xl overflow-hidden ">
                        <img src="./images/good-will-hunting.jpg" class="object-cover h-full w-full -z-10" alt="">
                        <div class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">

                                <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                </a>

                            <div class="self-center flex flex-col items-center space-y-2">
                                <span class="capitalize text-white font-medium drop-shadow-md">Good Will Hunting</span>
                                <span class="text-gray-300 text-xs">+10 Movies</span>

                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-xl overflow-hidden ">
                        <img src="./images/myown.jpg" class="object-cover h-full w-full -z-10" alt="">
                        <div class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">

                                <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                </a>

                            <div class="self-center flex flex-col items-center space-y-2">
                                <span class="capitalize text-white font-medium drop-shadow-md">My Own Private Idaho</span>
                                <span class="text-gray-300 text-xs">+27 Movies</span>

                            </div>
                        </div>
                    </div>
                </div>

                    </main>

                    <footer class="py-16 text-center text-sm text-white">
                        Webpro IUP 2024
                    </footer>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>