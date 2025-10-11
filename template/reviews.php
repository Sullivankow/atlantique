<!-- Section Avis Artistique -->
<section id="reviews" class="reviews-section py-5 position-relative animate-slide-in" style="background: linear-gradient(120deg, #e3f2fd 0%, #f8fafc 100%); overflow:hidden;">
    <!-- Forme décorative SVG -->
    <svg width="180" height="180" viewBox="0 0 180 180" fill="none" style="position:absolute;top:-60px;left:-60px;z-index:0;opacity:0.18;">
        <circle cx="90" cy="90" r="90" fill="#4ce0d2" />
    </svg>
    <svg width="120" height="120" viewBox="0 0 120 120" fill="none" style="position:absolute;bottom:-40px;right:-40px;z-index:0;opacity:0.13;">
        <rect width="120" height="120" rx="40" fill="#007090" />
    </svg>
    <div class="container position-relative" style="z-index:1;">
        <div class="row align-items-center gy-5 flex-lg-row flex-column">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h2 class="fw-bold mb-3" style="color:#007090; letter-spacing:0.03em;">Le bien-être de nos clients, notre priorité</h2>
                <p class="fs-5 mb-4" style="color:#007090;max-width:500px;">
                    Chez Les Clés de l’Atlantique, chaque prestation est pensée pour offrir une expérience unique et sereine à nos clients. Votre confort, votre tranquillité et votre satisfaction sont au cœur de notre engagement. Nous croyons que l’écoute, la confiance et l’attention aux détails font toute la différence.<br>
                    <span style="color:#4ce0d2;font-weight:600;">Votre bien-être est notre plus belle réussite.</span>
                </p>
                <div class="d-grid mt-3" style="width:fit-content;">
                    <a href="/pages/prestations.php#prestations" class="btn btn-primary mt-auto animate-btn rounded-pill">Nos prestations</a>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="reviews-art-imgs position-relative" style="min-height:180px;">
                    <div style="position:relative; left:-20px; min-width:320px; min-height:200px;">
                        <img src="assets/images/cosy1.jpg" alt="Sourire client 1" class="review-img1 shadow-lg rounded-4 animated-img" style="width:230px; height:230px; object-fit:cover; z-index:3; transform:rotate(-7deg); border:none; position:absolute; left:0; top:0;">
                        <img src="assets/images/cosy2.jpg" alt="Sourire client 2" class="review-img2 shadow rounded-4 animated-img" style="width:170px; height:170px; object-fit:cover; z-index:2; transform:rotate(8deg); border:none; position:absolute; left:150px; top:70px;">
                        <img src="assets/images/cosy3.jpg" alt="Sourire client 3" class="review-img3 shadow rounded-4 animated-img" style="width:130px; height:130px; object-fit:cover; z-index:1; transform:rotate(-12deg); border:none; position:absolute; left:270px; top:150px; opacity:0.92;">
                        <svg class="reviews-art-anchor" width="70" height="70" viewBox="0 0 80 80" fill="none" style="position:absolute; right:-60px; top:10px; z-index:0; opacity:0.18;">
                            <circle cx="40" cy="40" r="35" fill="#4ce0d2" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Animation de défilement des avis (carousel simple)
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('reviewsTrack');
        const prevBtn = document.getElementById('reviewsPrev');
        const nextBtn = document.getElementById('reviewsNext');
        const cards = track.querySelectorAll('.review-card-art');
        let index = 0;

        function updateCarousel() {
            track.style.transform = `translateX(-${index * (cards[0].offsetWidth + 24)}px)`;
        }
        prevBtn.addEventListener('click', function() {
            if (index > 0) {
                index--;
                updateCarousel();
            }
        });
        nextBtn.addEventListener('click', function() {
            if (index < cards.length - 1) {
                index++;
                updateCarousel();
            }
        });
        window.addEventListener('resize', updateCarousel);
    });
</script>