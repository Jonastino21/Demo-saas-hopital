<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0f75bc" />

    <?php
        $titleresult = $this->customlib->getTitleName();
        $logoresult = $this->customlib->getLogoImage();
        if (!empty($titleresult["name"])) {
            $title_name = $titleresult["name"];
        } else {
            $title_name = "Hospital Name Title";
        }
        ?>
    <title><?php echo $title_name; ?></title>
    <!--favican-->
    <link href="<?php echo base_url() . "uploads/hospital_content/logo/" . $logoresult["mini_logo"] ?>"
        rel="shortcut icon" type="image/x-icon">
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#0f75bc',
                    secondary: '#17a2b8',
                    danger: '#dc3545',
                    success: '#28a745',
                    warning: '#ffc107',
                    gray: '#6c757d'
                },
                fontFamily: {
                    'poppins': ['Poppins', 'sans-serif']
                }
            }
        }
    }
    </script>
    <style>
    .carousel {
        position: relative;
        width: 100%;
        height: 300px;
        overflow: hidden;
        border-radius: 0.5rem;
    }

    .carousel-inner {
        display: flex;
        transition: transform 0.5s ease;
        height: 100%;
    }

    .carousel-item {
        min-width: 100%;
        height: 100%;
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        z-index: 10;
        border-radius: 50%;
    }

    .carousel-control.prev {
        left: 10px;
    }

    .carousel-control.next {
        right: 10px;
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 5px;
    }

    .carousel-indicator {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        cursor: pointer;
    }

    .carousel-indicator.active {
        background-color: white;
    }
    </style>
</head>

<body class="bg-white font-poppins overflow-x-hidden">
    <div class="flex flex-col lg:flex-row min-h-[50vh]">
        <!-- Left side with illustration -->
        <div class="hidden lg:flex lg:flex-1 bg-primary relative overflow-hidden justify-center">
            <div class="relative flex flex-col justify-end items-center h-full z-10">
                <img src="<?php echo base_url(); ?>backend/usertemplate/assets/img/doctor.png" alt="Doctor"
                    class="max-w-[600px] w-full">
            </div>
        </div>

        <!-- Right side with login form -->
        <div class="flex flex-1 flex-col justify-end items-center bg-white p-6 lg:p-0">
            <div class="w-full max-w-[450px]">
                <?php
                    if (!empty($logoresult["image"])) {
                        $logo_image = base_url() . "uploads/hospital_content/logo/" . $logoresult["image"];
                    } else {
                        $logo_image = base_url() . "uploads/hospital_content/logo/s_logo.png";
                    }
                    ?>
                <div class="text-center mb-8">
                    <img src="<?php echo $logo_image.img_time(); ?>" alt="Logo" class="max-h-[60px] mx-auto">
                </div>

                <?php
                    if (isset($error_message)) {
                        echo "<div class='bg-red-100 text-red-800 p-3 rounded-md mb-5 border border-red-200'>" . $error_message . "</div>";
                    }
                    ?>
                <?php
                    if ($this->session->flashdata('message')) {
                        echo "<div class='bg-green-100 text-green-800 p-3 rounded-md mb-5 border border-green-200'>" . $this->session->flashdata('message') . "</div>";
                    };
                    ?>

                <form action="<?php echo site_url('site/login') ?>" method="post">
                    <?php echo $this->customlib->getCSRF(); ?>
                    <input type="text" name="username" placeholder="<?php echo $this->lang->line('username'); ?>"
                        value=""
                        class="w-full h-[45px] p-4 mb-5 border border-gray-300 rounded-md text-sm bg-gray-50 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20"
                        id="email">
                    <span class="text-red-500"><?php echo form_error('username'); ?></span>

                    <input type="password" value="" name="password"
                        placeholder="<?php echo $this->lang->line('password'); ?>"
                        class="w-full h-[45px] p-4 mb-5 border border-gray-300 rounded-md text-sm bg-gray-50 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20"
                        id="password">
                    <span class="text-red-500"><?php echo form_error('password'); ?></span>

                    <?php if($is_captcha){ ?>
                    <div class="flex items-center mb-5">
                        <div class="flex-1 mr-3">
                            <span id="captcha_image"><?php echo $captcha_image; ?></span>
                            <i class="fas fa-sync-alt text-primary cursor-pointer ml-2" title='Refresh Captcha'
                                onclick="refreshCaptcha()"></i>
                        </div>
                        <input type="text" name="captcha"
                            placeholder="<?php echo $this->lang->line('enter_captcha'); ?>"
                            class="w-1/2 h-[45px] p-4 border border-gray-300 rounded-md text-sm bg-gray-50 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20"
                            id="captcha">
                    </div>
                    <span class="text-red-500"><?php echo form_error('captcha'); ?></span>
                    <?php } ?>

                    <div class="flex justify-between gap-2 mb-5">
                        <button type="submit"
                            class="inline-block w-1/2 h-[45px] bg-primary hover:bg-[#0a5c92] text-white font-medium rounded-md text-base uppercase transition duration-300"><?php echo $this->lang->line('sign_in'); ?></button>
                        <button type="button"
                            class="inline-block w-1/2 h-[45px] bg-orange-500 hover:bg-orange-600 text-white font-medium rounded-md text-base uppercase transition duration-200"
                            onclick="fillCredentials('director')">Super admin</button>
                    </div>

                    <!-- Role buttons grid -->
                    <div class="grid grid-cols-4 gap-2 mb-5">
                        <button type="button"
                            class="flex items-center justify-center h-[40px] p-2 bg-primary hover:bg-opacity-90 text-white text-xs font-medium rounded-md transition duration-200"
                            onclick="fillCredentials('service_chief')">
                            <i class="fas fa-user-cog mr-1"></i> <?php echo $this->lang->line('service_chief'); ?>
                        </button>
                        <button type="button"
                            class="flex items-center justify-center h-[40px] p-2 bg-primary hover:bg-opacity-90 text-white text-xs font-medium rounded-md transition duration-200"
                            onclick="fillCredentials('doctor')">
                            <i class="fas fa-user-md mr-1"></i> <?php echo $this->lang->line('doctor'); ?>
                        </button>
                        <button type="button"
                            class="flex items-center justify-center h-[40px] p-2 bg-primary hover:bg-opacity-90 text-white text-xs font-medium rounded-md transition duration-200"
                            onclick="fillCredentials('nurse')">
                            <i class="fas fa-user-nurse mr-1"></i> <?php echo $this->lang->line('nurse'); ?>
                        </button>
                        <button type="button"
                            class="flex items-center justify-center h-[40px] p-2 bg-primary hover:bg-opacity-90 text-white text-xs font-medium rounded-md transition duration-200"
                            onclick="fillCredentials('accountant')">
                            <i class="fas fa-calculator mr-1"></i> <?php echo $this->lang->line('accountant'); ?>
                        </button>
                        <button type="button"
                            class="flex items-center justify-center h-[40px] p-2 bg-success hover:bg-opacity-90 text-white text-xs font-medium rounded-md transition duration-200"
                            onclick="fillCredentials('lab')">
                            <i class="fas fa-microscope mr-1"></i> <?php echo $this->lang->line('lab'); ?>
                        </button>
                        <button type="button"
                            class="flex items-center justify-center h-[40px] p-2 bg-success hover:bg-opacity-90 text-white text-xs font-medium rounded-md transition duration-200"
                            onclick="fillCredentials('pharmacy')">
                            <i class="fas fa-pills mr-1"></i> <?php echo $this->lang->line('pharmacy'); ?>
                        </button>
                        <button type="button"
                            class="flex items-center justify-center h-[40px] p-2 bg-success hover:bg-opacity-90 text-white text-xs font-medium rounded-md transition duration-200"
                            onclick="fillCredentials('radiology')">
                            <i class="fas fa-x-ray mr-1"></i> <?php echo $this->lang->line('radiology'); ?>
                        </button>
                        <button type="button"
                            class="flex items-center justify-center h-[40px] p-2 bg-success hover:bg-opacity-90 text-white text-xs font-medium rounded-md transition duration-200"
                            onclick="fillCredentials('receptionist')">
                            <i class="fas fa-headset mr-1"></i> <?php echo $this->lang->line('receptionist'); ?>
                        </button>
                        <a href="https://demohopital.salamada.mg/"
                            class="flex items-center justify-center h-[40px] p-2 bg-secondary hover:bg-opacity-90 text-white text-xs font-medium rounded-md transition duration-200 no-underline">
                            <i class="fas fa-globe mr-1"></i>
                            Web hopital
                        </a>
                        <a href="https://demohopital.salamada.mg/rendez-vous"
                            class="flex items-center justify-center h-[40px] p-2 bg-secondary hover:bg-opacity-90 text-white text-xs font-medium rounded-md transition duration-200 no-underline">
                            <i class="fas fa-globe mr-1"></i>
                            Site rdv
                        </a>
                        <a href="https://salamada.mg/"
                            class="flex items-center justify-center h-[40px] p-2 bg-secondary hover:bg-opacity-90 text-white text-xs font-medium rounded-md transition duration-200 no-underline col-span-2">
                            <i class="fas fa-home mr-1"></i>

                            Revenir à l'accueil
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="ml-8">
        <div id="role-documentation" class="mt-8 max-h-[300px] pt-5">
            <!-- La documentation spécifique au rôle sera affichée ici -->
            <div class="mb-4 pb-4 ">
                <h4 class="text-xl font-semibold mb-4 text-primary">Essayer les différents rôle au sein de votre hôpital
                </h4>

            </div>
            <p class="mb-4">Cliquer sur le bouton de rôle pour connaitre leurs différentes fonctionnalités associées et
                puis s'identifier pour tester SAAS Salamada</p>
        </div>
    </div>

    <!-- Javascript -->
    <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/jquery-1.11.1.min.js"></script>
    <script>
    // Objet contenant la documentation pour chaque rôle
    const roleDocumentation = {
        "director": {
            "title": "Super Admin",
            "content": "Le Super admin a accès à toutes les fonctionnalités du système, y compris la gestion des utilisateurs, la configuration des paramètres globaux, et la génération de rapports.",
            "images": [
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/superadmin.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/superadmin.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/superadmin.png"
            ],
            "permissions": [
                "Créer et gérer les comptes utilisateurs",
                "Configurer les paramètres système",
                "Superviser la sécurité des données",
                "Générer des rapports globaux"
            ]
        },
        "accountant": {
            "title": "Comptable",
            "content": "Instructions pour la gestion des finances, rapports budgétaires et suivi des paiements.",
            "images": [
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/accountant.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/accountant.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/accountant.png"
            ],
            "permissions": [
                "Gérer les comptes financiers",
                "Générer des rapports budgétaires",
                "Suivre les paiements et les factures",
                "Superviser les transactions financières"
            ]
        },
        "service_chief": {
            "title": "Chef de Service",
            "content": "Procédures pour la coordination des services et la gestion des équipes.",
            "images": [
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/chef_de_service.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/chef_de_service.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/chef_de_service.png"
            ],
            "permissions": [
                "Coordonner les activités du service",
                "Superviser les équipes médicales",
                "Planifier les horaires de travail",
                "Résoudre les problèmes opérationnels"
            ]
        },
        "doctor": {
            "title": "Médecin",
            "content": "La gestion des dossiers patients et les procédures médicales.",
            "images": [
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/medecin_dashboard.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/medecin_dashboard.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/medecin_dashboard.png"
            ],
            "permissions": [
                "Accéder aux dossiers médicaux",
                "Prescrire des médicaments et des traitements",
                "Planifier des interventions chirurgicales",
                "Utiliser des outils d'aide au diagnostic"
            ]
        },
        "nurse": {
            "title": "Infirmier",
            "content": "Instructions pour les soins aux patients et la gestion des médicaments.",
            "images": [
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/infirmier.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/infirmier.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/infirmier.png"
            ],
            "permissions": [
                "Enregistrer les signes vitaux des patients",
                "Suivre les plans de soins",
                "Notifier les médecins en cas d'urgence",
                "Gérer les stocks de médicaments"
            ]
        },
        "lab": {
            "title": "Laboratoire",
            "content": "Procédures pour les analyses et la gestion des résultats.",
            "images": [
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/laboratoire.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/laboratoire.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/laboratoire.png"
            ],
            "permissions": [
                "Effectuer des analyses médicales",
                "Gérer les échantillons biologiques",
                "Interpréter les résultats des tests",
                "Maintenir les équipements de laboratoire"
            ]
        },
        "pharmacy": {
            "title": "Pharmacie",
            "content": "Guide pour la gestion des stocks de médicaments et des ordonnances.",
            "images": [
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/pharmacie.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/pharmacie.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/pharmacie.png"
            ],
            "permissions": [
                "Gérer les stocks de médicaments",
                "Délivrer les ordonnances",
                "Suivre les dates de péremption",
                "Commander des médicaments"
            ]
        },
        "radiology": {
            "title": "Radiologie",
            "content": "Instructions pour les procédures d'imagerie et l'interprétation des résultats.",
            "images": [
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/radiology.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/radiology.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/radiology.png"
            ],
            "permissions": [
                "Effectuer des examens d'imagerie médicale",
                "Interpréter les résultats radiologiques",
                "Maintenir les équipements de radiologie",
                "Collaborer avec les médecins pour les diagnostics"
            ]
        },
        "receptionist": {
            "title": "Réceptionniste",
            "content": "Guide pour la gestion des rendez-vous et l'accueil des patients.",
            "images": [
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/receptionniste.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/receptionniste.png",
                "<?php echo base_url(); ?>backend/usertemplate/assets/img/receptionniste.png"
            ],
            "permissions": [
                "Accueillir les patients",
                "Gérer les rendez-vous",
                "Répondre aux appels téléphoniques",
                "Orienter les patients vers les services appropriés"
            ]
        }
    };

    // Variables globales pour le carrousel
    let currentSlide = 0;
    let totalSlides = 1;
    let slideInterval;
    const slideDuration = 3000; // 3 secondes

    function fillCredentials(role) {
        var username;
        var passwords;

        switch (role) {
            case 'director':
                username = 'gasikaradigital@gmail.com';
                passwords = "admin--++"
                break;
            case 'accountant':
                username = 'accountant@salama.gasikara.mg';
                passwords = 'accountant123'
                break;
            case 'service_chief':
                username = 'admin@salama.gasikara.mg';
                passwords = 'admin123'
                break;
            case 'doctor':
                username = 'doctor@salama.gasikara.mg';
                passwords = 'docteur123'
                break;
            case 'nurse':
                username = 'nurse@salama.gasikara.mg';
                passwords = 'nurse123'
                break;
            case 'lab':
                username = 'pathologist@salama.gasikara.mg';
                passwords = 'pathologist123'
                break;
            case 'pharmacy':
                username = 'pharmacist@salama.gasikara.mg';
                passwords = 'pharmacist123'
                break;
            case 'radiology':
                username = 'radiologist@salama.gasikara.mg';
                passwords = 'radiologist123'
                break;
            case 'receptionist':
                username = 'receptionist@salama.gasikara.mg';
                passwords = 'receptionist123'
                break;
            default:
                username = '';
                passwords = '';
        }

        document.getElementById('email').value = username;
        document.getElementById('password').value = passwords;

        updateDocumentation(role);
    }

    function updateDocumentation(role) {
        const docContainer = document.getElementById('role-documentation');
        const documentation = roleDocumentation[role] || {
            title: 'Documentation',
            content: 'Veuillez sélectionner un rôle pour voir la documentation correspondante.',
            images: ['<?php echo base_url(); ?>backend/usertemplate/assets/img/default.png'],
            permissions: []
        };

        // Arrêter l'intervalle précédent s'il existe
        if (slideInterval) {
            clearInterval(slideInterval);
        }

        // Générer les éléments du carrousel
        const carouselItems = documentation.images.map((image, index) => `
            <div class="carousel-item ${index === 0 ? 'active' : ''}">
                <img src="${image}" alt="${documentation.title} ${index + 1}">
            </div>
        `).join('');

        // Générer les indicateurs du carrousel
        const carouselIndicators = documentation.images.map((_, index) => `
            <div class="carousel-indicator ${index === 0 ? 'active' : ''}" onclick="goToSlide(${index})"></div>
        `).join('');

        docContainer.innerHTML = `
            <div class="flex flex-col lg:flex-row">
                <!-- Contenu texte à gauche -->
                <div class="flex-1 mr-5">
                    <div class="mb-4 pb-4">
                        <h2 class="text-xl font-semibold mb-4 text-primary">${documentation.title}</h2>
                    </div>
                    <p class="mb-4">${documentation.content.split('. ').map(sentence => `${sentence}.`).join('</p><p class="mb-4">')}</p>
                    ${documentation.permissions.length > 0 ? `
                    <h3 class="text-lg font-semibold mb-2">Permissions :</h3>
                    <ul class="list-disc pl-5">
                        ${documentation.permissions.map(permission => `<li class="mb-2">${permission}</li>`).join('')}
                    </ul>
                    ` : ''}
                </div>
            
                <!-- Carousel à droite -->
                <div class="flex-1">
                    <div class="carousel">
                        <div class="carousel-inner">
                            ${carouselItems}
                        </div>
                        <button class="carousel-control prev" onclick="pauseAutoSlide(); prevSlide();">❮</button>
                        <button class="carousel-control next" onclick="pauseAutoSlide(); nextSlide();">❯</button>
                        <div class="carousel-indicators">
                            ${carouselIndicators}
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-6 mb-4">
                <a href="https://salama.gasikara.mg/pages/portail_instance_salama.html" class="px-6 py-3 bg-primary hover:bg-primary/90 text-white font-semibold rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105 text-center">
                    Inscription gratuite
                </a>
            </div>`;

        // Initialiser les variables du carrousel
        currentSlide = 0;
        totalSlides = documentation.images.length;

        // Démarrer le défilement automatique
        startAutoSlide();
    }

    // Fonction pour démarrer le défilement automatique
    function startAutoSlide() {
        slideInterval = setInterval(() => {
            nextSlide();
        }, slideDuration);
    }

    // Fonction pour mettre en pause le défilement automatique
    function pauseAutoSlide() {
        clearInterval(slideInterval);
        // Redémarrer après 10 secondes d'inactivité
        setTimeout(startAutoSlide, 10000);
    }

    // Fonction pour mettre à jour le carrousel
    function updateCarousel() {
        const carouselInner = document.querySelector('.carousel-inner');
        const indicators = document.querySelectorAll('.carousel-indicator');

        carouselInner.style.transform = `translateX(-${currentSlide * 100}%)`;

        indicators.forEach((indicator, index) => {
            if (index === currentSlide) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }

    // Fonction pour passer à la diapositive suivante
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateCarousel();
    }

    // Fonction pour revenir à la diapositive précédente
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateCarousel();
    }

    // Fonction pour aller directement à une diapositive spécifique
    function goToSlide(index) {
        pauseAutoSlide();
        currentSlide = index;
        updateCarousel();
    }

    // Form validation
    $(document).ready(function() {
        $('.focus:border-primary').on('focus', function() {
            $(this).removeClass('border-red-500');
        });

        $('form').on('submit', function(e) {
            $(this).find('input[type="text"], input[type="password"]').each(function() {
                if ($(this).val() == "") {
                    e.preventDefault();
                    $(this).addClass('border-red-500');
                } else {
                    $(this).removeClass('border-red-500');
                }
            });
        });
    });

    function refreshCaptcha() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('site/refreshCaptcha'); ?>",
            data: {},
            success: function(captcha) {
                $("#captcha_image").html(captcha);
            }
        });
    }

    // Démarrer le carrousel automatique au chargement de la page
    document.addEventListener('DOMContentLoaded', function() {
        startAutoSlide();
    });
    </script>
</body>

</html>