
<div class="container">
<a href="<?php echo base_url('Beranda/blog_list'); ?>"><button type="button" class="btn btn-info">Back</button></a>
<br><br>
  <div class="row">
      <div class="col-md-9">
        <div class="well well-sm">
          <form class="form-horizontal" method="post" action="<?php echo base_url('Beranda/proses_new_blog'); ?>">
          <fieldset>
            <legend class="text-center">Whats Going on ?</legend>
            
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Title</label>
              <div class="col-md-9">
                <input id="name" name="title" type="text" placeholder="Title" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Content</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="content" placeholder="Please enter your Content here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
      <!-- End Row -->
  </div> 
</div>

