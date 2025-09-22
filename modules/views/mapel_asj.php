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
      padding: 20px;
      margin-bottom: 25px;
    }

    .card h2 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #1f2937;
    }

    .card p {
      font-size: 14px;
      color: #6b7280;
      margin-bottom: 15px;
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

    .btn-download {
      background: #10b981;
      color: white;
    }

    .btn-download:hover {
      background: #059669;
    }

    .btn-video {
      background: #f59e0b;
      color: white;
    }

    .btn-video:hover {
      background: #d97706;
    }

    .btn-back {
      background: #4f46e5;
      color: white;
      display: block;
      text-align: center;
      margin-top: 20px;
    }

    .btn-back:hover {
      background: #3730a3;
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
    <h1>📘 Administrasi Sistem Jaringan</h1>
  </header>

  <div class="container">

    <!-- Bab 1 -->
    <div class="card">
      <h2>Bab 1: Pengantar Administrasi Jaringan</h2>
      <p>Dasar-dasar administrasi jaringan, pengenalan perangkat keras, perangkat lunak, serta peran administrator jaringan.</p>
      <a href="materi/bab1.pdf" class="btn btn-download">⬇️ Download Materi</a>
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-video">▶️ Lihat Video</a>
    </div>

    <!-- Bab 2 -->
    <div class="card">
      <h2>Bab 2: Instalasi Sistem Operasi Server</h2>
      <p>Pembahasan tentang instalasi Linux Server, konfigurasi dasar, dan perbedaan sistem operasi jaringan populer.</p>
      <a href="materi/bab2.pdf" class="btn btn-download">⬇️ Download Materi</a>
      <a href="https://www.youtube.com/watch?v=example" target="_blank" class="btn btn-video">▶️ Lihat Video</a>
    </div>

    <!-- Bab 3 -->
    <div class="card">
      <h2>Bab 3: Konfigurasi IP dan Subnetting</h2>
      <p>Materi mengenai pengaturan IP Address, subnet mask, serta cara membagi jaringan dengan subnetting.</p>
      <a href="materi/bab3.pdf" class="btn btn-download">⬇️ Download Materi</a>
      <a href="https://www.youtube.com/watch?v=example" target="_blank" class="btn btn-video">▶️ Lihat Video</a>
    </div>

    <!-- Tambahkan Bab Lain Sesuai Kebutuhan -->
    
    <a href="materi.html" class="btn btn-back">📂 Kembali ke Daftar Mata Pelajaran</a>
  </div>

  <footer>
    <p>© 2025 E-Learning Siswa</p>
  </footer>

</body>
</html>