<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Khách Hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style -->
    <link rel="stylesheet" href="./style.css">
    <!-- font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--  boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./script.js"></script>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top p-4 d-flex justify-content-between">
    <div class="nav_title col-md-6 col-sm-12">
      <a class="navbar-brand" href="#">QUẢN LÝ KHÁCH HÀNG</a>
    </div>
    
    <div class="nav_menu col-md-6 ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="#home">TRANG CHỦ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#customer">KHÁCH HÀNG</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#comment">NHẬN XÉT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">LIÊN HỆ</a>
          </li>
          
        </ul>
        
      </div>
    </div>
    
  
  </nav>
  <!-- trang chủ -->
  <section 
    id="home"
    >
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12 ">
          <div class="">
            <h2 class="slogan">Quản lý khách hàng</h2>
            <p class="">
              Trang web quản lý khách hàng cho phép người dùng tìm khách hàng phù hợp và quả lý dữ liệu của khách hàng,tìm dữ liệu khách hàng phù hợp chỉ trong một vài nhấp chuột 
            </p>
            <div class="left-to-right play-on-scroll delay-4">
              <button type="button" class="btn btn-success">Xem ngay</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end trang chủ -->

  <!-- khách hàng -->
  <section id="customer">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
          <h2 class="title_customer ">Top 3 Khách hàng trong tháng 11</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="customer_top">
            <img src="./img/tải xuống (2).jpg" alt="Denim Jeans" style="width:100%">
            <p class="customer_top-name">Hương Ly</p>
            <p>Đã mua 200 sản phẩm trong tháng</p>
            <button type="button " class="btn btn-outline-success btn_des">Xem chi tiết</button>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="customer_top">
            <img src="./img/tải xuống (1).jpg" alt="Denim Jeans" style="width:100%">
            <p class="customer_top-name">Khánh Huyền</p>
            <p>Đã mua 700 sản phẩm trong tháng</p>
            <button type="button " class="btn btn-outline-success btn_des">Xem chi tiết</button>
          </div>
          
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="customer_top">
            <img src="./img/tải xuống (4).jpg" alt="Denim Jeans" style="width:100%">
            <p class="customer_top-name">Thùy Linh</p>
            <p>Đã mua 500 sản phẩm trong tháng</p>
            <button type="button " class="btn btn-outline-success btn_des">Xem chi tiết</button>
          </div>
          
        </div>
        
      </div>
    </div>
    <div class="container customer_birth">
      <div class="row">
        <div class="col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
          <h2 class="title_customer ">Các khách hàng sinh nhật trong tháng</h2>
        </div>
      </div>
      <!-- Slideshow container -->
      <div class="row d-flex justify-content-center align-items-center slider">
        <div class="col-md-8 col-sm-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              
              <div class="carousel-item active">
                <img class="d-block w-100" src="./img/6498.jpg_wh860.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block first-slider">
                  <h5>Phạm Thành Long</h5>
                  <p>Chuyên gia tài chính</p>
                  <h5>15/11</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./img/tải xuống (8).jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block ">
                  <h5>Avengers </h5>
                  <p>Các Anh hùng</p>
                  <h5>17/11</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./img/tải xuống (7).jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block ">
                  <h5>My Be </h5>
                  <p>Khách hàng tiềm năng</p>
                  <h5>18/11</h5>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  <!-- end khách hàng -->
  <!--  Nhận xét-->
  <section id="comment">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="review-wrap zoom play-on-scroll delay-2">
            <div class="review-content">
              <p>
                Chất lượng sản phẩm rất tốt , dùng ổn trong tầm giá , mong shop ra nhiều sản phẩm tốt như vậy , sẽ ủng hộ shop trong những lần mua hàng tiếp theo
              </p>
              <div
                class="review-img bg-img"
                
              >
            <img src="./img/close-up-portrait-cute-young-woman-holding-textbook-colored-pencils-posing-studio-isolated-pink_176532-9674.jpg" alt=""></div>
            </div>
            <div class="review-info">
              <h3>Trần Khánh Ly</h3>
              <div class="rating">
                <i class="fas fa-star rating_icon"></i>
                <i class="fas fa-star rating_icon"></i>
                <i class="fas fa-star rating_icon"></i>
                <i class="fas fa-star rating_icon"></i>
                <i class="fas fa-star rating_icon"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="review-wrap zoom play-on-scroll delay-2">
            <div class="review-content">
              <p>
                Chất lượng sản phẩm rất tốt , dùng ổn trong tầm giá , mong shop ra nhiều sản phẩm tốt như vậy , sẽ ủng hộ shop trong những lần mua hàng tiếp theo
              </p>
              <div
                class="review-img bg-img"
                
              >
            <img src="./img/portrait-happy-young-man_171337-21716.jpg" alt=""></div>
            </div>
            <div class="review-info">
              <h3>Phạm Quốc Trường</h3>
              <div class="rating">
                <i class="fas fa-star rating_icon"></i>
                <i class="fas fa-star rating_icon"></i>
                <i class="fas fa-star rating_icon"></i>
                <i class="fas fa-star rating_icon"></i>
                <i class="fas fa-star rating_icon"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="review-wrap zoom play-on-scroll delay-2">
            <div class="review-content">
              <p>
                Chất lượng sản phẩm rất tốt , dùng ổn trong tầm giá , mong shop ra nhiều sản phẩm tốt như vậy , sẽ ủng hộ shop trong những lần mua hàng tiếp theo
              </p>
              <div
                class="review-img bg-img"
                
              >
            <img src="./img/6498.jpg_wh860.jpg" alt=""></div>
            </div>
            <div class="review-info">
              <h3>Phạm Văn Mạnh</h3>
              <div class="rating">
                <i class="fas fa-star rating_icon"></i>
                <i class="fas fa-star rating_icon"></i>
                <i class="fas fa-star rating_icon"></i>
                <i class="fas fa-star rating_icon"></i>
                <i class="fas fa-star rating_icon"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- liên hệ -->
  <section id="contact" class="contact">
    <div class="container contact_container" 
    
    >
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <h3>QUẢN LÝ KHÁCH HÀNG</h3>
            <br />
            <p>
              Trang web quản lý khách hàng cho phép người dùng tìm khách hàng phù hợp và quả lý dữ liệu của khách hàng,tìm dữ liệu khách hàng phù hợp chỉ trong một vài nhấp chuột
            </p>
            <br />
            <p>Email: huutienn46@gmail.com</p>
            <p>Phone: 0941195845</p>
            <p>Webside:qlkh.com</p>
        </div>
        <div class="col-md-2 col-sm-12">
          <h3>XEM THÊM</h3>
            <br />
            <p>
              <a href="#" class="footer_about" >Trang chủ</a>
            </p>

            <p>
              <a href="#customer" class="footer_about">Khách hàng </a>
            </p>

            <p>
              <a href="#comment" class="footer_about">Nhận xét</a>
            </p>

            <p>
              <a href="#contact" class="footer_about">Contact</a>
            </p>
        </div>
        <div class="col-md-4 subcrise">
          <h3>Đăng ký và theo dõi </h3>
            <br />
            <p>
              Đăng ký và theo dõi trang web của chúng tôi đê nhận những thông tin mới nhất . Xin cảm ơn
            </p>
            <br />
            <form>
              <div class="form-group">
                <label>Email của bạn bạn:</label>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              
              
              <button type="submit" class="btn btn-primary">Đăng ký</button>
            </form>
        </div>
      </div>
      <footer class="container-fluid text-center icon_home">
        <label for="">Go to home</label>
        <a href="#" title="To Top">
          <i class="fas fa-chevron-up"></i>
        </a>
        
      </footer>
    </div>
  </section>
  </section>
</body>

</html>