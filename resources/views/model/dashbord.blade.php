<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Découvrez l'univers enchanteresque de LushiShop, votre destination incontournable pour des expériences shopping uniques. Parcourez notre sélection soigneusement curated, où la qualité rencontre l'élégance. Trouvez le bonheur dans chaque achat, avec des produits tendance et irrésistibles qui font de chaque instant une occasion spéciale. Explorez LushiShop aujourd'hui et laissez-vous emporter par la magie du shopping en ligne.">
  <meta name="keywords" content="Achats en ligne Lubumbashi Magasin en ligne Lubumbashi Commerce électronique RDC Livraison à domicile Lubumbashi Offres spéciales Lubumbashi Produits locaux Lubumbashi Panier d'achat Lubumbashi Mode en ligne Lubumbashi Électronique Lubumbashi Vêtements Lubumbashi Meubles Lubumbashi Accessoires de maison Lubumbashi Supermarché en ligne Lubumbashi Deals du jour Lubumbashi Boutique virtuelle Lubumbashi Marques populaires Lubumbashi Vente flash Lubumbashi Promotions Lubumbashi Nouveautés Lubumbashi Comparaison de prix Lubumbashi Paiement sécurisé Lubumbashi Retours faciles Lubumbashi Service client réactif Lubumbashi Boutique de beauté Lubumbashi Épicerie en ligne Lubumbashi Gadget technologique Lubumbashi Articles pour la maison Lubumbashi Jouets pour enfants Lubumbashi Boutique de sport Lubumbashi Idées cadeaux Lubumbashi">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.9/dist/css/themes/splide-default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0"></script>
  <title>Tableau de Bord</title>
</head>

<body class="bg-gray-100 font-sans">

  <!-- Header -->
  <nav class="bg-white py-6 shadow-md mb-4">
    <div class="container mx-auto flex items-center justify-between">
      <!-- Logo -->
      <span class="text-xl font-bold">Boutique</span>

      <!-- Menu hamburger pour les petits écrans -->
      <div class="lg:hidden mr-6">
        <button id="menu-toggle" class="text-gray-500 focus:outline-none ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
              </svg>                        
        </button>
      </div>

      <!-- Liens de navigation avec des icônes Heroicons SVG -->
      <div class="hidden lg:flex space-x-4">
        <div class="hidden lg:flex space-x-4">
          <a href="{{Route('private.compte',['store'=>3])}}" class="flex items-center text-indigo-950 hover:text-red-700">
            <!-- Icône pour le bouton Accueil -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            Mon compte
          </a>
        <a href="{{Route('private.gerer')}}" class="flex items-center text-indigo-950 hover:text-red-700">
          <!-- Icône pour le bouton Accueil -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
          </svg>produits
        </a>
        <a href="{{Route('private.stat')}}" class="flex items-center text-blue-500 hover:text-blue-700">
          <!-- Icône pour les statistiques -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
          </svg>stat
        </a>
        <a href="{{Route('private.message')}}" class="flex items-center text-green-500 hover:text-green-700">
          <!-- Icône pour les messages -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
          </svg>
          message
        </a>
        <a href="{{Route('private.home')}}" class="flex items-center text-red-500 hover:text-red-700">
          <!-- Icône pour le bouton Accueil -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg>
          profil
        </a>
      </div>
    </div>

    <!-- Liste déroulante pour les petits écrans -->
    <div id="menu" class="lg:hidden hidden">
      <a href="{{Route('private.stat')}}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-200">Statistiques</a>
      <a href="{{Route('private.message')}}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-200">Messages</a>
      <a href="{{Route('private.home')}}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-200">Accueil</a>
    </div>
  </nav>
  <div id="loader-container">
    <div id="loader"></div>
  </div>
  <style>
    /* style du loader  */
    #loader-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.8);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      display: none; /* Cachez le loader par défaut */
    }
    
    #loader {
      border: 8px solid #f3f3f3;
      border-top: 8px solid #3498db;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      animation: spin 1s linear infinite;
    }
    
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
  <!-- scripte du loader -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var loaderContainer = document.getElementById('loader-container');
      var menuToggle = document.getElementById('menu-toggle');
      var menu = document.getElementById('menu');
  
      function showLoader() {
        loaderContainer.style.display = 'flex';
      }
  
      function hideLoader() {
        loaderContainer.style.display = 'none';
      }
  
      function toggleMenu() {
        menu.classList.toggle('hidden');
      }
  
      document.querySelectorAll('a').forEach(function (link) {
        // Vérifier si le lien a la classe "no-loader"
        if (!link.classList.contains('no-loader')) {
          link.addEventListener('click', showLoader);
        }
      });

      // Ajouter un gestionnaire d'événements pour le bouton du menu hamburger
      menuToggle.addEventListener('click', toggleMenu);
  
      // masquer le loader une fois que la nouvelle page est chargée.
      window.addEventListener('load', hideLoader);
  
      // Écouteur d'événements pour détecter le changement de l'historique de navigation
      window.addEventListener('popstate', hideLoader);
  
      // Écouteur d'événements pour détecter le chargement de la page depuis la cache
      window.addEventListener('pageshow', function(event) {
        // Si la page est chargée depuis la cache, masquer le loader
        if (event.persisted) {
          hideLoader();
        }
      });
    });
  </script>
  @yield('content')
</body>

</html>
