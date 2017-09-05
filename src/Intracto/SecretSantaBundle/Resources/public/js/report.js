google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {

    $.ajax({
        url: '/app_dev.php/report/parties_per_year',
        dataType: "json",
        async: true,
        success: function (json) {
            new google.visualization.ColumnChart(document.getElementById('parties_per_year')).draw(
                new google.visualization.DataTable(json), {
                    title: 'Total parties created',
                    legend: { position: 'none' }
                });
        }
    });

    $.ajax({
        url: '/app_dev.php/report/ip_type_visitors',
        dataType: "json",
        async: true,
        success: function (json) {
            new google.visualization.PieChart(document.getElementById('ip_type_visitors')).draw(
                new google.visualization.DataTable(json), {
                    title: 'Ip type of visitors',
                    legend: { position: 'none' }
                });
        }
    });
}
