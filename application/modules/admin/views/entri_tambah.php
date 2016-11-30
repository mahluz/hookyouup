
<div class="container">
<br>
  <div class="row">
      <div class="col-md-11">
        <div class="well well-sm">
          <form class="form-horizontal" method="post" action="<?php echo base_url('admin/proses_tambah_blog'); ?>">
          <fieldset>
            <legend class="text-center">Whats Going on ?</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <div class="col-md-12">
                <input id="name" name="title" type="text" placeholder="Title" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <div class="col-md-12">
                <textarea class="form-control" id="blog_content" name="content" placeholder="Please enter your Content here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
      <!-- End Row -->
  </div>
</div>

