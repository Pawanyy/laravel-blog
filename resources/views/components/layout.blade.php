<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Open+Sans:ital,wght@0,400;0,600;1,700&family=Sacramento&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
</head>

<body style="font-family: Open Sans, san-serif;">

    <section class="px-6 py-4 bg:blue-10">

        <nav class="md:flex justify-between items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <span class="text-xs uppercase font-bold">Welcome , {{auth()->user()->name}}</span>

                    <form action="/logout" method="post" class="text-xs font-semibold text-blue-500 ml-6">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                    @else
                    <a href="/register" class="text-xs text-black font-bold">Register</a>
                @endauth
                <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs text-white font-semibold px-5 py-3">Suscribe
                    For
                    Updates</a>
            </div>
        </nav>

        {{ $slot }}

        <footer class="py-8 px-10 mt-16 text-center bg-gray-100 rounded-xl border border-black border-opacity-5">
            <img src="/images/lary-newsletter-icon.svg" class="mx-auto" alt="" srcset="">
            <h5 class="text-3xl">Stay in Touch With Latest Posts</h5>
            <p>Promise to keep inbox clean. No Bugs.</p>
            <div class="mt-6">
                <div class="rounded-full md:inline-block mx-auto md:bg-gray-300">
                    <form class="md:flex" action="" method="post">
                        <div class="px-4 py-2 md:inline-flex items-center">
                            <label class="hidden md:block" for="email">
                                <img src="/images/mailbox-icon.svg" alt="">
                            </label>
                            <input class="px-3 py-2 md:p-0 md:bg-transparent md:pl-4" id="email" type="text"
                                placeholder="Your Email address">
                        </div>
                        <button class="px-4 py-2 font-bold rounded-full text-white bg-blue-500 hover:bg-blue-600"
                            type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

    <x-flash></x-flash>

</body>

</html>