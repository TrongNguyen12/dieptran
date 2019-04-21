<script>
    $(".course").click(function(){
        var id_cat=$(this).val();
        $.ajax({
            url: 'backend/product/subjects',
            type: 'get',
            dataType:"html",
            data: {cate_id: id_cat},
            success: function (data){
                $("#subject").html(data);
            }
        });
    });
</script>
<script>
   new SlimSelect({
        select: '#multiple',
        showSearch: true
    });
    new SlimSelect({
        select: '#multiple2',
        showSearch: true
    })
</script>
 <script> 
     CKEDITOR.replace( 'Text_min', {
        filebrowserBrowseUrl: '<?php echo asset('/public/ckfinder/ckfinder.html')?>',
        filebrowserUploadUrl: '<?php echo asset('/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')?>',
        allowedContent: true
    } );     
</script> 
<?php for($i=0;$i<=6;$i++){?>
    <script type="text/javascript">
    
            CKEDITOR.replace( 'Text_min<?=$i?>', {
                filebrowserBrowseUrl: '<?php echo asset('/public/ckfinder/ckfinder.html')?>',
                filebrowserUploadUrl: '<?php echo asset('/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')?>',
                allowedContent: true
            } );    
       
    </script>
 <?php } ?>
<footer class="main-footer">

	<div class="pull-right hidden-xs">

	  <b> mail:nguyennhan091@gmail.com</b>

	</div>

	<strong>Thiết kế web bởi <a>NguyenNhan</a>.</strong> Bản quyền thuộc {{url('/')}}.

</footer>



