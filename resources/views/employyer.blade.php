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
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('/public/assets//css/normalize.css') }}">
    <link href="{{ asset('assets/css/fontawsome/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body class="">

    <div class="bmd-layout-container bmd-drawer-f-l avam-container animated ">
        <main class="bmd-layout-content">
            <div class="container-fluid">
                <div class="main_wrapper">


                    <!-- form -->

                    <div class="row " dir="rtl">
                        <div class="col-md-5 card shade mw-center mh-center">
                            <img src="{{ asset('/assets/img//aseer.jpg') }}" alt="..." class="mw-center "
                                height="130" width="300">

                            <br>
                            <br>
                            <br>
                            <hr class="hr-dashed m-0">
                            <br> <br> <br>
                            <h2 for="exampleInputEmail1">بيانات الموظفين</h2>
                            <h2 for="exampleInputEmail1"> الرجاء تعبئه البيانات</h2>
                            <form class="" dir="rtl">
                                <div class="form-group m-0">

                                    <input type="text" class="form-control" placeholder="الاسم رباعي">

                                </div>
                                <div class="form-group m-0">

                                    <input type="text" class="form-control" placeholder="الهويه الوطنيه ">

                                </div>
                                <div class="form-group m-0">

                                    <input type="text" class="form-control" placeholder=" رقم الجوال ">

                                </div>
                                <div class="form-group m-0">

                                    

                                    <select class="form-control">
                                        <option value="volvo">المرتبه</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>

                                </div>
                                <div class="form-group m-0">

                                    

                                    <select class="form-control">
                                        <option value="volvo">المؤهل</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>

                                </div>
                                <div class="form-group m-0">
                                    <label for="exampleInputPassword1" style="color:black" dir="rtl">تاريخ التسجيل</label>
                                    <input type="date" class="form-control">

                                </div>
                                <div class="form-group m-0">

                                    

                                    <select class="form-control">
                                        <option value="volvo">مقر العمل</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>

                                </div>
                                <div class="form-group m-0">

                                    

                                    <select class="form-control">
                                        <option value="volvo"> المحافظه</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>

                                </div>
                                <div class="form-group m-0">

                                    

                                    <select class="form-control">
                                        <option value="volvo"> المركز</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>

                                </div>
                                <div class="form-group m-0">

                                    <input type="text" class="form-control" placeholder="  إسم العمل المكلف به ">

                                </div>
                                <div class="form-group m-0">

                                    

                                    <select class="form-control">
                                        <option value="volvo"> سنوات الخبره</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>

                                </div>
                                <div class="form-group m-0">

                                    

                                    <select class="form-control">
                                        <option value="volvo"> اشهر الخبره</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>

                                </div>
                                
                                
                                <button type="submit" class="btn shade f-success btn-block">حفظ</button>
                            </form>
                        </div>

                    </div>
                    <!--  -->


                </div>

            </div>
        </main>
    </div>

    </div>





    <script src="{{ asset('assets/js/vendor/modernizr.js') }}"></script>
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
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
