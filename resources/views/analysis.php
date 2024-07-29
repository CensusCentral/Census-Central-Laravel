<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUDHAO</title>
    <link rel="stylesheet" href="css/analysis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
  <header class="header">
    <div class="header__container">
        <img src="images/cudhaoLogo.png" alt="" class="header__img">
        <div class="header__toggle">
            <i class="fas fa-bars" id="header-toggle"></i>
        </div>
    </div>
</header>

<div class="side-bar" id="sideBar">
    <!-- header for logo and close button -->
    <header>
        <img src="images/cudhaoLogo.png" alt="">
        <h1>CUDHAO</h1>
    </header>
    <!-- division for menus in sidebar -->
    <div class="menu">
        <div class="item"><a href="#"><i class="fas fa-desktop"></i>Dashboard</a></div>
        <div class="item"><a href="#"><i class="fas fa-th"></i>Census Forms</a></div>
        <div class="item">
            <a class="sub-btn"><i class="fas fa-table"></i>Barangay<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="{{url('barangay')}}" class="sub-item">Barangay 01</a>
                <a href="#" class="sub-item">Barangay 02</a>
                <a href="#" class="sub-item">Barangay 03</a>
            </div>
        </div>
        <div class="item"><a href="#"><i class="fas fa-chart-bar"></i>Reports</a></div>
        <div class="item"><a href="#"><i class="fas fa-exclamation-triangle"></i>Penalties</a></div>
        <div class="item"><a href="#"><i class="fas fa-clipboard"></i>Analysis</a></div>
        <div class="item"><a href="#"><i class="fas fa-address-book"></i>Accounts</a></div>
    </div>
</div>

<!-- main content -->
<main>
    <section>
        <div class="main">
            <div class="cards">
            <button class="btn">Overall</button>
                <div class="dropdown">
                        <button class="dropbtn">Barangay</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                </div>
            </div>
            <div class="charts">
                <div class="chart">
                    <h2>ISF Growth per Year</h2>
                    <canvas id="myChart"></canvas>
                </div>
                <div class="chart">
                    <h2>Total ISF</h2>
                    <canvas id="myChart2" ></canvas>
                </div>
                <div class="chart">
                    <h2>Total ISF</h2>
                    <canvas id="myChart" ></canvas>
                </div>
                <div class="chart">
                    <h2>Total ISF</h2>
                    <canvas id="myChart" ></canvas>
                </div>
            </div>
        </div>
    </section>
</main>

    

    <!-- javascript for charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="js/analysis.js"></script>
    <!-- javascript for animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
         $(document).ready(function(){
      
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });
   })
    </script>
</body>
</html>