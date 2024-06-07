<?php $this->view('catlog/header',$data); ?>

<div style="margin: auto;max: width 600px;width: 100%;padding: 2em;">
<form method= "post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image <Title></Title></label>
    <input type="text" name='title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Add a title to your Image</div>
  </div>
  <div class="mb-3">
    
    <input type="file" name='file' class="btn" id="required">
  </div>
  <div class="mb-3 form-check">
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  </div></br>
  <button type="submit" class="btn btn-primary">Upload</button>
</form>
</div>

<?php $this->view('catlog/footer',$data); ?>