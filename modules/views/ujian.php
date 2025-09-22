<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ujian Harian</title>
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
      position: relative;
    }
    header h1 { font-size: 22px; margin-bottom: 8px; }
    .deadline { font-size: 14px; color: #e0e7ff; }
    .timer {
      display: none;
      position: absolute;
      top: 20px;
      right: 20px;
      background: #ef4444;
      color: white;
      padding: 8px 12px;
      border-radius: 8px;
      font-weight: bold;
    }
    .container {
      max-width: 900px;
      margin: 30px auto;
      padding: 20px;
    }
    .soal {
      background: white;
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 25px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .soal h2 {
      font-size: 16px;
      margin-bottom: 12px;
      color: #111827;
    }
    label {
      display: block;
      margin-bottom: 8px;
      font-size: 14px;
      cursor: pointer;
    }
    input[type="radio"] { margin-right: 8px; }
    .btn {
      display: inline-block;
      padding: 12px 20px;
      border-radius: 8px;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
      text-align: center;
      margin-top: 20px;
      transition: background 0.3s;
    }
    .btn-start { background: #3b82f6; color: white; }
    .btn-start:hover { background: #2563eb; }
    .btn-submit { background: #10b981; color: white; }
    .btn-submit:hover { background: #059669; }
    .btn-disabled { background: #9ca3af; color: #f3f4f6; cursor: not-allowed; }
    footer {
      background: #111827;
      color: #9ca3af;
      text-align: center;
      padding: 15px;
      margin-top: 40px;
    }

    /* Modal Styling */
    .modal {
      display: none;
      position: fixed;
      z-index: 999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.6);
      justify-content: center;
      align-items: center;
    }
    .modal-content {
      background: white;
      padding: 25px;
      border-radius: 12px;
      max-width: 400px;
      text-align: center;
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
      animation: fadeIn 0.4s ease;
    }
    .modal-content h2 {
      margin-bottom: 12px;
      color: #ef4444;
    }
    .modal-content p {
      font-size: 15px;
      margin-bottom: 20px;
      color: #374151;
    }
    .modal-content button {
      padding: 10px 18px;
      border: none;
      background: #3b82f6;
      color: white;
      font-weight: 600;
      border-radius: 8px;
      cursor: pointer;
    }
    .modal-content button:hover {
      background: #2563eb;
    }
    @keyframes fadeIn {
      from {opacity: 0; transform: scale(0.9);}
      to {opacity: 1; transform: scale(1);}
    }

    @media (max-width: 768px) {
      header h1 { font-size: 18px; }
      .soal h2 { font-size: 14px; }
      .timer { top: auto; bottom: 10px; right: 10px; }
    }
  </style>
</head>
<body>

  <header>
    <h1>📝 Ulangan Harian</h1>
    <p class="deadline">Deadline: 5 September 2025 | Waktu: 15 Menit</p>
    <div class="timer" id="timer">15:00</div>
  </header>

  <div class="container" id="intro">
    <p>Pastikan kamu sudah siap. Tekan tombol di bawah untuk memulai ujian. Waktu akan langsung berjalan.</p>
    <a href="#" id="startBtn" class="btn btn-start">▶ Mulai Ujian</a>
  </div>

  <div class="container" id="exam" style="display: none;">

    <!-- Soal 1 -->
    <div class="soal">
      <h2>1. Apa fungsi utama dari IP Address?</h2>
      <label><input type="radio" name="q1"> A. Menyimpan data</label>
      <label><input type="radio" name="q1"> B. Mengidentifikasi perangkat di jaringan</label>
      <label><input type="radio" name="q1"> C. Menghubungkan kabel LAN</label>
      <label><input type="radio" name="q1"> D. Menyediakan keamanan</label>
      <label><input type="radio" name="q1"> E. Mempercepat internet</label>
    </div>

    <!-- Tambahkan soal 2 - 10 di sini -->

    <!-- Tombol Selesai -->
    <a href="#" id="submitBtn" class="btn btn-submit">✅ Selesai</a>
  </div>

  <!-- Modal -->
  <div class="modal" id="warningModal">
    <div class="modal-content">
      <h2>⚠️ Waktu Hampir Habis!</h2>
      <p>Sisa waktu hanya 5 menit lagi. Segera periksa dan selesaikan jawabanmu.</p>
      <button id="closeModal">OK, Lanjut</button>
    </div>
  </div>

  <footer>
    <p>© 2025 E-Learning Siswa</p>
  </footer>

  <script>
    let duration = 15 * 60; // 15 menit
    const display = document.getElementById("timer");
    const submitBtn = document.getElementById("submitBtn");
    const startBtn = document.getElementById("startBtn");
    const modal = document.getElementById("warningModal");
    const closeModal = document.getElementById("closeModal");
    let timer;
    let warned = false;

    startBtn.addEventListener("click", (e) => {
      e.preventDefault();
      document.getElementById("intro").style.display = "none";
      document.getElementById("exam").style.display = "block";
      display.style.display = "block";

      // Mulai timer
      timer = setInterval(() => {
        let minutes = Math.floor(duration / 60);
        let seconds = duration % 60;
        display.textContent = 
          `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

        // Peringatan 5 menit terakhir
        if (duration === 5 * 60 && !warned) {
          warned = true;
          modal.style.display = "flex";
        }

        // Waktu habis
        if (duration <= 0) {
          clearInterval(timer);
          display.textContent = "Waktu Habis";
          submitBtn.classList.add("btn-disabled");
          submitBtn.classList.remove("btn-submit");
          submitBtn.textContent = "⏳ Waktu Habis";
          submitBtn.removeAttribute("href");

          document.querySelectorAll("input[type=radio]").forEach(el => el.disabled = true);
        }
        duration--;
      }, 1000);
    });

    closeModal.addEventListener("click", () => {
      modal.style.display = "none";
    });
  </script>

</body>
</html>