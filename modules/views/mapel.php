<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Materi E-Learning</title>
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
      line-height: 1.6;
    }

    header {
      background: #4f46e5;
      color: white;
      padding: 15px 20px;
      text-align: center;
    }

    header h1 {
      font-size: 22px;
    }

    .container {
      max-width: 1100px;
      margin: 30px auto;
      padding: 20px;
    }

    .materi-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }

    .card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      padding: 20px;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.12);
    }

    .card h2 {
      font-size: 18px;
      color: #1f2937;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 14px;
      color: #6b7280;
      margin-bottom: 15px;
    }

    /* Progress bar */
    .progress-container {
      background: #e5e7eb;
      border-radius: 10px;
      height: 12px;
      margin-bottom: 15px;
      overflow: hidden;
    }

    .progress {
      height: 12px;
      background: #4f46e5;
      border-radius: 10px;
      transition: width 0.4s ease;
    }

    .btn {
      display: inline-block;
      padding: 10px 16px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      text-decoration: none;
      transition: background 0.3s;
      margin-right: 10px;
    }

    .btn-primary {
      background: #4f46e5;
      color: white;
    }

    .btn-primary:hover {
      background: #3730a3;
    }

    .btn-secondary {
      background: #10b981;
      color: white;
    }

    .btn-secondary:hover {
      background: #059669;
    }

    footer {
      background: #111827;
      color: #9ca3af;
      text-align: center;
      padding: 15px;
      margin-top: 40px;
    }

    /* Responsif */
    @media (max-width: 768px) {
      header h1 {
        font-size: 18px;
      }
      .btn {
        display: block;
        margin: 8px 0;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>📚 Materi E-Learning</h1>
  </header>

  <div class="container">
    <div class="materi-grid">

      <!-- Materi 1 -->
      <div class="card">
        <h2>🖥️ Administrasi Sistem Jaringan</h2>
        <p>Materi ini membahas konsep dasar hingga lanjutan dalam administrasi jaringan komputer. Cocok untuk siswa yang ingin memahami manajemen server, konfigurasi jaringan, serta keamanan sistem.</p>
        
        <!-- Progres -->
        <div class="progress-container">
          <div class="progress" style="width: 70%;"></div>
        </div>
        <p style="font-size:13px; color:#6b7280;">Progres: 70%</p>

        <!-- Tombol -->
        <a href="/mapel_asj.php" class="btn btn-primary">📖 Lihat Materi</a>
        <a href="/mapel_asj2.php" class="btn btn-secondary">📂 Daftar Mata Pelajaran</a>
      </div>

      <!-- Materi 2 -->
      <div class="card">
        <h2>💻 Pemrograman Web</h2>
        <p>Materi pilihan tentang dasar-dasar pemrograman web. Meliputi HTML, CSS, dan JavaScript untuk membangun tampilan website yang interaktif dan responsif.</p>
        
        <!-- Progres -->
        <div class="progress-container">
          <div class="progress" style="width: 45%; background:#f59e0b;"></div>
        </div>
        <p style="font-size:13px; color:#6b7280;">Progres: 45%</p>

        <!-- Tombol -->
        <a href="#" class="btn btn-primary">📖 Lihat Materi</a>
        <a href="#" class="btn btn-secondary">📂 Daftar Mata Pelajaran</a>
      </div>

    </div>
  </div>

  <footer>
    <p>© 2025 E-Learning Siswa</p>
  </footer>

</body>
</html>