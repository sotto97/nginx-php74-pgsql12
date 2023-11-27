<x-app-layout>
    <div class="py-10 flex justify-center items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('coffee.create') }}" method="get">
                <button class=" text-gray-900 bg-white hover:bg-yellow-200 border-gray-100 hover:border-yellow-200 border-2 transition shadow-md rounded-lg">
                    <div class="block pt-6 pb-4 px-8">
                        <img src="{{ asset('img/coffee-machine.png') }}" alt="" class="w-24 mx-auto text-center">
                        <p class="p-4">今日のCoffeEを登録</p>
                    </div>
                </button>
            </form>
        </div>
    </div>
</x-app-layout>