<!-- Section Formulaire de contact minimaliste -->
<section id="contact" class="contact-section py-5 animate-slide-in" style="background: #fff;">
    <div class="container">
        <div class="row justify-content-center align-items-stretch g-5 flex-lg-row flex-column">
            <!-- Logo + nom à gauche -->
            <div class="col-lg-3 d-flex flex-column align-items-center align-items-lg-start justify-content-center mb-4 mb-lg-0 animate-fade-in">
                <div class="contact-logo-box p-3 rounded-4 bg-white d-flex align-items-center justify-content-center mb-3" style="width:180px; height:180px;">
                    <img src="assets/images/logo.svg" alt="Logo Les Clés de l’Atlantique" style="max-width:100%; max-height:100%;">
                </div>
                <div class="contact-title-box text-center text-lg-start">
                    <h2 class="fw-bold mb-1" style="color:#007090; font-size:2rem; letter-spacing:0.02em;">Les Clés de l’Atlantique 17</h2>
                    <div class="fw-semibold" style="color:#4ce0d2; font-size:1.1rem;">Conciergerie à Royan</div>
                </div>
            </div>
            <!-- Formulaire au centre -->
            <div class="col-lg-5 d-flex align-items-center">
                <form class="contact-form-minimal p-4 rounded-5 animate-fade-in-up w-100" method="post" action="/send_message.php" autocomplete="on" style="background:rgba(255,255,255,0.18);backdrop-filter:blur(8px);max-width:420px; width:100%;">
                    <h2 class="fw-bold mb-4 text-center" style="color:#007090;">Contactez-nous</h2>
                    <div class="form-floating-line mb-4">
                        <input type="text" class="form-control-line" id="nom" name="nom" required placeholder="Nom">
                        <span class="form-placeholder">Nom</span>
                    </div>
                    <div class="form-floating-line mb-4">
                        <input type="email" class="form-control-line" id="email" name="email" required placeholder="Email">
                        <span class="form-placeholder">Email</span>
                    </div>
                    <div class="form-floating-line mb-4">
                        <textarea class="form-control-line" id="message" name="message" rows="4" required placeholder="Message"></textarea>
                        <span class="form-placeholder">Message</span>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg rounded-pill animate-btn">Envoyer</button>
                    </div>
                </form>
            </div>



            <!-- Coordonnées à droite réorganisées -->
            <div class="col-lg-3 d-flex flex-column align-items-center align-items-lg-end justify-content-center animate-fade-in">
                <div class="contact-info-box p-4 rounded-4 bg-white shadow-sm" style="min-width:220px;">
                    <h5 class="fw-bold mb-3" style="color:#007090; font-family:'Cinzel',serif;">Coordonnées</h5>
                    <ul class="list-unstyled mb-3">
                        <li class="mb-2">
                            <i class="bi bi-geo-alt-fill me-2" style="color:#4ce0d2;"></i>
                            <span class="fw-semibold">Zones d’intervention :</span><br>
                            <span class="text-muted small">Royan, Saujon, Saint-Palais et alentours</span>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-envelope-fill me-2" style="color:#4ce0d2;"></i>
                            <span class="fw-semibold">Email :</span><br>
                            <a href="mailto:contact@lesclesdelatlantique17.fr" class="text-muted small text-decoration-none">contact@lesclesdelatlantique17.fr</a>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-telephone-fill me-2" style="color:#4ce0d2;"></i>
                            <span class="fw-semibold">Téléphone :</span><br>
                            
                            <span class="text-muted small">07 80 15 19 46</span>
                        </li>
                        <li>
                            <i class="bi bi-clock me-2" style="color:#4ce0d2;"></i>
                            <span class="fw-semibold">Disponibilité :</span><br>
                            <span class="text-muted small">7j/7 - 24h/24</span>
                        </li>
                    </ul>
                    <div class="mb-0 text-muted small" style="line-height:1.4;">
                        Nous sommes joignables 7j/7 et répondons rapidement à toutes vos demandes, par mail ou téléphone.
                    </div>
                </div>
</section>