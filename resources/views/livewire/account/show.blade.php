<div class="py-10 -mt-6 bg-gray-700">
   <div class="container">
      <div class="flex items-start">
         <div class="flex-shrink-0 mr-3">
            <img class="h-16 w-16 object-cover object-center rounded-full" src="{{ $user->gravatar() }}">
         </div>
         <div>
            <h1 class="font-semibold text-white mb-2">{{ $user->name }}</h1>
            <div class="text-gray-300 mb-5">
               {{ $user->description }}
            </div>
            <livewire:follow.button :user="$user" />
         </div>
      </div>
   </div>
</div>
