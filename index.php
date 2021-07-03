<?php if (isset($_GET['identificator']) && $_GET['identificator'] === 'code'): ?>
<?php include_once ('header.php'); ?>

<div id="main-container" class="container-fluid bg-light">
    <div class="row">
        <div class="col-lg  m-1  rounded shadow">
            <div class="m-1 text-center ">
                Najczęściej
                <input type="number" id="mostNumber" min="1" max="10" value="5">
                odwiedzanych stron.
                <ol class="m-1" id="most_list">
                    <li><a href="#">Strona 1</a> / 100</li>
                    <li><a href="#">Strona 2</a> / 90</li>
                    <li><a href="#">Strona 3</a> / 80</li>
                    <li><a href="#">Strona 4</a> / 70</li>
                    <li><a href="#">Strona 5</a> / 60</li>
                </ol>
            </div>
        </div>
        <div class="col-lg  m-1  rounded text-center shadow">
            <h3>Unikalna liczba gości</h3>
            <ul class="list-unstyled">
                <li>Dzisiaj: 1</li>
                <li>Ostatni tydzień: 20</li>
                <li>Ostatni miesiąc: 100</li>
                <li>Od początku: 1000</li>
            </ul>
            Unikalna liczba gości z zakresu:<br>
            od: <input type="date" ><br>
             do: <input type="date" ><br>
            <button class="btn btn-primary m-1">Sprawdź</button>
            <div id="unical_count">0</div>
        </div>
        <div class="col-lg  m-1  rounded shadow text-center">
            <div>
                <h5>Najczęściej otwierany plik:</h5>
                <p> oświadczenie śmieciowe</p>
            </div>
            <div>
                <h5>Najczęściej otwierany news:</h5>
                <p>Jarmark świąteczny</p>
            </div>
            <div>
                <h5>Najczęściej otwierana kategoria newsów:</h5>
                <p>Aktualności</p>
            </div>
        </div>
    </div>
    <div class="row mt-4 rounded shadow">
        <div class="col  text-center ">
            <h3>Wykres przedstawiający liczbę odwiedzających według ostatnich 30 dni.</h3>
            <canvas id="myChart" width="500" height="200"></canvas>
        </div>

    </div>
</div>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['1.06', '2.06', '3.06', '4.06', '5.06', '6.06', '7.06', '8.06', '9.06', '10.06'],
                datasets: [{
                    label: 'Liczba odwiedzających.',
                    data: [12, 19, 3, 5, 100, 3, 300, 3, 3, 3],
                    backgroundColor: 'rgba(0, 0,0, 1.0)',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

<?php include_once ('footer.php'); ?>

<?php else: ?>
<?php
        echo 'You can\'t view this site!!!  '
    ?>
<?php endif ?>
