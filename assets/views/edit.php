<?php echo $fairy->id;?>

<form method="POST">
	<fieldset>
		<legend>Edit fairy</legend>
		<label>Name</label>
		<input name="name" type="text" placeholder="Type something…"value="<?php echo $fairy->name; ?>"/>
                <label>Tree</label>
                <select name="tree_id">
                <option value="1">Oak</option>
                <option value="2">Cedar</option>
                <option value="3">Sakura</option>
                </select>
		<label>Interests</label>
		<div>
			<textarea name="interests"><?php echo $fairy->interests; ?></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
                <a href="/fairies/view/<?php echo $fairy->id;?>" class="btn btn-primary">Cancel</a
	</fieldset>
</form>