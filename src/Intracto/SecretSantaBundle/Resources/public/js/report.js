google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {

    new google.visualization.ColumnChart(document.getElementById('parties_per_year'))
        .draw(
            new google.visualization.DataTable($.ajax({
                url: '/app_dev.php/report/parties_per_year',
                dataType: "json",
                async: false
            }).responseText),
            {
                title: 'Total parties created',
                legend: { position: 'none' }
            });


    new google.visualization.PieChart(document.getElementById('ip_type_visitors'))
        .draw(
            new google.visualization.DataTable($.ajax({
                url: '/app_dev.php/report/ip_type_visitors',
                dataType: "json",
                async: false
            }).responseText),
            {
                title: 'Ip type of visitors',
                legend: { position: 'none' }
            });
}
