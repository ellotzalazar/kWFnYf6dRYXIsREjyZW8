<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <div class="container">

    <div class="row">   
                        <div class="span3">
                        <?php include('sidebar.php'); ?>
                        </div>
                        <div class="span9">
                            <img src="../img/dr.png" class="img-rounded">
                                <?php include('navbar_dasboard.php') ?>
                            <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Packages</strong>
                            </div>
                            
                            <?php include('add_package.php'); ?>

                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                            
                                <thead>
                                    <tr>
                                        <th>Service</th>
                                        <th>Package name</th>
                                        <th>Description</th>
                                        <th>Price</th>                          
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                               

                                  <?php $user_query=mysql_query("select * from package")or die(mysql_error());
                                    while($row=mysql_fetch_array($user_query)){
                                    $id=$row['package_id']; ?>
                                    <tr class="del<?php echo $id ?>">
                                    
                                     <td ><?php echo $row['service_id']; ?></td> 

                                    <td><?php echo $row['package_name']; ?></td> 
                                    <td><?php echo $row['description']; ?></td> 
                                    <td><?php echo $row['price']; ?></td> 
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    <?php include('edit_package.php'); ?>
                                    </td>
                                    <?php include('toolttip_edit_delete.php'); ?>
                                    </tr>
                                    <?php } ?>
                           
                                </tbody>
                            </table>
                            
<script type="text/javascript">
        $(document).ready( function() {
            $('.btn-danger').click( function() {
                var id = $(this).attr("id");
                if(confirm("Are you sure you want to delete this Data?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_package.php",
                        data: ({id: id}),
                        cache: false,
                        success: function(html){
                        $(".del"+id).fadeOut('slow'); 
                        } 
                    }); 
                }else{
                    return false;}
            });             
        });
    </script>

                        </div>
    </div>
<?php include('footer.php') ?>