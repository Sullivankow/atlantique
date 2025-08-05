<?php
$biens = [
    [
        'image' => 'assets/images/villa1.jpg',
        'titre' => 'Villa Océane',
        'description' => 'Superbe villa contemporaine à Royan, à 200m de la plage. 4 chambres, piscine chauffée, jardin paysager, prestations haut de gamme.',
        'localisation' => 'Royan, Côte Atlantique',
        'capacite' => '8 personnes',
        'details' => '4 chambres, 3 salles de bain',
    ],
    [
        'image' => 'assets/images/villa2.jpg',
        'titre' => 'Maison Les Pins',
        'description' => 'Charmante maison familiale au cœur de la forêt, à 10 min de la plage. 3 chambres, terrasse, barbecue, idéale pour des vacances en famille.',
        'localisation' => 'Saint-Palais-sur-Mer',
        'capacite' => '6 personnes',
        'details' => '3 chambres, 2 salles de bain',
    ],
    [
        'image' => 'assets/images/hero.jpg',
        'titre' => 'Appartement Vue Mer',
        'description' => 'Appartement lumineux avec vue panoramique sur l’océan, balcon, 2 chambres, accès direct à la plage.',
        'localisation' => 'Royan centre',
        'capacite' => '4 personnes',
        'details' => '2 chambres, 1 salle de bain',
    ],
    [
        'image' => 'assets/images/villa1.jpg',
        'titre' => 'Villa Atlantique',
        'description' => 'Grande villa familiale avec piscine, proche du golf et de la plage. Jardin, 5 chambres, idéale pour groupes.',
        'localisation' => 'La Palmyre',
        'capacite' => '10 personnes',
        'details' => '5 chambres, 3 salles de bain',
    ],
    [
        'image' => 'assets/images/villa2.jpg',
        'titre' => 'Maison du Phare',
        'description' => 'Maison cosy à deux pas du phare de Cordouan, terrasse ensoleillée, 2 chambres.',
        'localisation' => 'Saint-Georges-de-Didonne',
        'capacite' => '4 personnes',
        'details' => '2 chambres, 1 salle de bain',
    ],
    [
        'image' => 'assets/images/hero.jpg',
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
            <?php foreach ($biens as $bien): ?>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="card shadow-sm border-0 flex-fill h-100">
                        <img src="<?= $bien['image'] ?>" class="card-img-top" alt="<?= htmlspecialchars($bien['titre']) ?>" style="height:220px;object-fit:cover;">
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