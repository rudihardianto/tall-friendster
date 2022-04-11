<div class="bg-gray-800" x-data="{ open: false }">
   <div class="flex flex-col items-center justify-between md:flex-row">
      <div class="flex justify-between w-full px-4 py-4 border-b border-gray-600 md:w-auto md:border-b-0">
         <div>
            <a href="/" class="text-lg font-semibold text-white">
               {{ config('app.name') }}
            </a>
         </div>

         <div class="block md:hidden">
            <button @click="open = !open" class="text-white focus:outline-none">
               <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" stroke-width="2">
                  <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16" />
                  <path x-show="open" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
               </svg>
            </button>
         </div>
      </div>

      <div :class="{'hidden' : !open}" class="w-full py-1 leading-loose md:flex md:justify-between">
         <div class="flex flex-col md:flex-row md:items-center">
            <a href="#" class="block px-4 text-gray-400 hover:text-white md:py-4">Explore</a>
            <a href="#" class="block px-4 text-gray-400 hover:text-white md:py-4">Timeline</a>
         </div>

         <div class="flex flex-col md:flex-row md:items-center">
            @auth
               <a href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                  class="block px-4 text-gray-400 hover:text-white md:py-4">
                  Log out
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
               </form>
            @else
               <a href="{{ route('login') }}" class="block px-4 text-gray-400 hover:text-white md:py-4">Log in</a>

               @if (Route::has('register'))
                  <a href="{{ route('register') }}"
                     class="block px-4 text-gray-400 hover:text-white md:py-4">Register</a>
               @endif
            @endauth
         </div>
      </div>
   </div>
</div>
