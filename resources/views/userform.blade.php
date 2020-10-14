<div class="content">
    <h3>Informacja o użytkowniku</h3>
    <form action="usercontroller" method="POST">
        {{ @csrf_field() }}
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Zatwierdź"><br><br>
    </form>
</div>
