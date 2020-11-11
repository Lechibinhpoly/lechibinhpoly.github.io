<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Đăng Kí</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('public/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('public/backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tạo một tài khoản!</h1>
              </div>
              <form class="user"  action="{{ route('register') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control form-control-user" id="exampleFirstName" placeholder="Nhập tên tài khoản...">
                </div>
                <div class="form-group">
                  <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập email...">
                </div>
                <div class="form-group">
                  <input type="phone" name="phone" value="{{ old('phone') }}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập Số Điện Thoại...">
                </div>
                <div class="form-group">
                  <input type="text" name="diachi" value="{{ old('diachi') }}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập địa chỉ...">
                </div>
                <div class="form-group">
                  <input id="password" type="password" class="form-control form-control-user" name="password" required autocomplete="new-password" placeholder="Nhập mật Khẩu...">
                        @error('password')        
                        <span class="invalid-feedback" role="alert">            
                            <strong>{{ $message }}</strong>            
                        </span>            
                        @enderror
                </div>
                <div class="form-group">
                  <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Nhập lại mật Khẩu...">
                </div>
                <button class="btn btn-primary btn-user btn-block" type="submit"> Đăng Kí</button>
              </form>
            </div>
          </div>
          <div class="col-lg-6">
                  <img src="{{('public/backend/img/banner-admin1.jpg')}}" width="90%" height="100%">
              </div>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/backend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/backend/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
