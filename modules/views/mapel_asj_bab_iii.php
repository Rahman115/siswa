<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bab 3: Konfigurasi IP dan Subnetting</title>
  <style>
    * {
      margin: 0; padding: 0; box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      background: #f9fafb;
      color: #1f2937;
      line-height: 1.8;
    }
    header {
      background: #4f46e5;
      color: white;
      padding: 20px;
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
    h2 {
      font-size: 20px;
      margin-bottom: 12px;
      color: #111827;
    }
    h3 {
      font-size: 16px;
      margin-top: 18px;
      color: #374151;
    }
    p {
      font-size: 14px;
      margin-bottom: 12px;
      color: #4b5563;
      text-align: justify;
    }
    .btn {
      display: inline-block;
      padding: 10px 16px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      text-decoration: none;
      margin: 10px 5px 20px 0;
      transition: background 0.3s;
    }
    .btn-download { background: #10b981; color: white; }
    .btn-download:hover { background: #059669; }
    .btn-video { background: #f59e0b; color: white; }
    .btn-video:hover { background: #d97706; }
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
      h2 { font-size: 18px; }
      .btn { display: block; margin: 10px 0; }
    }
  </style>
</head>
<body>

  <header>
    <h1>Bab 3: Konfigurasi IP dan Subnetting</h1>
  </header>

  <div class="container">
    <h2>Rincian Materi</h2>
    
    <h3>A. Apa itu IP Address?</h3>
    <p>IP Address adalah alamat numerik unik yang digunakan untuk mengidentifikasi sebuah perangkat dalam jaringan. 
       IP terbagi menjadi dua versi utama: IPv4 (contoh: 192.168.1.1) dan IPv6 (contoh: 2001:db8::1). 
       Fungsi utamanya adalah memastikan data yang dikirim melalui jaringan sampai ke tujuan yang benar.</p>

    <h3>B. Apa itu Subnetting?</h3>
    <p>Subnetting adalah teknik membagi satu jaringan besar menjadi beberapa jaringan kecil. 
       Hal ini membantu dalam efisiensi penggunaan IP Address, meningkatkan keamanan, dan mengurangi beban lalu lintas jaringan.</p>

    <h3>C. Kelas IP Address</h3>
    <p>IP Address IPv4 terbagi menjadi beberapa kelas: A, B, C, D, dan E. 
       Misalnya, Kelas A digunakan untuk jaringan yang sangat besar, sedangkan Kelas C dipakai untuk jaringan kecil seperti kantor atau sekolah.</p>

    <h3>D. Contoh Perhitungan Subnetting</h3>
    <p>Misalnya sebuah jaringan menggunakan IP 192.168.1.0/24. Jika ingin dibagi menjadi 2 subnet, maka subnet mask menjadi /25 
       (255.255.255.128), menghasilkan dua subnet: 192.168.1.0–127 dan 192.168.1.128–255.</p>

    <!-- Tombol Download dan Video -->
    <a href="materi/bab3.pdf" class="btn btn-download">⬇️ Download Materi Lengkap</a>
    <a href="https://www.youtube.com/watch?v=example" target="_blank" class="btn btn-video">▶️ Lihat Video</a>
    
    <!-- Tombol kembali -->
    <a href="materi.html" class="btn btn-back">📂 Kembali ke Daftar Materi</a>
  </div>

  <footer>
    <p>© 2025 E-Learning Siswa</p>
  </footer>

</body>
</html>