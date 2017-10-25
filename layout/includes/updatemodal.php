<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="text-center">Update Post</h4>
      </div>

      <div class="modal-body">

        <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="UpdateForm">
            <input type="hidden" name="Updid" id="HiddenId">
          <div class="form-group">
            <label for="UpdTitle" class="col-md-2">Name:</label>
            <div class="col-md-10">
              <input type="text" name="UpdTitle" class="form-control" id="UpdTitle">
            </div>
          </div>

          <div class="form-group">
            <label for="UPdtext" class="col-md-2">Text:</label>
            <div class="col-md-10">
              <textarea name="UpdText" id="UpdText" cols="62" rows="10"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="Kategorija" class="col-md-2">Category:</label>
            <div class="col-md-10">
              <select name="UpdCategory" id="category" class="form-control">
                <option value="racing">Racing Bikes</option>
                <option value="chopper">Chopper Bikes</option>
                <option value="dragster">Dragster Bikes</option>
                <option value="cross">Cross Bikes</option>
              </select>
            </div>
          </div>

      <div class="form-group">
            <label for="UpdImage" class="col-md-2">Image:</label>
            <div class="col-md-10">
                <input type="file" name="UpdImage" id="UpdImage" required>
            </div>
        </div>

          <div class="form-group">
            <label for="UpdSlug" class="col-md-2">Slug:</label>
            <div class="col-md-10">
                <textarea name="UpdSlug" id="UpdSlug" cols="62" rows="5"></textarea>
            </div>
          </div>
          <input type="submit" name="update" class="btn btn-info btn-block" value="Add" >

      </form> <!--kraj forme -->
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
