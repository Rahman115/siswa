<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Learning Siswa - Modern</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      background: #f3f4f6;
      color: #111827;
    }

    header {
      background: #4f46e5;
      color: white;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    header h1 {
      font-size: 22px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      font-size: 14px;
      transition: opacity 0.3s;
    }

    nav ul li a:hover {
      opacity: 0.8;
    }

    .container {
      display: flex;
      min-height: 90vh;
    }

    aside {
      background: #1f2937;
      color: #d1d5db;
      flex: 1;
      max-width: 220px;
      padding: 20px;
    }

    aside h3 {
      margin-bottom: 15px;
      font-size: 16px;
      color: #f9fafb;
    }

    aside ul {
      list-style: none;
    }

    aside ul li {
      margin: 10px 0;
      padding: 8px;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s;
    }

    aside ul li:hover {
      background: #374151;
    }

    main {
      flex: 3;
      padding: 25px;
    }

    main h2 {
      margin-bottom: 20px;
      font-size: 20px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: white;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      transition: transform 0.2s;
    }

    .card:hover {
      transform: translateY(-4px);
    }

    .card h3 {
      margin-bottom: 10px;
      font-size: 16px;
      color: #374151;
    }

    .card p {
      font-size: 14px;
      color: #6b7280;
    }

    footer {
      background: #111827;
      color: #9ca3af;
      text-align: center;
      padding: 15px;
    }

    /* Responsif HP */
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      aside {
        max-width: 100%;
        margin-bottom: 15px;
      }

      nav ul {
        flex-direction: column;
        gap: 10px;
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>📚 E-Learning Siswa</h1>
    <nav>
      <ul>
        <li><a href="/dashboard.php">Beranda</a></li>
        <li><a href="/mapel.php">Materi</a></li>
        <li><a href="/tugas.php">Tugas</a></li>
        <li><a href="/ujian.php">ujian</a></li>
        <li><a href="/profil.php">Profil</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <aside>
      <h3>📂 Menu Kelas</h3>
      <ul>
        <li>📐 Matematika</li>
        <li>📖 Bahasa Indonesia</li>
        <li>🔬 IPA</li>
        <li>🌏 IPS</li>
        <li>🗣 Bahasa Inggris</li>
      </ul>
    </aside>

    <main>
      <h2>Selamat Datang, Siswa 👋</h2>
      <div class="grid">
        <div class="card">
          <h3>📝 Tugas Terbaru</h3>
          <p>Essay: Dampak Revolusi Industri <br> Deadline: 7 Sept</p>
        </div>
        <div class="card">
          <h3>📺 Video Pembelajaran</h3>
          <p>Pengenalan Aljabar untuk Kelas 7</p>
        </div>
        <div class="card">
          <h3>📊 Nilai Anda</h3>
          <p>Rata-rata semester: 82, masih bisa lebih baik!</p>
        </div>
        <div class="card">
          <h3>📅 Jadwal Hari Ini</h3>
          <p>08.00 Matematika <br> 10.00 IPA <br> 13.00 Bahasa Inggris</p>
        </div>
      </div>
    </main>
  </div>

  <footer>
    <p>© 2025 E-Learning Siswa | Dibuat dengan semangat belajar</p>
  </footer>

</body>
</html>