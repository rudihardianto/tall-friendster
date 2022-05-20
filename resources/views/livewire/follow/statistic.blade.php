<div class="block mt-8 text-gray-600 bg-gray-100 rounded-md shadow md:inline-block md:mt-0">
   <div class="flex justify-center">
      <div class="flex">
         {{-- status --}}
         <div class="flex-1 px-6 py-2 text-center border-r border-gray-300">
            <div class="">Status</div>
            <div class="text-xl font-semibold text-gray-900">25</div>
         </div>

         {{-- followers --}}
         <div class="flex-1 px-6 py-2 text-center border-r border-gray-300">
            <div class="">Followers</div>
            <div class="text-xl font-semibold text-gray-900">
               {{ $user->followers()->count() }}
            </div>
         </div>

         {{-- following --}}
         <div class="flex-1 px-6 py-2 text-center">
            <div class="">Following</div>
            <div class="text-xl font-semibold text-gray-900">
               {{ $user->follows()->count() }}
            </div>
         </div>
      </div>
   </div>
</div>
