<?php
$biens = [
    [
        'images' => [
            'assets/images/villa1.jpg',
            'assets/images/villa2.jpg',
        ],
        'titre' => 'Villa Océane',
        'description' => 'Superbe villa contemporaine à Royan, à 200m de la plage. 4 chambres, piscine chauffée, jardin paysager, prestations haut de gamme.',
        'localisation' => 'Royan, Côte Atlantique',
        'capacite' => '8 personnes',
        'details' => '4 chambres, 3 salles de bain',
    ],
    [
        'images' => [
            'assets/images/villa2.jpg',
            'assets/images/villa1.jpg',
        ],
        'titre' => 'Maison Les Pins',
        'description' => 'Charmante maison familiale au cœur de la forêt, à 10 min de la plage. 3 chambres, terrasse, barbecue, idéale pour des vacances en famille.',
        'localisation' => 'Saint-Palais-sur-Mer',
        'capacite' => '6 personnes',
        'details' => '3 chambres, 2 salles de bain',
    ],
    [
        'images' => [
            'assets/images/hero.jpg',
        ],
        'titre' => 'Appartement Vue Mer',
        'description' => 'Appartement lumineux avec vue panoramique sur l’océan, balcon, 2 chambres, accès direct à la plage.',
        'localisation' => 'Royan centre',
        'capacite' => '4 personnes',
        'details' => '2 chambres, 1 salle de bain',
    ],
    [
        'images' => [
            'assets/images/villa1.jpg',
        ],
        'titre' => 'Villa Atlantique',
        'description' => 'Grande villa familiale avec piscine, proche du golf et de la plage. Jardin, 5 chambres, idéale pour groupes.',
        'localisation' => 'La Palmyre',
        'capacite' => '10 personnes',
        'details' => '5 chambres, 3 salles de bain',
    ],
    [
        'images' => [
            'assets/images/villa2.jpg',
        ],
        'titre' => 'Maison du Phare',
        'description' => 'Maison cosy à deux pas du phare de Cordouan, terrasse ensoleillée, 2 chambres.',
        'localisation' => 'Saint-Georges-de-Didonne',
        'capacite' => '4 personnes',
        'details' => '2 chambres, 1 salle de bain',
    ],
    [
        'images' => [
            'assets/images/hero.jpg',
        ],
        'titre' => 'Studio Plage',
        'description' => 'Studio moderne avec balcon, vue mer, accès direct plage, parfait pour un couple.',
        'localisation' => 'Royan plage',
        'capacite' => '2 personnes',
        'details' => '1 chambre, 1 salle de bain',
    ],
];
?>

<!-- Section Présentation des Biens dynamique -->
<section id="bien" class="py-5 bg-light animate-slide-in">
    <div class="container">
        <h2 class="fw-bold mb-5 text-center" style="color:#62929E; letter-spacing:0.02em;">Nos biens disponibles</h2>
        <div class="row g-4">
            <?php foreach ($biens as $i => $bien): ?>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="card shadow-sm border-0 flex-fill h-100">
                        <img src="/<?= ltrim($bien['images'][0], '/') ?>" class="card-img-top bien-img-modal" alt="<?= htmlspecialchars($bien['titre']) ?>" style="height:220px;object-fit:cover;cursor:pointer;" data-bs-toggle="modal" data-bs-target="#modalBien<?= $i ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-semibold" style="color:#1976d2;"><?= htmlspecialchars($bien['titre']) ?></h5>
                            <p class="card-text mb-2"><?= htmlspecialchars($bien['description']) ?></p>
                            <ul class="list-unstyled mb-3">
                                <li><i class="bi bi-geo-alt text-primary me-2"></i><?= htmlspecialchars($bien['localisation']) ?></li>
                                <li><i class="bi bi-people text-primary me-2"></i><?= htmlspecialchars($bien['capacite']) ?></li>
                                <li><i class="bi bi-house-door text-primary me-2"></i><?= htmlspecialchars($bien['details']) ?></li>
                            </ul>
                            <a href="/index.php#contact" class="btn btn-primary mt-auto animate-btn rounded-pill">Demander une dispo</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5">
            <a href="/index.php#contact" class="btn btn-outline-primary btn-lg rounded-pill px-5 animate-btn text-white">Vous souhaitez confier votre bien ?</a>
        </div>
    </div>
</section>

<?php // Génération des modals pour chaque bien 
?>
<?php $i = 0;
foreach ($biens as $bien):
    $modalId = 'modalBien' . $i;
?>
    <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="<?= $modalId ?>Label"><?= htmlspecialchars($bien['titre']) ?></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <div id="carousel<?= $modalId ?>" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($bien['images'] as $k => $img): ?>
                                <div class="carousel-item<?= $k === 0 ? ' active' : '' ?>">
                                    <img src="/<?= ltrim($img, '/') ?>" class="d-block w-100 rounded-4" alt="<?= htmlspecialchars($bien['titre']) ?>" style="max-height:60vh;object-fit:contain;">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if (count($bien['images']) > 1): ?>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $modalId ?>" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Précédent</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $modalId ?>" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Suivant</span>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $i++;
endforeach; ?>
</div>
<div class="text-center mt-5">
    <a href="/index.php#contact" class="btn btn-outline-primary btn-lg rounded-pill px-5 animate-btn text-white">Vous souhaitez confier votre bien ?</a>
</div>
</div>
</section>