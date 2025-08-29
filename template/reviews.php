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
        <div class="row align-items-center gy-5 flex-lg-row flex-column-reverse">
            <div class="col-lg-6 d-flex flex-column justify-content-center ">
                <h2 class="fw-bold mb-3" style="color:#007090; letter-spacing:0.03em;">Le bien-être de nos clients, notre priorité</h2>
                <p class="fs-5 mb-4" style="color:#007090;max-width:500px;">
                    Chez Les Clés de l’Atlantique, chaque prestation est pensée pour offrir une expérience unique et sereine à nos clients. Votre confort, votre tranquillité et votre satisfaction sont au cœur de notre engagement. Nous croyons que l’écoute, la confiance et l’attention aux détails font toute la différence.<br>
                    <span style="color:#4ce0d2;font-weight:600;">Votre bien-être est notre plus belle réussite.</span>
                </p>
                <div class="reviews-art-imgs position-relative" style="min-height:180px;">
                    <div style="position:relative; left:250px;">
                        <img src="assets/images/hero.jpg" alt="Sourire client 1" class="review-img1 shadow-lg rounded-4 animated-img" style="width:180px; height:180px; object-fit:cover; z-index:2; transform:rotate(-7deg); border:8px solid #fff; position:absolute; left:0; top:0;">
                        <img src="assets/images/hero.jpg" alt="Sourire client 2" class="review-img2 shadow rounded-4 animated-img" style="width:120px; height:120px; object-fit:cover; z-index:1; transform:rotate(8deg); border:6px solid #e3f2fd; position:absolute; left:110px; top:60px;">
                        <svg class="reviews-art-anchor" width="70" height="70" viewBox="0 0 80 80" fill="none" style="position:absolute; right:-60px; top:10px; z-index:0; opacity:0.18;">
                            <circle cx="40" cy="40" r="35" fill="#4ce0d2" />
                        </svg>
                    </div>
                    <div class=" d-grid mt-3" style="position:relative; z-index:3; width:fit-content; ">
                        <a href="/pages/prestations.php#prestations" class="btn btn-primary mt-auto animate-btn rounded-pill">Nos prestations</a>
                    </div>
                </div>

            </div>
            <div class=" col-lg-6">
                <!-- Carousel desktop -->
                <div class="reviews-carousel position-relative overflow-visible d-none d-md-block">
                    <div class="reviews-track d-flex flex-nowrap align-items-stretch" id="reviewsTrack">
                        <?php
                        $reviews = [
                            [
                                'author' => 'Sophie L.',
                                'rating' => 5,
                                'text' => 'Service irréprochable, accueil chaleureux et grande réactivité. Je recommande vivement !',
                                'date' => 'Juillet 2025'
                            ],
                            [
                                'author' => 'Marc D.',
                                'rating' => 5,
                                'text' => 'Une équipe professionnelle et à l’écoute. Mon appartement est entre de bonnes mains.',
                                'date' => 'Juin 2025'
                            ],
                            [
                                'author' => 'Claire P.',
                                'rating' => 4,
                                'text' => 'Très satisfaite du service de conciergerie, ménage impeccable et communication facile.',
                                'date' => 'Mai 2025'
                            ],
                            [
                                'author' => 'Julien R.',
                                'rating' => 5,
                                'text' => 'Accueil personnalisé et prestations sur-mesure, je recommande sans hésiter.',
                                'date' => 'Avril 2025'
                            ],
                        ];
                        foreach ($reviews as $review): ?>
                            <div class="review-card-art shadow-lg rounded-5 p-4 mx-3 bg-white flex-shrink-0 d-flex flex-column justify-content-between position-relative" style="min-width:320px; max-width:90vw; width:350px; border-left:8px solid #4ce0d2;">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" style="position:absolute;top:-24px;left:-24px;opacity:0.13;">
                                    <circle cx="24" cy="24" r="24" fill="#007090" />
                                </svg>
                                <div class="mb-2" style="color:#007090; font-size:1.1rem; font-weight:600;">
                                    <?= htmlspecialchars($review['author']) ?>
                                    <span class="text-warning ms-2">
                                        <?php for ($i = 0; $i < $review['rating']; $i++) echo '★'; ?>
                                        <?php for ($i = $review['rating']; $i < 5; $i++) echo '<span style="opacity:0.2;">★</span>'; ?>
                                    </span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center" style="color:#555; font-size:1.08rem; min-height:80px;">
                                    <i class="bi bi-quote" style="font-size:2rem;color:#4ce0d2;opacity:0.5;margin-right:8px;"></i>
                                    <span>"<?= htmlspecialchars($review['text']) ?>"</span>
                                </div>
                                <div class="text-end text-muted mt-2" style="font-size:0.97rem;">
                                    <?= htmlspecialchars($review['date']) ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Boutons de navigation sous le carousel -->
                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <button class="carousel-btn prev" id="reviewsPrev" aria-label="Avis précédent" style="background:#fff;border:none;border-radius:50%;box-shadow:0 2px 8px #00709022;width:44px;height:44px;z-index:2;">
                            <i class="bi bi-chevron-left" style="font-size:1.7rem;color:#007090;"></i>
                        </button>
                        <button class="carousel-btn next" id="reviewsNext" aria-label="Avis suivant" style="background:#fff;border:none;border-radius:50%;box-shadow:0 2px 8px #00709022;width:44px;height:44px;z-index:2;">
                            <i class="bi bi-chevron-right" style="font-size:1.7rem;color:#007090;"></i>
                        </button>
                    </div>
                </div>
                <!-- Liste scrollable mobile -->
                <div class="reviews-list-mobile d-flex d-md-none">
                    <?php foreach ($reviews as $review): ?>
                        <div class="review-card-art shadow-lg rounded-5 p-4 mb-3 bg-white d-flex flex-column justify-content-between position-relative" style="min-width:80vw; max-width:90vw; border-left:8px solid #4ce0d2;">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" style="position:absolute;top:-24px;left:-24px;opacity:0.13;">
                                <circle cx="24" cy="24" r="24" fill="#007090" />
                            </svg>
                            <div class="mb-2" style="color:#007090; font-size:1.1rem; font-weight:600;">
                                <?= htmlspecialchars($review['author']) ?>
                                <span class="text-warning ms-2">
                                    <?php for ($i = 0; $i < $review['rating']; $i++) echo '★'; ?>
                                    <?php for ($i = $review['rating']; $i < 5; $i++) echo '<span style="opacity:0.2;">★</span>'; ?>
                                </span>
                            </div>
                            <div class="flex-grow-1 d-flex align-items-center" style="color:#555; font-size:1.08rem; min-height:80px;">
                                <i class="bi bi-quote" style="font-size:2rem;color:#4ce0d2;opacity:0.5;margin-right:8px;"></i>
                                <span>"<?= htmlspecialchars($review['text']) ?>"</span>
                            </div>
                            <div class="text-end text-muted mt-2" style="font-size:0.97rem;">
                                <?= htmlspecialchars($review['date']) ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
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