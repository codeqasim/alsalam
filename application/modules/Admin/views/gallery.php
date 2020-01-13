    <script type="text/javascript">
$(function(){
	//delete image
$(".deleteImg").click(function(){
var imgid =  $(this).attr('id');
	if (confirm("Are you sure you want to delete this image?")) {
		$.ajax({
		type: 'ajax',
		method: 'post',
		async: false,
		url: '<?php echo base_url() ?>admin/settings/deleteimg',
		data:{imgid:imgid},
		dataType: 'json',
		success: function(response){
		alert("Item Deleted successfully.");
		},
		error: function(){
		alert('Error deleting');
		}
		});
	}else{
		alert(id + " not deleted");
		}
		location.reload();
});

	// select all image
$('#select_all').on('click', function(e) {
	if($(this).is(':checked',true))
	{
		$(".sub_chk").prop('checked', true);
	} else {
		$(".sub_chk").prop('checked',false);
	}
});

	// update status, = 1
$('.approve').on('click', function() {
	var imgid =  $(this).attr('id');
		$.ajax({
		type: 'ajax',
		method: 'post',
		async: false,
		url: '<?php echo base_url() ?>admin/settings/approve',
		data:{imgid:imgid},
		dataType: 'json',
		success: function(response){
		},
		error: function(){
		alert('Error updating');
		}
		});
		location.reload();
});
	// update status, = 0
$('.reject').on('click', function() {
		var imgid =  $(this).attr('id');
		$.ajax({
		type: 'ajax',
		method: 'post',
		async: false,
		url: '<?php echo base_url() ?>admin/settings/reject',
		data:{imgid:imgid},
		dataType: 'json',
		success: function(response){
		},
		error: function(){
		alert('Error updating');
		}
		});
		location.reload();
});
	// thumbnel status, = 1
$('.thumbapprove').on('click', function() {
		var imgid =  $(this).attr('id');
		$.ajax({
		type: 'ajax',
		method: 'post',
		async: false,
		url: '<?php echo base_url() ?>admin/settings/thumbapprove',
		data:{imgid:imgid},
		dataType: 'json',
		success: function(response){
		},
		error: function(){
		alert('Error updating');
		}
		});
		location.reload();
});


$('.order').bind('blur', function() {
	var id =  $(this).attr('id');
	var arr= id.split('_');
    var ids = arr[1];
    var imgid = $("#"+id).val();
		$.ajax({
		type: 'ajax',
		method: 'post',
		async: false,
		url: '<?php echo base_url() ?>admin/settings/updateorder',
		data:{imgid:imgid,ids:ids},
		dataType: 'json',
		success: function(response){
		},
		error: function(){
		alert('Error updating');
		}
		});
		// location.reload();
});

// delete Multiple image  
$('.delMultiple').on('click', function(e) {
var allVals = [];
	$(".sub_chk:checked").each(function() {
	allVals.push($(this).attr('data-id'));
});
	if(allVals.length <=0)
	{
	alert("Please select row.");
	}  else {

	var check = confirm("Are you sure you want to delete this record?");
	if(check == true){
	var join_selected_values = allVals.join(",");

	$.ajax({
	url: $(this).data('url'),
	type: 'POST',
	data: 'ids='+join_selected_values,
	success: function (data) {
	console.log(data);
	$(".sub_chk:checked").each(function() {
	$(this).parents("tr").remove();
	});
	alert("Item Deleted successfully.");
	},
	error: function (data) {
	alert(data.responseText);
	}
	});
	$.each(allVals, function( index, value ) {
	$('table tr').filter("[data-row-id='" + value + "']").remove();
	});
	}
	}
	});
});

//Drop zone functions
Dropzone.options.dropzone = {
init: function () {
// Set up any event handlers
	this.on('complete', function () {
		if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
	location.reload();
	}
	});
}
};
    </script>

 <div class="panel panel-default">
  <div class="panel-heading">Gallery Management</div>
<div class="alert alert-success" style="display: none;"></div>
<div class="panel-body">
<div class="collapse" id="UploadPhotos">
	<div class="well well-sm">
		<div class="modal-body">
			<div action="<?php echo site_url('admin/settings/do_upload_img');?>" id="dropzone" class="dropzone"> </div>
		</div>
	</div>
</div>


                    <!-- Button trigger modal -->

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-2">
                                 <a class="btn btn-success" data-toggle="collapse" href="#UploadPhotos" aria-expanded="false" aria-controls="UploadPhotos">
                                  <i class="fa fa-photo"></i> Add Photos
                                 </a>
                                 <div class="clearfix"></div>

                                </th>
                                <th class="col-md-2" style="padding-left:35px" ><input class="pointer all" data-imgname="" type="checkbox" data-toggle="tooltip" data-placement="top"  title="Select All" id="select_all" />
                               	<span data-toggle="tooltip" data-placement="top" title="Delete Selected Images from Table only" class="btn btn-danger btn-xs col-md-9 pull-right delMultiple" data-url="<?php echo base_url() ?>admin/settings/deleteimgarray"><i class="fa fa-trash-o"></i> Delete</span></th>
                                <th class="col-md-2 text-center">Order</th>
                                <th class="col-md-2 text-center">Active</th>
                                <th class="col-md-2 text-center">Thumbnail</th>
                                <th class="col-md-2 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <!-- <input type="hidden" id="itemid" value="<?php echo $itemid;?>" /> -->
                        
                           <?php  foreach($files as $img): ?>
                           <tr  id="tr_<?php echo $img->id;?>">

                                <td>

                               <a href="<?php echo base_url('uploads/gallery/'. $img->image);?>" rel=""> <img src="<?php echo base_url('uploads/gallery/'. $img->image);?>" href="<?php echo $img->image;?>" class="img-responsive colorbox"></a>

                                </td>
                                
                                <td style="padding:35px"><input  class="sub_chk" type="checkbox" data-imgname="<?php echo  $img->image;?>" name="img_ids[]" data-id="<?php echo  $img->id;?>" class="checkboxcls"  /></td>

                                <td style="padding:35px">
                                    <input class="form-control order" type="number" id="order_<?php echo $img->id;?>" onblur="updateOrder($(this).val(),<?php echo $img->id;?>,<?php echo $img->orders_id;?>)" value="<?php echo $img->orders_id;?>" data-url="uploads/gallery/'. $img->image">
                                </td>
                                
                                <td style="padding:35px">
                               		<?php if($img->active == '1'): ?>
                                    <button class="btn btn-success btn-block btn-md btnimg approve" id="<?php echo $img->id;?>"><i class="icon mdi mdi-check"></i></button>
                                   <?php else: ?> 
                                    <button class="btn btn-warning btn-block btn-md btnimg reject"  id="<?php echo $img->id;?>"><i class="icon mdi mdi-close"></i></button>
                                    <?php endif; ?>
                                </td>
                                <td style="padding:35px">
                                  <?php if($img->Thumbnail == '1'): ?> 
                                    <button class="btn btn-primary btn-block btn-md btnthumb" id="<?php echo $img->id;?>"> Yes </button>
                                    <?php else: ?> 
                                    <button class="btn btn-default btn-block btn-md thumbapprove" id="<?php echo $img->id;?>"> No </button>
                                    <?php endif; ?>
                                </td>
                                <td style="padding:35px">
                                    <button class="btn btn-danger btn-block btn-md deleteImg" id="<?php echo $img->id;?>" name="<?php echo $img->image;?>" > Delete </button>
                                </td>
                            </tr>

                         <?php endforeach; ?>

                        </tbody>
                    </table>
                    
                    </div>
                    </div>