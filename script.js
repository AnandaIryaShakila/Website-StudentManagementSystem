
// script.js

document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    
    form.addEventListener("submit", function(event) {
        // Mengambil nilai dari input
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const className = document.getElementById("class").value.trim();

        // Validasi: pastikan semua field diisi
        if (!name || !email || !className) {
            alert("Please fill in all fields.");
            event.preventDefault(); // Mencegah form dari pengiriman
            return;
        }

        // Validasi: format email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            event.preventDefault(); // Mencegah form dari pengiriman
            return;
        }
    });
});
