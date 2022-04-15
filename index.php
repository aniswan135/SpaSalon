<!DOCTYPE html>
<html lang = "ru">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
      div.hidden {display:none}
      </style>
</head>
<body>
  <a name = "home"></a>
    <?php require "blocks/header.php"?>
    <div class = "hidden" > <?php require "check.php" ?></div>
  <div class = "container mt-5">
    <?php if ($_COOKIE['user1'] == 'Да'): ?>
      <h3 class = "mb-5"> Вы вошли как: <?php echo $id[0]; ?> </h3>
    <?php elseif ($_COOKIE['user2'] == 'Да'):?>
      <h3 class = "mb-5"> Вы вошли как: <?php echo $id[1]; ?> </h3>
    <?php elseif ($_COOKIE['user3'] == 'Да'):?>
      <h3 class = "mb-5"> Вы вошли как: <?php echo $id[2]; ?> </h3>
    <?php elseif ($_COOKIE['user4'] == 'Да'):?>
      <h3 class = "mb-5"> Вы вошли как: <?php echo $id[3]; ?> </h3>
    <?php elseif ($_COOKIE['user5'] == 'Да'):?>
      <h3 class = "mb-5"> Вы вошли как: <?php echo $id[4]; ?> </h3>
    <?php else: ?>
      <h3 class = "mb-5"> Наши услуги </h3>
    <?php endif; ?>
    <div class = "d-flex flex-wrap">
      <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Шведский массаж</h4>
            </div>
            <div class="card-body">
              <img src = "img/a.jpg" class = "img-thumbnail">
              <h1 class="card-title pricing-card-title">2 000<small class="text-muted fw-light">Руб.</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Обычно покрывает все тело твердыми ударами, но без особых глубоких, сосредоточенных работ.</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </div>
          </div>
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Глубокий массаж</h4>
            </div>
            <div class="card-body">
              <img src = "img/b.jpg" class = "img-thumbnail">
              <h1 class="card-title pricing-card-title">2 500<small class="text-muted fw-light">Руб.</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Массаж глубоких тканей предполагает более сильное давление, а также включает целенаправленную работу на особо тесные участки.</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </div>
          </div>
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Массаж горячими камнями</h4>
            </div>
            <div class="card-body">
              <img src = "img/c.jpg" class = "img-thumbnail">
              <h1 class="card-title pricing-card-title">3 000<small class="text-muted fw-light">Руб.</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Используются гладкие округлые базальтовые камни, которые были нагреты в воде и хорошо сохраняют тепло. Жара помогает разогреть ваши мышцы и очень расслабляет их.</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </div>
          </div>
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Уход за лицом</h4>
            </div>
            <div class="card-body">
              <img src = "img/d.jpg" class = "img-thumbnail">
              <h1 class="card-title pricing-card-title">4 000<small class="text-muted fw-light">Руб.</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Уход за лицом имеет следующие основные действия: очищение, отшелушивание, экстрагирование, массаж и маска.</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </div>
          </div>
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Бассейн</h4>
            </div>
            <div class="card-body">
              <img src = "img/e.jpg" class = "img-thumbnail">
              <h1 class="card-title pricing-card-title">1 000<small class="text-muted fw-light">Руб.</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Бассейн с водой</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </div>
          </div>
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Процедуры для тела</h4>
            </div>
            <div class="card-body">
              <img src = "img/f.jpg" class = "img-thumbnail">
              <h1 class="card-title pricing-card-title">3 500<small class="text-muted fw-light">Руб.</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Основной скраб для тела отслаивают ваши внешние мертвые клетки кожи.</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </div>
          </div>
    </div>
  </div>
  <a name = "bottom"><?php require "blocks/footer.php"?></a>
</body>
</html>