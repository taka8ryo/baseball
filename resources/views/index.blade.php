<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>
</head>
<body>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Roboto:400">
  <link rel="stylesheet" href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css">

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</body>
  <div id="app"></div>


  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
</html>