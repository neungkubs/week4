<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- เพิ่ม bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- เพิ่มfornt -->
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&display=swap" rel="stylesheet">
    <!-- เพิ่ม sweetaleart  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">
    
    <style>
        body{
        font-family: "Charm", serif;
        font-weight: 400;
        font-style: normal;
        margin-left: 600px;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่างที่ ภาษา PHP Bootstrap </title>
</head>
</body>
<h1>การเขียนโปรแกรมด้วย PHP</h1>
664485019 นายธนากร ตรีศิริ<br>
    หมู่เรียน66/96 <br>

    <div class="alert alert-danger">
  <strong>ทำเสร็จแล้ว</strong> You should <a href="#" class="alert-link">ใช้ bootstrap ได้แล้ว</a>.
</div>
<button type="button" class="btn btn-success">บันทึกข้อมูล</button>
<button type="button" class="btn btn-danger">ยกเลิกข้อมูล</button>
<br><br>
<div class="card bg-light text-dark">
    <div class="card-body">ยินดีต้อนรับน้องชาย หนมน้าๆ</div>
    <br><br>
    <div class="card" style="width:400px">
  <img class="card-img-top" src="สวย.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">นายธนากร ตรีศิริ</h4>
    <p class="card-text">คติประจำใจ:ไปให้สุดแล้วหยุดที่โรงบาล</p>
    <a href="https://www.youtube.com/watch?v=KhP8jEXA6MQ" class="btn btn-primary">See Profile</a>
  </div>
</div>
<!-- เพิ่มปุ่มกด -->
<button type="button" class="btn btn-outline-success"id='alert'>กดเย้ยยยยย;)</button>
<!-- เพิ่มปุ่มกด 2 -->
<button type="button" class="btn btn-outline-success"id='alert2'>กดเพื่อสมัครMember</button>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- ปุ่มsweetalert -->
<body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        // โค้ดกดแล้วเด้งข้อความ
       $(function() {
            $('#alert').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
        // โค้ดกดแล้วเด้งข้อความ 2
        $('#alert2').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
        });
    
    </script>

</body>

</html>