<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/component.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body class="bg-white">
<div class="flex min-h-full">
    <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <img class="h-12 w-15" src="/image/logo.png" alt="Your Company">
                <h2 class="mt-8 text-2xl font-bold leading-9 tracking-tight text-white">Sign in to your account</h2>
                <p class="mt-2 text-sm leading-6 text-white">
                    Don't have an account?
                    <a href="{{ url('/register') }}" class="font-semibold text-indigo-600 hover:text-gray-500" style="color: gray;">Register here</a>
                </p>
            </div>

            <div class="mt-10">
                <div>
                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-white">Email address</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="remember-me" class="ml-3 block text-sm leading-6 text-white">Remember me</label>
                            </div>

                            <div class="text-sm leading-6">
                                <a href="{{ route('password.request') }}" class="font-semibold text-indigo-600 hover:text-gray-500" style="color: gray;">Forgot password?</a>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-gray-600 shadow-sm hover:bg-gray-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600" style="background-color: #646464; color: #555555;">
                                <span style="color: rgb(255, 255, 255);">Sign in</span>
                            </button>
                        </div>
                    </form>
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
            </div>
        </div>
    </div>
    <div class="relative hidden w-0 flex-1 lg:block">
        <img class="absolute inset-0 h-full w-full object-cover" src="/image/background.jpg" alt="">
    </div>
</div>

</body>
</html>
