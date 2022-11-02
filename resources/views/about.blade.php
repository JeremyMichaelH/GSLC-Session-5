@extends('layouts.default')

@section('page-content')
    <section class="py-20 min-h-screen flex items-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6">About</h2>
            <h3 class="text-4xl text-center text-gray-200 mb-6">What is Musicia?</h3>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi obcaecati at et! Non, quas rerum distinctio, aut ducimus consequatur, cupiditate voluptatum quo doloremque molestiae pariatur! Cum dolor, quasi sint optio accusamus voluptas cumque impedit molestias reprehenderit ipsum nobis eveniet quia porro earum natus illum sequi neque. Sed, voluptatem voluptate iste eius quis officia totam nisi inventore consequuntur minima cum distinctio explicabo debitis optio illum voluptas, assumenda aperiam hic ea rerum facilis! Sint commodi nisi magnam omnis. Facilis, rerum quis? Illo ipsa laborum sapiente quibusdam perferendis earum enim eos mollitia. Temporibus eaque cum, veritatis sed obcaecati inventore quos laboriosam sapiente quae!
            </p>
            <p class="mb-3">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus itaque recusandae maiores, rem explicabo, laborum in iste quis nobis doloremque minima unde error hic quod sunt velit. Fugiat nulla consequuntur eaque placeat omnis ipsam beatae, sequi, possimus enim obcaecati soluta est necessitatibus minus vero quidem quae excepturi fuga sit ipsa.
            </p>
            <div class="text-center">
                <a href="{{route('home')}}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Back to homepage</a>
            </div>

        </div>

    </section>
@endsection
