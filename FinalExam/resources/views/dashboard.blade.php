<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="text-center" style="margin-top: 20px;">
        <h1 style="font-size: 3em; font-weight: bold;">Computer Store</h1>
    </div>

    <div class="container-fluid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px; justify-content: center; height: 60vh; align-items: center; text-align: center;">
        <a href="{{ route('products.index', ['filter' => 'Laptop']) }}" style="text-decoration: none;">
            <div class="box" style="background: #f9f9f9; border: 1px solid #ddd; padding: 30px; transition: all 0.3s; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                <img src="https://cdn.thewirecutter.com/wp-content/media/2023/11/editing-laptop-2048px-231551-2x1-1.jpg?auto=webp&quality=75&crop=1.91:1&width=1200" alt="Laptop Image" style="height: 150px; width: auto;" />
                <h3 style="font-size: 40px;">Laptops</h3>
            </div>
        </a>

        <a href="{{ route('products.index', ['filter' => 'Monitor']) }}" style="text-decoration: none;">
            <div class="box" style="background: #f9f9f9; border: 1px solid #ddd; padding: 30px; transition: all 0.3s; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9ZwkJKFAKsZSUrcLyWJDNG-XNLT3n871ISzWn4s7z1g&s" alt="Monitor Image" style="height: 150px; width: auto;" />
                <h3 style="font-size: 40px;">Monitors</h3>
            </div>
        </a>

        <a href="{{ route('products.index', ['filter' => 'Phone']) }}" style="text-decoration: none;">
            <div class="box" style="background: #f9f9f9; border: 1px solid #ddd; padding: 30px; transition: all 0.3s; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                <img src="https://www.cnet.com/a/img/resize/690ad0a97cf8fc98f3cf851e7b149d2ffc5b171e/hub/2023/05/04/31dfdcf2-1ac3-4320-b40c-4c356300f06e/google-pixel-7a-phone-14.jpg?auto=webp&height=500" alt="Phone Image" style="height: 150px; width: auto;" />
                <h3 style="font-size: 40px;">Phones</h3>
            </div>
        </a>

        <a href="{{ route('products.index', ['filter' => 'TV']) }}" style="text-decoration: none;">
            <div class="box" style="background: #f9f9f9; border: 1px solid #ddd; padding: 30px; transition: all 0.3s; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                <img src="https://www.lg.com/my/images/tvs/md07507147/gallery/new_d2.jpg" alt="Television Image" style="height: 150px; width: auto;" />
                <h3 style="font-size: 40px;">Televisions</h3>
            </div>
        </a>
    </div>
</x-app-layout>
