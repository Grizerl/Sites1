<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="website icon" type="svg" href="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTQiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCA1NCAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly9
    3d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xNC42OTYgMTEuMTE3M0MxNi43OTc2IDcuNjk0MiAxNS43NTA2IDMuMjA3MiAxMi4zNTc1IDEuMDg3MDZDMTEuMjE4OCAwLjM3Nzc3MiA5Ljg5NjY5IDAgOC41NTkzIDBIMFYyMy41OTE0SDkuNjI5MjFDMTMuNjE4NSAyMy41OTE0IDE2Ljg1MTEgMjAuMzMwMyAxNi44NTExIDE2LjMwNTlDMTYuODUxMSAxNC4zNTUzIDE2LjA3OTMgMTIuNDg5NiAxNC42OTYgMTEuMTE3M1pNNS41MDI0MSA1LjU1MDkzSDguNTU5M0M5LjUwNjkzIDUuNTUwOTM
    gMTAuMjc4OCA2LjMyOTYgMTAuMjc4OCA3LjI4NTU5QzEwLjI3ODggOC4yNDE1OSA5LjUwNjkzIDkuMDIwMjYgOC41NTkzIDkuMDIwMjZINS41MDI0MVY1LjU1MDkzWk05LjYyOTIxIDE4LjA0MDVINS41MDI0MVYxNC41NzEySDkuNjI5MjFDMTAuNTc2OCAxNC41NzEyIDExLjM0ODcgMTUuMzQ5OSAxMS4zNDg3IDE2LjMwNTlDMTEuMzQ4NyAxNy4yNjE4IDEwLjU3NjggMTguMDQwNSA5LjYyOTIxIDE4LjA0MDVaTTQzLjQ0NjEgMFYyMy41OTE0SDM3Ljk0MzdWMS4xNzk1N0w0My40NDYxIDBaTTI3LjM5NzQgNi42OTk2NUMyMi43MTI3IDYuNjk5NjUgMTguOTA2OSAxMC4
    1MzEzIDE4LjkwNjkgMTUuMjY1QzE4LjkwNjkgMTkuOTkxIDIyLjcwNTEgMjMuODMwNCAyNy4zOTc0IDIzLjgzMDRDMzIuMDgyMSAyMy44MzA0IDM1Ljg4NzkgMTkuOTk4OCAzNS44ODc5IDE1LjI2NUMzNS44ODAzIDEwLjUzOSAzMi4wODIxIDYuNjk5NjUgMjcuMzk3NCA2LjY5OTY1Wk0yNy4zOTc0IDE4LjA0MDVDMjUuODc2NiAxOC4wNDA1IDI0LjY0NjIgMTYuNzk5MyAyNC42NDYyIDE1LjI2NUMyNC42NDYyIDEzLjczMDggMjUuODc2NiAxMi40ODk2IDI3LjM5NzQgMTIuNDg5NkMyOC45MTgyIDEyLjQ4OTYgMzAuMTQ4NiAxMy43MzA4IDMwLjE0ODYgMTUuMjY1QzMw
    LjE0ODYgMTYuNzk5MyAyOC45MTgyIDE4LjA0MDUgMjcuMzk3NCAxOC4wNDA1Wk0zMC4xNDg2IDI4LjYwMjdDMzAuMTQ4NiAzMC4xMzU1IDI4LjkxNjggMzEuMzc4MiAyNy4zOTc0IDMxLjM3ODJDMjUuODc4IDMxLjM3ODIgMjQuNjQ2MiAzMC4xMzU1IDI0LjY0NjIgMjguNjAyN0MyNC42NDYyIDI3LjA2OTggMjUuODc4IDI1LjgyNzIgMjcuMzk3NCAyNS44MjcyQzI4LjkxNjggMjUuODI3MiAzMC4xNDg2IDI3LjA2OTggMzAuMTQ4NiAyOC42MDI3Wk01My45OTIzIDcuMDE1NzZWMTIuNTU5SDUxLjI0ODhWMTYuOTIyNkM1MS4yNDg4IDE4LjI0MSA1MS42NjkxIDE5LjIxMj
    QgNTIuNzY5NiAxOS4yMTI0QzUzLjE4OTkgMTkuMjIwMSA1My42MDI2IDE5LjE2NjEgNTQgMTkuMDUwNVYyMy4xMzY2QzUzLjE3NDYgMjMuNTkxNCA1Mi4yNTc2IDIzLjgzMDQgNTEuMzE3NiAyMy44MzA0SDUxLjI0ODhDNTEuMjEzNCAyMy44MzA0IDUxLjE3OCAyMy44Mjg0IDUxLjE0MzYgMjMuODI2NEM1MS4xMTEyIDIzLjgyNDUgNTEuMDc5OCAyMy44MjI3IDUxLjA1MDEgMjMuODIyN0g1MC45OTY2TDUwLjg5NzIgMjMuODE1QzQ3LjgyNTEgMjMuNjUzMSA0NS43Mzg3IDIxLjcwMjYgNDUuNzM4NyAxOC4zMTgxVjE4LjMwMjZWMTguMjc5NVYxMi41NjY3VjMuOTU1MDRMNT
    EuMjQxMSAyLjc3NTQ2VjcuMDE1NzZINTMuOTkyM1oiIGZpbGw9IiMyRjMxM0YiLz4KPC9zdmc+Cg==">
    <title>Найкраща служба доставки їжі</title>
</head>
<header>
<div class="headline">
<div class="subtitle">
<img class="logo" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjkiIGhlaWdodD0iNDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZmls
bC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik01NS4yNjIgMHYzMC4wNzRoLTcuMTM2VjEuNTA0TDU1LjI2MiAwek0zNC45NDUgMzIuOTI0YzEuOTcgMCAzLjU2OCAxLjU4NCAzLjU2OCAzLjUzOCAwIDEuOTU0LTEuNTk4IDMuNTM4LTMuNTY4IDMuNTM4cy0zLjU2OC0xLjU4NC0zLjU2OC0zLjUzOGMwLTEuOTU0IDEuNTk3LTMuNTM4IDMuNTY4LTMuNTM4em0wLTI0Lj
M4M2M2LjA3NSAwIDExLjAxIDQuODg0IDExLjAxIDEwLjkxOCAwIDYuMDM1LTQuOTM1IDEwLjkyLTExLjAxIDEwLjkyLTYuMDg1IDAtMTEuMDEtNC44ODUtMTEuMDEtMTAuOTIgMC02LjAzNCA0LjkzNS0xMC45MTggMTEuMDEtMTAuOTE4em0wIDE0LjQ1NmMxLjk3MiAwIDMuNTY4LTEuNTgyIDMuNTY4LTMuNTM4IDAtMS45NTUtMS41OTYtMy41MzgtMy41NjgtMy41MzhzLTMuNTY4IDEuNTgzLTMuNTY4IDMuNTM4YzAgMS45NTYgMS41OTYgMy41MzggMy41NjggMy41Mzh6bS0yMi40NDggMGMxLjIzIDAgMi4yMy0uOTkyIDIuMjMtMi4yMWEyLjIyNCAyLjIyNCAwIDAwLTIuMj
MtMi4yMTJINy4xNDZ2NC40MjJoNS4zNTF6TTcuMTQ2IDcuMDc3djQuNDIyaDMuOTY0YzEuMjI5IDAgMi4yMy0uOTkzIDIuMjMtMi4yMTJhMi4yMjQgMi4yMjQgMCAwMC0yLjIzLTIuMjFINy4xNDZ6bTExLjkyMiA3LjA5NWMxLjcyNCAxLjY5IDIuNzk1IDQuMDMgMi43ODUgNi42MTQgMCA1LjEzLTQuMTkyIDkuMjg4LTkuMzY2IDkuMjg4SDBWMGgxMS4xYzUuMTczIDAgOS4zNjUgNC4xNTcgOS4zNjUgOS4yODcgMCAxLjc5LS41MDUgMy40Ny0xLjM5NyA0Ljg4NXpNNjguNzQgMTYuMDJoLTMuNTU4djUuNTUzYzAgMS42OC41NDUgMi45MTggMS45NzIgMi45MTguOTIyIDAgMS4
1OTYtLjIwNiAxLjU5Ni0uMjA2djUuMjA5cy0xLjQ3Ny44ODQtMy40NzkuODg0aC0uMDg5Yy0uMDkgMC0uMTY4LS4wMS0uMjU4LS4wMWgtLjA2OWMtLjA0IDAtLjA5LS4wMS0uMTI5LS4wMS0zLjk4NC0uMjA2LTYuNjktMi42OTItNi42OS03LjAwN1Y1LjA0MWw3LjEzNi0xLjUwM3Y1LjQwNWgzLjU2OHY3LjA3N3oiIGZpbGw9IiNmZmYiLz48L3N2Zz4=" alt="логотип компавнії">
<img class="icon-prapor" src="https://hatscripts.github.io/circle-flags/flags/ua.svg" alt="прапор україни">
<span class="text">Україна(UK)</span>
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="avatar"><path d="M11.2929 15.2929L7.70713 11.7071C7.07716 11.0771 7.52333 10 8.41424 10H15.5858C16.4767 10 16.9229 11.0771 16.2929 11.7071L12.7071 15.2929C12.3166 15.6834 11.6834 15.6834 11.2929 15.2929Z" fill="currentColor"></path></svg>
<span class="text-1">Підтримка</span>
<a href="./inc/about.php" class="button">Зареєструватися</a>
</div>
<div class="slogan">
<h1 class="lead">Подорожуй будь-куди,<br> будь-коли</h1>
<p class="desc">Bolt — це універсальний мобільний додаток. За лічені<br> хвилини сідай в авто і насолоджуйся комфортною <br> поїздкою; або ж можеш уникнути заторів на одному з<br> наших електросамокатів.</p>
<button class="btn">Завантажити додаток</button>
</div>
<div class="dropdown-1">
<ul>
<li>
<span>Оберіть Вашу країну</span>
</li>
<li>
    <select>
        <option>Україна</option>
        <option>Молдова</option>
        <option>Румунія</option>
        <option>Італія</option>
        <option>Англія</option>
    </select>
</li>
<li>
<span>Оберіть Вашу мову</span>
</li>
<li>
<select>
        <option>Україна</option>
        <option>English</option>
    </select>
</li>
</ul>
</div>
</div>
</header>
<footer>
<div>
    <div class="main">
    <h1 class="content-main">Отримуйте гроші з Bolt</h1>
    </div>
<div class="section">
    <span class="content-1">Водій</span>
    <span class="content-2">Кур'єр</span>
    <span class="content-3">Власник ресторану чи крамниці</span>
    <span class="content-4">Власник автопарку</span>
</div>
</div>
<div class="foto-main-1">
<div class="foto-main">
    <img class="img" src="./img/driver.webp" alt="Людина в автомобілі">
<div class="text-main">
    <h1 class="list-main">Отримуйте додатковий <br> дохід за кермом</h1>
<h5 class="list">Водіть більше, заробляйте більше</h5>
    <span class="item">На вас чекають замовлення від більш ніж 150 мільйонів<br> наших клієнтів. Ваш дохід зростатиме в періоди високого <br>попиту.</span>
<h5 class="list">Встановлюйте свій розклад</h5>
    <span class="item">Керуйте, коли забажаєте: у будні або вихідні, вранці або <br> ввечері – отримуйте дохід, не змінюючи свого способу<br> життя.</span>
<h5 class="list">Отримуйте оплату щотижня</h5>
    <span class="item">Ви отримуватимете оплату наприкінці кожного тижня — не <br>потрібно чекати дня виплати.</span>
<div>
<button class="btn-main">Дізнатися більше</button>
</div>
</div>
</div>
</div>
<div class="body-1">
<div class="body">
    <img class="pic" src="./img/courier.webp" alt="Людина на велосипеді">
<div class="text-body">
    <h1 class="list-body">Отримуйте гроші<br> за доставку їжі</h1>
<h5 class="list">Отримуйте дохід без зайвих турбот</h5>
    <span class="item">Реєструйтесь безплатно та отримуйте щотижневі виплати<br> без прихованих комісій.</span>
<h5 class="list">Доставляйте, коли захочете</h5>
    <span class="item">Вирішуйте самі, коли і як часто доставляти: у будні<br> або вихідні, зранку або ввечері — все залежить тільки від<br> вашого бажання.</span>
<h5 class="list">Доставляйте як завгодно</h5>
    <span class="item">На велосипеді, самокаті чи автомобілі — тільки ви<br> обираєте, як здійснювати доставку!</span>
<div>
<button class="btn-body">Дізнатися більше</button>
            </div>
        </div>
    </div>
</div>
<div class="body-section-1">
<div class="body-section">
    <img class="pic" src="./img/restaurant-store-owner.webp" alt="фото ресторана з логотипом">
<div class="text-body">
    <h1 class="list-body-section">Збільшіть ваші продажі</h1>
<h5 class="list">Залучайте нових клієнтів</h5>
    <span class="item">Мільйони наших користувачів замовляють їжу чи товари  <br>в таких же ресторанах і магазинах, як ваш.</span>
<h5 class="list">Збільшіть свій прибуток</h5>
    <span class="item">Наша велика мережа користувачів принесе вам більше<br> клієнтів і прибутку.</span>
<h5 class="list">Ми подбаємо про доставку</h5>
    <span class="item">Ми подбаємо про логістику, а ви зосередьтеся на<br> управлінні своїм бізнесом.</span>
<div>
<button class="btn-body">Дізнатися більше</button>
</div>
</div>
</div>
</div>
<div class="body-section-content-1">
<div class="body-section-content">
    <img class="pic" src="./img/fleet-owner.webp" alt="фото дороги з машин">
<div class="text-body-content">
    <h1 class="list-body-content">Розвивайте свій <br> транспортний бізнес</h1>
<h5 class="list">Збільшіть свій заробіток</h5>
    <span class="item">Наша велика мережа пасажирів означає більше <br> замовлень на день і вищі прибутки.</span>
<h5 class="list">Керуйте своїми активами</h5>
    <span class="item">Легко переглядайте ваші авто, водіїв та їхній поточний<br> статус.</span>
<h5 class="list">Слідкуйте за продуктивністю</h5>
    <span class="item">Отримайте легкий доступ до інформації про завершені<br> поїздки, рахунки та виплати кожного водія.</span>
<div>
<button class="btn-body">Дізнатися більше</button>
</div>
</div>
</div>
</footer>
<div class="aside">
<div class="aside-pidheader">
    <h1 class="text-aside-header">Створюємо міста для <br> людей, а не<br> автомобілів</h1>
    <span class="span-aside">Ми раді ділитися експертними знаннями та <br> актуальними даними, щоб покращувати життя <br> в містах.</span>
<h5 class="aside-list">Обмін передовим досвідом</h5>
    <span class="aside-item">За допомогою наших рекомендацій місцеві органи<br> міського управління зможуть зробити міста доступнішими<br> та зручнішими для їхніх мешканців.</span>
<h5 class="aside-list">Безліч способів пересування в одному додатку</h5>
    <span class=" aside-item">Тепер екологічні та безпечні поїздки стали ще <br> доступнішими – ми об'єднали різні види транспорту в<br> одному додатку!</span>
<h5 class="aside-list">Турбота про екологію</h5>
    <span class="aside-item">Ми компенсуємо всі викиди CO2 в атмосферу, мінімізуючи<br> вплив сервісів Bolt на навколишнє середовище.</span>
    <div>
<button class="btn-aside">Дізнатися більше</button>
</div>
</div>
    <img class="image" src="./img/map.png" alt="Карта">
</div>
<div class="meta">
<div>
    <h1 class="preview">Про нас</h1>
    <span class="overlay">Bolt – це перший європейський мобільний супердодаток. Ми боремося за краще міське <br>середовище та пропонуємо альтернативу особистим автомобілям, для якої б мети вони не<br> використовувалися. Наші послуги включають замовлення поїздок, каршерінг, прокат<br> електросамокатів, а також доставку їжі та продуктів.</span>
    <img class="thumbnail" src="https://bolt.eu/static/world-map-optimized-6338bdae39fa9d215fb417b5845792a7.svg" alt="Карта материків">
</div>
</div>
<div class="content-caption">
<h1 class="content-text-caption">Завантажуй наші додаткі</h1>
</div>
<div class="caption">
<div>
<h1 class="copy">Замовляй поїздку та<br> вирушай у дорогу за<br> лічені хвилини.</h1>
<div class="snippet">
<span >Зіскануй QR-код за допомогою камери <br>смартфона, щоб завантажити додаток Bolt.<br> Доступний для пристроїв на iOS та Android.</span>
</div>
<div class="excerpt">
<span>Або можеш<button class="excerpt-text">замовити поїздку онлайн</button></span>
</div>
<div class="caption-pid">
<img class="phone-img" src="./img/image.webp" alt="фото телефона">
</div>
</div>
</div>
<div class="end ">
    <div class="end-father">
   <img class="end-foto" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjkiIGhlaWdodD0iNDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik01NS4yNjIgMHYzMC4wNzRoLTcuMTM2VjEuNTA0TDU1LjI2MiAwek0zNC45NDUgMzIuOTI0YzEuOTcgMCAzLjU2OCAxLjU4NCAzLjU2OCAzLjUzOCAwIDEuOTU0LTEuNTk4IDMuNTM4LTMuNTY4IDMuNTM4cy0zLjU2OC0xLjU4NC0zLjU2OC0zLjUzOGMwLTEuOTU0IDEuNTk3LTMuNTM4IDMuNTY4LTMuNTM4em0wLTI0LjM4M2M2LjA3NSAwIDExLjAxIDQuODg0IDExLjAxIDEwLjkxOCAwIDYuMDM1LTQuOTM1IDEwLjkyLTExLjAxIDEwLjkyLTYuMDg1IDAtMTEuMDEtNC44ODUtMTEuMDEtMTAuOTIgMC02LjAzNCA0LjkzNS0xMC45MTggMTEuMDEtMTAuOTE4em0wIDE0LjQ1NmMxLjk3MiAwIDMuNTY4LTEuNTgyIDMuNTY4LTMuNTM4IDAtMS45NTUtMS41OTYtMy41MzgtMy41NjgtMy41MzhzLTMuNTY4IDEuNTgzLTMuNTY4IDMuNTM4YzAgMS45NTYgMS41OTYgMy41MzggMy41NjggMy41Mzh6bS0yMi40NDggMGMxLjIzIDAgMi4yMy0uOTkyIDIuMjMtMi4yMWEyLjIyNCAyLjIyNCAwIDAwLTIuMjMtMi4yMTJINy4xNDZ2NC40MjJoNS4zNTF6TTcuMTQ2IDcuMDc3djQuNDIyaDMuOTY0YzEuMjI5IDAgMi4yMy0uOTkzIDIuMjMtMi4yMTJhMi4yMjQgMi4yMjQgMCAwMC0yLjIzLTIuMjFINy4xNDZ6bTExLjkyMiA3LjA5NWMxLjcyNCAxLjY5IDIuNzk1IDQuMDMgMi43ODUgNi42MTQgMCA1LjEzLTQuMTkyIDkuMjg4LTkuMzY2IDkuMjg4SDBWMGgxMS4xYzUuMTczIDAgOS4zNjUgNC4xNTcgOS4zNjUgOS4yODcgMCAxLjc5LS41MDUgMy40Ny0xLjM5NyA0Ljg4NXpNNjguNzQgMTYuMDJoLTMuNTU4djUuNTUzYzAgMS42OC41NDUgMi45MTggMS45NzIgMi45MTguOTIyIDAgMS41OTYtLjIwNiAxLjU5Ni0uMjA2djUuMjA5cy0xLjQ3Ny44ODQtMy40NzkuODg0aC0uMDg5Yy0uMDkgMC0uMTY4LS4wMS0uMjU4LS4wMWgtLjA2OWMtLjA0IDAtLjA5LS4wMS0uMTI5LS4wMS0zLjk4NC0uMjA2LTYuNjktMi42OTItNi42OS03LjAwN1Y1LjA0MWw3LjEzNi0xLjUwM3Y1LjQwNWgzLjU2OHY3LjA3N3oiIGZpbGw9IiMzNEQxODYiLz48L3N2Zz4=">
   </div>
   <div>
<ul class="end-father">
    <li class="end-content">
    <h4 class="end-text">Bolt</h4>
    </li>
<li  class="end-content">
    <a class="end-content-lists"  href="#">Поїздки</a>
</li>
<li class="end-content">
    <a class="end-content-lists" href="#">Доставка їжі</a>
</li>
<li class="end-content">
    <a class="end-content-lists" href="#">Доставка продуктів</a>
</li>
<li class="end-content">
    <a class="end-content-lists" href="#">Електросамокати</a>
</li>
<li class="end-content">
    <a class="end-content-lists" href="#">Каршерінґ</a>
</li>
<li class="end-content">
    <a class="end-content-lists" href="#">Поїздки для корпоративних <br> клієнтів</a>
</li>
<li class="end-content">
    <a class="end-content-lists" href="#">Аеропорти</a>
</li>
<li class="end-content">
    <a class="end-content-lists" href="#">міста</a>
</li>
    </ul>
</div>
<div>
<ul class="end-father">
<li class="end-conten">
    <h4 class="end-text">Співпрацюйте із Bolt</h4>
</li>
<li class="end-conten">
    <a class="end-content-lists" href="#">Зареєструватися водієм</a>
</li>
<li class="end-conten">
    <a class="end-content-lists" href="#">Зареєструватися кур'єром</a>
</li>
<li class="end-conten">
    <a class="end-content-lists" href="#">Автопарки</a>
</li>
<li class="end-conten">
    <a class="end-content-lists" href="#">Франшиза</a>
</li>
<li class="end-conten">
    <a class="end-content-lists" href="#">Інфлюенсерам</a>
</li>
</ul>
</div>
<div>
<ul class="end-father">
<li class="end-conte">
    <h4 class="end-text">Компанія</h4>
</li>
<li class="end-conte">
    <a class="end-content-lists" href="#">Про нас</a>
</li>
<li class="end-conte">
    <a class="end-content-lists" href="#">Кар'єра</a>
</li>
<li class="end-conte">
    <a class="end-content-lists" href="#">Зелений план</a>
</li>
<li class="end-conte">
    <a class="end-content-lists" href="#">Преса</a>
</li>
<li class="end-conte">
    <a class="end-content-lists" href="#">Блоґ</a>
</li>
<li class="end-conte">
    <a class="end-content-lists" href="#">Правила використання бренду</a>
</li>
</ul>
</div>
</div>
<div class="end-btn">
    <div>
    <button class="end-buton">Завантажити додаток Bolt</button>
    <button class="end-buton">Завантажити додаток Bolt Food</button>
    <button class="end-buton">Замовити поїздку онлайн</button>
</div>
</div>
<script src="./script.js"></script>  
</html>