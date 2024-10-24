@extends('front.master')
@section('content')

<body
class="bg-white font-space text-base text-[#1B2E35] lg:text-xl"
x-data="{ openMenu : false }"
>
  <x-navbar/>
      <main
        class="justify-center px-[50px] py-[5px] lg:flex lg:flex-col lg:px-[100px] lg:py-[76px]"
      >
        <!-- Search -->
        <section id="Search">
          <div class="flex flex-col items-center">
            <div class="pb-[20px] lg:pb-[40px]">
              <h2 class="text-[30px] font-medium md:text-[40px]">
                Latest articles
              </h2>
            </div>
            <form action="#">
              <label
                for="search-bar"
                class="group relative flex gap-[10px] rounded-[50px] p-[12px_20px] ring-1 ring-[#E8EBF4] transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FF644D] lg:w-[500px]"
              >
                <div class="flex h-5 w-5 shrink-0">
                  <i
                    class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 transform text-gray-500"
                  ></i>
                </div>
                <input
                  autocomplete="off"
                  type="text"
                  id="search-bar"
                  name="search-bar"
                  placeholder="Search articles"
                  class="w-full appearance-none font-semibold outline-none placeholder:font-normal placeholder:text-[#A3A6AE] focus:ring-0"
                />
              </label>
            </form>
          </div>
        </section>

        <section id="Blog">
          <div
            class="mt-[80px] grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-5 xl:grid-cols-3"
          >
            <div class="custom-shadow max-w-screen-sm rounded-3xl">
              <a href="details.html">
                <img
                  class="rounded-t-3xl"
                  src="/src/img/alpukat.jpg"
                  alt="image-blog"
                />
              </a>

              <div class="p-5">
                <h3 class="mt-5 text-[20px] font-medium md:text-[30px]">
                  Increase Sales use Pay-per-click
                </h3>
                <p class="mt-10 text-gray-600">Oct 14, 2024</p>
              </div>
            </div>
            <div class="custom-shadow max-w-screen-sm rounded-3xl">
              <a href="details.html">
                <img
                  class="rounded-t-3xl"
                  src="/src/img/alpukat.jpg"
                  alt="image-blog"
                />
              </a>

              <div class="p-5">
                <h3 class="mt-5 text-[20px] font-medium md:text-[30px]">
                  Increase Sales use Pay-per-click
                </h3>
                <p class="mt-10 text-gray-600">Oct 14, 2024</p>
              </div>
            </div>
            <div class="custom-shadow max-w-screen-sm rounded-3xl">
              <a href="details.html">
                <img
                  class="rounded-t-3xl"
                  src="/src/img/alpukat.jpg"
                  alt="image-blog"
                />
              </a>

              <div class="p-5">
                <h3 class="mt-5 text-[20px] font-medium md:text-[30px]">
                  Increase Sales use Pay-per-click
                </h3>
                <p class="mt-10 text-gray-600">Oct 14, 2024</p>
              </div>
            </div>
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
    <x-footer/>  
</body>    
@endsection
