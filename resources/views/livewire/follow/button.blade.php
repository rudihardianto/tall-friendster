<div>
   @if (Auth::check() && Auth::user()->isNot($user))
      @if (Auth::user()->following($user))
         <x-button.error wire:click="unfollow">Unfollow</x-button.error>
      @else
         <x-button.primary wire:click="follow">Follow</x-button.primary>
      @endif
   @else
      <a href="{{ route('settings') }}"
         class="inline-flex justify-center px-6 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-blue-600 border border-transparent rounded-md hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring-blue active:bg-blue-700">
         Edit Profile
      </a>
   @endif
</div>
