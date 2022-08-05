<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Switch keyboard</title>
</head>
<body>
 
<?php require "blocks/header.php" ?>

<div id="contant">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Переключатели: Cherry MX</h1>
        <p class="lead text-muted">Механические переключатели – это механизмы, находящиеся под каждой клавишей, которые физически обеспечивают ее срабатывание.</p>
        <p>
          <a href="index.php" class="btn btn-primary my-2">Переключатели Cherry MX</a>
          <a href="alps.php" class="btn btn-secondary my-2">Другие производители</a>
        </p>
      </div>
    </div>
</div>
<main>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Cherry MX Brown</h4>
          </div>
          <div class="card-body">
             <img src="https://static.insales-cdn.com/files/1/6835/3513011/original/cherry_mx_brown.png" alt="">
            <ul>
              <li>В качестве первой механики</li>
              <li>Для игр на любительском уровне</li>
              <li>Домой</li>
              <li>В офис</li>
            </ul>
            <form action="Cherry/brown.php" method= "post">
           <button class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Cherry MX Blue</h4>
          </div>
          <div class="card-body">
          <img src="https://cdn-reichelt.de/bilder/web/xxl_ws/E500/CHERRY_MX1A-E1NN_01.png" alt="">
            <ul>
              <li>В кабинет на работу, либо в офис с нераздражительными коллегами</li>
              <li>Домой, если не разбудите никого ночью</li>
              <li>Печатнику со стажем</li>
              <li>Любителям теплых ламповых кликов</li>
            </ul>
            <form action="Cherry\blue.php" method= "post">
           <button class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Cherry MX Red</h4>
          </div>
          <div class="card-body">
          <img src="https://static.insales-cdn.com/files/1/8152/3514328/original/cherry_mx_red.jpg" alt="">
            <ul>
              <li>Геймерам, у которых устают пальцы, или другие переключатели кажутся тяжеловатыми</li>
              <li>В оупенспейс на работу, чтобы расслабиться и не слишком мешать коллегам</li>
              <li>Любителям мягкости и плавности </li>
              <li>Домой и в офис</li>
            </ul>
            <form action="Cherry/red.php" method= "post">
           <button class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Cherry MX Speed Silver</h4>
          </div>
          <div class="card-body">
          <img src="https://static.insales-cdn.com/files/1/3641/3526201/original/cherry_mx_speed_silver.jpg" alt="">
            <ul>
              <li>Быстрым геймерам</li>
              <li>Быстрым печатникам</li>
              <li>В домашнюю коллекцию</li>
              <li>В офис</li>
            </ul>
            <form action="Cherry/speedsilver.php" method= "post">
           <button class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Cherry MX Nature White</h4>
          </div>
          <div class="card-body">
          <img src="https://static.insales-cdn.com/files/1/17/3514385/original/cherry_mx_clear.jpg" alt="">
            <ul>
              <li>Геймерам, которым сложно определиться между Cherry MX Red и Black</li>
              <li>Давним любителям линейных переключателей</li>
              <li>Особенно разборчивым в силе нажатия</li>
              <li>В офис</li>
            </ul>
            <form action="Cherry/white.php" method= "post">
           <button class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Cherry MX Silent Red</h4>
          </div>
          <div class="card-body">
          <img src="https://static.insales-cdn.com/files/1/2/3514370/original/cherry_mx_silent_red.jpg" alt="">
            <ul>
              <li>В офис, где коллеги особенно раздражительны</li>
              <li>Домой, где живут люди с очень чутким сном</li>
              <li>Если хочется чего-нибудь нового и необычного</li>
              <li>Особенно яростным геймерам, чьи агрессивные нажатия отлично смягчатся этими переключателями</li>
            </ul>
            <form action="Cherry/silentred.php" method= "post">
           <button class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Cherry MX Black</h4>
          </div>
          <div class="card-body">
          <img src="https://static.insales-cdn.com/files/1/10/3514378/original/cherry_mx_black.jpg" alt="">
            <ul>
              <li>Геймерам</li>
              <li>Любителям от души постучать по кнопкам</li>
              <li>Домой</li>
            </ul>
            <form action="Cherry/black.php" method= "post">
           <button class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Cherry MX Clear</h4>
          </div>
          <div class="card-body">
          <img src="https://static.insales-cdn.com/files/1/17/3514385/original/cherry_mx_clear.jpg" alt="">
            <ul>
              <li>Опытным любителям механических клавиатур, желающим попробовать что-то новое</li>
              <li>Тем, кого не устраивают клики, а тактильность очень нравится</li>
              <li>Обладателям сильных пальцев</li>
              <li>Домой и офис</li>
            </ul>
            <form action="Cherry/clear.php" method= "post">
           <button class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Cherry MX Green</h4>
          </div>
          <div class="card-body">
          <img src="https://static.insales-cdn.com/files/1/3187/3525747/original/cherry_mx_green.jpg" alt="">
            <ul>
              <li>Домой опытному механиководу, где уже никого не удивишь стуком механики</li>
              <li>Любителям от души постучать клавишами</li>
              <li>Тем, кто без кликов жить не может  </li>
            </ul>
            <form action="Cherry/green.php" method= "post">
           <button class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </form>
          </div>
        </div>
      </div>
      
</main>

<?php require "blocks/footer.php" ?>

</body>
</html>