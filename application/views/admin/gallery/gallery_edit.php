<div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Home /</span> Gallery Create
</h4>

<div class="row">
  <!-- FormValidation -->
  <div class="col-12">
    <div class="card">
      <div class="card-body">

        <form action="<?php echo base_url();?>gallery/gallery_update" method="POST" enctype="multipart/form-data" id="formValidationExamples" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
        <input type="hidden" name="id" value="<?php echo isset($gallery) ? $gallery->id : ''; ?>">

          <div class="col-md-6 fv-plugins-icon-container">
            <label class="form-label" for="formValidationName">Full Name</label>
            <input type="text" name="name" id="formValidationName" class="form-control" placeholder="Enter Name" value="<?php echo isset($gallery) ? $gallery->name : '' ?>">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-md-6 fv-plugins-icon-container">
            <label class="form-label" for="formValidationEmail">Content</label>
            <input class="form-control" name="content" type="text" id="formValidationEmail"  placeholder="Enter Content" value="<?php echo isset($gallery) ? $gallery->content : '' ?>">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>


          <div class="col-md-6 fv-plugins-icon-container">
            <label for="formValidationFile" name="image" class="form-label">Image</label>
            <input class="form-control" type="file" id="formValidationFile" name="image">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>


          <div class="col-12">
            <button type="submit" name="submitButton" class="btn btn-info">update</button>
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