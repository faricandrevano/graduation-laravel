function countdown() {
    // tahun, bulan , jam , menit , detik
    var targetTime = new Date(2024, 4, 6, 0, 0, 0);
    var target = targetTime.getTime();
     // Perbarui tampilan countdown setiap satu detik
     var x = setInterval(function() {
        // Hitung selisih waktu antara sekarang dan deadline
        var timeLeft = target - new Date().getTime();

        // Perhitungan hari, jam, menit, dan detik
        var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
        
        // Tampilkan waktu dalam format "hari:jam:menit:detik"
        document.getElementById("hari").innerText = days
        document.getElementById("jam").innerText = hours
        document.getElementById("menit").innerText = minutes
        document.getElementById("detik").innerText = seconds
        // Jika waktu sudah habis, hentikan interval
        if (timeLeft <= 0) {
            clearInterval(x);
        }
    }, 1000); // Perbarui setiap satu detik
}

// Panggil fungsi countdown untuk memulai perhitungan mundur
countdown();