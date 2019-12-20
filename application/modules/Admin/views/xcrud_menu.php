<div class="panel panel-default">
    <div class="">
        <!--<?php echo $head; ?> -->
        <span class="panel-subtitle">
          <?php if (!empty($delete_all)) { ?>
              <button class="btn btn-danger" id="deleteAll">Delete All</button>
          <?php } ?>
            <?php if (!empty($add_link)) { ?>
                <a href="<?= $add_link ?>" class="btn btn-success">Add</a>
            <?php } ?>
    </span>
    </div>
    <div class="panel-body" id="html_content">
    <div class="row">
    <div class="col-md-6">
        <?php echo $content; ?>
    </div>
    <div class="col-md-6">
​
​
<div class="panel panel-contrast">
<div class="panel-heading panel-heading-contrast">Header Menu
<span class="panel-subtitle">All Header menus goes here.</span>
</div>
 <div class="alert alert-success" style="display: none; color: white;"> </div> 
<div class="panel-body">
​
<div class="dd" id="nestable">
    <ol class="dd-list">
<?php function fetch_menu($header_menus){ ?>
   <?php foreach($header_menus as $menu){ ?>
        <li class="dd-item" data-id="<?php echo $menu->id; ?>"><div class="dd-handle"><?php echo $menu->name; ?></div> 
      <?php  if(!empty($menu->sub)){ ?>
            <ol class="dd-list">
       <?php fetch_sub_menu($menu->sub); ?>
            </ol></li>
      <?php  } ?>
   <?php } ?>
 <?php } ?>

 <?php function fetch_sub_menu($sub_menu){ ?>
   <?php foreach($sub_menu as $menu){ ?>
<li class="dd-item" data-id="<?php echo $menu->id; ?>"><div class="dd-handle"><?php echo $menu->name; ?></div>
     <?php   if(!empty($menu->sub)){ ?>
            <ol class="dd-list">
         <?php   fetch_sub_menu($menu->sub); ?>
            </ol></li>
       <?php }       ?>
<?php    } ?>
<?php } ?>

<!-- <ol class="dd-list"> -->
<?php fetch_menu($header_menus); ?>
<!-- </ol> -->
</ol>
</div>
​
​
</div>
</div>
​
​
<div class="panel panel-contrast">
<div class="panel-heading panel-heading-contrast">Footer Menu
<span class="panel-subtitle">All Footer menus goes here.</span>
</div>
<!-- <div class="alert alert-success" style="display: none; color: white;"> </div> -->
<div class="panel-body">
​
<div class="dd" id="nestable2">
    <ol class="dd-list">
<?php function fetch_menuu($footer_menus){ ?>
   <?php foreach($footer_menus as $menu){ ?>
        <li class="dd-item" data-id="<?php echo $menu->id; ?>"><div class="dd-handle"><?php echo $menu->name; ?></div> 
      <?php  if(!empty($menu->sub)){ ?>
            <ol class="dd-list">
       <?php fetch_sub_menuu($menu->sub); ?>
            </ol></li>
      <?php  } ?>
   <?php } ?>
 <?php } ?>

 <?php function fetch_sub_menuu($sub_menu){ ?>
   <?php foreach($sub_menu as $menu){ ?>
<li class="dd-item" data-id="<?php echo $menu->id; ?>"><div class="dd-handle"><?php echo $menu->name; ?></div>
     <?php   if(!empty($menu->sub)){ ?>
            <ol class="dd-list">
         <?php   fetch_sub_menuu($menu->sub); ?>
            </ol></li>
       <?php } ?>
<?php    } ?>
<?php } ?>


<?php fetch_menuu($footer_menus); ?>
</ol>
</div>
​
</div>
</div>
​
​
​
    </div>
    </div>
    </div>
</div>
<div class="modal"><!-- Place at bottom of page --></div>
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(255, 255, 255, .8) url('http://i.stack.imgur.com/FhHRx.gif') 50% 50% no-repeat;
    }
​
    /* When the body has the loading class, we turn
       the scrollbar off with overflow:hidden */
    body.loading .modal {
        overflow: hidden;
    }
​
    /* Anytime the body has the loading class, our
       modal element will be visible */
    body.loading .modal {
        display: block;
    }
</style>


<!-- menu script -->
<script>
$(document).ready(function()
{
      var updateOutput = function (e) {
        var list = e.length ? e : $(e.target),
         output = list.data('output');
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>admin/menu',
            data: {
                list: list.nestable('serialize')
            },
           success: function(result){
            location.reload(true);
            // $('.alert-success').html('Menu update successfully')
            // .fadeIn().delay(400).fadeOut('slow');
              },
                error: function(result){
                    alert("Menu could not update");
                },
      });
    }
    $('#nestable').nestable({
        group: 1,
        maxDepth: 7,
    }).on('change', updateOutput);


    var updateOutput = function (e) {
        var list = e.length ? e : $(e.target),
         output = list.data('output');
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>admin/footermenu',
            data: {
                list: list.nestable('serialize')
            },
           success: function(result){
            location.reload(true);
            // $('.alert-success').html('Menu update successfully')
            // .fadeIn().delay(400).fadeOut('slow');
              },
                error: function(result){
                    alert("Menu could not update");
                },
      });
    }
    $('#nestable2').nestable({
        group: 1,
        maxDepth: 7,
    }).on('change', updateOutput);
});
</script>
<!-- End menu script -->


<script>
​
    $("#select_all").click(function () {
        if ($(this).prop("checked")) {
            $("[class=checkboxcls]").prop("checked", true);
        } else {
            $("[class=checkboxcls]").prop("checked", false);
        }
    });
    $("#deleteAll").click(function () {
        var checkboxes = $("[class=checkboxcls]:checked");
        var all_data = [];
        $.each(checkboxes, function (index, object, container) {
            all_data.push($(object).val())
        });
        if (all_data.length != 0) {
            var answer = confirm("Are you sure you want to delete?");
            if (answer) {
                $.post("<?=$base_url?>", {primery_keys: all_data}, function (theResponse) {
                    location.reload();
                });
​
            } else {
                location.reload();
                return false;
            }
        } else {
            alert("Please at least select one item.")
        }
    });
​
    function delfunc(id, baseurl) {
​
        var answer = confirm("Are you sure you want to delete?");
        if (answer) {
            $.post(baseurl, {id: id}, function (theResponse) {
                location.reload();
            });
​
        } else {
            location.reload();
            return false;
        }
    }
​
    $("#change_status").change(function () {
​
    });

    $("#change_menu_status").change(function () {
​
    });
​
    function updateOrder(value, id) {
        $body = $("body");
        $body.addClass("loading");
        $.post("<?=base_url(ADMINURI . 'accounts/chagne_order')?>", {
            id: id,
            value: value
        }, function (theResponse) {
            $.get("<?=base_url(uri_string())?>",
                function (data) {
                    $body.removeClass("loading");
                    $("#replace").html(data);
                    $.gritter.add({
                        title: 'Account status',
                        text: "Account status has been " + status,
                        image: "<?=base_url('assets/img/favicon.png')?>",
                        class_name: 'clean',
                        sticky: true,
                        time: ''
                    });
                });
​
        });
    }
​
    function updateOrderCms(value, id) {
        $body = $("body");
        $body.addClass("loading");
        $.post("<?=base_url(ADMINURI . 'cms/chagne_order')?>", {
            id: id,
            value: value
        }, function (theResponse) {
            $.get("<?=base_url(uri_string())?>",
                function (data) {
                    $body.removeClass("loading");
                    $("#replace").html(data);
                    $.gritter.add({
                        title: 'Cms order',
                        text: "Cms order has been changed",
                        image: "<?=base_url('assets/img/favicon.png')?>",
                        class_name: 'clean',
                        sticky: true,
                        time: ''
                    });
                });
​
        });
    }

​
</script>