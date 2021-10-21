<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Thêm</title>
</head>
<style>
    form{
        padding:25px;
        border: 2px solid red;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="process-them.php" method="POST">
                    <h1>Thêm bệnh nhân</h1>
                    <div class="form-group">
                        <label for="exampleInput">Tên bệnh nhân </label>
                        <input name="ten" type="text" class="form-control" id="exampleInputName" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Họ đệm</label>
                        <input name="hodem" type="text" class="form-control" id="exampleInputName" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Ngày sinh</label>
                        <input name="ngaysinh" type="text" class="form-control" id="exampleInputName" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInput"> Giới tính</label>
                        <input name="gioitinh" type="text" class="form-control" id="exampleInputName" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Số điện thoại</label>
                        <input name="sdt" type="text" class="form-control" id="exampleInputName" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Email</label>
                        <input name="email" type="text" class="form-control" id="exampleInputName" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Chiều cao</label>
                        <input name="chieucao" type="text" class="form-control" id="exampleInputName" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Cân nặng</label>
                        <input name="cannang" type="text" class="form-control" id="exampleInputName" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Nhóm máu</label>
                        <input name="nhommau" type="text" class="form-control" id="exampleInputName" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Ngày lập sổ</label>
                        <input name="ngaylapso" type="text" class="form-control" id="exampleInputName" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Ngày cập nhật</label>
                        <input name="ngaycapnhat" type="text" class="form-control" id="exampleInputName" >
                    </div>
                    <button name="btnthem" type="submit" class="btn btn-primary" style="margin-top:15px">Thêm</button>
                </form>
            </div>
            
        </div>
        <div class="col-md-3"></div>
    </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>