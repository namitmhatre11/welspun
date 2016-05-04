<h2><?php echo $title; ?></h2>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<?php echo validation_errors(); ?>
<?php 
    if(isset($error)) echo $error; 
    else if(isset($notice)) echo $notice; ?>

<?php echo form_open_multipart('admin/add_player'); ?>

    <label for="playername">Name</label>
    <input type="input" name="playername" /><br />

    <label for="userpic">Player Photo</label>
    <input type="file" name="userpic" size="20" />

    <!-- <label for="text">Text</label>
    <textarea name="text" rows="10" cols="80"></textarea><br /> -->

    <input type="submit" name="submit" value="Create New Player" />

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //$.noConflict();
        $( document ).ready(function() {
		    console.log( "ready!" );
		    CKEDITOR.replace( 'text' );
		});
        
    </script>

</form>
</div>