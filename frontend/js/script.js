document.getElementById('userBtn').addEventListener('click', function() {
    document.getElementById('loginModal').classList.remove('hidden');
});
document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('loginModal').classList.add('hidden');
});
