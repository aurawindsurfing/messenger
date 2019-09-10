<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>

    <title>{{ config('app.name') ?: 'Laravel Messenger' }}</title>
</head>

<style>

    /*.contacts-enter-active {*/
    /*    transition: all .3s linear;*/
    /*}*/
    /*.contacts-leave-active {*/
    /*    transition: all .8s linear;*/
    /*}*/
    /*.contacts-enter, .contacts-leave-to {*/
    /*    transform: translateX(10px);*/
    /*    opacity: 0;*/
    /*}*/

</style>

<body>

<div id="app" class="font-sans bg-gray-200 flex flex-col min-h-screen">

    @include('vendor.messenger.topmenu')

    <div class="flex-grow container mx-auto sm:px-4 pt-6 pb-8">
        <div class="flex flex-wrap -mx-4">

            @include('vendor.messenger.contacts')

            @include('vendor.messenger.threads')

            @include('vendor.messenger.conversations')

        </div>
    </div>

    @include('vendor.messenger.footer')

</div>
</body>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            show: false
        }
    })
</script>

</html>






