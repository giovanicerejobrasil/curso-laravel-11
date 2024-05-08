@if (session()->has('success'))
    <div class="p-4 my-6 text-sm bg-green-50 rounded-lg text-white dark:bg-gray-700 dark:text-white">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('message'))
    <div class="p-4 my-6 text-sm bg-white-50 rounded-lg text-black dark:bg-gray-700 dark:text-white">
        {{ session('message') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="p-4 my-6 text-sm bg-red-50 rounded-lg text-white dark:bg-gray-700 dark:text-white">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="p-4 my-6 text-sm bg-yellow-50 rounded-lg text-white dark:bg-gray-700 dark:text-white">{{ $error }}</li>
        @endforeach
    </ul>
@endif
