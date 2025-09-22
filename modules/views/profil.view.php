  <div class="profile-container">
    <div class="profile-card">
      <div class="profile-pic">
        <img id="foto" src="https://picsum.photos/id/1015/150/150" alt="Foto Siswa">
      </div>
      <div class="profile-info">
        <h2 id="nama">Raka Pratama</h2>
        <p id="kelas">📚 Kelas: IX-B SMP Negeri 1</p>
        <p id="email">📧 Email: raka.pratama@example.com</p>
        <p id="telp">📱 Telp: +62 812-3456-7890</p>
        <button class="edit-btn" onclick="toggleForm()">✏️ Edit Profil</button>
      </div>
    </div>

    <form class="edit-form" id="editForm" onsubmit="updateProfile(event)">
      <label for="editNama">Nama</label>
      <input type="text" id="editNama" value="Raka Pratama">

      <label for="editKelas">Kelas</label>
      <input type="text" id="editKelas" value="IX-B SMP Negeri 1">

      <label for="editEmail">Email</label>
      <input type="email" id="editEmail" value="raka.pratama@example.com">

      <label for="editTelp">Telp</label>
      <input type="text" id="editTelp" value="+62 812-3456-7890">

      <button type="submit" class="save-btn">💾 Simpan</button>
    </form>

    <div class="stats">
      <div class="card">
        <h3>📊 Nilai Rata-rata</h3>
        <p>85 / 100</p>
      </div>
      <div class="card">
        <h3>📝 Tugas Selesai</h3>
        <p>42 dari 45</p>
      </div>
      <div class="card">
        <h3>🏆 Prestasi</h3>
        <p>Juara 1 Olimpiade Matematika</p>
      </div>
      <div class="card">
        <h3>📅 Jadwal Hari Ini</h3>
        <p>08.00 Matematika <br> 10.00 IPA</p>
      </div>
    </div>
  </div>



  <script>
    function toggleForm() {
      const form = document.getElementById("editForm");
      form.style.display = form.style.display === "block" ? "none" : "block";
    }

    function updateProfile(event) {
      event.preventDefault();

      document.getElementById("nama").textContent = document.getElementById("editNama").value;
      document.getElementById("kelas").textContent = "📚 Kelas: " + document.getElementById("editKelas").value;
      document.getElementById("email").textContent = "📧 Email: " + document.getElementById("editEmail").value;
      document.getElementById("telp").textContent = "📱 Telp: " + document.getElementById("editTelp").value;

      toggleForm();
    }
  </script>
