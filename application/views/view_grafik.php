<html>
<head>
<style>
 #chart{
   z-index:-10;} 
</style>
<body>
 <div id="chart"> 
</div>
<script src="&lt;?php echo base_url();?&gt;asset/highcharts/jquery.min.js" type="text/javascript"></script>
<script src="&lt;?php echo base_url();?&gt;asset/highcharts/highcharts.js" type="text/javascript"></script>
<script src="&lt;?php echo base_url();?&gt;asset/highcharts/modules/exporting.js" type="text/javascript"></script>
<script src="&lt;?php echo base_url();?&gt;asset/highcharts/modules/offline-exporting.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart',
   type: 'line',
  },
  title: {
   text: 'Grafik Statistik pengunjung',
   x: -20
  },
  subtitle: {
   text: 'Count visitor',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total pengunjung'
   }
  },
  series: [{
   name: 'Data dalam Bulan',
   data: <?php echo json_encode($grafik); ?>
  }]
 });
}); 
</script>
</body>
</html>