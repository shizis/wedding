<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign up</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="min-h-screen bg-zinc-100 antialiased">
        <main class="mx-auto flex min-h-screen max-w-(--breakpoint-xl) flex-col place-content-center gap-4 px-6">
            <div class="inline-flex justify-end">
                <a href="/" class="rounded-sm border border-gray-300 bg-white p-2 hover:bg-gray-100">
                    <x-lucide-house class="size-5 text-gray-500" />
                </a>
            </div>
            <div class="grid w-full grid-cols-2 shadow-sm">
                <div class="w-full rounded-s-sm border-y border-s border-gray-300 bg-blue-300">
                    <img src="" alt="">
                </div>

                <div
                    class="py-15 flex w-full flex-col gap-y-4 rounded-e-sm border-y border-r border-gray-300 bg-white px-10">
                    <h1 class="text-2xl font-semibold text-gray-700">Sign up</h1>

                    <form method="POST" action="{{ route('register') }}" class="mt-15 space-y-4">
                        @csrf
                        <div class="relative">
                            <input type="text" name="name"
                                class="peer block w-full border-b-2 border-x-transparent border-b-gray-200 border-t-transparent bg-transparent py-2.5 pe-0 ps-10 focus:border-x-transparent focus:border-b-blue-500 focus:border-t-transparent focus:ring-0 disabled:pointer-events-none disabled:opacity-50 sm:py-3 sm:text-sm"
                                placeholder="Username">
                            <div
                                class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-2 peer-disabled:pointer-events-none peer-disabled:opacity-50">
                                <x-lucide-user class="size-5 shrink-0 text-gray-500" />
                            </div>
                        </div>

                        <div class="relative">
                            <input type="email" name="email"
                                class="peer block w-full border-b-2 border-x-transparent border-b-gray-200 border-t-transparent bg-transparent py-2.5 pe-0 ps-10 focus:border-x-transparent focus:border-b-blue-500 focus:border-t-transparent focus:ring-0 disabled:pointer-events-none disabled:opacity-50 sm:py-3 sm:text-sm"
                                placeholder="Email">
                            <div
                                class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-2 peer-disabled:pointer-events-none peer-disabled:opacity-50">
                                <x-lucide-mail class="size-5 shrink-0 text-gray-500" />
                            </div>
                        </div>

                        <div class="relative">
                            <input type="password" name="password"
                                class="peer block w-full border-b-2 border-x-transparent border-b-gray-200 border-t-transparent bg-transparent py-2.5 pe-0 ps-10 focus:border-x-transparent focus:border-b-blue-500 focus:border-t-transparent focus:ring-0 disabled:pointer-events-none disabled:opacity-50 sm:py-3 sm:text-sm"
                                placeholder="Password">
                            <div
                                class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-2 peer-disabled:pointer-events-none peer-disabled:opacity-50">
                                <x-lucide-key-square class="size-5 shrink-0 text-gray-500" />
                            </div>
                        </div>

                        <div class="relative">
                            <input type="password" name="password_confirmation"
                                class="peer block w-full border-b-2 border-x-transparent border-b-gray-200 border-t-transparent bg-transparent py-2.5 pe-0 ps-10 focus:border-x-transparent focus:border-b-blue-500 focus:border-t-transparent focus:ring-0 disabled:pointer-events-none disabled:opacity-50 sm:py-3 sm:text-sm"
                                placeholder="Confirm Password">
                            <div
                                class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-2 peer-disabled:pointer-events-none peer-disabled:opacity-50">
                                <x-lucide-lock-keyhole class="size-5 shrink-0 text-gray-500" />
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex gap-x-2">
                                <input id="remember-me" name="remember-me" type="checkbox"
                                    class="mt-0.5 shrink-0 cursor-pointer rounded-sm border-gray-300 text-blue-600 focus:ring-blue-500">
                                <label for="remember-me" class="text-sm text-gray-600">
                                    I accept the
                                    <a class="focus:outline-hidden font-medium text-blue-600 hover:underline focus:underline"
                                        href="#">
                                        Terms and Conditions
                                    </a>
                                </label>
                            </div>
                        </div>
                        <button type="submit"
                            class="mt-10 block w-full rounded-sm bg-gray-800 px-4 py-3 text-sm text-white hover:bg-gray-700">
                            Sign up now
                        </button>
                    </form>

                    <div
                        class="flex items-center py-1 text-xs uppercase text-gray-400 before:me-6 before:flex-1 before:border-t before:border-gray-200 after:ms-6 after:flex-1 after:border-t after:border-gray-200">
                        Or
                    </div>
                    <button type="button"
                        class="shadow-2xs focus:outline-hidden inline-flex w-full items-center justify-center gap-x-2 rounded-sm border border-gray-200 bg-white px-4 py-3 text-sm font-medium text-gray-800 hover:bg-gray-100 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50">
                        <svg class="h-auto w-4" width="46" height="47" viewBox="0 0 46 47" fill="none">
                            <path
                                d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z"
                                fill="#4285F4" />
                            <path
                                d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z"
                                fill="#34A853" />
                            <path
                                d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z"
                                fill="#FBBC05" />
                            <path
                                d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z"
                                fill="#EB4335" />
                        </svg>
                        Sign up with Google
                    </button>

                    <div class="mt-6 flex justify-center">
                        <span class="text-sm text-gray-500">Already have an account?
                            <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-700 hover:underline">
                                Sign in here
                            </a>
                        </span>
                    </div>

                </div>
            </div>
        </main>
    </body>

</html>
