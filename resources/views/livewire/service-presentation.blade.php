<!-- Container for demo purpose -->
<div class="container px-6 mx-auto my-24">

  <!-- Section: Design Block -->
  <section class="mb-32 text-center text-gray-800">

    <h2 class="pb-4 mb-12 text-3xl font-bold text-center">Nos services</h2>

    <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12">
      @foreach ($services as $service)
      <div class="mb-6 lg:mb-0">
        <div class="relative block bg-white rounded-lg shadow-lg">
          <div class="flex">
            <div class="relative mx-4 -mt-4 overflow-hidden bg-no-repeat bg-cover rounded-lg shadow-lg"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              @if ($service->image == null)
              <img
                src="{{ 'https://ui-avatars.com/api/?background=ffff&color=black/?uppercase=true&name=' . $service->label}}"
                class="w-full" />
              <a href="{{ route('services.details', $service->id) }}">
                <div
                  class="absolute top-0 bottom-0 left-0 right-0 w-full h-full overflow-hidden transition duration-300 ease-in-out bg-fixed opacity-0 hover:opacity-100"
                  style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
              @else
              <img src="{{ asset('image/'.$service->image) }}" class="w-full" />
              <a href="{{ route('services.details', $service->id) }}">
                <div
                  class="absolute top-0 bottom-0 left-0 right-0 w-full h-full overflow-hidden transition duration-300 ease-in-out bg-fixed opacity-0 hover:opacity-100"
                  style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
              @endif
            </div>
          </div>
          <div class="p-6">
            <h5 class="mb-3 text-lg font-bold">{{ $service->label }}</h5>
            <p class="pb-2 mb-4">
              {{$service->description}}
            </p>
            <a href="{{ route('services.details', $service->id) }}" data-mdb-ripple="true" data-mdb-ripple-color="light"
              class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-orange-500 hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-500 active:shadow-lg transition duration-150 ease-in-out">Read
              more</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
</div>