<?php

use yii\helpers\Html;
?>
<header id="header">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>"><?= Html::encode(generalSetting()->site_title) ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link  <?= isActive('/site/index') ?>" href="/site/index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= isActive('/site/about') ?>" href="/site/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/site/test">Test</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= isActive('/site/contact') ?>" href="/site/contact">Contact</a>
          </li>
          <?php if (Yii::$app->user->isGuest): ?>
            <li class="nav-item">
              <a class="nav-link <?= isActive('/site/login') ?>" href="/site/login">Login</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <form action="/site/logout" method="post" class="form-inline">
                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
                <button type="submit" class="nav-link btn btn-danger logout">
                  Logout (<?= Yii::$app->user->identity->username ?>)
                </button>
              </form>
            </li>
          <?php endif ?>
        </ul>
      </div>
    </div>
  </nav>
</header>