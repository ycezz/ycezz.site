<!-- Navbar -->
<header id="Header">
    <!-- Logo desktop, Search Bar -->
    <div
      class="hidden items-center justify-center lg:flex lg:justify-between lg:px-[100px] lg:py-[76px]"
    >
      <div>
        <a href="{{ route('front.index') }}" class="logo">ycezz.site</a>
      </div>
      <div class="relative">
        <form action="{{ route('front.search') }}">

            @csrf

          <input
            type="text"
            placeholder="Search..."
            class="rounded-xl bg-gray-200 px-[50px] py-[15px] pl-10 focus:outline-none"
          />
          <i
            class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 transform text-gray-500"
          ></i>
        </form>
      </div>
    </div>

    <!-- Logo Mobile -->
    <div
      class="flex items-center justify-between px-[50px] py-[60px] lg:hidden"
    >
      <a href="{{ route('front.index') }}" class="logo-mobile">ycezz.site</a>
    </div>

    <!-- Button Navbar Mobile -->
    <button
      class="absolute right-10 top-16 flex flex-col items-center align-middle lg:hidden"
      @click="openMenu = !openMenu"
      :aria-expanded="openMenu"
    >
      <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Sidebar Navbar -->
    <nav
      id="MobileNav"
      class="fixed bottom-0 left-0 right-0 top-0 z-10 backdrop-blur-2xl"
      :hidden="!openMenu"
    >
      <ul
        class="absolute bottom-0 right-0 top-0 z-10 w-8/12 py-4 drop-shadow-2xl"
      >
        <li class="border-b border-inherit">
          <a href="{{ route('front.search') }}" class="block p-3 hover:text-[#FF644D]"
            >Blogs</a
          >
        </li>
        <li class="border-b border-inherit">
          <a
            href="about.html"
            target="_blank"
            class="block p-3 hover:text-[#FF644D]"
            >About</a
          >
        </li>
        <li class="border-b border-inherit">
          <a href="portfolio.html" class="block p-3 hover:text-[#FF644D]"
            >Portfolio</a
          >
        </li>
        <li class="border-b border-inherit">
          <a href="quote.html" class="block p-3 hover:text-[#FF644D]"
            >Request a Quote</a
          >
        </li>
        <li class="relative">
          <form action="searchPage.html">
            <input
              type="text"
              placeholder="Search..."
              class="mt-3 block w-full rounded-xl p-3 pl-10 text-[17px] drop-shadow-2xl focus:outline-none"
            />
            <i
              class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 transform"
            ></i>
          </form>
        </li>
      </ul>
      <button
        class="absolute bottom-0 left-0 right-0 top-7"
        @click="openMenu = !openMenu"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="absolute left-2 top-2 h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="size-6"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M6 18 18 6M6 6l12 12"
          />
        </svg>
      </button>
    </nav>

    <!-- Navbar Desktop-->
    <nav
      id="Navbar"
      class="hidden items-center justify-center px-6 py-4 lg:flex lg:space-x-10 lg:py-4"
    >
      <a href="{{ route('front.search') }}" class="nav-link">
        <i
          class="fa-regular fa-newspaper hover:text-[#FF644D]"
          width="24"
          height="24"
        ></i>
        <span>Blogs</span>
      </a>

      <a href="about.html" target="_blank" class="nav-link">
        <i class="fa-solid fa-circle-info hover:text-[#FF644D]"></i>
        <span>About</span>
      </a>
      <a href="portfolio.html" class="nav-link">
        <i class="fa-regular fa-file-code hover:text-[#FF644D]"></i>
        <span>Portfolio</span>
      </a>
      <a href="quote.html" class="nav-link">
        <i class="fa-solid fa-paper-plane hover:text-[#FF644D]"></i>
        <span>Request a Quote</span>
      </a>
    </nav>
  </header>