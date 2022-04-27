@extends('layouts.app', ['title' => 'Timeline'])

@section('content')
   <div class="container">
      <div class="flex">
         <div class="w-full md:1/2">
            <livewire:status.create />
            <livewire:status.index />
         </div>
      </div>
   </div>
@endsection
