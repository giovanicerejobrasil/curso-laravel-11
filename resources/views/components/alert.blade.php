@if (session()->has('success'))
    <div class="p-4 my-6 text-sm bg-green-50 rounded-lg text-white dark:bg-green-200 dark:text-gray-900">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('message'))
    <div class="p-4 my-6 text-sm bg-white-50 rounded-lg text-black dark:bg-gray-200 dark:text-gray-800">
        {{ session('message') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="p-4 my-6 text-sm bg-red-50 rounded-lg text-white dark:bg-red-200 dark:text-white">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="p-4 my-6 text-sm bg-yellow-50 rounded-lg text-white dark:bg-yellow-200 dark:text-gray-900">{{
            $error }}</li>
        @endforeach
    </ul>
@endif
