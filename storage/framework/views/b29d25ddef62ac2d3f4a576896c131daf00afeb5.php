<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web DKP</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script src="https://kit.fontawesome.com/19579c18fe.js" crossorigin="anonymous"></script> <!--FONT AWESOME-->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="output.css" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="bg-cover text-white bg-gray-950/70 bg-blend-color-dodge"
        style="background-image: url('<?php echo e(asset('ASSETS/banner1-pangan.jpg')); ?>')">
        <!-- Navbar -->
        <nav class="bg-transparent">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                        <button onclick="toggleButton1()" id="button1" type="button"
                            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <script>
                            function toggleButton1() {
                                let dropdown2 = document.querySelector('#dropdown2');
                                dropdown2.classList.toggle('hidden');
                            }
                        </script>
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex flex-shrink-0 items-center">
                            <img class="h-8 w-auto" src="ASSETS/dkp_mks.png" alt="Your Company">
                        </div>
                        <div class="hidden sm:ml-6 sm:block">
                            <div class="flex space-x-4">
                                <a href="DASHBOARD/index.html"
                                    class="rounded-md hover:text-amber-500 px-3 py-2 text-sm font-medium"
                                    aria-current="page">Dashboard</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium hover:text-amber-500">Team</a>
                                <a href="<?php echo e(asset('PROJECT/pilih.html')); ?>"
                                    class="rounded-md px-3 py-2 text-sm font-medium hover:text-amber-500">Projects</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium hover:text-amber-500">Informasi
                                    Publik</a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <button type="button"
                            class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div>
                                <button onclick="toggleDropdown()" id="button" type="button"
                                    class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </button>
                            </div>
                            <div id="dropdown"
                                class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1">
                                <a href="PROFILE/profile.html" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-1">Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-2">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SCRIPT DROPDOWN -->
            <script>
                function toggleDropdown() {
                    let dropdown = document.querySelector('#dropdown');
                    dropdown.classList.toggle('hidden');
                }
            </script>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="dropdown2">
                <div class="space-y-1 px-2 pb-3 pt-2">
                    <a href="#" class="block rounded-md underline px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Dashboard</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-amber-500 hover:text-white">Team</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-amber-500 hover:text-white">Projects</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-amber-500 hover:text-white">Calendar</a>
                </div>
            </div>
        </nav>
        <section class="text-white">
            <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
                <div class="mx-auto max-w-3xl text-center">
                    <h1 class="bg-clip-text text-3xl font-extrabold sm:text-5xl">
                        Bidang Konsumsi dan

                        <span class="mt-2 pb-2 sm:block "> Penganekaragaman Pangan </span>
                    </h1>

                    <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                        numquam ea!
                    </p>

                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <a class="block w-full rounded border border-amber-500 bg-amber-500 px-12 py-3 text-sm text-black font-medium hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
                            href="#">
                            Get Started
                        </a>

                        <a class="block w-full rounded border border-amber-500 px-12 py-3 text-sm font-medium hover:bg-amber-500 focus:outline-none hover:text-black focus:ring sm:w-auto"
                            href="#">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- STATISTIK -->
    <section class="bg-gray-50 py-8 md:py-16">
        <div class="bg-gray-50 rounded-lg max-w-7xl mx-auto">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Trusted by eCommerce Businesses</h2>

                <p class="mt-4 text-gray-500 sm:text-xl">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolores laborum labore
                    provident impedit esse recusandae facere libero harum sequi.
                </p>
            </div>
            <dl class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-8">
                <div class="flex flex-col items-center rounded-lg border border-black p-6 shadow-md text-center">
                    <dt class="text-xl font-medium text-black">Diversifikasi dan Ketahanan Pangan</dt>
                    <dd-2 class="mt-2 text-gray-600">Happy Customers</dd-2>
                </div>
                <div class="flex flex-col items-center rounded-lg border border-black p-6 shadow-md text-center">
                    <dt class="text-xl font-medium text-black">Pengawasan Keamanan Pangan
                    </dt>
                    <dd-2 class="mt-2 text-gray-600">Projects Completed</dd>
                </div>
                <div class="flex flex-col items-center rounded-lg border border-black p-6 shadow-md text-center">
                    <dt class="text-xl font-medium text-black">Penanganan Kerawanan Pangan</dt>
                    <dd-2 class="mt-2 text-gray-600">Awards Won</dd>
                </div>
            </dl>
        </div>

        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <dl class="mt-6 grid grid-cols-1 gap-4 sm:mt-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
                    <dt class="order-last text-lg font-medium text-gray-500">Total Sales</dt>

                    <dd class="text-4xl font-extrabold text-black md:text-5xl">$4.8m</dd>
                </div>

                <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
                    <dt class="order-last text-lg font-medium text-gray-500">Official Addons</dt>

                    <dd class="text-4xl font-extrabold text-black md:text-5xl">24</dd>
                </div>

                <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
                    <dt class="order-last text-lg font-medium text-gray-500">Total Addons</dt>

                    <dd class="text-4xl font-extrabold text-black md:text-5xl">86</dd>
                </div>
                <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
                    <dt class="order-last text-lg font-medium text-gray-500">Downloads</dt>

                    <dd class="text-4xl font-extrabold text-black md:text-5xl">86k</dd>
                </div>
            </dl>
        </div>
    </section>
    <!-- CARDS / ARTIKEL DKP -->
    <!-- Palette Warna = bg-gradient-to-r from-black via-blue-500 to-black -->
    <section class="bg-white">
        <div class="">
            <h2 class="text-center text-3xl sm:text-4xl font-bold py-4">Berita Terkini</h2>
        </div>
        <div
            class="justify-items-center sm:w-4/5 md:w-3/4 lg:w-3/5 xl:w-3/5 2xl:w-1/2 custom-3xl:w-2/5 custom-4xl:w-1/3 custom-5xl:w-1/4 container mx-auto my-custom-class">
            <div class="w-fit py-4 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-2 justify-items-center">
                <article
                    class="relative overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm 2xl:max-w-xl transition hover:shadow-lg">
                    <span
                        class="absolute -right-px -top-px rounded-bl-3xl rounded-tr-3xl bg-amber-500 px-6 py-4 font-semibold uppercase tracking-widest">
                        03 Feb
                    </span>
                    <a href="<?php echo e(asset('ARTIKEL/index.html')); ?>"><img alt=""
                            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            class="h-56 w-full object-cover" /></a>

                    <div class="p-4 sm:p-6">
                        <a href="#">
                            <h3 class="text-lg font-medium text-gray-900">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </h3>
                        </a>

                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                            pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                            quidem,
                            mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                            dignissimos. Molestias explicabo corporis voluptatem?
                        </p>

                        <a href="ARTIKEL/index.html"
                            class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-amber-500">
                            Find out more

                            <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                                &rarr;
                            </span>
                        </a>
                    </div>
                </article>
                <article
                    class="relative overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm 2xl:max-w-xl transition hover:shadow-lg">
                    <span
                        class="absolute -right-px -top-px rounded-bl-3xl rounded-tr-3xl bg-amber-500 px-6 py-4 font-semibold uppercase tracking-widest">
                        03 Feb
                    </span>
                    <a href="<?php echo e(asset('ARTIKEL/index.html')); ?>"><img alt=""
                            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            class="h-56 w-full object-cover" /></a>

                    <div class="p-4 sm:p-6">
                        <a href="#">
                            <h3 class="text-lg font-medium text-gray-900">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </h3>
                        </a>

                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                            pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                            quidem,
                            mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                            dignissimos. Molestias explicabo corporis voluptatem?
                        </p>

                        <a href="ARTIKEL/index.html"
                            class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-amber-500">
                            Find out more

                            <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                                &rarr;
                            </span>
                        </a>
                    </div>
                </article>
                <article
                    class="relative overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm 2xl:max-w-xl transition hover:shadow-lg">
                    <span
                        class="absolute -right-px -top-px rounded-bl-3xl rounded-tr-3xl bg-amber-500 px-6 py-4 font-semibold uppercase tracking-widest">
                        03 Feb
                    </span>
                    <a href="<?php echo e(asset('ARTIKEL/index.html')); ?>"><img alt=""
                            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            class="h-56 w-full object-cover" /></a>

                    <div class="p-4 sm:p-6">
                        <a href="#">
                            <h3 class="text-lg font-medium text-gray-900">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </h3>
                        </a>

                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                            pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                            quidem,
                            mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                            dignissimos. Molestias explicabo corporis voluptatem?
                        </p>

                        <a href="ARTIKEL/index.html"
                            class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-amber-500">
                            Find out more

                            <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                                &rarr;
                            </span>
                        </a>
                    </div>
                </article>
                <article
                    class="relative overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm 2xl:max-w-xl transition hover:shadow-lg ">
                    <span
                        class="absolute -right-px -top-px rounded-bl-3xl rounded-tr-3xl bg-amber-500 px-6 py-4 font-semibold uppercase tracking-widest">
                        03 Feb
                    </span>
                    <a href="<?php echo e(asset('ARTIKEL/index.html')); ?>"><img alt=""
                            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            class="h-56 w-full object-cover" /></a>

                    <div class="p-4 sm:p-6">
                        <a href="#">
                            <h3 class="text-lg font-medium text-gray-900">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </h3>
                        </a>

                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                            pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                            quidem,
                            mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                            dignissimos. Molestias explicabo corporis voluptatem?
                        </p>

                        <a href="ARTIKEL/index.html"
                            class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-amber-500">
                            Find out more

                            <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                                &rarr;
                            </span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- SPONSOR -->
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg/8 font-semibold text-gray-900">Instansi Yang Bekerja sama
            </h2>
            <div
                class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/plus/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor"
                    width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/plus/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/plus/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full objxect-contain sm:col-start-2 lg:col-span-1"
                    src="https://tailwindui.com/plus/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal"
                    width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                    src="https://tailwindui.com/plus/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                    width="158" height="48">
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="bg-gray-100">
        <div class="mx-auto max-w-screen-xl px-4 pb-8 pt-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-md">
                <strong class="block text-center text-xl font-bold text-gray-900 sm:text-3xl">
                    Want us to email you with the latest blockbuster news?
                </strong>

                <form class="mt-6">
                    <div class="relative max-w-lg">
                        <label class="sr-only" for="email"> Email </label>

                        <input class="w-full rounded-full border-gray-200 bg-gray-100 p-4 pe-32 text-sm font-medium"
                            id="email" type="email" placeholder="john@doe.com" />

                        <button
                            class="absolute end-1 top-1/2 -translate-y-1/2 rounded-full bg-amber-500 px-5 py-3 text-sm font-medium text-white transition hover:bg-blue-700">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-32">
                <div class="mx-auto max-w-sm lg:max-w-none">
                    <p class="mt-4 text-center text-gray-500 lg:text-left lg:text-lg">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium natus quod eveniet
                        aut perferendis distinctio iusto repudiandae, provident velit earum?
                    </p>

                    <div class="mt-6 flex justify-center gap-4 lg:justify-start">
                        <a class="text-gray-700 transition hover:text-gray-700/75"
                            href="https://www.facebook.com/profile.php?id=100075803721060&mibextid=LQQJ4d"
                            target="_blank" rel="noreferrer">
                            <span class="sr-only"> Facebook </span>

                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a class="text-gray-700 transition hover:text-gray-700/75"
                            href="https://www.instagram.com/dinasketahananpangan_makassar" target="_blank"
                            rel="noreferrer">
                            <span class="sr-only"> Instagram </span>

                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a class="text-gray-700 transition hover:text-gray-700/75" href="https://x.com/dkp_makassar"
                            target="_blank" rel="noreferrer">
                            <span class="sr-only"> Twitter </span>

                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>

                        <a class="text-gray-700 transition hover:text-gray-700/75" href="#" target="_blank"
                            rel="noreferrer">
                            <span class="sr-only"> GitHub </span>

                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a class="text-gray-700 transition hover:text-gray-700/75" href="#" target="_blank"
                            rel="noreferrer">
                            <span class="sr-only"> Dribbble </span>

                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-8 text-center lg:grid-cols-3 lg:text-left">
                    <div>
                        <strong class="font-medium text-gray-900"> Services </strong>

                        <ul class="mt-6 space-y-1">
                            <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Marketing </a>
                            </li>

                            <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                    Graphic Design
                                </a>
                            </li>

                            <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                    App Development
                                </a>
                            </li>

                            <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                    Web Development
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <strong class="font-medium text-gray-900"> About </strong>

                        <ul class="mt-6 space-y-1">
                            <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> About </a>
                            </li>

                            <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Careers </a>
                            </li>

                            <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> History </a>
                            </li>

                            <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Our Team </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <strong class="font-medium text-gray-900"> Support </strong>

                        <ul class="mt-6 space-y-1">
                            <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> FAQs </a>
                            </li>

                            <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Contact </a>
                            </li>

                            <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Live Chat </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-16 border-t border-gray-100 pt-8">
                <p class="text-center text-xs/relaxed text-gray-500">
                    © Dinas Ketahanan Pangan 2024. All rights reserved.

                    <br />

                    Created with
                    <a href="#" class="text-gray-700 underline transition hover:text-gray-700/75">Laravel</a>
                    and
                    <a href="#" class="text-gray-700 underline transition hover:text-gray-700/75">Laravel
                        Livewire</a>.
                </p>
            </div>
        </div>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\my-project\resources\views/welcome.blade.php ENDPATH**/ ?>