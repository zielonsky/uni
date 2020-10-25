<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Użytkownik</h4>

    <!-- <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
    </ul> -->

    <form action="usercontroller1" method="post" novalidate>
      {{ @csrf_field() }}
      <input type="text" name="address" autofocus placeholder="@">
      @error('address')
        <span>{{ $message }}</span>
      @enderror
      <br><br>
      <input type="text" name="surname"  placeholder="Nazwisko">
      @error('surname')
        <span>{{ $message }}</span>
      @enderror
      <br><br>
      <input type="submit" value="Zatwierdź">
    </form>
  </body>
</html>
