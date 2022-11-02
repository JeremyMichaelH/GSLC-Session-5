@extends('layouts.default')

@section('page-content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto">
            <h2 class="text-4xl sm:text-8xl">Best Instrumental <span class="text-pink-500">Shop</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">In Town</h3>
        </div>

        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to see more</p>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Type</h3>
            <h4 class="text-xl mb-3 text-gray-200">Description</h4>
            <p class="mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ut aperiam quae eaque voluptatum quod voluptas asperiores. Atque dolor earum veritatis nobis quasi unde nihil, mollitia id magni recusandae cum culpa dolorem quis fugit dicta incidunt ipsum excepturi eligendi vero sed ex doloribus reprehenderit quas. Et quae ratione molestias facilis.
            </p>
            <a href="{{route('about')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">see more</a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">What do you want to know</h3>
            <div class="flex flex-wrap -mx-2">
            <div class="w-full sm:w-1/2 mb-3 px-2">
            <div class="p-4 bg-gray-500 h-full rounded-lg">
            <h3 class="text-xl font-bold mb-3">Piano</h3>
            <p class="textgray-200 mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti consequuntur eligendi ipsum ea illo quis, veritatis magni minima culpa odio, dignissimos itaque iure a voluptatibus quos rem dolor numquam. Molestiae, tempore non earum quis hic consequuntur esse officia, asperiores, ipsam reiciendis quia perspiciatis ut cumque ducimus eum nostrum eveniet et!
                <p>
                    <a href="{{url('https://www.youtube.com/watch?v=OF7Hw-3pbCY')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Watch now</a>
        </div>
    </div>
    <div class="w-full sm:w-1/2 mb-3 px-2">
        <div class="p-4 bg-gray-500 h-full rounded-lg">
        <h3 class="text-xl font-bold mb-3">Drum</h3>
        <p class="textgray-200 mb-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti consequuntur eligendi ipsum ea illo quis, veritatis magni minima culpa odio, dignissimos itaque iure a voluptatibus quos rem dolor numquam. Molestiae, tempore non earum quis hic consequuntur esse officia, asperiores, ipsam reiciendis quia perspiciatis ut cumque ducimus eum nostrum eveniet et!
            <p>
                <a href="{{url('https://www.youtube.com/watch?v=7Sl-Arnq2JM')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Watch now</a>
    </div>
</div>
</div>
</div>
    </section>
@endsection
