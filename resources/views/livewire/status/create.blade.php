<div class="mt-3 mb-5 overflow-hidden border rounded-lg border-slate-300">
   <div class="p-2 text-gray-200 bg-gray-800">
      make a post
   </div>

   <div class="p-2 card-body">
      <form wire:submit.prevent="store">
         <textarea placeholder="what's on your mind?" wire:model="body"
            class="block w-full h-auto px-3 py-2 mt-1 mb-3 text-sm border rounded-lg shadow-sm resize-none border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"></textarea>
         @error('body')
            <span class="text-sm text-red-500">{{ $message }}</span>
         @enderror
         <div class="flex justify-end">
            <x-button.primary>Post</x-button.primary>
         </div>
      </form>
   </div>
</div>
