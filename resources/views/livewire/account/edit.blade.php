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
                  @error('picture')
                     <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
                  @enderror
               </div>

               {{-- Username --}}
               <div class="mb-5">
                  <label for="username" class="block text-sm font-medium text-slate-700">Username</label>
                  <input type="text" name="username" id="username" wire:model="username"
                     class="block w-full px-3 py-2 mt-1 text-sm bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500">
                  @error('username')
                     <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
                  @enderror
               </div>

               {{-- Name --}}
               <div class="mb-5">
                  <label for="name" class="block text-sm font-medium text-slate-700">Name</label>
                  <input type="text" name="name" id="name" wire:model="name"
                     class="block w-full px-3 py-2 mt-1 text-sm bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500">
                  @error('name')
                     <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
                  @enderror
               </div>

               {{-- Description --}}
               <div class="mb-5">
                  <label for="description" class="block text-sm font-medium text-slate-700">Bio</label>
                  <textarea type="text" name="description" id="description" wire:model="description"
                     class="block w-full px-3 py-2 mt-1 text-sm bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"></textarea>
                  @error('description')
                     <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
                  @enderror
               </div>

               {{-- Button --}}
               <div class="flex justify-end">
                  <x-button.primary>Update</x-button.primary>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
