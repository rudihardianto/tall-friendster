<div class="text-gray-300 bg-gray-700">
   <div class="flex justify-center">
      <div class="flex w-1/3">
         {{-- status --}}
         <div class="flex-1 py-2 text-center border-r border-gray-500">
            <div class="">Status</div>
            <div class="text-xl font-semibold text-white">25</div>
         </div>

         {{-- followers --}}
         <div class="flex-1 py-2 text-center border-r border-gray-500">
            <div class="">Followers</div>
            <div class="text-xl font-semibold text-white">
               {{ $user->followers()->count() }}
            </div>
         </div>

         {{-- following --}}
         <div class="flex-1 py-2 text-center">
            <div class="">Following</div>
            <div class="text-xl font-semibold text-white">
               {{ $user->follows()->count() }}
            </div>
         </div>
      </div>
   </div>
</div>
