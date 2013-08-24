<h3><?php echo $fairy->name;?></h3>
<a href="/fairies/edit/<?php echo $fairy->id;?>" class="btn btn-success">Edit</a>
<a href="/fairies/delete/<?php echo $fairy->id;?>" class="btn btn-success">Hapus</a>
<p class="lead">
	<?php echo $fairy->interests;?>
</p>
               
<p class="all"> All Fairies: <a href="/"><?php echo $count;?></a></p>
                

<a href="/" class="btn btn-success">Back to the list of fairies</a>