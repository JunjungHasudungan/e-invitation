<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}


                    <h1>{{ $invitation->title }}</h1>
                    <p>Guest Name: {{ $invitation->guest_name }}</p>
                    <p>Guest Email: {{ $invitation->guest_email }}</p>
                    <p>Message: {{ $invitation->content }}</p>
                    <p>Created At: {{ $invitation->created_at->format('j M Y, g:i a') }}</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
