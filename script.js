    // Функция для открытия модального окна по его ID
    function openModal(modalId) {
      document.getElementById(modalId).style.display = 'block';
    }
    // Функция для закрытия модального окна по его ID
    function closeModal(modalId) {
      document.getElementById(modalId).style.display = 'none';
    }

    // Открытие модальных окон для "О нас" и "Контакты"
    document.getElementById('about-link').addEventListener('click', function(event) {
      event.preventDefault();
      openModal('about-modal');
    });
    document.getElementById('contacts-link').addEventListener('click', function(event) {
      event.preventDefault();
      openModal('contacts-modal');
    });

    // Открытие модальных окон для форм регистрации и авторизации
    document.getElementById('registration-link').addEventListener('click', function(event) {
      event.preventDefault();
      openModal('registration-modal');
    });
    document.getElementById('authorization-link').addEventListener('click', function(event) {
      event.preventDefault();
      openModal('authorization-modal');
    });

    // Закрытие модальных окон при клике на крестик
    const closeButtons = document.querySelectorAll('.close-modal');
    closeButtons.forEach(button => {
      button.addEventListener('click', function() {
        const modalId = this.getAttribute('data-modal');
        closeModal(modalId);
      });
    });

    // Закрытие модального окна при клике вне его контента
    window.addEventListener('click', function(event) {
      const modals = document.querySelectorAll('.modal');
      modals.forEach(modal => {
        if (event.target === modal) {
          modal.style.display = 'none';
        }
      });
    });
        // Скрипт для переключения вкладок
        const tabLinks = document.querySelectorAll('.tablink');
        const tabContents = document.querySelectorAll('.tab-content');
    
        tabLinks.forEach(link => {
          link.addEventListener('click', () => {
            // Удаляем класс active у всех кнопок и контента
            tabLinks.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            // Добавляем active для выбранной кнопки и соответствующего контента
            link.classList.add('active');
            const tabId = link.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
          });
        });