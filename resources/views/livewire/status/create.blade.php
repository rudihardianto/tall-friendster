<div class="mt-3 mb-5 overflow-hidden border border-gray-200 rounded-lg">
   <div class="px-4 py-3 font-semibold text-gray-700 border-b border-gray-200 bg-gray-50">
      Create Status
   </div>

   <form wire:submit.prevent="store">
      <div class="p-4">
         <textarea placeholder="what's on your mind?" wire:model="body"
            class="block w-full h-auto px-3 py-2 mt-1 mb-3 text-sm border-0 rounded-lg resize-none focus:ring-0"></textarea>
         @error('body')
            <span class="text-sm text-red-500">{{ $message }}</span>
         @enderror
      </div>
      <div class="flex justify-end p-2 border-t">
         <x-button.secondary>Post</x-button.secondary>
      </div>
   </form>
</div>
