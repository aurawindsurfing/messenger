<div class="w-full lg:w-2/3 px-4">
    <div class="bg-white border-t border-b sm:rounded sm:border shadow">
        <div class="border-b">
            <div class="flex justify-between px-6 -mb-px">
                <h3 class="text-blue-600 py-4 font-normal text-lg">Messages</h3>
            </div>
        </div>
        <div>
            <div class="flex-1 overflow-auto px-2 py-2 -mb-px">
                <div class="py-2 px-3">
                    @each('vendor.messenger.messages', $activeThread->messages, 'message', 'vendor.messenger.no-messages')
                </div>
            </div>
        </div>
        <form action="{{ $activeThread->storeMessagePath() }}" method="post"
              class="bg-gray-200 px-4 py-4 flex items-center mt-8">
            <div class="flex-1 mx-4">
                @csrf
                <input class="w-full border rounded px-2 py-2" type="text" name="body"
                       placeholder="Type your message here..." autocomplete="off" autofocus/>
            </div>
            <div>
                <input
                    class="inline-block leading-tight bg-blue-500 border border-blue-600 hover:bg-blue-600 px-3 py-2 text-white no-underline rounded"
                    type="submit" value="Send">
            </div>
        </form>
    </div>
</div>
