<a href="index.php?page=type-create">New Type</a>
<table border="3">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($types)): ?>
        <?php foreach ($types as $key=>$type): ?>
            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $type->name ?></td>
                <td><?php echo $type->description ?></td>
                <td><a href="index.php?page=type-detail&id=<?php echo $type->id?>">Detail</a></td>
                <td><a onclick="return confirm('Bạn có muốn xóa?')" href="index.php?page=type-delete&id=<?php echo $type->id?>">Delete</a></td>
                <td><a href="index.php?page=type-update&id=<?php echo $type->id?>">Update</a></td>

            </tr>
        <?php endforeach;?>
    <?php else: ?>
        <tr>
            <td colspan="4"> không có dữ liệu</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>