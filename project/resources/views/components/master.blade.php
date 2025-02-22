@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouVento | {{$title}}</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      @theme {
        --color-clifford: #da373d;
      }
    </style>

</head>
<body>
       @include('partials.siedbar')
       <main class="p-4 sm:ml-64">
        @yield('main')
       </main>
</body>
</html>