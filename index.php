<?php
include "request.php";
    if($_SESSION['name'] && $_SESSION['text']) {
        $ip = $_SERVER['REMOTE_ADDR'];
        $str = $ip . ' ' . $_SESSION['name'] . ' ' . $_SESSION['text'] . ' ' . $_SESSION['date'] . "\r\n";
        $open = fopen("massege.txt", "a+");
        fputs($open, $str);
        fclose($open);
        };
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link type="text/css" rel="stylesheet" href="public/style.css"/>
    <script src="public/jquery-3.1.1.min.js" type="text/javascript"></script>
</head>
    <body>
        <header class="header"><p class="header_text">Портфолио</p></header>
            <div class="menu_block" id="menu_block" style="background-image:url(public/menu.jpg)">
                <div class="menu"><h3><a href="#about_me" onclick="go_in()">Коротко обо мне </a></h3></div>
                <div class="menu"><h3><a href="#aducation" onclick="go_in()"> Образование </a></h3></div>
                <div class="menu"><h3><a href="#work_exp" onclick="go_in()"> Опыт работы </a></h3></div>
                <div class="menu"><h3><a href="#skils" onclick="go_in()"> Умения </a></h3></div>
                <div class="menu"><h3><a href="#my_photo" onclick="go_in()"> Мои фото </a></h3></div>
                <div class="menu"><h3><a href="#my_hobby" onclick="go_in()"> Увлечения </a></h3></div>
            </div>

                <div class="me_block_first">

                     <div class="me">
                        <h2 id="about_me">Коротко обо мне</h2>
                            <table class="table" border="2px" rules="all" align="center" width="70%">
                                <tr><td><p>ФИО</p></td><td><p>Лысак Константин Валерьевич</p></td></tr>
                                <tr><td><p>Год рождения</p></td><td><p>27 марта 1988</p></td></tr>
                                <tr><td><p>Пол</p></td><td><p>Мужской</p></td></tr>
                                <tr><td><p>Семейное положение</p></td><td><p>Не женат</p></td></tr>
                                <tr><td><p>Дети</p></td><td><p>нет</p></td></tr>
                                <tr><td><p>Телефон</p></td><td><p>Имеется</p></td></tr>
                                <tr><td><p>Email</p></td><td><p>lysakkonstantin@mail.com</p></td></tr>
                                <tr><td><p>Skyp</p></td><td><p>konstantinLys</p></td></tr>
                            </table>
                        <h2 id="aducation">Образование</h2>
                            <table class="table" border="2px" rules="all" align="center" width="70%">
                                <tr><td><p>Национальный Технический Университет
                                ”Харьковский Политехнический Институт”
                                (2005-2011гг)</p></td><td><p>Образование высшее. Инженер - технолог (Неорганическая химия)</p></td></tr>
                                <tr><td><p>Учебный цент Source IT (2016г)</p></td><td><p>PHP Developer</p></td></tr>
                                <tr><td><p>Английский</p></td><td><p>Базовый, вданный момент изучаю на курсах</p></td></tr>
                            </table>
                            <img class="dip" src="public/d1.jpg" width="423px" height="450px" alt="фото">
                            <img class="dip" src="public/d2.jpg" width="423px" height="450px" alt="фото">
                        <h2 id="work_exp">Опыт работы</h2>
                            <table class="table" border="2px" rules="all" align="center" width="70%">
                                <tr><td><p>ГП «ЗАВОД «ЭЛЕКТРОТЯЖМАШ»</p></td><td><p>Инженер 1, 2, 3 категории, Начальник бюро в управление снабжения.<br>

                                Обязанности: Обеспечение производства комплектующими изделиями, оформление заказов на покупку,
                                подготовка контрактов к подписанию с поставщиками, поиск и проработка альтернативных изготовителей продукции,
                                подготовка номенклатуры для проведения тендеров, контроль за своевременным обеспечением заказов,
                                формирование платежных календарей, изучение технической документации, контролировать правильное оформление бухгалтерского документооборота.<br>
                                С 2012 по нынешнее время
                                </p></td></tr>
                                <tr><td><p>IT</p></td><td><p>Опыт работы отсутсвует</p></td></tr>
                            </table>
                        <h2 id="skils">Умения</h2>
                            <p>
                                Закончил курсы в Source IT по специальности PHP Developer,
                                мечтаю начать карьеру в IT сфере, к сожалению не имею опыта работы,
                                в связи с этим готов рассмотреть любые варианты. На данный момент владею:
                                Базовыми знаниями PHP, ООП, HTML, CSS, SQL, MySQL , JS, JQuery, Git.
                                Начал изучать framework - Laravel и CMS - Wordpress.
                            </p>
                     </div>
                </div>
                <div class ="cool">
                    <img id = "smile" src="public/smile.png">
                    <p class="cool_text">Hello</p>
                </div>
                <div class="me_block_second">
                    <div class="me">
                        <h2 id="my_photo">Мои фото</h2>
                             <div class ="div_photo">
                                <img class="photo" src="public/me1.jpg" width="447px" height="350px" alt="Мои фото">
                                <img class="photo" src="public/me2.jpg" width="447px" height="350px" alt="Мои фото">
                                <img class="photo" src="public/me3.jpg" width="447px" height="350px" alt="Мои фото">
                                <img class="photo" src="public/me4.jpg" width="447px" height="350px" alt="Мои фото">
                                <img class="photo" src="public/me5.jpg" width="447px" height="350px" alt="Мои фото">
                                <img class="photo" src="public/me6.jpg" width="447px" height="350px" alt="Мои фото">
                            </div>
                        <div class="div_my_hobby">
                            <h2 id="my_hobby">Увлечения</h2>
                                <p>
                                    Люблю активные виды спорта футбол, плавание, турник, играю в шахматы,
                                    в свободное время хожу в кино, кафе, провожу время с друзьями.
                                </p>
                        </div>
                     </div>
                </div>
                <footer class="footer">
                    <div>
                        <p class="footer_text">
                            Думать – самая трудная работа; вот, вероятно, почему этим занимаются столь немногие.<br>

                            <span>Генри Форд</span><br>
                            <br>Падает тот, кто бежит. Тот, кто ползет, не падает.<br>
                            <span>Плиний Старший</span><br>
                            <br>Лучше быть смелым, чем осторожным, потому что судьба — женщина.<br>
                            <span>Никколо Макиавелли</span><br>
                            <br>Начните делать то, что нужно. Затем делайте то, что возможно. И вы вдруг обнаружите, что делаете невозможное.<br>
                            <span>Св.Франциск Ассизский</span>
                        </p>
                    </div>
                        <div class="form">
                            <h3>Связаться со мной</h3>
                            <form action="request.php" method="POST" id="form">
                                <h3>Введите ваше имя</h3>
                                <input type="text" name="name">
                                <h3>Оставьте сообщение</h3>
                                <textarea name="text"></textarea>
                                <input type="hidden" name="date" value="<?php echo date("Y-m-d H:i:s");?>">
                                <div>
                                    <input type="submit" name="Go" value="Отправить">
                                </div>
                                <h4>Мой телефон 096 621 ** **</h4>
                                <h4>Мой email: lysakkonstantin@gmail.com</h4>
                            </form>
                        </div>
                </footer>
            <div id="up" onclick="up()">Up</div>
        <script src="public/javascript.js" type="text/javascript"></script>
    </body>
</html>