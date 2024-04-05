<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABP - WEEK 7</title>
    @include('libraries.styles')
</head>

<body class = "bg-light-subtle-">
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <p class="text-primary">Fauzan Almas Saepullah - 1301210558</p>
      </a>
 
      </div>
    </div>
  </nav>
    </header>
    <main>
    @yield('content')
    </main>
    @include('libraries.scripts')
    
</body>
</html