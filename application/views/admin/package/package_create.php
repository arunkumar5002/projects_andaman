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

        <form action="<?php echo base_url();?>package/package_save" method="POST" enctype="multipart/form-data" id="formValidationExamples" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">


          <div class="col-md-6 fv-plugins-icon-container">
            <label class="form-label" for="formValidationName">Package category</label>
            <select class="form-select" name="package_title" id="exampleFormControlSelect1" aria-label="Default select example">
            <option selected="">Select Category</option>
            <option name="package_title" value="Family package">Family package</option>
            <option name="package_title" value="Adventure package">Adventure package</option>
            <option name="package_title" value="Romance package">Romance package</option>
			<option name="package_title" value="Holiday package">Holiday package</option>
          </select>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
		  
		  <div class="col-md-6 fv-plugins-icon-container">
            <label for="formValidationFile" name="image" class="form-label">Image</label>
            <input class="form-control" type="file" id="formValidationFile" name="image">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
		  
          <div class="col-md-12 fv-plugins-icon-container">
            <label class="form-label" for="formValidationEmail">Package Content</label>
            <textarea id="bootstrap-maxlength-example2" name="package_content" class="form-control bootstrap-maxlength-example" rows="5" ></textarea>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
		  
		  <div class="col-md-6 fv-plugins-icon-container">
            <label for="formValidationFile" name="image" class="form-label">Package Cost</label>
            <input class="form-control" type="number" id="formValidationFile" name="package_cost">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
		  
		  <div class="col-md-3 fv-plugins-icon-container">
            <label for="formValidationFile" name="adult" class="form-label">Adult</label>
            <input class="form-control" type="number" id="formValidationFile" name="adult">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
		  
		  <div class="col-md-3 fv-plugins-icon-container">
            <label for="formValidationFile" name="child" class="form-label">Child(above 5 years)</label>
            <input class="form-control" type="number" id="formValidationFile" name="child">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
		  
		  
		  <div class="col-12">
            <label class="form-label" for="bootstrap-maxlength-example2">Day Plans</label>
            <textarea id="file-picker" name="day_plans" class="form-control bootstrap-maxlength-example" rows="5"></textarea>
          </div>
		 
		  <div class="col-12">
            <label class="form-label" for="bootstrap-maxlength-example2">Package Inclusions</label>        
            <textarea id="" name="package_inclusion" class="form-control bootstrap-maxlength-example" rows="5"></textarea>
          </div>
		  
		  <div class="col-12">
             <div class="item d-flex justify-content-between align-items-center m-2">
          <div>		  
		  <label class="form-label" for="bootstrap-maxlength-example2">Package exclusions</label>
          </div>
         </div>     
            <textarea id="" name="package_exclusions" class="form-control bootstrap-maxlength-example" rows="5"></textarea>
          </div>
		  
		  <div class="col-md-6 fv-plugins-icon-container">
            <label for="formValidationFile" name="image" class="form-label">Multiple Image</label>
            <input class="form-control" type="file" id="formValidationFile" name="image_bundle[]" multiple>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>



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