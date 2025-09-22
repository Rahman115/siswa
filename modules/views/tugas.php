<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Tugas</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      background: #f9fafb;
      color: #1f2937;
      line-height: 1.6;
    }
    header {
      background: #4f46e5;
      color: white;
      padding: 20px;
      text-align: center;
    }
    header h1 { font-size: 22px; }
    .container {
      max-width: 900px;
      margin: 30px auto;
      padding: 20px;
    }
    .card {
      background: white;
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 25px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .card h2 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #111827;
    }
    .card p {
      font-size: 14px;
      margin-bottom: 10px;
      color: #4b5563;
    }
    .deadline {
      font-size: 13px;
      color: #ef4444;
      margin-bottom: 12px;
    }
    .status {
      display: inline-block;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 12px;
      font-weight: 500;
      margin-bottom: 12px;
    }
    .status-belum { background: #fee2e2; color: #b91c1c; }
    .status-proses { background: #fef3c7; color: #b45309; }
    .status-selesai { background: #d1fae5; color: #065f46; }
    .btn {
      display: inline-block;
      padding: 10px 16px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      text-decoration: none;
      margin-top: 10px;
      transition: background 0.3s;
    }
    .btn-upload { background: #10b981; color: white; }
    .btn-upload:hover { background: #059669; }
    .btn-back { background: #4f46e5; color: white; }
    .btn-back:hover { background: #3730a3; }
    footer {
      background: #111827;
      color: #9ca3af;
      text-align: center;
      padding: 15px;
      margin-top: 40px;
    }
    @media (max-width: 768px) {
      header h1 { font-size: 18px; }
      .card h2 { font-size: 16px; }
      .btn { display: block; margin: 10px 0; }
    }
  </style>
</head>
<body>

  <header>
    <h1>📑 Halaman Tugas</h1>
  </header>

  <div class="container">

    <!-- Tugas 1 -->
    <div class="card">
      <h2>Tugas 1: Konfigurasi IP Address</h2>
      <p>Kerjakan konfigurasi IP Address pada jaringan kelas menggunakan VirtualBox. Buat dokumentasi langkah-langkahnya beserta screenshot.</p>
      <p class="deadline">Deadline: 10 September 2025</p>
      <span class="status status-belum">Belum Dikerjakan</span>
      <br>
      <a href="#" class="btn btn-upload">⬆️ Upload Jawaban</a>
    </div>

    <!-- Tugas 2 -->
    <div class="card">
      <h2>Tugas 2: Praktik Subnetting</h2>
      <p>Lakukan pembagian subnet dari IP 192.168.10.0/24 menjadi 4 subnet. Sertakan perhitungan detail dan tabel subnet.</p>
      <p class="deadline">Deadline: 15 September 2025</p>
      <span class="status status-proses">Sedang Dikerjakan</span>
      <br>
      <a href="#" class="btn btn-upload">⬆️ Upload Jawaban</a>
    </div>

    <!-- Tugas 3 -->
    <div class="card">
      <h2>Tugas 3: Pemrograman Web</h2>
      <p>Buat halaman web sederhana menggunakan HTML, CSS, dan JavaScript. Tema bebas, namun harus responsif.</p>
      <p class="deadline">Deadline: 20 September 2025</p>
      <span class="status status-selesai">Selesai</span>
      <br>
      <a href="#" class="btn btn-upload">⬆️ Upload Ulang (opsional)</a>
    </div>

    <!-- Tombol kembali -->
    <a href="materi.html" class="btn btn-back">📂 Kembali ke Daftar Materi</a>

  </div>

  <footer>
    <p>© 2025 E-Learning Siswa</p>
  </footer>

</body>
</html>