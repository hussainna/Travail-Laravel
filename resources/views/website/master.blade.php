<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.head')
</head>
<body>
    
@include('website.header')


<main>
    <article>
        @yield('content')
    </article>
</main>



@include('website.footer')




@include('website.script')
</body>
</html>