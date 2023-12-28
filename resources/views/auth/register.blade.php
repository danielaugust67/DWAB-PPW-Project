<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="{{ asset('css/component.css') }}" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="flex min-h-full">
        <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <img class="h-12 w-15" src="/image/logo.png" alt="Your Company">
                    <h2 class="mt-8 text-2xl font-bold leading-9 tracking-tight text-white">Create an account</h2>
                    <p class="mt-2 text-sm leading-6 text-white">
                        Have an account?
                        <a href="{{ url('/login') }}" class="font-semibold text-indigo-600 hover:text-gray-500" style="color: gray;">Sign in</a>
                    </p>
                </div>

                <div class="mt-8">
                    <form method="POST" action="{{ route('register') }}" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium leading-6 text-white">Username</label>
                            <div class="mt-2">
                                <input id="name" name="name" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-white">Email address</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" autocomplete="new-password" required class="block w-full rounded-md border-0 py-1 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium leading-6 text-white">Confirm Password</label>
                            <div class="mt-2">
                                <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="block w-full rounded-md border-0 py-1 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="w-full py-2 text-sm font-semibold text-white bg-gray-600 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600">
                                Register
                            </button>
                        </div>

                        <div class="mt-10">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                    </div>
                    <div class="mt-6 grid grid-cols-2 gap-4">
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="relative hidden w-0 flex-1 lg:block">
            <img class="absolute inset-0 h-full w-full object-cover" src="/image/background.jpg" alt="">
        </div>
    </div>
</body>

</html>
