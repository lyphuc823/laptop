<div class="row">
<form method="post" action="index.php?act=register" style="text-align:center;">

		<br><h3 class="title">ĐĂNG KÝ TÀI KHOẢN</h3>
        <div class="form-group">
        Username <br><input style="width:250px"class="input" type="text" name="ten_dangnhap" value="" required placeholder="Tên đăng nhập" ><br>
        </div>
        <div class="form-group">
        Password <br><input style="width:250px"class="input" type="password" name="mat_khau" value="" required placeholder="Mật khẩu" minlength="6"/><br>
        </div>
        <div class="form-group">
        Email <br><input style="width:250px"class="input" type="email" name="email" value="" required placeholder="Email"title="Vui lòng nhập email google VD: abc@gmail.com" pattern="^[a-z0-9](\.?[a-z0-9]){0,}@g(oogle)?mail\.com$" /><br>
        </div>
        <div class="form-group">
        Phone <br><input style="width:250px"class="input" type="text" name="phone" value="" pattern="[0]{1}[0-9]{9}" id="phone" required placeholder="Số điện thoại" /><br>
        </div>
		<input class="btn btn-danger"type="submit" name="dangky" value="Đăng Ký"/>
		<?php require 'xulydangky.php';?>
		</form>
</div><br><br><br><br><br><br>