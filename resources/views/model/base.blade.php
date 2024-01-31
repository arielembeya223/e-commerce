<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Découvrez l'univers enchanteresque de LushiShop, votre destination incontournable pour des expériences shopping uniques. Parcourez notre sélection soigneusement curated, où la qualité rencontre l'élégance. Trouvez le bonheur dans chaque achat, avec des produits tendance et irrésistibles qui font de chaque instant une occasion spéciale. Explorez LushiShop aujourd'hui et laissez-vous emporter par la magie du shopping en ligne.">
  <meta name="keywords" content="Achats en ligne Lubumbashi Magasin en ligne Lubumbashi Commerce électronique RDC Livraison à domicile Lubumbashi Offres spéciales Lubumbashi Produits locaux Lubumbashi Panier d'achat Lubumbashi Mode en ligne Lubumbashi Électronique Lubumbashi Vêtements Lubumbashi Meubles Lubumbashi Accessoires de maison Lubumbashi Supermarché en ligne Lubumbashi Deals du jour Lubumbashi Boutique virtuelle Lubumbashi Marques populaires Lubumbashi Vente flash Lubumbashi Promotions Lubumbashi Nouveautés Lubumbashi Comparaison de prix Lubumbashi Paiement sécurisé Lubumbashi Retours faciles Lubumbashi Service client réactif Lubumbashi Boutique de beauté Lubumbashi Épicerie en ligne Lubumbashi Gadget technologique Lubumbashi Articles pour la maison Lubumbashi Jouets pour enfants Lubumbashi Boutique de sport Lubumbashi Idées cadeaux Lubumbashi">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.9/dist/css/themes/splide-default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.9/dist/js/splide.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <title>@yield('title','lushishop')</title>
</head>

<body class="bg-zinc-50">
  <nav class="flex-no-wrap relative flex w-full items-center justify-between bg-white py-6 shadow-md shadow-black/5 mb-0.5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4 sticky top-0 z-10"
    data-te-navbar-ref>
    <div class="mx-auto flex w-full flex-wrap items-center justify-between px-3 lg:container text-gray-500">
      Deale.com
      <div class="relative flex items-center">
        <a class="mr-4 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
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
          <a href="#" class="dropdown-toggle">
            <span class="[&gt;svg]:w-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                <path
                  d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
              </svg>
            </span>
          </a>
          <div id="cartDropdown" class="dropdown-content origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
              <a href="{{Route('public.boutique')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:bg-sky-700" role="menuitem"
                >Ouvrir une boutique</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:bg-sky-700" role="menuitem"
                onclick="connectToStore()">Se connecter à la boutique</a>
            </div>
          </div>
        </div>

        <div class="relative" data-te-dropdown-ref>
          <a class="hidden-arrow mr-4 flex items-center text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
            href="{{Route('public.notif')}}" id="dropdownMenuButton1" role="button" data-te-dropdown-toggle-ref aria-expanded="false">
            <span class="[&>svg]:w-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                <path
                  fill-rule="evenodd"
                  d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                  clip-rule="evenodd" />
              </svg>
            </span>
            <span class="absolute bottom-1 left-1 transform translate-x-1 -mb-2.5 rounded-full bg-red-600 px-1.5 text-white text-xs leading-none flex items-center justify-center h-3 w-3">1</span>
          </a>
          <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 opacity-0 visible min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
          aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
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
