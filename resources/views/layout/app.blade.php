<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark" >

<body class="text-gray-800 dark:text-gray-200 ">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
<x-layout.head>
     

    </x-layout.head>
    <body class="antialiased">
            <!-- ====== Navbar Section Start -->
   <x-layout.navbar>
</x-layout.navbar>

    {{ $slot }}
    <!-- ====== Navbar Section End -->
 <x-layout.footer>
</x-layout.footer>
</div>
    <script src="{{URL::asset('js/app.js')}}"></script>
    </body>
</html>
