<?php
// Plik z nawigacja strony...
?>

    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
            <img src="assets/img/logo.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="index.php?a=dashboard"><i class="fas fa-home"></i> Dashboard</a>
                </li>
		<li>
                    <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-cloud-sun"></i> Weather</a>
                    <ul class="collapse list-unstyled" id="elements">
                        <li>
                            <a href="index.php?a=statistics"> Statistics</a>
                        </li>
                        <li>
                            <a href="index.php?a=charts">Charts</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#uielementsmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user"></i> User Data</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu">
                        <li>
                            <a href="index.php?a=userdata" > Pi information</a>
                        </li>
                    </ul>
               	 </li>
		
            </ul>
	         </nav>
        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-light default-light-menu"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto"></ul>
                                  
                    
                </div>
            </nav>