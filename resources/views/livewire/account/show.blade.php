   <div class="py-10 -mt-6 border-b border-gray-200 md:py-16 bg-gray-50">
      <div class="container">
         <div class="flex flex-col items-center md:flex-row">
            <!-- START: Profile, Bio, Settings -->
            <div class="w-full md:w-1/2">
               <div class="flex flex-col items-center text-center md:text-left md:items-start md:flex-row">
                  <div class="flex-shrink-0 mr-0 md:mr-5">
                     <img class="object-cover object-center w-20 h-20 rounded-full" src="{{ $user->gravatar() }}">
                  </div>
                  <div>
                     <h1 class="mt-4 mb-2 font-semibold text-gray-900 md:mt-0">{{ $user->name }}</h1>
                     <div class="mb-5 leading-relaxed text-gray-600">
                        {{ $user->description }}
                     </div>
                     <livewire:follow.button :user="$user" />
                  </div>
               </div>
            </div>
            <!-- END: Profile, Bio, Settings -->

            <!-- START: Statistic -->
            <div class="flex justify-center w-full md:w-1/2">
               <livewire:follow.statistic :user="$user" />
            </div>
            <!-- END: Statistic -->
         </div>
      </div>
   </div>


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
