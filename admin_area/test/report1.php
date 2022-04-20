<?php
    $con = new mysqli('localhost','root','','nuochoa') or die ('Kết nối thất bại');  
    mysqli_query($con,'SET NAME UTF8');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Dashboard</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Thu nhập hàng tháng</h6>
                                    <div class="dropdown no-arrow">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
  <script>
 Chart.defaults.global.defaultFontColor = '#858796';
function number_format(number, decimals, dec_point, thousands_sep) {
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}


var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
 
  type: 'line',
  data: {
    labels: ["T1", "T2", "T3", "T4", "T5", "T6", "T7", "T8", "T9", "T10", "T11", "T12"],
    datasets: [{
      label: "Doanh thu",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [
      <?php 
$get_products1 = "SELECT IFNULL (SUM(tongtien),0) as tong1
FROM donhang
WHERE MONTH(ngaytaodon)=1";
        
$run_products1 = mysqli_query($con,$get_products1);

$row_sum1 = mysqli_fetch_array($run_products1);
$sum1 = $row_sum1['tong1'];
echo $sum1;
?>, 
<?php 
$get_products = "SELECT IFNULL (SUM(tongtien),0) as tong
FROM donhang
WHERE MONTH(ngaytaodon)=2";
        
$run_products = mysqli_query($con,$get_products);

$row_sum = mysqli_fetch_array($run_products);
$sum = $row_sum['tong'];
echo $sum;
?>, 
<?php 
$get_products = "SELECT IFNULL (SUM(tongtien),0) as tong1
FROM donhang
WHERE MONTH(ngaytaodon)=3";
        
$run_products = mysqli_query($con,$get_products);

$row_sum = mysqli_fetch_array($run_products);
$sum = $row_sum['tong1'];
echo $sum;
?>, 
<?php 
$get_products = "SELECT IFNULL (SUM(tongtien),0) as tong1
FROM donhang
WHERE MONTH(ngaytaodon)=4";
        
$run_products = mysqli_query($con,$get_products);

$row_sum = mysqli_fetch_array($run_products);
$sum = $row_sum['tong1'];
echo $sum;
?>, 
<?php 
$get_products = "SELECT IFNULL (SUM(tongtien),0) as tong1
FROM donhang
WHERE MONTH(ngaytaodon)=5";
        
$run_products = mysqli_query($con,$get_products);

$row_sum = mysqli_fetch_array($run_products);
$sum = $row_sum['tong1'];
echo $sum;
?>, 
<?php 
$get_products = "SELECT IFNULL (SUM(tongtien),0) as tong1
FROM donhang
WHERE MONTH(ngaytaodon)=6";
        
$run_products = mysqli_query($con,$get_products);

$row_sum = mysqli_fetch_array($run_products);
$sum = $row_sum['tong1'];
echo $sum;
?>, 
<?php 
$get_products = "SELECT IFNULL (SUM(tongtien),0) as tong1
FROM donhang
WHERE MONTH(ngaytaodon)=7";
        
$run_products = mysqli_query($con,$get_products);

$row_sum = mysqli_fetch_array($run_products);
$sum = $row_sum['tong1'];
echo $sum;
?>, 
<?php 
$get_products = "SELECT IFNULL (SUM(tongtien),0) as tong1
FROM donhang
WHERE MONTH(ngaytaodon)=8";
        
$run_products = mysqli_query($con,$get_products);

$row_sum = mysqli_fetch_array($run_products);
$sum = $row_sum['tong1'];
echo $sum;
?>, 
<?php 
$get_products = "SELECT IFNULL (SUM(tongtien),0) as tong1
FROM donhang
WHERE MONTH(ngaytaodon)=9";
        
$run_products = mysqli_query($con,$get_products);

$row_sum = mysqli_fetch_array($run_products);
$sum = $row_sum['tong1'];
echo $sum;
?>, 
<?php 
$get_products = "SELECT IFNULL (SUM(tongtien),0) as tong1
FROM donhang
WHERE MONTH(ngaytaodon)=10";
        
$run_products = mysqli_query($con,$get_products);

$row_sum = mysqli_fetch_array($run_products);
$sum = $row_sum['tong1'];
echo $sum;
?>, 
<?php 
$get_products = "SELECT IFNULL (SUM(tongtien),0) as tong1
FROM donhang
WHERE MONTH(ngaytaodon)=11";
        
$run_products = mysqli_query($con,$get_products);

$row_sum = mysqli_fetch_array($run_products);
$sum = $row_sum['tong1'];
echo $sum;
?>, 
<?php 
$get_products = "SELECT IFNULL (SUM(tongtien),0) as tong1
FROM donhang
WHERE MONTH(ngaytaodon)=12";
        
$run_products = mysqli_query($con,$get_products);

$row_sum = mysqli_fetch_array($run_products);
$sum = $row_sum['tong1'];
echo $sum;
?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          
          callback: function(value, index, values) {
            return  number_format(value) + ' VNĐ';
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': '+ number_format(tooltipItem.yLabel) +' VNĐ';
        }
      }
    }
  }
});
</script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>