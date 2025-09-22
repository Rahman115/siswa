<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard E-Learning</title>

  <link href="<?php echo PATH; ?>resources/css/style_learning.css" rel="stylesheet">

</head>

<body>

  <header>
    <!-- <h1>📚 E-Learning Siswa</h1> -->
    <h1><?php echo $data['title'];?></h1>
    <nav>
      <ul>
        <li><a href="<?php echo PATH; ?>">Dashboard</a></li>
        <li><a href="<?php echo PATH; ?>?page=profil">Profil</a></li>
        <li><a href="<?php echo PATH; ?>?page=mapel">Mata Pelajaran</a></li>
        <li><a href="<?php echo PATH; ?>?page=tugas">Tugas</a></li>
        <li><a href="<?php echo PATH; ?>?page=login&&action=logout">Logout</a></li>
      </ul>
    </nav>
    <div class="hamburger" onclick="toggleMenu()">
      <span></span><span></span><span></span>
    </div>
  </header>

  <div class="mobile-nav" id="mobileNav">
    <a href="<?php echo PATH; ?>">Dashboard</a>
    <a href="<?php echo PATH; ?>?page=profil">Profil</a>
    <a href="<?php echo PATH; ?>?page=mapel">Mata Pelajaran</a>
    <a href="<?php echo PATH; ?>?page=tugas">Tugas</a>
    <a href="<?php echo PATH; ?>?page=login&&action=logout">Logout</a>
  </div>

  <div class="container">
    <?php
    $view = new View($viewName);
    $view->bind('data', $data);
    $view->forceRender();
    ?>
    
  <footer>
    <p>© 2025 E-Learning Siswa</p>
  </footer>
  <script>
    function toggleMenu() {
      document.getElementById('mobileNav').classList.toggle('show');
    }
  </script>

</body>

</html>