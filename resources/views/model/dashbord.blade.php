<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            transition: background-color 0.3s, color 0.3s;
        }

        .scrollable {
            overflow: auto;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            border-bottom: 1px solid #ccc;
            padding: 8px;
            transition: background-color 0.3s;
        }

        li:hover {
            background-color: #f0f0f0;
        }

        /* Style pour le thème sombre */
/* Style pour le thème sombre */
.dark-theme body,
.dark-theme main {
    background-color: #1a202c !important;
    color: #cbd5e0 !important;
}

.dark-theme li {
    border-bottom: 1px solid #4a5568;
}

.dark-theme li:hover {
    background-color: #2d3748;
}
.dark-theme #main {
    background-color: #1a202c;
}


        /* Style pour le bouton de changement de thème */
        .theme-toggle-container {
            display: inline-block;
            position: relative;
            cursor: pointer;
        }

        .theme-toggle-input {
            opacity: 0;
            position: absolute;
        }

        .theme-toggle-slider {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .theme-toggle-slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: #fff;
            border-radius: 50%;
            transition: transform 0.3s;
        }

        .theme-toggle-input:checked + .theme-toggle-slider {
            background-color: #4CAF50;
        }

        .theme-toggle-input:checked + .theme-toggle-slider:before {
            transform: translateX(20px);
        }
        /* Animation pour le thème sombre */
        .theme-toggle-slider {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .theme-toggle-slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: #fff;
            border-radius: 50%;
            transition: transform 0.3s, background-color 0.3s;
        }

        .theme-toggle-input:checked + .theme-toggle-slider {
            background-color: #4CAF50; /* Green background */
        }

        .theme-toggle-input:checked + .theme-toggle-slider:before {
            transform: translateX(20px);
            background-color: #1a202c; /* Dark mode background color */
        }
        /* Style pour le bouton de changement de thème */
        .theme-toggle-container {
            display: inline-flex;
            align-items: center;
        }

        .theme-toggle-input {
            opacity: 0;
            position: absolute;
        }

        .theme-toggle-slider {
            position: relative;
            width: 30px; /* Ajustez la largeur selon vos préférences */
            height: 15px; /* Ajustez la hauteur selon vos préférences */
            background-color: #ccc;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .theme-toggle-slider:before {
            position: absolute;
            content: "";
            height: 11px;
            width: 11px;
            left: 4px;
            bottom: 2px;
            background-color: #fff;
            border-radius: 50%;
            transition: transform 0.3s, background-color 0.3s;
        }

        .theme-toggle-input:checked + .theme-toggle-slider {
            background-color: #4CAF50; /* Green background */
        }

        .theme-toggle-input:checked + .theme-toggle-slider:before {
            transform: translateX(15px);
            background-color: #1a202c; /* Dark mode background color */
        }

        /* Styles pour le header */
        .header {
            background-color: #fff;
            transition: background-color 0.3s;
        }

        .dark-theme .header {
            background-color: #1a202c;
        }

    </style>
    <title>Tableau de Bord</title>
</head>

<body>

    <!-- Header -->
    <nav class="flex-no-wrap relative flex w-full items-center justify-between py-6 shadow-md shadow-black/5 mb-0.5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4 sticky top-0 z-10 header"
        data-te-navbar-ref>
        <div class="mx-auto flex w-full flex-wrap items-center justify-between px-3 lg:container text-gray-500">
            <!-- Logo -->
            Deale.com

            <!-- Contenu du header -->
            <div class="flex items-center space-x-4">
                <!-- Statistiques -->
                <a href="#" class="font-bold text-lg">
                    <span class="[&>svg]:w-5 text-blue-500">
                        <!-- Icône pour les statistiques -->
                        📊
                    </span>
                </a>
                <!-- Bouton Message -->
                <a href="#" class="font-bold text-lg">
                    <span class="[&>svg]:w-5 text-green-500">
                        <!-- Icône pour les messages -->
                        💬
                    </span>
                </a>
                <!-- Bouton Home -->
                <a href="{{Route('welcome')}}" class="font-bold text-lg">
                    <span class="[&>svg]:w-5 text-red-500">
                        <!-- Icône pour le bouton Home -->
                        🏠
                    </span>
                </a>

                <!-- Thème Toggle -->
                <div class="theme-toggle-container">
                    <input type="checkbox" id="themeToggle" class="theme-toggle-input">
                    <label for="themeToggle" class="theme-toggle-slider"></label>
                    <label for="themeToggle" class="ml-2 text-gray-600">Thème sombre</label>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main id="main" class="flex h-screen">
        <!-- Partie 1 (20%) -->
        <div class="w-1/5 p-4 overflow-auto bg-white rounded-lg scrollable">
            <button class="bg-blue-500 text-white p-2 mb-4 rounded-md">Vendre : un nouveau produit</button>
            <ul>
                <!-- Liste des anciens produits -->
                <li class="mb-2">Produit 1</li>
                <li class="mb-2">Produit 2</li>
                <li class="mb-2">Produit 3</li>
                <!-- ... -->
            </ul>
        </div>

        <!-- Partie 2 (55%) -->
        <div class="w-3/5 p-4 max-h-full overflow-auto bg-white rounded-lg scrollable">
            <!-- Graphique en ligne -->
            <canvas id="graphiqueLigne" class="mb-4"></canvas>

            <!-- Graphique en secteurs -->
            <canvas id="graphiqueSecteurs" class="mb-4"></canvas>

            <!-- Graphique en Gantt -->
            <canvas id="graphiqueGantt"></canvas>
        </div>

        <!-- Partie 3 (25%) -->
        <div class="w-1/5 p-4 overflow-auto bg-white rounded-lg scrollable">
            <button class="bg-green-500 text-white p-2 mb-4 rounded-md">Faire une annonce</button>
            <ul>
                <!-- Liste des messages des clients -->
                <li class="mb-2">Message 1</li>
                <li class="mb-2">Message 2</li>
                <li class="mb-2">Message 3</li>
                <!-- ... -->
            </ul>
        </div>
    </main>

    <!-- Script JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Code Chart.js pour générer des graphiques factices
    var ctxLigne = document.getElementById('graphiqueLigne').getContext('2d');
    var ctxSecteurs = document.getElementById('graphiqueSecteurs').getContext('2d');
    var ctxGantt = document.getElementById('graphiqueGantt').getContext('2d');

    var dataLigne = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
        datasets: [{
            label: 'Ventes Mensuelles',
            data: [50, 60, 70, 80, 90],
            borderColor: 'blue',
            fill: false,
        }]
    };

    var dataSecteurs = {
        labels: ['Catégorie A', 'Catégorie B', 'Catégorie C'],
        datasets: [{
            data: [30, 40, 30],
            backgroundColor: ['red', 'green', 'blue'],
        }]
    };

    var dataGantt = {
        labels: ['Projet 1'],
        datasets: [{
            label: 'Projet 1',
            data: [{
                x: '2024-02-01',
                y: '2024-02-10'
            }]
        }]
    };

    var configLigne = { type: 'line', data: dataLigne };
    var configSecteurs = { type: 'doughnut', data: dataSecteurs };
    var configGantt = { type: 'bar', data: dataGantt };

    new Chart(ctxLigne, configLigne);
    new Chart(ctxSecteurs, configSecteurs);
    new Chart(ctxGantt, configGantt);

    // Vérifiez si le thème sombre est activé dans localStorage
    var isDarkMode = localStorage.getItem('darkMode') === 'enabled';

    // Appliquez le thème sombre si nécessaire
    var body = document.body;
    var main = document.querySelector('#main');

    if (isDarkMode) {
        body.classList.add('dark-theme');
        main.classList.add('dark-theme');
    }

    // Ajoutez un écouteur d'événements pour basculer le thème sombre
    var themeToggle = document.getElementById('themeToggle');
    themeToggle.addEventListener('change', function () {
        body.classList.toggle('dark-theme');
        main.classList.toggle('dark-theme');

        // Mettez à jour la préférence utilisateur dans localStorage
        if (body.classList.contains('dark-theme')) {
            localStorage.setItem('darkMode', 'enabled');
        } else {
            localStorage.setItem('darkMode', 'disabled');
        }
    });

    // Ajoutez une sortie de console pour le débogage
    console.log('Dark mode changed:', body.classList.contains('dark-theme'));
});
</script>
</body>

</html>
