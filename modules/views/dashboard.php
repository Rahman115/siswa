<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard E-Learning</title>
  <style>
    * {margin:0; padding:0; box-sizing:border-box;}
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      background: #f9fafb;
      color: #111827;
    }

    /* Header */
    header {
      background: #4f46e5;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
    }

    header h1 {
      font-size: 20px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }
    nav ul li a {
      color: white;
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
    }
    nav ul li a:hover { color: #a5b4fc; }

    /* Hamburger */
    .hamburger { display: none; flex-direction: column; cursor: pointer; }
    .hamburger span {
      width: 25px; height: 3px; background: white;
      margin: 4px 0; border-radius: 2px;
    }
    .mobile-nav {
      display: none;
      flex-direction: column;
      background: #4338ca;
      position: absolute;
      top: 60px; right: 0; left: 0;
      padding: 15px;
    }
    .mobile-nav a {
      color: white; padding: 10px 0; text-decoration: none; font-size: 14px;
      border-bottom: 1px solid rgba(255,255,255,0.2);
    }

    @media (max-width: 768px) {
      nav ul { display: none; }
      .hamburger { display: flex; }
      .mobile-nav.show { display: flex; }
    }

    /* Dashboard layout */
    .container { max-width: 1100px; margin: 30px auto; padding: 20px; }
    h2 { margin-bottom: 15px; }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
    }

    .card {
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .card h3 { margin-bottom: 10px; font-size: 16px; }

    .btn {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 14px;
      background: #4f46e5;
      color: white;
      border-radius: 8px;
      font-size: 13px;
      text-decoration: none;
    }
    .btn:hover { background: #3730a3; }

    /* Progress bar */
    .progress-container {
      background: #e5e7eb;
      border-radius: 8px;
      height: 10px;
      margin: 8px 0 15px;
      overflow: hidden;
    }
    .progress-bar {
      height: 100%;
      background: #4f46e5;
      width: 0%;
      transition: width 0.5s;
    }

    /* Announcement */
    .announcement li {
      font-size: 14px;
      margin-bottom: 8px;
      border-bottom: 1px dashed #d1d5db;
      padding-bottom: 6px;
    }

    /* Activity */
    .activity li {
      font-size: 14px;
      margin-bottom: 6px;
      color: #374151;
    }
  </style>
</head>
<body>

  <header>
    <h1>📚 E-Learning Siswa</h1>
    <nav>
      <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Profil</a></li>
        <li><a href="#">Mata Pelajaran</a></li>
        <li><a href="#">Tugas</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
    <div class="hamburger" onclick="toggleMenu()">
      <span></span><span></span><span></span>
    </div>
  </header>

  <div class="mobile-nav" id="mobileNav">
    <a href="/dashboard2.php">Dashboard</a>
    <a href="#">Profil</a>
    <a href="#">Mata Pelajaran</a>
    <a href="#">Tugas</a>
    <a href="#">Logout</a>
  </div>

  <div class="container">
    <h2>Selamat datang kembali, Siswa!</h2>
    
    <!-- Progress belajar -->
    <div class="card">
      <h3>📈 Progress Belajar</h3>
      <p>Administrasi Sistem Jaringan</p>
      <div class="progress-container"><div class="progress-bar" style="width:70%"></div></div>
      <p>Pemrograman Web</p>
      <div class="progress-container"><div class="progress-bar" style="width:45%"></div></div>
    </div>

    <!-- Grid konten utama -->
    <div class="grid" style="margin-top:20px;">
      <div class="card">
        <h3>👨‍💻 Administrasi Sistem Jaringan</h3>
        <p>Pelajari dasar hingga lanjutan administrasi jaringan.</p>
        <a href="#" class="btn">Lihat Materi</a>
      </div>
      <div class="card">
        <h3>🌐 Pemrograman Web</h3>
        <p>Kuasai HTML, CSS, dan JavaScript untuk membangun web modern.</p>
        <a href="#" class="btn">Lihat Materi</a>
      </div>
      <div class="card">
        <h3>📢 Pengumuman</h3>
        <ul class="announcement">
          <li>Ujian Tengah Semester dimulai 10 September.</li>
          <li>Materi baru "CSS Responsif" sudah tersedia.</li>
          <li>Batas pengumpulan tugas minggu ini: Jumat.</li>
        </ul>
      </div>
      <div class="card">
        <h3>🕒 Aktivitas Terakhir</h3>
        <ul class="activity">
          <li>Mengakses Bab 1 Administrasi Jaringan (2 hari lalu).</li>
          <li>Menyelesaikan quiz Pemrograman Web (kemarin).</li>
          <li>Mengupdate profil (hari ini).</li>
        </ul>
      </div>
    </div>
  </div>

  <script>
    function toggleMenu() {
      document.getElementById('mobileNav').classList.toggle('show');
    }
  </script>

</body>
</html>