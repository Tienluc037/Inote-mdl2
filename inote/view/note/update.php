<form method="post" >
    <input type="text" name="title" placeholder="Nhập tiêu đề" value="<?php echo $note->title ?>">
    <input type="text" name="content" placeholder="Nhập nội dung" value="<?php echo $note->content ?>">
    <button>Update</button>
</form>