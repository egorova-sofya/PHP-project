
<!-- вход в личный кабинет.
1. Устанавливаем куки
2. Указываем название для куки
3. устанавливаем значение для куки
4. устанавливаем время жизни куки(эта кука устанавливается на час, а потом удаляется)
5.эта кука будет работать на всех страницах
6. ... и на всех поддоменах(здесь не указано, но можно дописать) -->
<?php
if ($_COOKIE['user'] == 'true')
setcookie('user', 'true', time() - 3600, '/');

else
setcookie('user', 'true', time() + 3600, '/');
 // переадресация
 header('Location: /about.php');
?>
