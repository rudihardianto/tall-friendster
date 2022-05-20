<div>
   @if (Auth::check() && Auth::user()->isNot($user))
      @if (Auth::user()->following($user))
         <x-button.error wire:click="unfollow">Unfollow</x-button.error>
      @else
         <x-button.primary wire:click="follow">Follow</x-button.primary>
      @endif
   @else
      <a href="{{ route('settings') }}"
         class="inline-flex justify-center px-4 py-2 text-sm font-medium text-black transition duration-150 ease-in-out bg-white border border-transparent rounded-md shadow hover:bg-gray-100 focus:outline-none active:bg-gray-100">
         Edit Profile
      </a>
   @endif
</div>
