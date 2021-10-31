<div class="container">
  <header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">Главная</a>
      </li>
      <li class="nav-item"><a href="about.php" class="nav-link">Контакты</a></li>
    </ul>
<?php if($_COOKIE['user'] == 'true'):?>
    <a href="/auth.php" class="btn btn-outline-primary">Кабинет пользователя</a>
<?php else: ?>
    <a href="/auth.php" class="btn btn-outline-primary">Войти</a>
<?php endif ?>
  </header>
</div>
