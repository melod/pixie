<table class="view all">
	
	
		<?php foreach($fairies as $fairy):?>
			<tr>
				
				<h3><td><a href="/fairies/view/<?php echo $fairy->id;?>"><?php echo $fairy->name;?></a></h3>
                                <p><?php echo $fairy->interests;?></td></p>
                                
			</tr>
		<?php endforeach;?>
	
</table>
<p >
                
                            Number of Fairies: <a href="/"><?php echo $count;?></a>
                
</p>
<a href="/fairies/add" class="btn btn-success">Add a new fairy</a>