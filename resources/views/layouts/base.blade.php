<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>@yield('pageTitle')</title>
</head>
<body>
    @include('partials.header')

    <main>
        @yield('mainContent')
    </main>

    @include('partials.footer')
    
</body>
</html>

<style>

.container-fluid{
        background-color: white;
        
    }
    
    nav{
        width: 100%; 
        position: fixed;
        left:0;
        right:0;
        background-color: white;
        z-index: 100;
    }
    
    
    .logo img{
        width:80px;
        height: 80px;
    }
    ul{
        list-style-type: none;
        align-items: center;
    }
    li{
        padding:10px
    }
    a{
        text-decoration: none;
        color: black
    }
    .jumbo img{
        padding-top: 100px;
        width: 100%;
        height:500px;
        
    }

</style>