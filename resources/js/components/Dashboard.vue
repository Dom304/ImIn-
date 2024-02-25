<template>
  <div class="dashboard">
        <header class="flex justify-between w-full bg-white text-sm py-4">
            <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap items-center justify-between" aria-label="Global">

                <div class="flex items-center gap-x-2">
                    <a class="flex items-center gap-x-2" href="#">
                        <img src="/public/images/logo.png" alt="Logo" class="h-8 w-auto max-h-42">
                        <span class="text-xl font-semibold text-[#4D8380]">ImIn!</span>
                    </a>
                </div>

                <div class="flex items-center gap-x-2">
                    <a class="font-medium text-[#4D8380] hover:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-600 px-4" href="#" aria-current="page">Home</a>
                    <a class="font-medium text-[#4D8380] hover:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-600 px-4" href="#">Events</a>
                    <a class="font-medium text-[#4D8380] hover:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-600 px-4" href="#">Blog</a>
                </div>

                <div class="flex items-center gap-x-2">
                    <img class="inline-block size-[38px] rounded-lg" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">
                    <p class="p-2 pl-2"> Hi, John Doe</p>
                </div>
            </nav>
        </header>

        <section style="height: 200px; width: 100%; overflow: hidden; margin-bottom: 100px; position: relative;">
            <img src="/public/images/image06.png" alt="Banner Image" class="object-cover h-full w-full" />
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                <h1 style="color: white; font-size: 32px; font-weight: bold;">Dashboard</h1>
            </div>
        </section>

        <section class="px-4">
            <h2 style="font-size: larger; font-weight: bold;">Upcoming Events</h2>
            <div class="grid grid-cols-3 gap-4">
                <div v-for="job in jobs" :key="job.id">
                    <div class="relative group">
                        <img :src=job.image alt="Image 1" class="object-cover h-64 w-full" />
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-black bg-opacity-50">
                            <div class="text-white text-center">
                                <p>{{ job.title }}</p> 
                                <p>{{ job.description }}</p> 
                                <p class="hover:text-red-500">More Information</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  </div>
</template>

<script>
export default {
  name: 'Dashboard',
    props: {
        jobs: {
            type: Array,
            required: true
        },
    }
}
</script>