<x-app-layout>
    @section('hero')
    <div class="w-full text-center py-32">
        <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
            Welcome to <span class="text-yellow-500">&lt;DearX&gt;</span> <span class="text-gray-900"> Updates</span>
        </h1>
        <p class="text-gray-500 text-lg mt-1">Trusted Communication between people and their Governing bodies</p>
        <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
            href="http://127.0.0.1:8000/blog">Send Your Concern
            </a>
    </div>
    @endsection

        <div class="mb-10 w-full">
            <div class="mb-16">
                <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Featured Posts</h2>
                <div class="w-full">
                    <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach($featuredPosts as $post)
                    
                 <div >
                    
                    <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />

                 </div>
                    @endforeach
             </div>
                <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                    href="http://127.0.0.1:8000/blog">More
                    Posts</a>
            </div>
            <hr>

            <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Latest Posts</h2>
            <div class="w-full mb-5">
                <div class="grid grid-cols-3 gap-10 gap-y-32 w-full">
                @foreach($latestPosts as $post)
                <div >
                    
                    <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3"/>

                 </div>
                 @endforeach
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                href="http://127.0.0.1:8000/blog">More
                Posts</a>
        </div>
    

    <footer class="text-sm space-x-4 flex items-center border-t border-gray-100 flex-wrap justify-center py-4 ">
        <a class="text-gray-500 hover:text-yellow-500" href="">About Us</a>
        <a class="text-gray-500 hover:text-yellow-500" href="">Help</a>
        <a class="text-gray-500 hover:text-yellow-500" href="">Login</a>
        <a class="text-gray-500 hover:text-yellow-500" href="">Explore</a>
    </footer>
</body>
</x-app-layout>
