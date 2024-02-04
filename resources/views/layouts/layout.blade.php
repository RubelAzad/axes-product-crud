<!DOCTYPE html>
<html>
<head>
    <title>Axes Project</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">.
    <link ref="stylesheet" href="/css/app.css" type="text/css">
</head>
<body>

<div class="container">
    @yield('content')
</div>
<script>
    setTimeout(function(){
        document.getElementById('successAlert').style.display = 'none';
    }, 1000); // Hide after 10 seconds
</script>
</body>
</html>
