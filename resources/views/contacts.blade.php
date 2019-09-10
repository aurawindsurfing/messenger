<transition name="contacts">
    <div class="w-full mb-6 lg:mb-0 lg:w-1/3 px-4 flex flex-col" v-if="show">
        <div class="flex-no-grow flex flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden">
            <div class="border-b">
                <div class="flex items-center px-4 py-4 bg-white-500 border-r border-gray-200">
                    <div class="flex justify-center items-center w-full text-base leading-none text-gray-600 rounded">
                        <input class="w-full rounded px-2 py-2 bg-gray-200 text-center text-base" type="text"
                               placeholder="Search"/>
                    </div>
                    <div @click="show = !show">
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
            </div>
            @if (isset($contacts))
                @foreach ($contacts as $contact)
                    <a href="{{ $contact->newThreadPath() }}">
                        <div
                            class="flex px-6 py-3 text-gray-700 items-center border-b -mx-4 hover:bg-gray-200 cursor-pointer">
                            <div class="w-1/5 px-4 flex items-center">
                                <div class="w-10">
                                    <img class="inline-block h-10 w-10 rounded-full"
                                         src="{{ 'https://s.gravatar.com/avatar/'.md5(strtolower(trim(isset($contact->email) ?  $contact->email : 'taylor@laravel.com' ))).'?s=80' }}"
                                         alt="">
                                </div>
                            </div>
                            <div class="w-3/4 px-4 flex items-center">
                                <div class="container flex-col">
                                    <div class="text-base">{{ $contact->name }}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
</transition>
