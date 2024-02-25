@extends('layouts.app')

@section('content')
    <div>
        <header class="flex justify-between w-full bg-white text-sm py-4">
            <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap items-center justify-between" aria-label="Global">

                <div class="flex items-center gap-x-2">
                    <a class="flex items-center gap-x-2" href="#">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-auto max-h-42">
                        <span class="text-xl font-semibold text-[#4D8380]">ImIn!</span>
                    </a>
                </div>

                <div class="flex items-center gap-x-2">
                    <a class="font-medium text-[#4D8380] hover:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-600" href="#" aria-current="page">Home</a>
                    <a class="font-medium text-[#4D8380] hover:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">Account</a>
                    <a class="font-medium text-[#4D8380] hover:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">Work</a>
                    <a class="font-medium text-[#4D8380] hover:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">Blog</a>
                </div>

                <div class="flex items-center gap-x-2">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#F28B2E] text-white hover:bg-orange-600 focus:outline-none focus:ring-1 focus:ring-gray-600">
                        <a href="/login" class="text-white">Sign In</a>
                    </button>
                </div>
            </nav>
        </header>

        <section class="w-full h-[348px] bg-[#639290] flex justify-end items-center">
            <div class="text-white px-4 max-w-md ml-4 flex flex-col items-center">
                <p class="text-center mb-4">Welcome to ImIn, a community fueled by compassion and dedication, where your efforts make a real difference. Join us in creating positive change worldwide!</p>
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#F28B2E] text-white hover:bg-orange-600 focus:outline-none focus:ring-1 focus:ring-gray-600">
                    Join Now
                </button>
            </div>
            <img src="{{ asset('images/image01.png') }}" alt="Description" class="max-h-full object-contain ml-auto">
        </section>

        <section class="w-full h-[348px] bg-[#FBF3F0] flex justify-start items-center">
            <img src="{{ asset('images/image04.png') }}" alt="Description" class="h-full object-contain">
            <div class="text-black px-4 max-w-md ml-4 flex flex-col items-center">
                <h2 style="font-size: larger; font-weight: bold;">Want to get more involved?</h2>
                <p class="text-center mb-4">Our mission is to connect passionate volunteers with opportunities that align with their interests, skills, and availability, ensuring a fulfilling and impactful volunteer experience. From environmental conservation to education, health services, and beyond, your journey to making a meaningful contribution starts here.</p>
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#F28B2E] hover:bg-orange-600 focus:outline-none focus:ring-1 focus:ring-gray-600">
                    Sign Up
                </button>
            </div>
        </section>

        <section class="w-full bg-[#F28B2E] text-white flex justify-end items-center">
            <div class="text-white px-4 max-w-md ml-4 flex flex-col items-center">
                <h2 style="font-size: larger; font-weight: bold;">Dive into a world of possibilities:</h2>
                <ul role="list" class="marker:text-blue-600 list-disc ps-5 space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li>
                        Explore a wide range of volunteer opportunities tailored to your passions and talents.
                    </li>
                    <li>
                            Connect with a community of like-minded individuals driven by purpose and the desire to help.
                        </li>
                        <li>
                            Grow through enriching experiences that not only benefit others but also foster personal development and skills enhancement.
                        </li>
                        </ul>
                        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#FFFFFF] text-black hover:bg-orange-600 focus:outline-none focus:ring-1 focus:ring-gray-600">
                            Join Now
                        </button>
                        </div>
                        <img src="{{ asset('images/image05.png') }}" alt="Description" class="max-h-full w-[500px] object-fill ml-auto">
                        </div>
            </section>
    </div>

                        <footer class="bg-white w-full text-black">
                            <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
                                <!-- Grid -->
                                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
                                    <div class="col-span-full lg:col-span-1">
                                        <a class="flex-none text-xl font-semibold text-white" href="#" aria-label="Brand">Brand</a>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-span-1">
                                        <h4 class="font-semibold text-gray-100">Product</h4>

                                        <div class="mt-3 grid space-y-3">
                                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" href="#">Pricing</a></p>
                                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" href="#">Changelog</a></p>
                                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" href="#">Docs</a></p>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-span-1">
                                        <h4 class="font-semibold text-gray-100">Company</h4>

                                        <div class="mt-3 grid space-y-3">
                                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" href="#">About us</a></p>
                                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" href="#">Blog</a></p>
                                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" href="#">Careers</a> <span class="inline ms-1 text-xs bg-blue-700 text-white py-1 px-2 rounded-lg">We're hiring</span></p>
                                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" href="#">Customers</a></p>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-span-2">
                                        <h4 class="font-semibold text-gray-100">Stay up to date</h4>

                                        <form>
                                            <div class="mt-4 flex flex-col items-center gap-2 sm:flex-row sm:gap-3 bg-white rounded-lg p-2">
                                                <div class="w-full">
                                                    <label for="hero-input" class="sr-only">Search</label>
                                                    <input type="text" id="hero-input" name="hero-input" class="py-3 px-4 block w-full border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter your email">
                                                </div>
                                                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#F28B2E] text-white hover:bg-orange-600 focus:outline-none focus:ring-1 focus:ring-gray-600">
Subscribe
                    </button>
                                            </div>
                                            <p class="mt-3 text-sm text-gray-400">
                                                New UI kits or big discounts. Never spam.
                                            </p>
                                        </form>
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Grid -->

                                <div class="mt-5 sm:mt-12 grid gap-y-2 sm:gap-y-0 sm:flex sm:justify-between sm:items-center">
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm text-gray-400">© 2024 ImIn!. All rights reserved.</p>
                                    </div>
                                    <!-- End Col -->

                                    <!-- Social Brands -->
<div class="flex justify-center items-center gap-x-4">

    <!-- YouTube Icon -->
<a href="https://www.youtube.com" target="_blank">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="#FF0000" xmlns="http://www.w3.org/2000/svg">
        <!-- Paste your SVG path data here -->
        <path d="/images/youtube.svg" fill="#FF0000"/>
    </svg>
</a>

    <a href="https://www.youtube.com" target="_blank" class="hover:opacity-75">
        <img src="/images/youtube.svg" alt="YouTube" style="fill: #FF0000;" class="w-6 h-6">
    </a>

    <!-- Facebook Icon -->
    <a href="https://www.facebook.com" target="_blank" class="hover:opacity-75">
        <img src="/images/facebook.svg" alt="Facebook" style="fill: #1877F2;" class="w-6 h-6">
    </a>

    <!-- Instagram Icon -->
    <a href="https://www.instagram.com" target="_blank" class="hover:opacity-75">
        <img src="/images/instagram.svg" alt="Instagram" style="fill: #C13584;" class="w-6 h-6">
    </a>

    <!-- Twitter Icon -->
    <a href="https://www.twitter.com" target="_blank" class="hover:opacity-75">
        <img src="/images/twitter.svg" alt="Twitter" style="fill: #1DA1F2;" class="w-6 h-6">
    </a>
</div>

                                </div>
                            </div>
        </footer>

@endsection