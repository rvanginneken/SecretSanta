google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Season', 'Parties'],
        ['2011-2012', 10],
        ['2012-2013', 14],
        ['2013-2014', 16],
        ['2014-2015', 22],
        ['2015-2016', 28]
    ]);

    var options = {
        title: 'Parties per season',
        legend: { position: 'none' },
    };

    var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}
