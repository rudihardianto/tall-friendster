<div>
   <div class="py-10 -mt-6 bg-gray-800">
      <div class="container">
         <div class="flex items-start">
            <div class="flex-shrink-0 mr-5">
               <img class="object-cover object-center w-20 h-20 rounded-full" src="{{ $user->gravatar() }}">
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

   <!-- START: status user -->
   <div class="container mt-5">
      <div class="w-full md:w-1/2">
         @foreach ($statuses as $status)
            <div class="mb-8">
               <livewire:status.block :status="$status" :key="$status->id" />
            </div>
         @endforeach
         <!-- END: status user -->

         <!-- START: load more button -->
         @if ($statuses->hasMorePages())
            <div class="flex justify-center">
               <x-button.primary wire:click.prevent="loadMore">
                  <span wire:loading>
                     waiting...
                  </span>
                  <span wire:loading.class="hidden">
                     Load More
                  </span>
               </x-button.primary>
            </div>
         @endif
         <!-- END: load more button -->
      </div>
   </div>
</div>
