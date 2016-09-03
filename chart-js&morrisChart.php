 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="webapp/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Morris charts -->
        <link rel="stylesheet" href="webapp/plugins/morris/morris.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="webapp/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="webapp/dist/css/skins/_all-skins.min.css">
<div class="content-wrapper">
<section class="content">			
                <div class="row">
                    <div class="col-md-6">
                        <!-- BAR CHART -->
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Bar Chart</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body chart-responsive">
                                <div class="chart" id="bar-chart" style="height: 300px;"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->						
                    </div>
                    <div class="col-md-6">
                        <!-- BAR CHART -->
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Bar Chart</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="chart">
                                    <canvas id="barChart" style="height:230px"></canvas>
                                </div>
                            </div><!-- /.box-body -->

                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section>
    
     <script>
                $(function () {
                    "use strict";
                    //BAR CHART
                    var bar = new Morris.Bar({
                        element: 'bar-chart',
                        resize: true,
                        data: [
                            {y: '2006', a: 100, b: 90},
                            {y: '2007', a: 75, b: 65},
                            {y: '2008', a: 50, b: 40},
                            {y: '2009', a: 75, b: 65},
                            {y: '2010', a: 50, b: 40},
                            {y: '2011', a: 75, b: 65},
                            {y: '2012', a: 100, b: 90}
                        ],
                        barColors: ['#00a65a', '#f56954'],
                        xkey: 'y',
                        ykeys: ['a', 'b'],
                        labels: ['CPU', 'DISK'],
                        hideHover: 'auto'
                    });
                });
                $(function () {
                    //- AREA CHART -
                    //--------------

                    // Get context with jQuery - using jQuery's .get() method.
                    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
                    // This will get the first returned node in the jQuery collection.
                    var areaChart = new Chart(areaChartCanvas);
                    var areaChartData = {
                        labels: ["January", "February", "March", "April", "May", "June", "July"],
                        datasets: [
                            {
                                label: "Electronics",
                                fillColor: "rgba(210, 214, 222, 1)",
                                strokeColor: "rgba(210, 214, 222, 1)",
                                pointColor: "rgba(210, 214, 222, 1)",
                                pointStrokeColor: "#c1c7d1",
                                pointHighlightFill: "#fff",
                                pointHighlightStroke: "rgba(220,220,220,1)",
                                data: [65, 59, 80, 81, 56, 55, 40]
                            },
                            {
                                label: "Digital Goods",
                                fillColor: "rgba(60,141,188,0.9)",
                                strokeColor: "rgba(60,141,188,0.8)",
                                pointColor: "#3b8bba",
                                pointStrokeColor: "rgba(60,141,188,1)",
                                pointHighlightFill: "#fff",
                                pointHighlightStroke: "rgba(60,141,188,1)",
                                data: [28, 48, 40, 19, 86, 27, 90]
                            }
                        ]
                    };
                    var areaChartOptions = {
                        //Boolean - If we should show the scale at all
                        showScale: true,
                        //Boolean - Whether grid lines are shown across the chart
                        scaleShowGridLines: false,
                        //String - Colour of the grid lines
                        scaleGridLineColor: "rgba(0,0,0,.05)",
                        //Number - Width of the grid lines
                        scaleGridLineWidth: 1,
                        //Boolean - Whether to show horizontal lines (except X axis)
                        scaleShowHorizontalLines: true,
                        //Boolean - Whether to show vertical lines (except Y axis)
                        scaleShowVerticalLines: true,
                        //Boolean - Whether the line is curved between points
                        bezierCurve: true,
                        //Number - Tension of the bezier curve between points
                        bezierCurveTension: 0.3,
                        //Boolean - Whether to show a dot for each point
                        pointDot: false,
                        //Number - Radius of each point dot in pixels
                        pointDotRadius: 4,
                        //Number - Pixel width of point dot stroke
                        pointDotStrokeWidth: 1,
                        //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                        pointHitDetectionRadius: 20,
                        //Boolean - Whether to show a stroke for datasets
                        datasetStroke: true,
                        //Number - Pixel width of dataset stroke
                        datasetStrokeWidth: 2,
                        //Boolean - Whether to fill the dataset with a color
                        datasetFill: true,
                        //String - A legend template
                        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
                        //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                        maintainAspectRatio: true,
                        //Boolean - whether to make the chart responsive to window resizing
                        responsive: true
                    };

                    //-------------
                    //- BAR CHART -
                    //-------------
                    var barChartCanvas = $("#barChart").get(0).getContext("2d");
                    var barChart = new Chart(barChartCanvas);
                    var barChartData = areaChartData;
                    barChartData.datasets[1].fillColor = "#00a65a";
                    barChartData.datasets[1].strokeColor = "#00a65a";
                    barChartData.datasets[1].pointColor = "#00a65a";
                    var barChartOptions = {
                        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                        scaleBeginAtZero: true,
                        //Boolean - Whether grid lines are shown across the chart
                        scaleShowGridLines: true,
                        //String - Colour of the grid lines
                        scaleGridLineColor: "rgba(0,0,0,.05)",
                        //Number - Width of the grid lines
                        scaleGridLineWidth: 1,
                        //Boolean - Whether to show horizontal lines (except X axis)
                        scaleShowHorizontalLines: true,
                        //Boolean - Whether to show vertical lines (except Y axis)
                        scaleShowVerticalLines: true,
                        //Boolean - If there is a stroke on each bar
                        barShowStroke: true,
                        //Number - Pixel width of the bar stroke
                        barStrokeWidth: 2,
                        //Number - Spacing between each of the X value sets
                        barValueSpacing: 5,
                        //Number - Spacing between data sets within X values
                        barDatasetSpacing: 1,
                        //String - A legend template
                        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
                        //Boolean - whether to make the chart responsive
                        responsive: true,
                        maintainAspectRatio: true
                    };

                    barChartOptions.datasetFill = false;
                    barChart.Bar(barChartData, barChartOptions);

                });
            </script>
</div>
 <!-- jQuery 2.2.3 -->
            <script src="webapp/plugins/jQuery/jquery-2.2.3.min.js"></script>
            <!-- Bootstrap 3.3.6 -->
            <script src="webapp/bootstrap/js/bootstrap.min.js"></script>
            <!-- ChartJS 1.0.1 -->
            <script src="webapp/plugins/chartjs/Chart.min.js"></script>
            <!-- Morris.js charts -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
            <script src="webapp/plugins/morris/morris.min.js"></script>
            <!-- FastClick -->
            <script src="webapp/plugins/fastclick/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src="webapp/dist/js/app.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="webapp/dist/js/demo.js"></script>
            <!-- page script -->
//<?php
//include './footerMenu.php';
//?>