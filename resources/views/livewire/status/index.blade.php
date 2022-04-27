<div>
   @foreach ($statuses as $status)
      <a href="" class="flex mt-3 mb-5">
         <div class="flex-shrink-0 mr-3">
            <img class="object-cover object-center w-10 h-10 rounded-full" src="{{ $status->user->gravatar() }}">
         </div>
         <div>
            <div class="font-semibold text-gray-900">{{ $status->user->name }}</div>
            <div class="text-gray-800">{{ $status->body }}</div>
            <div class="text-sm text-gray-400">{{ $status->published }}</div>
         </div>
      </a>
   @endforeach
</div>
