<!DOCTYPE html>
<HTML>
	<HEAD>
		<link rel="shortcut icon" href="img/logo.png" />
		<title> Welcome to STI College Malolos! - Welcome Page</title>
            
            <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet" type="text/css">

			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
			<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
			
            <link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

            @yield('style')
            <style type="text/css">
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
                {
                    margin: 0;
                    color: #fff;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Poppins',sans-serif;
                }

                body{
                    background-color:#01579B;
                    }
                    
                img{
                    width: 100px;			
                }
                
                h1{
                    font-size: 20px;
                }
                
                .sti-edu{
                    padding:10px;
                    color:#fffff;
                    border:none;
                    border-radius:5px;
                    text-align:right;
                    font-size:20px;
                    margin:10px;
                }

                .footer{
                    left: 0;
                    padding: 0%;
                    bottom: 0;
                    height: 7%;
                    width: 100%;
                    background-color: #FFF400;
                    color: black;
                    text-align: center;
                }

                .footer-content{
                    margin-top: -2%;
                }

                header{
                    padding-top: 1%;
                    background-color:#01579B;
                }

                #baba{
                    padding-top: 3%;
                }
			</style>
            

	</HEAD>

		<BODY>
                <header class="header page-header fixed-top"> 
                    <div class="container" id="header">
                        <div class="row">
                            <div class="col col-6">
								<div class="row">
									<div class="col col-3">
										<a href="/home"><img src = "img/logo - 2.png" style="margin-top: -12%"> </a>
									</div>

									<div class="col col-4 entra">
                                        <div class="dropdown" style="margin-top: -4%" >
                                            
                                            <button class="btn btn-primary dropdown-toggle bg-transparent border-0" type="button"
                                                data-toggle="dropdown""> <b>Entrafest 2021 </b>
                                                <span class="caret"></span></button>
                                                
                                                <div class="dropdownsis">
                                                    <ul class="dropdown-menu">
                                                        <li><a href="/entrafest" class="buton1 text-dark"> #Entrafest2021</a></li>
                                                        <li><a href="entrafest#feature" class="buton2 text-dark">Lightning of Torch</a></li>
                                                        <li><a href="entrafest#service" class="buton3 text-dark">Camp Teaser</a></li>
                                                        <li><a href="entrafest#camps" class="buton4 text-dark">Camps</a></li>
                                                        <div class="dropdown-divider" class="buton5 text-dark"></div>
                                                        <li><a class="buton text-dark" href="/egame">E-Games</a></li>
                                                    </ul>
                                                </div>
                                        </div>
									</div>

                                    <div class="col col-3 entra">
										<a href="profile"> <h6> Profile </h6> </a>
									</div>
								</div>
                            </div>

                            <div class="col col-6 a">
                                <div class="d-flex flex-row-reverse">
                                    <div class="p-2">
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <button class="btn btn-primary logout">Logout</button>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                    </div>
                                    <div class = "p-2">
                                        <h1 id="baba">Welcome, <b>{{Auth::user()->name }}!</b></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                </header>

                @yield('content')

                <footer class="footer font-small pt-4">
					<div class="footer-content footer-copyright text-center py-3">
						<span style="color:black" >© Work Immersion: </span>
						<b><a style="color:black" href="https://sti.edu/"> sti.edu</a></b>
					  </div>
				</footer>
                
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<BODY>
</HTML>