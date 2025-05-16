<div id="loginModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl p-8 w-80 shadow-xl animate-fadeIn">
        <h2 class="text-xl font-semibold mb-4">Login User</h2>
        <form action="../backend/proses_login.php" method="POST">
            <input type="email" name="email" placeholder="Email" class="w-full mb-3 p-2 border rounded">
            <input type="password" name="password" placeholder="Password" class="w-full mb-3 p-2 border rounded">
            <button type="submit" class="bg-red-400 text-white px-4 py-2 rounded w-full">Login</button>
        </form>
        <button id="closeModal" class="mt-4 text-sm text-gray-500 hover:underline">Tutup</button>
    </div>
</div>
