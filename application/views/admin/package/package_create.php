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
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
            <option selected="">select Category</option>
            <option value="family package">Family package</option>
            <option value="adventure package">Adventure package</option>
            <option value="animoon package">Animoon package</option>
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
		