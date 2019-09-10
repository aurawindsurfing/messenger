@if ($message->user == Auth::user())
    <div class="flex justify-end mb-2">
        <div class="rounded py-2 px-3 bg-green-200">
            <p class="text-base mt-1">
                {{ $message->body  }}
            </p>
            <p class="text-right text-xs text-gray-600 mt-1">
                {{ Carbon\Carbon::parse($message->created_at)->format('H:m') }}
            </p>
        </div>
    </div>
@else
    <div class="flex mb-2">
        <div class="rounded py-2 px-3 bg-gray-200">
            <p class="text-base text-teal-500">
                {{ $message->user->name  }}
            </p>
            <p class="text-base mt-1">
                {{ $message->body  }}
            </p>
            <p class="text-right text-xs text-gray-600 mt-1">
                {{ Carbon\Carbon::parse($message->created_at)->format('H:m') }}
            </p>
        </div>
    </div>
@endif

