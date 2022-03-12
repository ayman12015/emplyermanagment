<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>نظام تسجيل الموظفين</title>
	<meta name="description" content="nozha admin panel fully support rtl with complete dark mode css to use. ">
	<meta name=”robots” content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('aassets//img//aseer.jpg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ 'assets//img//aseer.jpg' }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets//img//aseer.jpg') }}">
	<link rel="manifest" href="{{asset('assets/img/favicon/site.webmanifest')}}">
	<link rel="mask-icon" href="{{asset('assets/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">
	<!-- Place favicon.ico in the root directory -->
	<link rel="stylesheet" href="{{asset('/public/assets//css/normalize.css')}}">
	<link href="{{asset('assets/css/fontawsome/all.min.css')}}" rel="stylesheet">
	<link rel="stylesheet"
		href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
		integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>

<body class="">

    <div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
        <header class="bmd-layout-header ">
            <div class="navbar navbar-light bg-faded animate__animated animate__fadeInDown">
                <button class="navbar-toggler animate__animated animate__wobble animate__delay-2s" type="button"
                    data-toggle="drawer" data-target="#dw-s1">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav navbar-nav ">
               
                   
                    <li class="nav-item"> <i
                        class="far fa-user fa-sm c-main mr-2"></i></li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle m-0" type="button" id="dropdownMenu4"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} 
                            </button>
                            <div aria-labelledby="dropdownMenu4"
                                class="dropdown-menu dropdown-menu-right dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenu2">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                <i
								class="fas fa-sign-out-alt c-main fa-sm mr-2"></i>تسجيل خروج
                               </a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                                {{-- <button class="dropdown-item" type="button"><i
                                        class="fas fa-sign-out-alt c-main fa-sm mr-2"></i>Sign Out</button> --}}
                            </div>
                        </div>
                    </li>




                </ul>
            </div>
        </header>
        <div id="dw-s1" class="bmd-layout-drawer bg-faded">

            <div class="container-fluid side-bar-container">
                <header class="pb-0">
                    <a class="navbar-brand">
                        <object class="side-logo" data="./svg/logo-8.svg" type="image/svg+xml">
                        </object>
                    </a>
                </header>
                <p class="side-comment">نظام إداره الموظفين</p>
                <li class="side a-collapse short ">
                    <a href="" class="side-item "><i class="fas fa-user  mr-1"></i>اضافه مستخدم جديد</a>
                </li>
				<li class="side a-collapse short ">
                    <a href="" class="side-item "><i class="fas fa-user  mr-1"></i>اضافه  مؤهل دراسي جديد</a>
                </li>
				<li class="side a-collapse short ">
                    <a href="" class="side-item "><i class="fas fa-user  mr-1"></i>اضافه  مرتبة جديده</a>
                </li>
				<li class="side a-collapse short ">
                    <a href="" class="side-item "><i class="fas fa-user  mr-1"></i>اضافه مسمي وظيفي جديد</a>
                </li>
               
               


            </div>

        </div>
        <main class="bmd-layout-content">
			<div class="container-fluid ">

				<!-- content -->
				<!-- breadcrumb -->

				<div class="row  m-1 pb-4 mb-3 ">
					<div class="col-xs-12  col-sm-12  col-md-12  col-lg-12 p-2">
						<div class="page-header breadcrumb-header ">
							<div class="row align-items-end ">
								<div class="col-lg-8">
									<div class="page-header-title text-left-rtl">
										<div class="d-inline">
											<h3 class="lite-text ">لوحة التحكم</h3>
											<span class="lite-text text-gray">نظام إداره الموظفين</span>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<ol class="breadcrumb float-sm-right">
										<li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
										<li class="breadcrumb-item active">الصفحة الرئيسيه</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row m-1 mb-2">
					<div class="col-xl-3 col-md-6 col-sm-6 p-2">
						<div class="box-card mini animate__animated animate__flipInY   "><i
								class="fab far fa-chart-bar b-first" aria-hidden="true"></i>
							<span class="c-first">العدد الكلي لطلبات الموظفين </span>
							<span>44</span>
						
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 p-2">
						<div class="box-card mini animate__animated animate__flipInY    "><i
								class="fab far fa-user b-second" aria-hidden="true"></i>
							<span class="c-second">عدد مستخدمين النظام</span>
							<span>27</span>
							
						</div>
					</div>
					
					<div class="col-xl-3 col-md-6 col-sm-6 p-2">
						<div class="box-card mini animate__animated animate__flipInY    "><i
								class="fab far fa-clock b-second" aria-hidden="true"></i>
							<span class="c-second">  الطلبات في انتظار الموافقة</span>
							<span>27</span>
							
						</div>
					</div>
                    <div class="col-xl-3 col-md-6 col-sm-6 p-2">
						<div class="box-card mini animate__animated animate__flipInY    "><i
								class="fab far fa-clock b-second" aria-hidden="true"></i>
							<span class="c-second">  الطلبات الموافق عليها</span>
							<span>27</span>
							
						</div>
					</div>
				</div>

				


				
				
				<div class="row m-1">
					
					<div class="col-xs-2 col-sm-3 col-md-8 col-lg-8 p-2">
						<div class="card shade h-100">
							<div class="card-body">
								<h5 class="card-title"></h5>

								<hr>
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">رقم</th>
											<th scope="col">اسم الموظف</th>
											<th scope="col">رقم الهوية</th>
											<th scope="col">رقم الجوال</th>
											<th>المرتبه</th>
											<th>المؤهل</th>
											<th>تاريخ التخرج</th>
											<th>مقر العمل</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>محمد الشميري</td>
											<td> 50987674093</td>
											<td >509405399</td>
											<td>فئه ب</td>
											<td>بيكلاريوس</td>
											<td> 2-9-2013</td>
											<td> اماره منطقه عسير</td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>محمد الشميري</td>
											<td> 50987674093</td>
											<td >509405399</td>
											<td>فئه ب</td>
											<td>بيكلاريوس</td>
											<td> 2-9-2013</td>
											<td> اماره منطقه عسير</td>
										</tr>
									
									</tbody>
								</table>
							</div>

						</div>
					</div>

				</div>


				





			</div>
		</main>
    </div>

    </div>



	<script src="{{asset('assets/js/vendor/modernizr.js')}}"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')
	</script>
	<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
		integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
		integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<script>
		$(document).ready(function () {
			$('body').bootstrapMaterialDesign();
		});
	</script>
	<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>

