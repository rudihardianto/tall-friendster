<div>
   <div class="py-10 -mt-6 bg-gray-800">
      <div class="container">
         <div class="flex items-start">
            <div class="flex-shrink-0 mr-3">
               <img class="object-cover object-center w-16 h-16 rounded-full" src="{{ $user->gravatar() }}">
            </div>
            <div>
               <h1 class="mb-2 font-semibold text-white">{{ $user->name }}</h1>
               <div class="mb-5 text-gray-300">
                  {{ $user->description }}
               </div>
               <livewire:follow.button :user="$user" />
            </div>
         </div>
      </div>
   </div>

   <livewire:follow.statistic :user="$user" />
</div>
