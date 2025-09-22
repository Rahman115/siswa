<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Materi - Administrasi Sistem Jaringan</title>
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
      max-width: 900px;
      margin: 30px auto;
      padding: 20px;
    }

    .card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      padding: 25px;
      margin-bottom: 25px;
    }

    .card h2 {
      margin-bottom: 10px;
      color: #1f2937;
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
      height: 14px;
      margin: 15px 0;
      overflow: hidden;
    }

    .progress {
      height: 14px;
      background: #4f46e5;
      border-radius: 10px;
      transition: width 0.4s ease;
    }

    /* List materi */
    ul {
      list-style: none;
      margin-top: 10px;
    }

    ul li {
      background: #f9fafb;
      padding: 12px;
      margin: 8px 0;
      border-radius: 8px;
      font-size: 14px;
      color: #374151;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    ul li:hover {
      background: #eef2ff;
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
      ul li {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>📘 Detail Materi: Administrasi Sistem Jaringan</h1>
  </header>

  <div class="container">

    <div class="card">
      <h2>Deskripsi Materi</h2>
      <p>Materi Administrasi Sistem Jaringan membahas pengelolaan perangkat keras dan perangkat lunak jaringan, mencakup instalasi server, manajemen user, konfigurasi IP, keamanan jaringan, hingga troubleshooting.</p>

      <!-- Progres -->
      <div class="progress-container">
        <div class="progress" style="width: 70%;"></div>
      </div>
      <p style="font-size:13px; color:#6b7280;">Progres Belajar: 70%</p>
    </div>

    <div class="card">
      <h2>Daftar Bab</h2>
      <ul>
        <li>Bab 1: Pengantar Administrasi Jaringan <span>✅ Selesai</span></li>
        <li>Bab 2: Instalasi Sistem Operasi Server <span>✅ Selesai</span></li>
        <li>Bab 3: Konfigurasi IP dan Subnetting <span>⏳ Sedang Dipelajari</span></li>
        <li>Bab 4: Manajemen User & Group <span>⏳ Belum</span></li>
        <li>Bab 5: Keamanan Jaringan <span>⏳ Belum</span></li>
        <li>Bab 6: Troubleshooting & Monitoring <span>⏳ Belum</span></li>
      </ul>
    </div>

    <div style="text-align:center; margin-top:20px;">
      <a href="materi.html" class="btn btn-secondary">📂 Kembali ke Daftar Mata Pelajaran</a>
      <a href="#" class="btn btn-primary">▶️ Mulai Belajar Bab Selanjutnya</a>
    </div>

  </div>

  <footer>
    <p>© 2025 E-Learning Siswa</p>
  </footer>

</body>
</html>
