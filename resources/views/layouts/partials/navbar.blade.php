<div class="bg-gray-800" x-data="{ open: false }">
   <div class="flex flex-col items-center justify-between md:flex-row">
      <div class="flex justify-between w-full px-4 py-4 bg-gray-900 md:bg-transparent md:w-auto md:border-b-0">
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

      <div :class="{'hidden' : !open}" class="w-full py-1 leading-loose md:py-0 md:flex md:justify-between">
         <div class="flex flex-col py-1 md:flex-row md:items-center md:py-0">
            <a href="#" class="block px-4 text-gray-400 hover:text-white md:py-4">Explore</a>
            <a href="#" class="block px-4 text-gray-400 hover:text-white md:py-4">Timeline</a>
         </div>

         <div class="flex flex-col md:flex-row md:items-center">
            @auth
               <div x-data="{ dropdownIsOpen: false }" class="py-2 border-t border-gray-600 md:py-0 md:border-t-0">
                  <div>
                     <button @click="dropdownIsOpen = !dropdownIsOpen" class="flex items-center px-4 md:px-0">
                        <div class="flex-shrink-0 mr-2">
                           <img src="{{ Auth::user()->gravatar() }}" class="object-cover object-center w-8 h-8 rounded">
                        </div>
                        <div class="block py-1 pr-4 text-gray-400 hover:text-white md:py-4">
                           {{ Auth::user()->name }}
                        </div>
                     </button>
                  </div>
                  <div :class="{'md:hidden' : !dropdownIsOpen}"
                     class="top-0 right-0 block leading-relaxed md:py-2 md:bg-gray-700 md:rounded md:shadow md:w-40 md:mt-14 md:mr-16 md:absolute md:leading-loose">
                     <a href="" class="block px-4 text-gray-400 hover:text-white">Your Profile</a>
                     <a href="" class="block px-4 text-gray-400 hover:text-white">Your Friend</a>
                     <a href="{{ route('settings') }}" class="block px-4 text-gray-400 hover:text-white">Settings</a>
                     <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="block px-4 text-gray-400 hover:text-white">
                        Log out
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                  </div>
               </div>
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
