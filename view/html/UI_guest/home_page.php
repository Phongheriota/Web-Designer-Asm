<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starter</title>
    <!-- ======= Styles ====== -->
      <!--  icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
     <!--  style -->
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/style_navbar_homepage.css">
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/home_page_reponsive.css">
    <!-- ======= Scripts ====== -->
    <script>
        //get content using ajax
        function getMainContent(link) {
            $.ajax({
                // The link we are accessing.
                url: link,
                    
                // The type of request.
                type: "get",
                    
                // The type of data that is getting returned.
                dataType: "html",

                success: function( strData ){
                    document.getElementById("mainContent").innerHTML = strData;
                }
            });
        }
    </script>

</head>
<body onload='getMainContent("index.php?controller=guest&action=getDiscount")'>
    <div class="container-fluid">
        <div class="row align-items-center py-3 pd_mobile" style="background-color: #f2f2f2;">
            <div class="col-lg-3 d-none d-lg-block px-5">
                <a href="index.php?controller=guest&action=home_page">
                    <img src="/view/images/logo.jpg" style="width: 70%;" alt="logo">
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-tablet-7 col-mobile-5">
                      <form class="form-inline" style="margin-right: 1%;">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for products" style="border-radius: 0;">
                          <div class="input-group-append">
                            <button class="btn border btn-outline-secondary" type="button">
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-tablet-3 col-mobile-5 navbar_ic d-flex justify-content-end">
                      <a href="#" class="btn border btn-outline-secondary" style="margin-right: 1%; border-radius: 0;">
                        <i class="fas fa-heart"></i>
                        <span class="badge">0</span>
                      </a>
                      <a href="" class="btn border btn-outline-secondary" style="margin-right: 1%; border-radius: 0;">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge">0</span>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row border-top px-3">
            <div class="col-lg-3 d-none d-lg-block navbar_left">
                <a class="btn d-flex align-items-center justify-content-between" 
                    data-toggle="collapse" href="#navbar-vertical" 
                    style="height: 65px; padding: 0 30px;">
                    <h6 class="m-0">Danh Mục Món Ăn</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar" id="navbar-vertical" style="margin-top: -9px;">
                    <div class="navbar-nav w-100">
                        <a onclick="getMainContent('index.php?controller=guest&action=menu&type=starter')" class="nav-item nav-link border">Khai Vị</a>
                        <a href="#" class="nav-item nav-link border">Món Chính</a>
                        <a href="#" class="nav-item nav-link border">Tráng Miệng</a>
                        <a href="#" class="nav-item nav-link border">Đồ Ngọt</a>
                        <a href="#" class="nav-item nav-link border">Các Món Ăn Khác</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light p-2" style="height: 62px;">
                    <a href="index.php?controller=guest&action=home_page" class="d-block d-lg-none">
                        <img src="/view/images/logo.jpg" style="width: 100px;" alt="logo">
                    </a>
                    <button type="button" 
                            ID="navbarButton"
                            class="navbar-toggler" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#navbarCollapse"
                            style="border-radius: 0;">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" >
                        <div class="navbar-nav">
                            <a href="index.php?controller=guest&action=home_page" class="nav-item nav-link">Trang Chủ</a>
                            <a href="#" class="nav-item nav-link active">Thực Đơn</a>
                            <a href="#" class="nav-item nav-link">Đặt Bàn</a>
                            <a href="#" class="nav-item nav-link">Tin Tức</a>
                            <a href="index.php?controller=manager&action=login" class="nav-item nav-link">Quản Trị Viên</a>
                        </div>
                        
                        <div class="navbar-nav ml-auto nav_main">
                            <div>
                                <a href="index.php?controller=guest&action=login" class="nav-item nav-link">
                                    <i class="bi bi-person text-dark"></i>
                                    Đăng Nhập
                                </a>
                            </div>
                            <div>
                                <a href="index.php?controller=guest&action=signup" class="nav-item nav-link">
                                    <i class="bi bi-person-plus text-dark"></i>
                                    Đăng Ký
                                </a>
                            </div>
                        </div>
                    </div> 
                </nav>
                <div id="mainContent">
                    <!-- main content, display using AJAX -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ======= Scripts ====== -->
    <script src="/view/script/user_navbar.js"></script>
    <!-- <script src="view/script/home_page.js"></script> -->
    <script src="/view/bootstrap/js/bootstrap.min.js"></script>
    <script src="/view/jquery/jquery-3.6.4.js"></script>
</body>
</html>