<?php echo $this->render_table_name(); ?>

<div class="xcrud-top-actions">
    <div class="btn-group pull-right">

        <?php if ($this->is_csv or $this->is_print){ ?>
            <?php echo $this->print_button('btn btn-default','glyphicon glyphicon-print');
            echo $this->csv_button('btn btn-default','glyphicon glyphicon-file'); } ?>
    </div>
    <?php if ($this->is_create){ ?>
        <?php echo $this->add_button('btn btn-success','glyphicon glyphicon-plus-sign'); ?>
    <?php } ?>

    <!--<button class="btn btn-danger xcrud-in-new-window xcrud-action pull-left" id="deleteAll">Delete All</button>-->

    <?php if(!empty($this->multiDelUrl)){ ?>
        <a href="javascript: multiDelfunc('<?php echo $this->multiDelUrl;?>', '<?php echo $this->chkboxClass;?>')" class="delete_button btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete Selected</a>
    <?php } ?>
</div>

<div class="xcrud-list-container">
    <table class="xcrud-list table table-striped table-hover">
        <thead>
        <?php echo $this->render_grid_head('tr', 'th'); ?>
        </thead>
        <tbody>
        <?php echo $this->render_grid_body('tr', 'td'); ?>
        </tbody>
        <tfoot>
        <?php echo $this->render_grid_footer('tr', 'td'); ?>
        </tfoot>
    </table>
</div>
<div class="xcrud-nav">
    <?php echo $this->render_limitlist(true); ?>
    <?php echo $this->render_pagination(); ?>
    <?php echo $this->render_search(); ?>
    <?php echo $this->render_benchmark(); ?>
</div>