<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-financial"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/luxon/2.1.1/luxon.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
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
    </style>
    <title>Tableau de Bord</title>
</head>

<body class="bg-zinc-50">

    <div class="flex h-screen">

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
            <!-- Graphique en chandeliers -->
            <canvas id="graphiqueChandeliers" class="mb-4"></canvas>
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

    </div>

    <script>
        // Votre code JavaScript Chart.js et Candlestick ici...
var barCount = 60;
var initialDateStr = '01 Apr 2017 00:00 Z';
var ctxChandeliers = document.getElementById('graphiqueChandeliers').getContext('2d');
ctxChandeliers.canvas.width = 800;
ctxChandeliers.canvas.height = 400;

var barData = getRandomData(initialDateStr, barCount);

var chart = new Chart(ctxChandeliers, {
    type: 'candlestick',
    data: {
        datasets: [{
            label: 'CHRT - a random curve',
            data: barData
        }]
    }
});

function getRandomData(dateStr, count) {
    var date = luxon.DateTime.fromRFC2822(dateStr);
    var data = [randomBar(date, 30)];
    while (data.length < count) {
        date = date.plus({ days: 1 });
        if (date.weekday <= 5) {
            data.push(randomBar(date, data[data.length - 1].c));
        }
    }
    return data;
}

function randomBar(date, lastClose) {
    var open = +randomNumber(lastClose * 0.95, lastClose * 1.05).toFixed(2);
    var close = +randomNumber(open * 0.95, open * 1.05).toFixed(2);
    var high = +randomNumber(Math.max(open, close), Math.max(open, close) * 1.1).toFixed(2);
    var low = +randomNumber(Math.min(open, close) * 0.9, Math.min(open, close)).toFixed(2);
    return {
        t: date.valueOf(),
        o: open,
        h: high,
        l: low,
        c: close
    };
}

function randomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

function update() {
    var dataset = chart.config.data.datasets[0];
    var mixed = document.getElementById('mixed').value;
    if (mixed === 'true') {
        chart.config.data.datasets = [
            {
                label: 'CHRT - a random curve',
                data: barData
            },
            {
                label: 'Close price',
                type: 'line',
                data: lineData()
            }
        ]
    } else {
        chart.config.data.datasets = [
            {
                label: 'CHRT - a random curve',
                data: barData
            }
        ]
    }

    chart.update();
}

document.getElementById('update').addEventListener('click', update);

document.getElementById('randomizeData').addEventListener('click', function () {
    barData = getRandomData(initialDateStr, barCount);
    update();
});

function lineData() {
    return barData.map(d => { return { x: d.t, y: d.c } });
}

    </script>
</body>

</html>
