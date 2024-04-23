<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/folowers.css    ">
    <link rel="stylesheet" href="css/same.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lugrasimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="head">
        <img class="logo" src="images/logo.png" alt="logo">
        <p class="GD">GoldenDawn</p>
        <img id="burger" class="menu-i" src="images/menu.jpg" alt="menu-icon">
        </div>
    </header>
    <nav>
        <ul class="nav-t">
          <li class="nav-t-li">
              <a href="index.html">Головна</a>
          </li>
          <li class="nav-t-li">
              <a href="pages/profile.html">Профіль</a>
          </li>
          <li class="nav-t-li">
              <a href="pages/chapters.html">Читати</a>
          </li>
          <li class="nav-t-li">
              <a href="pages/cooperation.html">Співпраця</a>
          </li>
          <li class="nav-t-li">
              <a href="https://www.viz.com/black-clover" target="_blank">Офіційний сайт</a>
          </li>
      </ul>
    </nav>
    <main>
    <div id="container" class="container">
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
    <tr>
      <th scope="col">Ім'я</th>
      <th scope='col'>Електронна пошта</th>
    </tr>
  </thead>
  <tbody>
        <?php
        const SUBSCRIPTIONS_FILE = 'storage/subscriptions.ser';

        function allSubscriptions()
        {
            $fileContent = file_get_contents(SUBSCRIPTIONS_FILE);
            $subscriptions = unserialize($fileContent);
            return $subscriptions ? $subscriptions : [];
        }

        $subscriptions = allSubscriptions();
        foreach ($subscriptions as $subscription) {
            echo "<tr>";
            echo "<td>" . $subscription['name'] . "</td>";
            echo "<td>" . $subscription['email'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
    </div>

    </main>
    <footer></footer>
    <script src="js/main_pages.js"></script>
</body>
</html>