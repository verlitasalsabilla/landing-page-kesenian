<footer class="bg-jaranan text-light pt-5 pb-3 mt-5 border-top border-secondary">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3">
                <h5 class="text-emas mb-3">Galeri Jaranan</h5>
                <p class="small text-secondary">Menyediakan berbagai perlengkapan baju kesenian dan keperluan pentas jaranan dengan kualitas premium siap pakai.</p>
            </div>
            <div class="col-md-3">
                <h5 class="text-emas mb-3">Hubungi Kami</h5>
                <p class="small text-secondary">Punya pertanyaan seputar ukuran baju atau kostum kustom? Chat kami langsung:</p>
                <a href="https://wa.me/6281234567890" target="_blank" class="btn wa-btn btn-sm">
                    <i class="fab fa-whatsapp"></i> Chat WhatsApp
                </a>
            </div>
            <div class="col-md-3">
                <h5 class="text-emas mb-3">Media Sosial</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none"><i class="fab fa-instagram text-danger"></i> @ProdukJaranan</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none"><i class="fab fa-facebook text-primary"></i> Jaranan Nusantara</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none"><i class="fab fa-tiktok text-light"></i> @jaranan.hits</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="text-emas mb-3">Aplikasi Belanja</h5>
                <p class="small text-secondary">Pemesanan aman dan terpercaya juga tersedia di marketplace kesayangan Anda:</p>
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-danger btn-sm fw-bold">Shopee</a>
                    <a href="#" class="btn btn-success btn-sm fw-bold">Tokopedia</a>
                </div>
            </div>
        </div>
        <hr class="bg-secondary mt-4">
        <div class="text-center pt-2">
            <p class="small text-muted">&copy; 2026 GetSkill. All rights reserved. | Budaya Nusantara Modern 🎭</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.getElementById('inputCari').addEventListener('keyup', function(e) {
    let kataKunci = e.target.value.toLowerCase();
    let semuaKartu = document.querySelectorAll('.card-item');
    
    semuaKartu.forEach(function(kartu) {
        let judulProduk = kartu.querySelector('.card-title').textContent.toLowerCase();
        if(judulProduk.includes(kataKunci)) {
            kartu.style.display = 'block'; // Tampilkan kolom produk jika cocok
        } else {
            kartu.style.display = 'none';  // Sembunyikan jika tidak cocok
        }
    });
});
</script>
</body>
</html>