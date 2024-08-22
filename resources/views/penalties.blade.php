<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUDHAO</title>
    <link rel="stylesheet" href="css/barangay.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- for style and design link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- script for popping modal -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
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
            <div class="item"><a href="systemCudhao.php"><i class="fas fa-desktop"></i>Dashboard</a></div>
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

<!-- main content -->
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Penalties for <b>Barangay</b></h2>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                            <th>Barangay</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Offense</th>
                            <th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                            <td>Thomas Hardy</td>
                            <td>Settled</td>
                            <td>01/01/1980</td>
                            <td>1st Offense</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href=" " class="view" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="View">&#xe417;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
						    <td>Thomas Hardy</td>
                            <td>Settled</td>
                            <td>01/01/1980</td>
                            <td>1st Offense</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href=" " class="view" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="View">&#xe417;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
                            <td>Thomas Hardy</td>
                            <td>Settled</td>
                            <td>01/01/1980</td>
                            <td>1st Offense</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href=" " class="view" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="View">&#xe417;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
						    <td>Thomas Hardy</td>
                            <td>Settled</td>
                            <td>01/01/1980</td>
                            <td>1st Offense</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href=" " class="view" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="View">&#xe417;</i></a>
						</td>
					</tr>					
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="options[]" value="1">
								<label for="checkbox5"></label>
							</span>
						</td>
						    <td>Thomas Hardy</td>
                            <td>Settled</td>
                            <td>01/01/1980</td>
                            <td>1st Offense</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href=" " class="view" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="View">&#xe417;</i></a>
						</td>
					</tr> 
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Barangay</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Status</label>
						<select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
					</div>
					<div class="form-group">
						<label>Offense</label>
						<select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
					</div>				
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>


    <script src="js/barangay.js"></script>
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