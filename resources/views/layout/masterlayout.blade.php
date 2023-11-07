@include('layout.header')
<main class="content">
    <main class="container">
        @hasSection('content')
        @yield('content')
        @else
        <h2>No Content Found!</h2>
        @endif
    </main>
</main>
@include('layout.footer')
