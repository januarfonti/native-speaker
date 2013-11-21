<? include 'master/header.php'; ?>
<!--ISI NE-->
<div class="container">
    <div class="well">
        <?php
            if(isset($data_class)){
            foreach($data_class as $row){
        ?>
        <div class="media">
            <a class="pull-left" href="#"><img src="<? site_url(); ?>assets/uploads/files/<? echo $row->file_url; ?>" alt="" class="img-thumbnail"></a>
            <div class="media-body">
                <h2 class="media-heading heading-text"><?php echo $row->judul; ?></h2>
                <?php echo $row->isi; ?>
            </div>
        </div>
        <hr>
        <? } } ?>
    </div>
</div>
</div><!--wrap-->
<!--AKHIR ISI NE-->
<? include 'master/footer.php'; ?>