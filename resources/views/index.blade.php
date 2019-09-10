<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>{{ config('app.name') ?: 'Laravel Messenger' }}</title>
</head>
<body>

<div class="font-sans bg-gray-200 flex flex-col min-h-screen">
    <div>
        <div class="bg-blue-600">
            <div class="container mx-auto px-4">
                <div class="flex items-center md:justify-between py-4">
                    <div class="w-1/4 md:hidden">
                        <svg class="fill-current text-white h-8 w-8" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20">
                            <path
                                d="M16.4 9H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zm0 4H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zM3.6 7h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1z"/>
                        </svg>
                    </div>
                    <div class="w-1/2 md:w-auto text-center text-white text-2xl font-medium">
                        Admin Panel
                    </div>
                    <div class="w-1/4 md:w-auto md:flex text-right">
                        <div>
                            <img class="inline-block h-8 w-8 rounded-full"
                                 src="{{ 'https://s.gravatar.com/avatar/'.md5(strtolower(trim(isset(Auth::user()->email) ?  Auth::user()->email : 'taylor@laravel.com' ))).'?s=80' }}"
                                 alt="">
                        </div>
                        <div class="hidden md:block md:flex md:items-center ml-2">
                            <span
                                class="text-white text-sm mr-1">{{ isset(Auth::user()->name) ?  Auth::user()->name : 'Taylor Otwell'  }}</span>
                            <div>
                                <svg class="fill-current text-white h-4 w-4 block opacity-50"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 0 1-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden bg-blue-600 md:block md:bg-white md:border-b">
            <div class="container mx-auto px-4">
                <div class="md:flex">
                    <div class="flex -mb-px mr-8">
                        <a href="#"
                           class="no-underline text-white md:text-blue-600 flex items-center py-4 border-b border-blue-600">
                            <svg class="h-6 w-6 fill-current mr-2" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                      d="M3.889 3h6.222a.9.9 0 0 1 .889.91v8.18a.9.9 0 0 1-.889.91H3.89A.9.9 0 0 1 3 12.09V3.91A.9.9 0 0 1 3.889 3zM3.889 15h6.222c.491 0 .889.384.889.857v4.286c0 .473-.398.857-.889.857H3.89C3.398 21 3 20.616 3 20.143v-4.286c0-.473.398-.857.889-.857zM13.889 11h6.222a.9.9 0 0 1 .889.91v8.18a.9.9 0 0 1-.889.91H13.89a.9.9 0 0 1-.889-.91v-8.18a.9.9 0 0 1 .889-.91zM13.889 3h6.222c.491 0 .889.384.889.857v4.286c0 .473-.398.857-.889.857H13.89C13.398 9 13 8.616 13 8.143V3.857c0-.473.398-.857.889-.857z"/>
                            </svg>
                            Messages
                        </a>
                    </div>
                    <div class="flex -mb-px mr-8">
                        <a href="#"
                           class="no-underline text-white opacity-50 md:text-gray-600 md:opacity-100 flex items-center py-4 border-b border-transparent hover:opacity-100 md:hover:border-gray-600">
                            Tab1
                        </a>
                    </div>
                    <div class="flex -mb-px mr-8">
                        <a href="#"
                           class="no-underline text-white opacity-50 md:text-gray-600 md:opacity-100 flex items-center py-4 border-b border-transparent hover:opacity-100 md:hover:border-gray-600">
                            Tab2
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="flex-grow container mx-auto sm:px-4 pt-6 pb-8">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full mb-6 lg:mb-0 lg:w-1/3 px-4 flex flex-col">
                <div
                    class="flex-no-grow flex flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden">
                    <div class="border-b">
                        <div class="flex items-center px-4 py-4 bg-white-500 border-r border-gray-200">
                            <div
                                class="flex justify-center items-center w-full text-base leading-none text-gray-600 rounded">
                                <input class="w-full rounded px-2 py-2 bg-gray-200 text-center text-base" type="text"
                                       placeholder="Search"/>
                            </div>
                            <svg class="block w-6 h-6 ml-6 mr-4 text-blue-500 fill-current cursor-pointer"
                                 viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
                                    <g id="icon-shape">
                                        <path
                                            d="M9,10 L7,10 L7,12 L9,12 L9,14 L11,14 L11,12 L13,12 L13,10 L11,10 L11,8 L9,8 L9,10 Z M4,18 L4,2 L12,2 L12,6 L16,6 L16,18 L4,18 Z M2,19 L2,0 L3,0 L12,0 L14,0 L18,4 L18,6 L18,20 L17,20 L2,20 L2,19 Z"
                                            id="Combined-Shape"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>

                    {{--                    <div class="">--}}
                    @if (isset($threads))
                        @foreach ($threads as $thread)
                            <a href="{{$thread->path()}}">
                                @if ($thread->id == $activeThread->id)
                                    <div
                                        class="h-24 bg-gray-200 flex px-6 py-6 text-gray-700 items-center border-b -mx-4 hover:bg-gray-200 cursor-pointer">
                                        @else
                                            <div
                                                class="h-24 flex px-6 py-6 text-gray-700 items-center border-b -mx-4 hover:bg-gray-200 cursor-pointer">
                                                @endif
                                                <div class="w-1/5 px-4 flex items-center">
                                                    <div class="w-10">
                                                        <img class="inline-block h-10 w-10 rounded-full"
                                                             src="{{ 'https://s.gravatar.com/avatar/'.md5(strtolower(trim(isset(Auth::user()->email) ?  Auth::user()->email : 'taylor@laravel.com' ))).'?s=80' }}"
                                                             alt="">
                                                    </div>
                                                </div>
                                                <div class="w-3/4 px-4 flex items-center">
                                                    <div class="container flex-col">
                                                        <div class="flex justify-between text-gray-500">
                                                            <div
                                                                class="text-sm mb-2">{{ $thread->messages->first()->user->name }}</div>
                                                            <div
                                                                class="text-sm text-right">{{ Carbon\Carbon::parse($thread->updated_at)->format('H:m')}}</div>
                                                        </div>
                                                        <div class="text-base">{{ $thread->subject }}</div>
                                                    </div>
                                                </div>
                                            </div>
                            </a>
                        @endforeach
                    @endif


                    {{--                    </div>--}}


                </div>
            </div>

            <div class="w-full lg:w-2/3 px-4">
                <div class="bg-white border-t border-b sm:rounded sm:border shadow">
                    <div class="border-b">
                        <div class="flex justify-between px-6 -mb-px">
                            <h3 class="text-blue-600 py-4 font-normal text-lg">Messages</h3>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex-1 overflow-auto px-2 py-2 -mb-px">
                            <div class="py-2 px-3">
                                @if (isset($activeThread))
                                    @forelse ($activeThread->messages as $message)
                                        @if ($message->user == Auth::user())
                                            <div class="flex justify-end mb-2">
                                                <div class="rounded py-2 px-3 bg-green-200">
                                                    @else
                                                        <div class="flex mb-2">
                                                            <div class="rounded py-2 px-3 bg-gray-200">
                                                                <p class="text-base text-teal-500">
                                                                    {{ $message->user->name  }}
                                                                </p>
                                                                @endif
                                                                <p class="text-base mt-1">
                                                                    {{ $message->body  }}
                                                                </p>
                                                                <p class="text-right text-xs text-gray-600 mt-1">
                                                                    {{ Carbon\Carbon::parse($message->created_at)->format('H:m') }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        @else
                                                            <div>
                                                                <div class="text-center px-6 py-4">
                                                                    <div class="py-8">
                                                                        <div class="mb-4">
                                                                            <svg
                                                                                class="inline-block fill-current text-gray-500 h-16 w-16"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20">
                                                                                <path
                                                                                    d="M11.933 13.069s7.059-5.094 6.276-10.924a.465.465 0 0 0-.112-.268.436.436 0 0 0-.263-.115C12.137.961 7.16 8.184 7.16 8.184c-4.318-.517-4.004.344-5.974 5.076-.377.902.234 1.213.904.959l2.148-.811 2.59 2.648-.793 2.199c-.248.686.055 1.311.938.926 4.624-2.016 5.466-1.694 4.96-6.112zm1.009-5.916a1.594 1.594 0 0 1 0-2.217 1.509 1.509 0 0 1 2.166 0 1.594 1.594 0 0 1 0 2.217 1.509 1.509 0 0 1-2.166 0z"/>
                                                                            </svg>
                                                                        </div>
                                                                        <p class="text-2xl text-gray-700 font-medium mb-4">
                                                                            You have no messages yet</p>
                                                                        <p class="text-gray-500 max-w-xs mx-auto mb-6">
                                                                            Click button below to create your first
                                                                            message.</p>
                                                                        <div>
                                                                            <button type="button"
                                                                                    class="bg-blue-500 hover:bg-blue-600 text-white border border-blue-600 rounded px-6 py-4">
                                                                                Create
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                </div>
                                            </div>
                            </div>
                            @if (isset($activeThread))
                                <form action="{{ $activeThread->storeMessagePath() }}" method="post"
                                      class="bg-gray-200 px-4 py-4 flex items-center mt-8">
                                    <div class="flex-1 mx-4">
                                        @csrf
                                        <input class="w-full border rounded px-2 py-2" type="text" name="body"
                                               placeholder="Type your message here..." autocomplete="off"/>
                                    </div>
                                    <div>
                                        <input
                                            class="inline-block leading-tight bg-blue-500 border border-blue-600 hover:bg-blue-600 px-3 py-2 text-white no-underline rounded"
                                            type="submit" value="Send">
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

            <div class="bg-white border-t">
                <div class="container mx-auto px-4">
                    <div class="md:flex justify-between items-center text-sm">
                        <div class="text-center md:text-left py-3 md:py-4 border-b md:border-b-0">
                            <a href="#" class="no-underline text-gray-600 mr-4">Home</a>
                            <a href="#" class="no-underline text-gray-600 mr-4">Careers</a>
                            <a href="#" class="no-underline text-gray-600">Legal &amp; Privacy</a>
                        </div>
                        <div class="md:flex md:flex-row-reverse items-center py-4">
                            <div class="text-center mb-4 md:mb-0 md:flex">
                                <div class="w-48 inline-block relative mb-4 md:mb-0 md:mr-4">
                                    <select
                                        class="leading-tight block appearance-none w-full bg-white border border-gray-light px-3 py-2 pr-8 rounded">
                                        <option>English</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-gray-500">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <a href="#"
                                       class="inline-block leading-tight bg-blue-500 border border-blue-600 hover:bg-blue-600 px-3 py-2 text-white no-underline rounded">Need
                                        help?</a>
                                </div>
                            </div>
                            <div class="text-gray-500 text-center md:mr-4">&copy; 2017 Laravel Messenger</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>






