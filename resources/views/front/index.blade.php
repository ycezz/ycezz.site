@extends('front.master')
@section('content')

  <x-navbar/>
    <main
      class="justify-center px-[50px] py-[5px] lg:flex lg:flex-col lg:px-[100px] lg:py-[76px]"
    >
        <!-- Hero Section-->
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
              Creating web experiences. <br>
              Explore my blogs and get the latest coding and tech tips!
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

              @forelse ($featured_blogs as $blog)
                <div class="custom-shadow max-w-screen-sm max-h-[100px] rounded-3xl overflow-hidden">
                  <a href="{{ route('front.details', $blog->slug) }}">
                    <img
                      class="rounded-t-3xl h-auto w-full object-cover"
                      src="{{ Storage::url($blog->thumbnail) }}"
                      alt="image-blog"
                    />
                  </a>
                  <div class="p-5">
                    <h3 class="mt-5 text-[30px] font-medium leading-loose">
                      {{ substr($blog->name, 0, 50) }}{{ strlen($blog->name) > 50 ? '...' : '' }}
                    </h3>
                    <p class="mt-10 text-gray-600">{{ $blog->created_at->format('M d, Y') }}</p>
                  </div>
                </div>
              @empty
                <p>Empty data.</p>
              @endforelse

          </div>
        </section>

        <!-- Adsvertisiment -->
        <section
          id="Advertisement"
          class="mx-auto mt-[70px] flex max-w-[1130px] justify-center"
        >
          <div class="flex w-fit shrink-0 flex-col gap-3">
            <a href="{{ $bannerads->link }}">
              <div
                class="flex h-[120px] w-[300px] shrink-0 overflow-hidden rounded-2xl border border-[#EEF0F7] md:w-[600px] xl:h-[150px] xl:w-[1000px]"
              >
                <img
                  src="{{ Storage::url($bannerads->thumbnail) }}"
                  class="h-auto w-full object-cover"
                  alt="ads"
                />
              </div>
            </a>
            <div class="group relative flex gap-1">
              <img
                src="{{ asset('assets/icon/Question_light.svg') }}"
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
 
@endsection


