<div class="pg" style="margin: 1em 1em;">
    <h6>
        <a href="index.php" style="text-decoration: none; color: aliceblue;">Trang chủ</a> /
        <a href="index.php?act=ds-dm" style="text-decoration: none; color: aliceblue;">Danh mục</a> /
        <a href="index.php" style="text-decoration: none; color: brown;">Thêm danh mục</a> /
    </h6>

    <br>
    <h2>Thêm danh mục</h2>
    
</div>

<form class="was-validated" action="index.php?act=add-dm" style="width: 55em; margin: 3em 3em;;" method="POST">
  <div class="mb-4">
    <label for="validationTextarea" class="form-label">Mã loại vật tư</label>
    <textarea class="form-control is-valid" id="validationTextarea" placeholder="Mời nhập mã loại" name="mavt"></textarea>

  </div>
  <div class="mb-4">
    <label for="validationTextarea" class="form-label">Nhập tên Vật tư</label>
    <textarea class="form-control is-valid" id="validationTextarea" placeholder="Mời nhập tên danh mục" name="tenloai"></textarea>
  </div>
 
  <!-- <input type="text" disabled class="form-control is-valid" id="validationTextarea" value="<?=$sp['iddm']?>" disibled></input> -->
 <div class="mb-4">
 <label for="validationTextarea" class="form-label">Chọn đơn vị tính</label>
   <select class="form-select" name="dvt">
   
   <option value="Vien">Viên</option>
   <option value="Bao">Bao</option>
   <option value="Khối">Khối</option>
    
    </select>
  </div>

  <div class="mb-4">
    <label for="validationTextarea" class="form-label">Nhập đơn giá</label>
    <input type="number" class="form-control is-valid" id="validationTextarea" placeholder="Mời nhập tên danh mục" name="dongia"></input>
  </div>
  <div class="mb-4">
    <label for="validationTextarea" class="form-label">Số lượng tồn</label>
    <input type="number" class="form-control is-valid" id="validationTextarea" placeholder="Mời nhập tên danh mục" name="soluong"></input>
  </div>
 


  <div class="mb-3">
    <input class="btn btn-primary" type="submit" id="" value="Thêm mới" name="themmoi"></input>
    <input class="btn btn-primary" type="reset" id="" value="Nhập lại"></input>
    <a href="index.php?act=ds-dm" class="btn btn-primary">Danh sách</a>
  </div>
</form>