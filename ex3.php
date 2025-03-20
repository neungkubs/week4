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
        margin-left: 50px;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่างที่ ภาษา PHP Bootstrap </title>
</head>
</body>

้<h1>โปรแกรมข้อมูลของแมว</h1>
    <form class="row g-3">
  <div class="col-md-1">
    <label for="inputEmail4" class="form-label">แมว_ID</label>
    <input type="email" class="form-control" id="inputEmail4">
    <placeholder='665656 main St'>
</div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">ชื่อ</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-4">
    <label for="inputAddress" class="form-label">สายพันธุ์</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-2">
    <label for="inputState" class="form-label">เพศ (Gender)</label>
    <select id="inputState" class="form-select">
      <option selected>ตัวผู้</option>
      <option selected>ตัวเมีย</option>
      <option>...</option>
    </select>
  </div>
  </div>
  <div class="col-md-1">
    <label for="inputCity" class="form-label">วันเกิด</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-1">
    <label for="inputState" class="form-label">สี</label>
    <input type="text" class="form-control" id="inputCity">
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">ลักษณะเด่น</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">สุขภาพ</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">วัคซีน</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-12">
    <label for="inputZip" class="form-label">หมายเหตุ</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
      <button type="submit" class="btn btn-outline-success"id='alert'>บันทึกข้อมูล</button>
<!-- เพิ่มปุ่มกด 2 -->
<button type="reset" class="btn btn-outline-success">รีเซ้ตข้อมูล</button>
<!-- Latest compiled JavaScript -->


    </div>
    </div> 
    <br><br>
    พัฒนาโดย <br>
    664485019 นายธนากร ตรีศิริ<br>
    หมู่เรียน66/96 <br>
    <!-- ปุ่ม sweetaler2 -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        // โค้ดสวิดข้อความที่ 1
        $('#alert').on('click', function(e) {
        e.preventDefault();
      var form = $('.pt_upld_page_frm');
      swal.fire({
        title: "คุณต้องการบันทึกข้อมูลหรือไม่?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "ใช่ทำการบันทึกข้อมูล!",
        closeOnConfirm: false
        }, function(isConfirm) {
        console.log("sdfsf");
        if (isConfirm) form.submit();
            });
    
            // โค้ดสวิดข้อความที่ 2
            $('#alert2').click(function() {
                Swal.fire({
                icon: "error",
                title: "ยกเลิกข้อมูลแล้ว",
                text: "กรุณากรอกข้อมูลใหม่",
                footer: '<a href="#">กรุณากรอกใหม่</a>'
                });
            });
        });
        
    </script>
 <!-- Latest compiled JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <html>