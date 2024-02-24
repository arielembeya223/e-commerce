@extends('model.dashbord')
@section('content')
    <!-- Contenu principal -->
    <main class="container mx-auto p-4 bg-white rounded-lg shadow-md" style="width: 100%; max-width: 1000px;">
        <!-- Graphique Line Chart -->
        <canvas id="graphiqueLigne"  width="800" height="400"></canvas>

    </main>

    <!-- Script JavaScript -->
    <!-- Dans votre vue Laravel (blade) -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var donneesPHP = <?php echo json_encode($mois); ?>;
        console.log('Données PHP :', donneesPHP);

        var ctxLigne = document.getElementById('graphiqueLigne').getContext('2d');

        var dataLigne = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'commande',
                data: donneesPHP,
                borderColor: 'blue',
                fill: false,
            }]
        };

        var optionsLigne = {
            responsive: true,
            maintainAspectRatio: false,
        };

        var graphiqueLigne = new Chart(ctxLigne, {
            type: 'line',
            data: dataLigne,
            options: optionsLigne
        });
    });
</script>
@endsection
