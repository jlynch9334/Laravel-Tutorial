<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <style>
        .is-complete {
            text-decoration: line-through;
        }
        .title {
            margin-top: 10px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>