<div class="container">
   <div class="flex">
      <div class="w-full md:w-1/2">
         <div class="p-5 bg-white border-gray-200 rounded shadow">
            <h1 class="text-lg font-bold text-gray-700">Update Your Profile</h1>
            <form wire:submit.prevent="update">
               {{-- Picture --}}
               <div class="my-5">
                  <label for="picture" class="block text-sm font-medium text-slate-700">Profile Picture</label>
                  <div class="py-2 shrink-0">
                     <img class="object-cover w-16 h-16 rounded-full" src="{{ Auth::user()->gravatar() }}" />
                  </div>
                  <input type="file" name="picture" id="picture" wire:model="picture"
                     class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100">
               </div>

               {{-- Username --}}
               <div class="mb-5">
                  <label for="username" class="block text-sm font-medium text-slate-700">Username</label>
                  <input type="text" name="username" id="username" wire:model="username"
                     class="block w-full px-3 py-2 mt-1 text-sm bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
               </div>

               {{-- Name --}}
               <div class="mb-5">
                  <label for="name" class="block text-sm font-medium text-slate-700">Name</label>
                  <input type="text" name="name" id="name" wire:model="name"
                     class="block w-full px-3 py-2 mt-1 text-sm bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
               </div>

               {{-- Button --}}
               <div class="flex justify-end">
                  <button type="submit"
                     class="flex justify-center px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700">
                     Update
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
