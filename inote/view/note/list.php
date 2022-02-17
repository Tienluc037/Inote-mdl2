<a href="index.php?page=note-create">New Note</a>

<h4>Ghi Chú</h4>
<table border="3">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
<!--        <th>Type</th>-->
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($notes)): ?>
        <?php foreach ($notes as $key=>$note): ?>
            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $note->title ?></td>
                <td><?php echo $note->content ?></td>
<!--                <td>--><?php //echo $note->name ?><!--</td>-->
                <td><a href="index.php?page=note-detail&id=<?php echo $note->id?>">Detail</a></td>
                <td><a onclick="return confirm('Bạn có muốn xóa?')" href="index.php?page=note-delete&id=<?php echo $note->id?>">Delete</a></td>
                <td><a href="index.php?page=note-update&id=<?php echo $note->id?>">Update</a></td>

            </tr>
        <?php endforeach;?>
    <?php else: ?>
        <tr>
            <td colspan="4"> không có dữ liệu</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>