<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>

<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
<canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
<canvas id="myChart3" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina","Italy", "France", "Spain", "USA", "Argentina","Italy", "France", "Spain", "USA", "Argentina","Italy", "France", "Spain", "USA", "Argentina","Italy", "France", "Spain", "USA", "Argentina","Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 20,55, 49, 44, 24, 15,55, 49, 44, 24, 15,55, 49, 44, 24, 15,55, 49, 44, 24, 15,55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart3", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart2", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
</script>

</body>
</html>
