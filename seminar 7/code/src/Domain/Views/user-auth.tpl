{% if not auth-success %}
  {{ auth-error }}
{% endif %}


<form action="/user/login/" method="post">
  <input id="csrf_token" type="hidden" name="csrf_token" value="{{ csrf_token }}">
  <p>
    <label for="user-login">Логин:</label>
    <input id="user-login" type="text" name="login">
  </p>
  <p>
    <label for="user-birthday">Дата рождения:</label>
    <input id="user-birthday" type="birthday" name="birthday">
  </p>

  <p><input type="submit" value="Войти"></p>
</form>