<nav class="w-full z-30 top-0 mt-0 bg-gray-200">
    <div class="flex justify-between py-2 px-3">
        <div>
            <a href="/">
                @include('vendor/nova/partials/logo')
            </a>
        </div>
        <div class="flex flex-col items-end">
            <input class="hidden" type="checkbox" id="menu-toggle" />
            <label for="menu-toggle" class="cursor-pointer block md:hidden">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>

            <div class="hidden md:block text-right" id="menu">
                <ul class="md:inline-flex">
                    <li class="mx-2 mb-1 pr-3 py-2 border-b-2 border-gray-400 md:border-b-0">
                        <a class="inline-block no-underline uppercase font-bold text-xs" href="/">Home
                        </a>
                    </li>
                    <li class="mx-2 mb-1 pr-3 py-2 border-b-2 border-gray-400 md:border-b-0">
                        <a class="inline-block no-underline uppercase font-bold text-xs" href="/cars">Cars
                        </a>
                    </li>
                    <li class="mx-2 mb-1 pr-3 py-2 border-b-2 border-gray-400 md:border-b-0">
                        <a class="inline-block no-underline uppercase font-bold text-xs" href="/motorbikes">Motorbikes</a>
                    </li>
                    <li class="mx-2 mb-1 pr-3 py-2 border-b-2 border-gray-400 md:border-b-0">
                        <a class="inline-block no-underline uppercase font-bold text-xs" href="/parts">Parts</a>
                    </li>
                    <li class="mx-2 mb-1 pr-3 py-2 border-b-2 border-gray-400 md:border-b-0">
                        <a class="inline-block no-underline uppercase font-bold text-xs" href="/loan">
                            Loan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>