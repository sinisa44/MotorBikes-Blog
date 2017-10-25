<?php

?>
<div class="row">
	<h3 class="text-center">Content panel</h3>
	<hr>
	<div class="col-md-4">

		<h3 class="text-center">Add new Content</h3>
		<hr>
		<!-- pocetak forme-->
			<form class="form-horizontal" method="POST" enctype="multipart/form-data" id="PostForm">

				<div class="form-group">
					<label for="naziv" class="col-md-2">Name:</label>
					<div class="col-md-10">
						<input type="text" name="naziv" class="form-control" id="title">
					</div>
				</div>

				<div class="form-group">
					<label for="Text" class="col-md-2">Text:</label>
					<div class="col-md-10">
						<textarea name="tekst" id="fulltext" cols="40" rows="5"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="Kategorija" class="col-md-3">Category:</label>
					<div class="col-md-9">
						<select name="kategorija" id="category" class="form-control">
							<option value="racing">Racing Bikes</option>
							<option value="chopper">Chopper Bikes</option>
							<option value="dragster">Dragster Bikes</option>
							<option value="cross">Cross Bikes</option>
						</select>
					</div>
				</div>

    <div class="form-group">
          <label for="image" class="col-md-2">Image:</label>
          <div class="col-md-10">
              <input type="file" name="slika" id="slika">
          </div>
      </div>

				<div class="form-group">
					<label for="podnaslov" class="col-md-2">Slug:</label>
					<div class="col-md-10">
						<input type="text" name="podnaslov" class="form-control" id="slug">
					</div>
				</div>

				<input type="submit" name="addpost" class="btn btn-info" value="Add">

		</form> <!--kraj forme -->
	</div>

<div class="col-md-8 pull-right" id="adminContent" >


	</div>

</div> <!--end of content panel -->
<script src="inc/js/createajax.js"></script>