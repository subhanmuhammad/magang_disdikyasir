<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Dengan Menggunakan Chart.js - www.malasngoding.com</title>
	<script type="text/javascript" src="<?=url('/')?>/public/assets/chartjs/Chart.js"></script>
</head>
<body>
	<style type="text/css">
		body{
			font-family: roboto;
		}
	</style>
 
	<h2>Tutorial Membuat Grafik Dengan Chart.js - www.malasngoding.com</h2>
 
 
 
	<div style="width: 500px;height: 500px">
		<canvas id="myChart"></canvas>
	</div>
 
 
	<script>
		const config = {
  type: 'pie',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        labels: {
          generateLabels: function(chart) {
            // Get the default label list
            const original = Chart.overrides.pie.plugins.legend.labels.generateLabels;
            const labelsOriginal = original.call(this, chart);

            // Build an array of colors used in the datasets of the chart
            let datasetColors = chart.data.datasets.map(function(e) {
              return e.backgroundColor;
            });
            datasetColors = datasetColors.flat();

            // Modify the color and hide state of each label
            labelsOriginal.forEach(label => {
              // There are twice as many labels as there are datasets. This converts the label index into the corresponding dataset index
              label.datasetIndex = (label.index - label.index % 2) / 2;

              // The hidden state must match the dataset's hidden state
              label.hidden = !chart.isDatasetVisible(label.datasetIndex);

              // Change the color to match the dataset
              label.fillStyle = datasetColors[label.index];
            });

            return labelsOriginal;
          }
        },
        onClick: function(mouseEvent, legendItem, legend) {
          // toggle the visibility of the dataset from what it currently is
          legend.chart.getDatasetMeta(
            legendItem.datasetIndex
          ).hidden = legend.chart.isDatasetVisible(legendItem.datasetIndex);
          legend.chart.update();
        }
      },
      tooltip: {
        callbacks: {
          label: function(context) {
            const labelIndex = (context.datasetIndex * 2) + context.dataIndex;
            return context.chart.data.labels[labelIndex] + ': ' + context.formattedValue;
          }
        }
      }
    }
  },
};
	</script>
</body>
</html>