<div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Home /</span> Package Create
</h4>

<div class="row">
  <!-- FormValidation -->
  <div class="col-12">
    <div class="card">
      <div class="card-body">

        <form action="<?php echo base_url();?>package/save_create_package" method="POST" enctype="multipart/form-data" id="formValidationExamples" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">	  
		  
		  <div class="col-12">
            <label class="form-label" for="bootstrap-maxlength-example2">Create category</label>
			<input class="form-control" type="text" id="formValidationFile" name="Category_name">
          </div>

          <div class="col-12">
            <button type="submit" name="submitButton" class="btn btn-info">Submit</button>
          </div>
		  </form>
      </div>
    </div>
  </div>
  <!-- /FormValidation -->
</div>


          </div>
          <!-- / Content -->

        </div>


<script src="https://cdn.tiny.cloud/1/xlfeurntq9y7i4xekogr2t4bmyapgkvf5omt3qefzg3qda4b/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>		
<script>
  
 tinymce.init({
    selector: 'textarea#file-picker',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>		