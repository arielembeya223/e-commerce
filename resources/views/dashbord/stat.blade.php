@extends('model.dashbord')
@section('content')
    <!-- Contenu principal -->
    <main class="container mx-auto p-4 bg-white rounded-lg shadow-md" style="width: 100%; max-width: 1000px;">
        <!-- Graphique Line Chart -->
        <canvas id="graphiqueLigne"></canvas>

        <!-- Graphique en secteurs -->
        <canvas id="graphiqueSecteurs"></canvas>

        <!-- Graphique en Gantt -->
        <canvas id="graphiqueGantt"></canvas>
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
                    data: [30, 40, 20, 50, 40],
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

            // Gestion du menu hamburger
            var menuToggle = document.getElementById('menu-toggle');
            var menu = document.getElementById('menu');

            menuToggle.addEventListener('click', function () {
                menu.classList.toggle('hidden');
            });
        });
    </script>
@endsection
