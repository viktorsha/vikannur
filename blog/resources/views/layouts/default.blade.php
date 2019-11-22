<!DOCTYPE html>
<html>
    <head>
        <title>HOW TO LIVE @yield('title')</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/img/palm.png')}}"> 
        <link rel="stylesheet" href="{{url('css/style.css')}}" media="all">
    </head>
    <body background="{{url('assets/img/photo.jpg')}}"> <!-- background="photo.jpg" align = "center"-->
        <font face = "courier">
        <div class="header">
            <div class="logo">
                <img class="icon" src="{{url('assets/img/palm.png')}}" alt="logo">
                <div class="text">HOW TO LIVE</div>
            </div>
        </div>
        <div class="menu">
                <div class="menu-item">
                  <a class="title" href="#">Стиль жизни</a>
                  <ul class="submenu">
                    <li><a href = "#">Саморазвитие</a></li>
                    <li><a href = "#">Мысли</a></li>
                    <li><a href = "#">Творчество</a></li>
                    <li><a href = "#">Экология</a></li>
                  </ul>
                </div>
                <div class="menu-item">
                    <a class="title" href="#">Рецепты</a>
                    <ul class="submenu">
                      <li><a href = "#">Завтраки</a></li>
                      <li><a href = "#">Обеды</a></li>
                      <li><a href = "#">Ужины</a></li>
                    </ul>
                  </div>
                  <div class="menu-item">
                      <a class="title" href="#">Обзоры</a>
                      <ul class="submenu">
                        <li><a href = "#">Места</a></li>
                        <li><a href = "#">Книги</a></li>
                        <li><a href = "#">Фильмы</a></li>
                        <li><a href = "#">Еда</a></li>
                      </ul>
                    </div>
                    <div class="menu-item">
                      <a class="title" href="#">Здоровье</a>
                        <ul class="submenu">
                          <li><a href = "#">Красота</a></li>
                          <li><a href = "#">Спорт</a></li>
                        </ul>
                    </div>
            </div>
        <div class = "main">
            @yield('content')    
        </div>
            <footer>
                <div class="description">
                    <img class="icon" src="{{url('assets/img/palm.png')}}" alt="Logo">
                    <div class="text">
                        How to live - это супер-пупер мега крутой сайт для самых классных и современных ребят.
                    </div>
                </div>
                <div class="add">
                    <ul>
                        <li><a href="#" target="_blank">О проекте</a></li>
                        <li><a href="#" target="_blank">Команда</a></li>
                        <li class="last-child"><a href="#" target="_blank">Правила</a></li>
                    </ul>
                </div>
                <div class="social">
                    <a href="#" title="Открыть нашу группу Вконтакте" target="_blank"><img class="icon"src="{{url('assets/img/vk2.png')}}" alt="VK"></a>
                    <a href="#" title="Открыть наш Telegram канал" target="_blank"><img class="icon" src="{{url('assets/img/telegram2.png')}}" alt="Telegram"></a>
                    <a href="#" title="Открыть наш Twitter" target="_blank"><img class="icon" src="{{url('assets/img/twitter2.png')}}" alt="Twitter"></a>
                </div>
            </footer>
    </body>
</html>