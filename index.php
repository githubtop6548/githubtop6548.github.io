<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Интернет-магазин</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <!-- Шапка сайта -->
  <header>
    <div class="logo">
      <h1>Мой Магазин</h1>
    </div>
    <nav>
      <a href="#">Главная</a>
      <a href="#">Каталог</a>
      <!-- Ссылки для модальных окон "О нас" и "Контакты" -->
      <a id="about-link">О нас</a>
      <a id="contacts-link">Контакты</a>
    </nav>
    <!-- Кнопки регистрации и авторизации -->
    <div class="auth-buttons">
      <a id="registration-link">Регистрация</a>
      <a id="authorization-link">Авторизация</a>
    </div>
  </header>

  <!-- Баннер / главная картинка -->
  <section class="banner">
    <p>Добро пожаловать в наш интернет-магазин!</p>
  </section>

  <!-- Основной контент -->
  <div class="container">
    <h2>Наши товары</h2>
    <div class="product-grid">
      <!-- Пример товара -->
      <div class="product">
        <img src="jpg\505511671.jpg">
        <h3>Xiaomi Redmi Note 14 Pro 8/256GB</h3>
        <p>Цена: 12 999грн.</p>
        <a href="t1.html"><button>Купить</button></a>
      </div>
      <div class="product">
        <img src="jpg\468888082.jpg">
        <h3>Apple iPhone 16 Pro Max 256GB</h3>
        <p>Цена: 71 599грн.</p>
        <button>Купить</button>
      </div>
      <div class="product">
        <img src="jpg\507062959.jpg">
        <h3>Samsung Galaxy S25 Ultra 12/512GB </h3>
        <p>Цена: 67 999грн.</p>
        <button>Купить</button>
      </div>
      <!-- Добавьте больше товаров по необходимости -->
    </div>
  </div>

  <!-- Модальное окно для информации "О нас" -->
  <div id="about-modal" class="modal">
    <div class="modal-content">
      <span class="close-modal" data-modal="about-modal">&times;</span>
      <h2>О нас</h2>
      <p>
        Добро пожаловать в наш интернет-магазин! Мы предлагаем широкий ассортимент товаров по привлекательным ценам. Наша цель – обеспечить высокое качество обслуживания и удовлетворить потребности наших клиентов. Спасибо, что выбрали нас!
      </p>
    </div>
  </div>

  <!-- Модальное окно для информации "Контакты" -->
  <div id="contacts-modal" class="modal">
    <div class="modal-content">
      <span class="close-modal" data-modal="contacts-modal">&times;</span>
      <h2>Контакты</h2>
      <p>
        Вы можете связаться с нами по следующим контактам:
      </p>
      <ul>
        <li>Телефон: +38 (068) 543-78-93</li>
        <li>Email: info@gmail.com</li>
        <li>Адрес: ул. Примерная, д. 1, Oдесса, Украина</li>
      </ul>
    </div>
  </div>

  <!-- Модальное окно с формой регистрации -->
  <div id="registration-modal" class="modal">
    <div class="modal-content">
      <span class="close-modal" data-modal="registration-modal">&times;</span>
      <h2>Регистрация</h2>
      <form class="modal-form"method="post"action="reg.php">
        <label for="reg-name">Имя:</label>
        <input type="text" id="reg-name" name="reg-name" placeholder="Ваше имя" required>
        
        <label for="reg-email">Email:</label>
        <input type="email" id="reg-email" name="reg-email" placeholder="Ваш email" required>
        
        <label for="reg-password">Пароль:</label>
        <input type="password" id="reg-password" name="reg-password" placeholder="Ваш пароль" required>
        
        <button type="submit">Зарегистрироваться</button>
      </form>
    </div>
  </div>

  <!-- Модальное окно с формой авторизации -->
  <div id="authorization-modal" class="modal">
    <div class="modal-content">
      <span class="close-modal" data-modal="authorization-modal">&times;</span>
      <h2>Авторизация</h2>
      <form class="modal-form">
        <label for="auth-email">Email:</label>
        <input type="email" id="auth-email" name="auth-email" placeholder="Ваш email" required>
        
        <label for="auth-password">Пароль:</label>
        <input type="password" id="auth-password" name="auth-password" placeholder="Ваш пароль" required>
        
        <button type="submit">Войти</button>
      </form>
    </div>
  </div>

  <!-- Подвал сайта -->
  <footer>
    <p>&copy; 2025 Мой Магазин. Все права защищены.</p>
  </footer>

<script src="script.js"></script>
</body>
</html>
