<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ycezz.site</title>
    <link href="{{ asset('output.css') }}" rel="stylesheet" />

    <!-- Alpine JS -->
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap"
      rel="stylesheet"
    />

    <!-- Fontawesome -->
    <script
      src="https://kit.fontawesome.com/d014f0b29d.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body
    class="bg-white font-space text-base text-[#1B2E35] lg:text-xl"
    x-data="{ openMenu : false }"
  >
    <!-- Header -->
    <header id="Header">
      <!-- Logo desktop, Search Bar -->
      <div
        class="hidden items-center justify-center lg:flex lg:justify-between lg:px-[100px] lg:py-[76px]"
      >
        <div>
          <a href="index.html" class="logo">ycezz.site</a>
        </div>
        <div class="relative">
          <form action="searchPage.html">
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
        <a href="index.html" class="logo-mobile">ycezz.site</a>
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
            <a href="searchPage.html" class="block p-3 hover:text-[#FF644D]"
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
        <a href="searchPage.html" class="nav-link">
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

    <main
      class="justify-center px-[50px] py-[5px] lg:flex lg:flex-col lg:px-[100px] lg:py-[76px]"
    >
      <!-- Hero -->
      <section
        id="Hero"
        class="items-center lg:flex lg:space-x-10 2xl:gap-48 2xl:space-x-80"
      >
        <div>
          <h1
            class="pb-[20px] text-[30px] font-medium leading-normal lg:text-[60px] xl:text-[60px]"
          >
            Welcome, to <br />
            my page ;)
          </h1>
          <p class="pb-[40px] lg:pb-[70px]">
            Our digital marketing agency helps businesses, <br />
            grow and succeed online through a range of .
          </p>
          <a
            href="quote.html"
            class="rounded-xl bg-[#FF644D] px-[35px] py-[20px] text-white hover:bg-[#E55641]"
            >Book a consultation</a
          >
        </div>
        <div class="mt-10">
          <img src="{{ asset('assets/banner/hero-image.png') }}" width="609" alt="hero-banner" />
        </div>
      </section>

      <!-- Cards Blog -->
      <section id="Blog" class="mt-[67px]">
        <div class="flex justify-between">
          <h2
            class="rounded-md bg-[#FF644D] px-[17px] py-[10px] text-[15px] font-medium text-white lg:px-[35px] lg:py-[20px] lg:text-[30px]"
          >
            Latest Blog
          </h2>
          <h3
            class="rounded-lg bg-[#8CBBE5] px-[17px] py-[10px] text-[10px] uppercase text-white lg:px-[35px] lg:py-[20px] lg:text-[20px]"
          >
            Up to date
          </h3>
        </div>
        <div
          class="mt-[80px] grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-5 xl:grid-cols-3"
        >

        @foreach ($blogs as $blog)
          <div class="custom-shadow max-w-screen-sm rounded-3xl">
            <a href="details.html">
              <img
                class="rounded-t-3xl"
                src="{{ Storage::url($blog->thumbnail) }}"
                alt="image-blog"
              />
            </a>
            <div class="p-5">
              <h3 class="mt-5 text-[30px] font-medium">
                {{ $blog->name }}
              </h3>
              <p class="mt-10 text-gray-600">{{ $blog->created_at->format('M d, Y') }}</p>
            </div>
          </div>
        @endforeach

        </div>
      </section>

      <!-- Adsvertisiment -->
      <section
        id="Advertisement"
        class="mx-auto mt-[70px] flex max-w-[1130px] justify-center"
      >
        <div class="flex w-fit shrink-0 flex-col gap-3">
          <a href="https://flowbite.com/">
            <div
              class="flex h-[120px] w-[300px] shrink-0 overflow-hidden rounded-2xl border border-[#EEF0F7] md:w-[600px] xl:h-[150px] xl:w-[1000px]"
            >
              <img
                src="/src/img/alpukat.jpg"
                class="h-full w-full object-cover"
                alt="ads"
              />
            </div>
          </a>
          <div class="group relative flex gap-1">
            <img
              src="/src/img/Question_light.svg"
              alt="question-ads"
              class="h-[18px] w-[18px]"
            />
            <div
              class="absolute bottom-full left-1/2 mb-2 hidden -translate-x-1/2 transform rounded-md bg-gray-800 px-2 py-1 text-xs text-white group-hover:block"
            >
              This is an affiliate link, which means if you make a purchase, I
              may earn a small commission at no extra cost to you.
            </div>
            <p
              class="flex gap-1 text-sm font-medium leading-[21px] text-[#8CBBE5]"
            >
              Our Advertisement
            </p>
          </div>
        </div>
      </section>
    </main>

    <footer class="mt-[25px] px-[50px] lg:mt-[134px] lg:px-[100px]">
      <div>
        <a href="index.html" class="text-[20px] font-medium lg:text-[40px]"
          >ycezz.site</a
        >
      </div>
      <div
        class="mt-[34px] flex flex-col space-y-5 lg:mt-[54px] lg:flex-row lg:space-x-10 lg:space-y-0"
      >
        <div class="mb-2">
          <h4 class="font-semibold">Location</h4>
          <p>Jembrana, Bali, Indonesia</p>
        </div>
        <div>
          <h4 class="font-semibold">Contact</h4>
          <a href="https://mail.google.com/" class="a-link">hell@ycezz.site</a>
        </div>
        <div>
          <h4 class="font-semibold">Social Media</h4>
          <div class="flex gap-4">
            <a href="https://www.youtube.com/" class="a-link">YouTube</a>
            <a href="https://www.linkedin.com/" class="a-link">LinkedIn</a>
          </div>
        </div>
      </div>
      <div class="mb-[25px] mt-[40px] text-center">
        <p>© 2024 . ycezz.site</p>
      </div>
    </footer>
  </body>
</html>
