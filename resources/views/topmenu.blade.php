<div>
    <div class="bg-blue-600">
        <div class="container mx-auto px-4">
            <div class="flex items-center md:justify-between py-4">
                <div class="w-1/4 md:hidden">
                    <svg class="fill-current text-white h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
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
                        <svg class="h-6 w-6 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
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
