@php
    $page = section('hero')
@endphp
<div class="flex items-center justify-center bg-gray-900">
    <div
      class="mx-auto px-4 xl:px-0 py-28 md:flex md:items-center xl:max-w-6xl"
    >
      <div class="md:w-1/2">
        <h1 class="text-6xl font-bold leading-tight text-white">
          {{ $page->text('title')->default('Confetti cms') }}
        </h1>
        <p class="mt-4 text-xl text-white" style="color: {{ $color = $page->color('the_color') }}">
          Color: {{ $color }}. A developer first framework to build your websites blazing fast
        </p>
        <p class="mt-4 text-xl text-white">
          Number: {{ $page->number('number') }}
        </p>
        <div class="flex">
          <div class="mt-8">
            <a
              href="#"
              class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg"
              >Get Started</a
            >
          </div>
          <div class="mt-8 ml-4">
            <a
              href="#"
              class="inline-block bg-gray-800 text-white px-6 py-3 rounded-lg"
              >Learn More</a
            >
          </div>
        </div>
      </div>
      <div class="md:w-1/2 mt-8 md:mt-0 md:ml-12">
        <img
          src="https://cdn.tuk.dev/previews/desktop-2x/hero_7.jpg"
          alt=""
          class="w-full h-full object-cover rounded-lg shadow-md"
        />
      </div>
    </div>
  </div>
