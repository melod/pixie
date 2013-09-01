<h3><?php echo $fairy->name;?></h3>

 <a href="/fairies/edit/<?php echo $fairy->id;?>"class="btn btn-success"><i class="icon-edit icon-large"></i></a>
 <a href="/fairies/delete/<?php echo $fairy->id;?>" class="btn btn-danger"><i class="icon-remove icon-large"></i></a>

<p class="lead">
        <?php echo 'Tree:'?><a href="fairy/tree"><?php echo $fairy->tree->name;?></a></p>
        
</p>
<p class="lead">
	<?php echo 'Interest:' .$fairy->interests;?>
</p>
               
<p class="all"> All Fairies: <a href="/"><?php echo $count;?></a></p>
                

<a href="/" class="btn btn-success">Back to the list of fairies</a>