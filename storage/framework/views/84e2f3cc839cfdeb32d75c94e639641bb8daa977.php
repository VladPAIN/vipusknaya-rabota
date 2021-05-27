<div class="row form-search">
    <?php echo Form::open(['method' => 'GET', 'role' => 'form']); ?>

            <div class="col-md-10">
                <?php echo Form::text('search', request()->get('search'), ['class' => 'form-control', 'placeholder' => 'Search...']); ?>

            </div>
            <div class="col-md-2">
                <?php echo Form::submit('Sumbit', ['class' => 'btn btn-block btn-default']); ?>

            </div>
    <?php echo Form::close(); ?>

</div>
<?php /**PATH /home/dylan-tracy/Desktop/websites/txt-utility/public/resources/views/frontend/_search.blade.php ENDPATH**/ ?>