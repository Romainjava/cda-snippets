<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">


        <?php if (isset($loc)) :

          $array = ["Python", "Java", "Javascript", "Css"];
          foreach ($array as $elt) : ?>

            <li class="nav-item">
              <a class="nav-link" target="__blank" href="index.php?loc=<?= $elt; ?>">
                <?= $elt; ?> </a>
            </li>

          <?php endforeach; ?>
        <?php endif; ?>

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
  </nav>
  <h1><?= $loc ?></h1>
</header>