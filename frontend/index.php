<?php include 'partials/header.php'; ?>

<style>
  body {
    background-image: url('../assets/img/banner.png');
    background-size: cover;
    background-position: top;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }

  .fancy-text {
    font-family: 'Baloo 2', cursive;
    font-weight: 700;
    color: #fb7185;
    text-shadow:
      -2px -2px 0 #444,
       2px -2px 0 #444,
      -2px  2px 0 #444,
       2px  2px 0 #444;
  }
</style>

<main class="flex-grow flex flex-col justify-center items-center text-center backdrop-blur-sm">
  <h1 class="text-4xl mb-6 fancy-text">Grooming Home</h1>

  <!-- Gambar kucing -->
  <div class="flex justify-center gap-8 mb-8">
    <img src="../assets/img/kucing1.jpg" class="rounded-full w-40 h-40 object-cover shadow-lg" />
    <img src="../assets/img/kucing2.webp" class="rounded-full w-40 h-40 object-cover shadow-lg" />
    <img src="../assets/img/kucing3.webp" class="rounded-full w-40 h-40 object-cover shadow-lg" />
  </div>

  <!-- Form -->
  <div class="bg-gray-100 p-6 rounded-xl max-w-xl w-full mx-auto shadow-md">
    <div class="flex justify-between mb-4">
      <button class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-full">Pendaftaran</button>
      <button class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-full">Nomor Antrian</button>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
      <div>
        <label for="layanan">Pilih Layanan</label>
        <select id="layanan" class="w-full mt-1 border rounded px-2 py-1">
          <option value="">-- Pilih --</option>
          <option value="mandi">Grooming Mandi</option>
          <option value="potong">Grooming Potong</option>
        </select>
      </div>
      <div>
        <label for="antrian">No. Anda</label>
        <input type="text" id="antrian" class="w-full mt-1 border rounded px-2 py-1" readonly />
      </div>
    </div>
    <button class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-6 rounded-full">Pembayaran</button>
  </div>
</main>

<?php include 'partials/footer.php'; ?>
