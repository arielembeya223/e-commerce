<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Découvrez l'univers enchanteresque de LushiShop, votre destination incontournable pour des expériences shopping uniques. Parcourez notre sélection soigneusement curated, où la qualité rencontre l'élégance. Trouvez le bonheur dans chaque achat, avec des produits tendance et irrésistibles qui font de chaque instant une occasion spéciale. Explorez LushiShop aujourd'hui et laissez-vous emporter par la magie du shopping en ligne.">
  <meta name="keywords" content="Achats en ligne Lubumbashi Magasin en ligne Lubumbashi Commerce électronique RDC Livraison à domicile Lubumbashi Offres spéciales Lubumbashi Produits locaux Lubumbashi Panier d'achat Lubumbashi Mode en ligne Lubumbashi Électronique Lubumbashi Vêtements Lubumbashi Meubles Lubumbashi Accessoires de maison Lubumbashi Supermarché en ligne Lubumbashi Deals du jour Lubumbashi Boutique virtuelle Lubumbashi Marques populaires Lubumbashi Vente flash Lubumbashi Promotions Lubumbashi Nouveautés Lubumbashi Comparaison de prix Lubumbashi Paiement sécurisé Lubumbashi Retours faciles Lubumbashi Service client réactif Lubumbashi Boutique de beauté Lubumbashi Épicerie en ligne Lubumbashi Gadget technologique Lubumbashi Articles pour la maison Lubumbashi Jouets pour enfants Lubumbashi Boutique de sport Lubumbashi Idées cadeaux Lubumbashi">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.9/dist/css/themes/splide-default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.9/dist/js/splide.min.js"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <title>@yield('title','lushishop')</title>
</head>
<body class="bg-zinc-50">
  <nav class="flex-no-wrap relative flex w-full items-center justify-between bg-white py-6 shadow-md shadow-black/5 mb-0.5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4 sticky top-0 z-10"
    data-te-navbar-ref>
    <div class="mx-auto flex w-full flex-wrap items-center justify-between px-3 lg:container text-gray-500">
      Deale.com
      <div class="relative flex items-center">
        <a href="{{Route('welcome')}}" class="font-bold text-lg mr-3">
          <span class="[&>svg]:w-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>            
          </span>
        </a>
        <a class=" no-loader mr-4 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
          href="#" id="searchIcon">
          <span class="[&>svg]:w-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
          </span>
        </a>
        <div class="dropdown relative mr-4 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
          id="cartIcon">
          <a href="#" class="dropdown-toggle no-loader">
            <span class="[&gt;svg]:w-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                <path
                  d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
              </svg>
            </span>
          </a>
          <div id="cartDropdown" class="dropdown-content origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
              <a href="{{Route('public.boutique')}}" class="  block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:bg-sky-700" role="menuitem"
              >Ouvrir une boutique</a>
              <a href="{{Route('public.connectBoutique')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:bg-sky-700" role="menuitem"
                >Se connecter à la boutique</a>
            </div>
          </div>
        </div>

        <div class="relative" data-te-dropdown-ref>
          <a class="hidden-arrow mr-4 flex items-center text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
            href="{{Route('public.notif')}}" id="dropdownMenuButton1" role="button" data-te-dropdown-toggle-ref aria-expanded="false">
            <span class="[&>svg]:w-5">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
              </svg>              
            </span>
          </a>
          <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 opacity-0 visible min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
          aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
            <li>
              <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                href="{{Route('public.boutique')}}" data-te-dropdown-item-ref>ouvrir une boutique</a>
            </li>
            <li>
              <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                href="{{Route('public.connectBoutique')}}" data-te-dropdown-item-ref>se connecter a la boutique</a>
            </li>
            <li>
              <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                href="#" data-te-dropdown-item-ref>Something else here</a>
            </li>
          </ul>
        </div>

        <div class="relative" data-te-dropdown-ref>
          <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
            href="{{Route('public.users')}}" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
          </a>
          <ul
            class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
            <li>
              <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                href="#" data-te-dropdown-item-ref>Action</a>
            </li>
            <li>
              <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                href="#" data-te-dropdown-item-ref>Another action</a>
            </li>
            <li>
              <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                href="#" data-te-dropdown-item-ref>Something else here</a>
            </li>
          </ul>
        </div>
      </div>
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
    
          function showLoader() {
              loaderContainer.style.display = 'flex';
          }
    
          function hideLoader() {
              loaderContainer.style.display = 'none';
          }
    
          document.querySelectorAll('a').forEach(function (link) {
              // Vérifier si le lien a la classe "no-loader"
              if (!link.classList.contains('no-loader')) {
                  link.addEventListener('click', showLoader);
              }
          });
    
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
  <div id="searchModal" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
    <div class="flex items-center justify-center h-full">
      <div class="bg-white p-4 rounded-lg w-full max-w-2xl relative mx-4 md:mx-0">
        <form class="flex flex-col items-center" method="GET" action="">
          <input type="text" placeholder="Que recherchez-vous?"
            class="p-2 border border-gray-300 rounded-md w-full mb-4" name="q" />
          <button type="submit" class="p-2 bg-blue-500 text-white rounded-md">rechercher</button>
        </form>
<button type="button" id="closeSearchModalBtn" class="absolute bottom-4 right-4 p-2 bg-blue-500 text-white rounded-md" onclick="closeSearchModal()">
  <i class="fas fa-times"></i>
</button>
      </div>
    </div>
  </div>
<script>
  function openStore() {
    alert("Option : Ouvrir une boutique");
  }

  function connectToStore() {
    alert("Option : Se connecter à la boutique");
  }

  function openSearchModal() {
    const searchModal = document.getElementById('searchModal');
    searchModal.classList.remove('hidden');
    if (window.innerWidth <= 600) {
      searchModal.style.top = '-45%';
    }
  }

  function closeSearchModal() {
    document.getElementById('searchModal').classList.add('hidden');
  }

  document.addEventListener('DOMContentLoaded', function () {
    // Cacher le panier dropdown au chargement de la page
    document.getElementById('cartDropdown').classList.add('hidden');

    // Écouteur d'événements pour le clic sur l'icône du panier
    document.getElementById('cartIcon').addEventListener('click', function() {
      document.getElementById('cartDropdown').classList.toggle('hidden');
    });

    // Écouteur d'événements pour fermer le panier dropdown en cliquant à l'extérieur
    window.addEventListener('click', function (event) {
      const cartIcon = document.getElementById('cartIcon');
      const cartDropdown = document.getElementById('cartDropdown');

      // Vérifier si le clic est à l'extérieur de l'icône du panier
      if (event.target !== cartIcon && !cartIcon.contains(event.target) && event.target !== cartDropdown && !cartDropdown.contains(event.target)) {
        cartDropdown.classList.add('hidden'); // Fermer le panier 
      }
    });

    // Écouteur d'événements pour le clic sur l'icône de recherche
    document.getElementById('searchIcon').addEventListener('click', openSearchModal);

    // Écouteur d'événements pour fermer la boîte modale de recherche
    window.addEventListener('click', function (event) {
      const searchIcon = document.getElementById('searchIcon');
      const searchModal = document.getElementById('searchModal');
      const closeSearchModalBtn = document.getElementById('closeSearchModalBtn');

      // Vérifier si le clic est à l'extérieur de l'icône de recherche, du bouton de fermeture et de la boîte modale
      if (event.target !== searchIcon && !searchIcon.contains(event.target) && event.target !== searchModal && !searchModal.contains(event.target) && event.target !== closeSearchModalBtn) {
        closeSearchModal(); // Fermer la boîte modale de recherche
      }
    });
  });
</script>
</body>
</html>
