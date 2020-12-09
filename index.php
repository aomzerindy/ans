<?php 
    require 'connectdb.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Form</title>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-1.10.2.js"
      integrity="sha256-it5nQKHTz+34HijZJQkpNBIHsjpV8b6QzMJs9tmOBSo="
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- Font Awesome Icons -->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>รายงานผลการตรวจสอบความขัดแย้งทางผลประโยชน์</h1>

    <div id="input" class="container">
      <form action="insert_aans.php" method="post" id="form-input">
        <div class="row">
          <div class="col-3 column-name">
            <p>เลขที่&nbsp;ออนซ.</p>
          </div>
          <div class="col-3 column-box">
            <input
              type="text"
              id="aans_id"
              name="aans_id"
              class="form-control"
              maxlength="10"
              placeholder="กรอกตัวเลข"
              value=""
              require
            />
          </div>
        </div>
        <div class="row">
          <div class="col-3 column-name">
            <p>ตรวจสอบข้อมูล<br />ในระบบ SAP</p>
          </div>
          <div class="col-3 column-box">
            <input type="text" id="sap_date" name="sap_date" placeholder="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>" class="datepicker form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-3 column-name">
            <p>เลขที่</p>
          </div>
          <!-- เดี๋ยวจะวน loop ดึงจาก DB -->
          <div class="col-3 column-box">
            <?php 
                $cate = "SELECT * FROM category";
                $category = mysqli_query($dbcon, $cate);
              ?>
            <select class="form-control" id="cate_id" name="cate_id" required>
              <option value="" disabled selected>--กรุณาเลือก--</option>
              <?php 
                foreach($category as $row){?>
                  <option value="<?php echo $row["cate_id"];?>"><?php echo $row["cate_name"]; ?></option>
                <?php } ?>
              
            </select>
            <!-- <input type="text" class="form-control" disabled size="10"> -->
          </div>
        </div>
        <div class="row">
          <div class="col-3"></div>
          <div class="col-3 column-box">
            <input
              type="text"
              id="cate_no"
              name="cate_no"
              class="form-control"
              maxlength="10"
              placeholder="กรอกตัวเลข"
              value=""
            />
          </div>
          <div class="col-3 column-box">
            <input type="text" id="cate_date" name="cate_date" placeholder="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>" class="datepicker form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-3 column-name">
            <p>การจัดหาโดยวิธี</p>
          </div>
          <!-- เดี๋ยวจะ loop ดึงค่ามาจาก DB -->
          <div class="col-3 column-box">
          <?php 
                $dt = "SELECT * FROM detail";
                $detail = mysqli_query($dbcon, $dt);
              ?>
            <select class="form-control" id="detail_id" name="Detail_id" required>
              <option value="" disabled selected>--กรุณาเลือก--</option>
              <?php 
                foreach($detail as $row){?>
                  <option value="<?php echo $row["detail_id"];?>"><?php echo $row["detail_name"]; ?></option>
                <?php } ?>
              
            </select>
            <!-- <input type="text" class="form-control" disabled size="10"> -->
          </div>
        </div>
        <div class="row">
          <div class="col-3 column-name">
            <p>ชื่องาน</p>
          </div>
          <div class="col-8 column-box">
            <textarea
              rows="5"
              id="title_work"
              name="title"
              class="form-control"
              value=""
            ></textarea>
          </div>
        </div>
        <div id="TextBoxesGroup-Refer">
          <div class="row">
            <div class="col-3 column-name">
              <p>อ้างถึงคำสั่ง</p>
            </div>
            <div class="col-2 column-box">
              <input
                type="text"
                id="refer_id"
                name="refer_id"
                class="form-control"
                maxlength="10"
                placeholder="กรอกเลขคำสั่ง"
                value=""
              />
            </div>
            <div class="col-2 column-box">
              <select class="form-control" id="refer_year" name="refer_year">
                <option value="2560">2560</option>
                <option value="2561">2561</option>
                <option value="2562">2562</option>
                <option value="2563">2563</option>
                <option value="2564">2564</option>
                <option value="2565">2565</option>
                <option value="2566">2566</option>
                <option value="2567">2567</option>
                <option value="2568">2568</option>
                <option value="2569">2569</option>
                <option value="2570">2570</option>
            
              </select>
            </div>
            <div class="col-3 column-box">
              <input type="text" id="refer_date" name="refer_date" placeholder="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>" class="datepicker form-control">
            </div>
            <div class="col-2 btn" >
              <button type="button" class="bg-box border-0" value="Add Button" id="addButton-refer">
                <i class="fas fa-2x fa-plus-circle btn btn-add"></i>
              </button>
              <button type="button" class="bg-box border-0" value="Remove Button" id="removeButton-refer">
                <i class="fas fa-2x fa-times-circle btn btn-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3 column-name">
            <p>รายนามคณะกรรมการ<br /><u>จัดจ้าง/จัดหา</u></p>
          </div>
          <div class="col-2 column-box">
            <input
              type="text"
              id="staff_pro_id"
              name="staff_pro_id"
              class="form-control"
              maxlength="8"
              placeholder="รหัสพนักงาน"
              value=""
            />
          </div>
          
          <!-- ดึงรายชื่อมาจาก DB ตามรหัสพนักงานที่กรอก -->
          <div class="col-4 column-box">
            <input
              type="text"
              class="form-control"
              id="staff_pro_name"
              name="staff_pro_name"
              placeholder="ชื่อ-นามสกุล"
              value=""
              readonly
            />
          </div>
          <div class="col-2 column-name">
            <p>ประธาน</p>
          </div>
        </div>
        <div class="row">
          <div class="col-3 column-name">
            <br />
          </div>
          <div class="col-2 column-box">
            <input
              type="text"
              id="staff_pro_id2"
              name="staff_pro_id2"
              class="form-control"
              maxlength="8"
              placeholder="รหัสพนักงาน"
              value=""
            />
          </div>

          <!-- ดึงรายชื่อมาจาก DB ตามรหัสพนักงานที่กรอก -->
          <div class="col-4 column-box">
            <input
              type="text"
              class="form-control"
              id="staff_pro_name2"
              name="staff_pro_name2"
              placeholder="ชื่อ-นามสกุล"
              value=""
              readonly
            />
          </div>
          <div class="col-2 column-name">
            <p>กรรมการ</p>
          </div>
        </div>
        <div class="row">
          <div class="col-3 column-name"></div>
          <div class="col-2 column-box">
            <input
              type="text"
              id="staff_pro_id3"
              name="staff_pro_id3"
              class="form-control"
              maxlength="8"
              placeholder="รหัสพนักงาน"
              value=""
            />
          </div>

          <!-- ดึงรายชื่อมาจาก DB ตามรหัสพนักงานที่กรอก -->
          <div class="col-4 column-box">
            <input
              type="text"
              class="form-control"
              id="staff_pro_name3"
              name="staff_pro_name3"
              placeholder="ชื่อ-นามสกุล"
              value=""
              readonly
            />
          </div>
          <div class="col-2 column-name">
            <p>กรรมการ</p>
          </div>
        </div>
        <div class="row">
          <div class="col-3 column-name">
            <p>รายนามคณะกรรมการ<br /><u>ตรวจรับ</u></p>
          </div>

          <div class="col-2 column-box">
            <input
              type="text"
              id="staff_prov_id"
              name="staff_prov_id"
              class="form-control"
              maxlength="8"
              placeholder="รหัสพนักงาน"
              value=""
            />
          </div>

          <!-- ดึงรายชื่อมาจาก DB ตามรหัสพนักงานที่กรอก -->
          <div class="col-4 column-box">
            <input
              type="text"
              class="form-control"
              id="staff_prov_name"
              name="staff_prov_name"
              placeholder="ชื่อ-นามสกุล"
              value=""
              readonly
            />
          </div>
          <div class="col-2 column-name">
            <p>ประธาน</p>
          </div>
        </div>
        <div class="row">
          <div class="col-3 column-name"></div>

          <div class="col-2 column-box">
            <input
              type="text"
              id="staff_prov_id2"
              name="staff_prov_id2"
              class="form-control"
              maxlength="8"
              placeholder="รหัสพนักงาน"
              value=""
            />
          </div>

          <!-- ดึงรายชื่อมาจาก DB ตามรหัสพนักงานที่กรอก -->
          <div class="col-4 column-box">
            <input
              type="text"
              class="form-control"
              id="staff_prov_name2"
              name="staff_prov_name2"
              placeholder="ชื่อ-นามสกุล"
              value=""
              readonly
            />
          </div>
          <div class="col-2 column-name">
            <p>กรรมการ</p>
          </div>
        </div>
        <div class="row">
          <div class="col-3 column-name"></div>

          <div class="col-2 column-box">
            <input
              type="text"
              id="staff_prov_id3"
              name="staff_prov_id3"
              class="form-control"
              maxlength="8"
              placeholder="รหัสพนักงาน"
              value=""
            />
          </div>

          <!-- ดึงรายชื่อมาจาก DB ตามรหัสพนักงานที่กรอก -->
          <div class="col-4 column-box">
            <input
              type="text"
              class="form-control"
              id="staff_prov_name3"
              name="staff_prov_name3"
              placeholder="ชื่อ-นามสกุล"
              value=""
              readonly
            />
          </div>
          <div class="col-2 column-name">
            <p>กรรมการ</p>
          </div>
        </div>
        <div id="TextBoxesGroup-TOT">
          <div class="row">
            <div class="col-3 column-name">
              <p>
                อ้างถึง บันทึกเลขที่<br />
                ทีโอที
              </p>
            </div>
            <div class="col-2 column-box">
              <input
                type="text"
                id="tot_id"
                name="tot_id"
                class="form-control"
                maxlength="8"
                placeholder="กรอกตัวเลข"
                value=""
              />
            </div>
            <div class="col-3 column-box">
              <input type="text" id="tot_date" name="tot_date" placeholder="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>" class="datepicker form-control">
            </div>
            <div class="col-2 btn" >
              <button type="button" class="bg-box border-0" value="Add Button" id="addButton-tot">
                <i class="fas fa-2x fa-plus-circle btn btn-add"></i>
              </button>
              <button type="button" class="bg-box border-0" value="Remove Button" id="removeButton-tot">
                <i class="fas fa-2x fa-times-circle btn btn-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <div id="TextBoxesGroup-ANS">
          <div class="row">
            <div class="col-3 column-name">
              <p>
                อ้างถึง บันทึกเลขที่<br />
                ทีโอที อนซ.
              </p>
            </div>
            <div class="col-2 column-box" >
              <input
                type="text"
                id="ans_id"
                name="ans_id"
                class="form-control"
                maxlength="10"
                placeholder="กรอกตัวเลข"
                value=""
              />
            </div>
            <div class="col-3 column-box">
              <input type="text" id="ans_date" name="ans_date" placeholder="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>" class="datepicker form-control">
            </div>
            <div class="col-2 btn" >
              <button type="button" class="bg-box border-0" value="Add Button" id="addButton-ans">
                <i class="fas fa-2x fa-plus-circle btn btn-add"></i>
              </button>
              <button type="button" class="bg-box border-0" value="Remove Button" id="removeButton-ans">
                <i class="fas fa-2x fa-times-circle btn btn-remove"></i>
              </button>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-3 column-name">
            <p><u>หมายเหตุ</u></p>
          </div>
          <div class="col-8 column-box">
            <textarea
              id="description"
              rows="3"
              name="description_work"
              class="form-control"
              value=""
            ></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col btn">
            <input type="reset" class="btn btn-warning" value="reset" />

            <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit" />
          </div>
        </div>
      </form>
    </div>

    <!-- Custom scripts for this template -->
    <script src="./libs/js/jquery-1.12.4.js"></script>
    <script src="./libs/js/add_removeButton-ANS.js"></script>
    <script src="./libs/js/add_removeButton-TOT.js"></script>
    <script src="./libs/js/add_removeButton-Refer.js"></script>
    <script src="./libs/js/jquery-ui.js"></script>
    
    
    <script src="datepicker.js"></script>

    <script>
      $(document).ready(function(){
        $(function(){
          $("#staff_pro_id").change(function(){
              $.ajax({
                  url: "ajax_auto.php",
                  type: "POST",
                  datatype: "json",
                  data: 'staff_id='+$("#staff_pro_id").val(),
                  success: function(result){
                    var obj = jQuery.parseJSON(result);
                    console.log(obj);
                    // if(result == ''){
                    //   $('input[type=text]').val('');
                    // }else{
                    //   $.each(result, function(key, inval){
                    //     $("#staff_pro_id").val(inval["staff_id"]);
                    //     $("#staff_pro_name").val(inval["fullname"]);
                    //   });
                    // }
                  }
              });
            });
        });
      });
  </script>
    
    
    
    
    
    
  </body>
</html>
