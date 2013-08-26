<form method="POST">
	<fieldset>
		<legend>Add a new fairy</legend>
		<label>Name</label>
		<input name="name" type="text" placeholder="Fairy…"/>
                <label>Tree</label>
                <select name="tree_id">
                <option value="1">Oak</option>
                <option value="2">Cedar</option>
                <option value="3">Sakura</option>
                </select>
		<label>Interests</label>
		<div>
			<textarea name="interests"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
                <a href="/" class="btn btn-primary">Cancel</a>
	</fieldset>
</form>