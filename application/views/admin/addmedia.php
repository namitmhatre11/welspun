<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php echo validation_errors(); ?>
	<div class="panel panel-primary">
		<div class="panel-heading">
            <h3 class="panel-title">Add Media</h3>
        </div>
        <div class="panel-body">
			<?php echo form_open_multipart();?>
			  <p>Upload file(s):</p>
			  <?php echo form_upload('uploadedimages[]','','multiple'); ?>
			  <br />
			  <label for="playervideo">Video</label>
              <input type="input" name="playervideo" value="" />
			  <br />
			  <label for="playersocial">Social News</label>
              <input type="input" name="playersocial" value="" />
			  <br />
			  <?php echo form_submit('submit','Upload');?>
			<?php echo form_close();?>
		</div>
	</div>
</div>