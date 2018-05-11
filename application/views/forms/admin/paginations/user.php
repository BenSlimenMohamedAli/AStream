
<li class="page-item disabled">
    <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
    </a>
</li>
<?php for ($i = 0; $i < $utilisateurs;$i++){ ?>
    <li class="page-item" value="<?php echo $i+1; ?>"><a class="page-link"><?php echo $i+1; ?></a></li>
<?php } ?>

<li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
    </a>
</li>


<script>
    $(document).ready(function () {
        $('li[value="1"]').attr('id','selected').siblings().removeAttr('id','selected');
        $('li').click(function () {
            $(this).attr('id','selected').siblings().removeAttr('id','selected');
        });
    });
</script>