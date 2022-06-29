<!DOCTYPE html>
@include('components.header')
@include('components.footer')

<!doctype html>
<html lang="ja">
@yield('header')
<body>
    <main>
        @section('body')
        @show
    </main>
    @yield('footer')
</body>
</html>
