    <!--
      - BANNER
    -->
    <div id="default-carousel" class="relative w-full overflow-hidden mt-48" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="carousel-item absolute w-full h-full transition-transform duration-700 ease-in-out" data-carousel-item>
          <img src="./SecondSale1.webp" class="block w-full h-full object-cover" alt="Art and Craft" />
          <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex flex-col items-center text-white">
            <!-- <a href="./SecondSale1.webp" class="btn btn-primary mt-4">Explore</a> -->
          </div>
        </div>
        <!-- Item 2 -->
        <div class="carousel-item absolute w-full h-full transition-transform duration-700 ease-in-out" data-carousel-item>
          <img src="./SecondSale2.webp" class="block w-full h-full object-cover" alt="Second Hand Products" />
          <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex flex-col items-center text-white">
            <!-- <a href="#" class="btn btn-primary mt-4">Explore</a> -->
          </div>
        </div>
        <!-- Item 3 -->
        <div class="carousel-item absolute w-full h-full transition-transform duration-700 ease-in-out" data-carousel-item>
          <img src="./SecondSale1.webp" class="block w-full h-full object-cover" alt="New Arrival Products" />
          <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex flex-col items-center text-white">
            <!-- <a href="#" class="btn btn-primary mt-4">Explore</a> -->
          </div>
        </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse" data-carousel-indicators>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>