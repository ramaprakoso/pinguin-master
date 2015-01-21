<h3>Manage Forum</h3>
<hr> 
<div class="row">
     <div class="col-lg-10">
<table class="table table-striped">
    <tr>
        <thead>
            <th>Forum</th>
            <th>Category</th> 
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($get as $value) :?>
            <tr>
                <td><?php echo $value->forum_name; ?></td>
                <td><?php echo $value->category_desc; ?></td>
                <td><a href="">Edit</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </tr>
</table>
<div class="col-lg-10"></div>
<a href="add_forum" type="button" class="btn btn-primary">Create Forum</a>
</div>
</div> 