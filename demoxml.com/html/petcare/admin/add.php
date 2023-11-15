<title>THÊM DỊCH VỤ</title>
<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI DỊCH VỤ</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
              
           <div class="row2 mb10 form_content_container">
           <label> Tên dịch vụ</label> <br>
            <input type="text" name="tendv" placeholder="nhập vào tên dịch vụ">
           </div>
           <div class="row2 mb10">
            <label>Giá sản phẩm </label> <br>
            <input type="text" name="giadv" placeholder="nhập vào của dịch vụ">
           </div>
              <div class="row2 mb10">
                  <label>Hình ảnh </label> <br>
                  <input type="file" name="hinh" >
              </div>
              <div class="row2 mb10">
                  <label>Mô tả </label> <br>
                  <textarea name="mota" cols="30" rows="10"></textarea>
              </div>
           <div class="row mb10 ">
         <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
              <?php
              if(isset($thanhcong)&& ($thanhcong!="")){
                  echo $thanhcong;
              }

              ?>
          </form>
         </div>
        </div>