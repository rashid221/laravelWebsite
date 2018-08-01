<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style>
  
</style>
</head>
<body>
<form class=""action="{{URL::to('/store')}}" method="post">
  <input type="text" name="name" value="" placeholder="Enter your name">
    <input type="text" name="email" value="" placeholder="Enter your email">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" name="button">Register</button>
</form>
</body>
</html>