<div>
   @foreach ($statuses as $status)
      <div class="mb-8">
         <livewire:status.block :status="$status" :key="$status->id" />
      </div>
   @endforeach

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
