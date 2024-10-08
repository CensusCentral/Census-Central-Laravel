<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUDHAO</title>
    <link rel="stylesheet" href="css/report.css">
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
            <div class="item"><a href="systemCudhao.html"><i class="fas fa-desktop"></i>Dashboard</a></div>
            <div class="item"><a href="#"><i class="fas fa-th"></i>Census Forms</a></div>
            <div class="item">
            <a class="sub-btn"><i class="fas fa-table"></i>Barangay<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="{{url('barangay')}}" class="sub-item">Barangay 01</a>
                <a href="#" class="sub-item">Barangay 02</a>
                <a href="#" class="sub-item">Barangay 03</a>
            </div>
        </div>
        <div class="item"><a href="{{url('reports')}}"><i class="fas fa-chart-bar"></i>Reports</a></div>
        <div class="item"><a href="{{url('penalties')}}"><i class="fas fa-exclamation-triangle"></i>Penalties</a></div>
        <div class="item"><a href="{{url('analysis')}}"><i class="fas fa-clipboard"></i>Analysis</a></div>
        <div class="item"><a href="{{url('accounts')}}"><i class="fas fa-address-book"></i>Accounts</a></div>
        </div>
    </div>

    <div class="main-content">
        <div class="content-header">
            <h1>Reports</h1>
            <div class="buttons">
                <button id="overall-btn" class="btn active" onclick="highlightButton('overall')">Overall</button>
                <div class="dropdown">
                    <button id="barangay-btn" class="btn" onclick="highlightButton('barangay')">Barangay</button>
                    <div class="dropdown-content">
                        <a href="#" onclick="selectBarangay('Baclaran')">Baclaran</a>
                        <a href="#" onclick="selectBarangay('Banay-Banay')">Banay-Banay</a>
                        <a href="#" onclick="selectBarangay('Banlic')">Banlic</a>
                        <a href="#" onclick="selectBarangay('Bigaa')">Bigaa</a>
                        <a href="#" onclick="selectBarangay('Butong')">Butong</a>
                        <a href="#" onclick="selectBarangay('Casile')">Casile</a>
                        <a href="#" onclick="selectBarangay('Diezmo')">Diezmo</a>
                        <a href="#" onclick="selectBarangay('Gulod')">Gulod</a>
                        <a href="#" onclick="selectBarangay('Mamatid')">Mamatid</a>
                        <a href="#" onclick="selectBarangay('Marinig')">Marinig</a>
                        <a href="#" onclick="selectBarangay('Niugan')">Niugan</a>
                        <a href="#" onclick="selectBarangay('Pittland')">Pittland</a>
                        <a href="#" onclick="selectBarangay('Pulo')">Pulo</a>
                        <a href="#" onclick="selectBarangay('Sala')">Sala</a>
                        <a href="#" onclick="selectBarangay('San Isidro')">San Isidro</a>
                        <a href="#" onclick="selectBarangay('Barangay I Poblacion')">Barangay I Poblacion</a>
                        <a href="#" onclick="selectBarangay('Barangay II Poblacion')">Barangay II Poblacion</a>
                        <a href="#" onclick="selectBarangay('Barangay III Poblacion')">Barangay III Poblacion</a>


                        
                    </div>
                </div>
            </div>
        </div>
        <div class="charts">
            <div class="chart-container">
                <h2>Population</h2>
                <canvas id="populationChart"></canvas>
            </div>
            <div class="chart-container">
                <h2>4P's Beneficiaries</h2>
                <canvas id="beneficiariesChart"></canvas>
            </div>
            <div class="chart-container">
                <h2>Persons with Disabilities</h2>
                <canvas id="pwdChart"></canvas>
            </div>
            <div class="chart-container">
                <h2>Senior Citizens</h2>
                <canvas id="seniorChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/report.js"></script>
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