<?php
require_once 'includes/config.php';
require_once 'includes/database.php';

$page_title = $lang['resources'];
$current_page = 'resources';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_language; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title . ' - ' . SITE_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header-banner">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4 fw-bold"><?php echo $lang['resources']; ?></h1>
                    <p class="lead">Guides, documentation et ressources pour utiliser AidVeritas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- For Donors -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="text-primary mb-3">
                                <i class="fas fa-mobile-alt fa-3x"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Pour les Donateurs</h4>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-download text-primary me-2"></i>Guide d'installation de l'application</li>
                                <li class="mb-2"><i class="fas fa-qrcode text-primary me-2"></i>Comment scanner les codes QR</li>
                                <li class="mb-2"><i class="fas fa-receipt text-primary me-2"></i>Comprendre vos reçus fiscaux</li>
                                <li class="mb-2"><i class="fas fa-shield-alt text-primary me-2"></i>Sécurité et confidentialité</li>
                            </ul>
                            <!-- UPDATED: Redirect to docs.aidveritas.com For Donors section -->
                            <a href="https://docs.gestionmicrodons.com/section.php?id=1" class="btn btn-outline-primary mt-3" target="_blank">
                                Voir les guides
                                <i class="fas fa-external-link-alt ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- For Charities -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="text-primary mb-3">
                                <i class="fas fa-heart fa-3x"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Pour les Organismes</h4>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-clipboard-list text-primary me-2"></i>Processus d'inscription</li>
                                <li class="mb-2"><i class="fas fa-tachometer-alt text-primary me-2"></i>Guide du tableau de bord</li>
                                <li class="mb-2"><i class="fas fa-chart-bar text-primary me-2"></i>Analytics et rapports</li>
                                <li class="mb-2"><i class="fas fa-file-invoice-dollar text-primary me-2"></i>Gestion des reçus</li>
                            </ul>
                            <!-- UPDATED: Redirect to docs.aidveritas.com For Organizations section -->
                            <a href="https://docs.gestionmicrodons.com/section.php?id=2" class="btn btn-outline-primary mt-3" target="_blank">
                                Documentation
                                <i class="fas fa-external-link-alt ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- For Businesses -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="text-primary mb-3">
                                <i class="fas fa-store fa-3x"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Pour les Entreprises</h4>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-cube text-primary me-2"></i>Installation du terminal</li>
                                <li class="mb-2"><i class="fas fa-wrench text-primary me-2"></i>Maintenance et support</li>
                                <li class="mb-2"><i class="fas fa-chart-line text-primary me-2"></i>Rapports RSE</li>
                                <li class="mb-2"><i class="fas fa-handshake text-primary me-2"></i>Partenariats</li>
                            </ul>
                            <!-- UPDATED: Redirect to docs.aidveritas.com For Businesses section -->
                            <a href="https://docs.gestionmicrodons.com/section.php?id=3" class="btn btn-outline-primary mt-3" target="_blank">
                                Ressources partenaires
                                <i class="fas fa-external-link-alt ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold text-primary text-center mb-5">Foire Aux Questions</h2>
                    
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Comment fonctionne le processus de don?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Le processus est simple : 1) Téléchargez l'application AidVeritas, 2) Scannez le code QR sur le terminal dans un magasin partenaire, 3) Sélectionnez votre organisme de bienfaisance, 4) Insérez votre monnaie. Chaque don est enregistré et vous recevrez un reçu fiscal annuel consolidé.
                                    <div class="mt-3">
                                        <a href="https://docs.aidveritas.com/section.php?id=1" class="btn btn-sm btn-outline-primary" target="_blank">
                                            En savoir plus dans notre documentation
                                            <i class="fas fa-external-link-alt ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Comment sont sécurisées mes informations?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Toutes les transactions sont cryptographiquement sécurisées avec l'algorithme SHA-256. Vos informations personnelles sont chiffrées et nous respectons les normes les plus strictes de protection des données. Chaque transaction crée un hachage immuable pour garantir l'intégrité des données.
                                    <div class="mt-3">
                                        <a href="https://docs.aidveritas.com/page.php?slug=security-and-privacy" class="btn btn-sm btn-outline-primary" target="_blank">
                                            Documentation sécurité complète
                                            <i class="fas fa-external-link-alt ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Quand vais-je recevoir mon reçu fiscal?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Les reçus fiscaux annuels consolidés sont générés automatiquement en février de chaque année pour tous les dons de l'année précédente. Vous recevrez une notification dans l'application et par courriel lorsque votre reçu sera disponible.
                                    <div class="mt-3">
                                        <a href="https://docs.aidveritas.com/page.php?slug=understanding-tax-receipts" class="btn btn-sm btn-outline-primary" target="_blank">
                                            Guide des reçus fiscaux
                                            <i class="fas fa-external-link-alt ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 - New -->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Où puis-je trouver la documentation complète?
                                </button>
                            </h3>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Toute notre documentation complète est disponible sur notre portail de documentation dédié. Vous y trouverez des guides détaillés pour les donateurs, les organismes de bienfaisance et les entreprises partenaires.
                                    <div class="mt-3">
                                        <a href="https://docs.aidveritas.com" class="btn btn-primary" target="_blank">
                                            <i class="fas fa-book-open me-2"></i>
                                            Accéder à la documentation complète
                                            <i class="fas fa-external-link-alt ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Documentation CTA -->
                    <div class="text-center mt-5">
                        <div class="card border-primary">
                            <div class="card-body py-4">
                                <h4 class="text-primary mb-3">Documentation Complète Disponible</h4>
                                <p class="text-muted mb-4">
                                    Accédez à notre portail de documentation pour des guides détaillés, tutoriels et ressources complètes.
                                </p>
                                <a href="https://docs.aidveritas.com" class="btn btn-primary btn-lg" target="_blank">
                                    <i class="fas fa-external-link-alt me-2"></i>
                                    Visiter docs.aidveritas.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>