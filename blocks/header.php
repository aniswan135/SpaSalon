<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <img src = "img/emblem.jpg" class="bi me-2" width="100%" height="120">
      </a>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#bottom" class="nav-link px-2 link-dark">Как с нами связаться</a></li>
        <li><a href="#bottom" class="nav-link px-2 link-dark">FAQ</a></li>
        <li><a href="#bottom" class="nav-link px-2 link-dark">О нас</a></li>
      </ul>


      <div class="col-md-3 text-end">
      <?php
        if($_COOKIE["user1"] == "Да" || $_COOKIE["user2"] == "Да" || $_COOKIE["user3"] == "Да" || $_COOKIE["user4"] == "Да" || $_COOKIE["user5"] == "Да"):
      ?>
        <button type="button" class="btn btn-outline-primary me-2"><a href = "/auth.php">Выйти</a></button>
        <?php else: ?>
        <button type="button" class="btn btn-outline-primary me-2"><a href = "/login.php">Войти</a></button>
        <?php endif; ?>
      </div>
    </header>
</div>