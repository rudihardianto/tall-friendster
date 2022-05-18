<div class="container">
   <div class="flex">
      <div class="w-1/2">
         <div class="flex p-4 mr-4 bg-white border border-gray-200 rounded-lg shadow-sm">
            <div class="flex-shrink-0 mr-3">
               <img class="object-cover object-center rounded-full w-14 h-14" src="{{ $status->user->gravatar() }}">
            </div>
            <div>
               <div class="font-semibold text-gray-900">{{ $status->user->name }}</div>
               <div class="mb-2 text-sm text-gray-400">{{ $status->published }}</div>
               <div class="-mt-1 text-gray-800">{{ $status->body }}</div>
               <!-- START: like, Comment -->
               <div class="flex items-center mt-2 -mx-4 text-gray-400">
                  {{-- Like --}}
                  <div class="flex items-center mx-4">
                     <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                           d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                     </svg>
                     <div class="text-sm">
                        50 Likes
                     </div>
                  </div>
                  {{-- Comment --}}
                  <div class="flex items-center mx-4">
                     <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                           d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                     </svg>
                     <div class="text-sm">
                        23 Comments
                     </div>
                  </div>
               </div>
               <!-- END: like, Comment -->
            </div>
         </div>
      </div>
   </div>
</div>
