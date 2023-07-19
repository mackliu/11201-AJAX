<?php
$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=ajax_student','root','');
$user=$pdo->query("select * from students where id='{$_POST['id']}'")->fetch();
?>
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">編輯學生</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row my-1">
                        <label for="uni_id" class="form-label col-3">學號:</label>
                        <input type="text" class="form-control" style="width:75%" id="uni_id" value="<?=$user['uni_id'];?>"></div>
                    <div class="row my-1">
                        <label for="" class="form-label col-3">班級:</label>
                        <input type="number"  value="<?=$user['classroom'];?>" class="form-control" id="classroom" style="width:75%"></div>
                    <div class="row my-1">
                        <label for="" class="form-label col-3">座號:</label>
                        <input type="number"  value="<?=$user['seat_num'];?>" class="form-control" id="seat_num" style="width:75%"></div>
                    <div class="row my-1">
                        <label for="" class="form-label col-3">姓名:</label>
                        <input type="text"  value="<?=$user['name'];?>" class="form-control" id="name" style="width:75%"></div>
                    <div class="row my-1">
                        <label for="" class="form-label col-3">生日:</label>
                        <input type="date"  value="<?=$user['birthday'];?>" class="form-control" id="birthday" style="width:75%"></div>
                    <div class="row my-1">
                        <label for="" class="form-label col-3">身份證字號:</label>
                        <input type="text" value="<?=$user['national_id'];?>" class="form-control" id="national_id" style="width:75%"></div>
                    <div class="row my-1">
                        <label for="" class="form-label col-3">地址:</label>
                        <input type="text" value="<?=$user['address'];?>" class="form-control" id="address" style="width:75%"></div>
                    <div class="row my-1">
                        <label for="" class="form-label col-3">父母:</label>
                        <input type="text" value="<?=$user['parent'];?>" class="form-control" id="parent" style="width:75%"></div>
                    <div class="row my-1">
                        <label for="" class="form-label col-3">電話:</label>
                        <input type="text" value="<?=$user['telphone'];?>" class="form-control" id="telphone" style="width:75%"></div>
                    <div class="row my-1">
                        <label for="" class="form-label col-3">科別:</label>
                        <input type="text" value="<?=$user['major'];?>" class="form-control" id="major" style="width:75%"></div>
                    <div class="row my-1">
                        <label for="" class="form-label col-3">畢業國中:</label>
                        <input type="text" value="<?=$user['secondary'];?>" class="form-control" id="secondary" style="width:75%"></div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="editStudent()">確認編輯</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>