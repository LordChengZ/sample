<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layouts._header');

    <div class="container">
    	<div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
    		@yield('content')
    	</div>
        @include('layouts._footer')
    </div>    
    <script type="text/javascript" src="/js/app.js"></script>
  </body>
</html>