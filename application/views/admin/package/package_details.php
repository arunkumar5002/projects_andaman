<div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Home /</span> Package plans
</h4>

<div class="row">
  <!-- FormValidation -->
  <div class="col-12">
    <div class="card">
      <div class="card-body">
	  
        <form action="<?php echo base_url();?>package/package_active_save" method="POST" enctype="multipart/form-data" id="formValidationExamples" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
		<input class="form-control" type="hidden" id="formValidationFile" name="package_id" value="<?php echo isset($package) ? $package->id : ''; ?>">
		
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
		  <div class="">
	  	  <a class="extra-fields-customer btn btn-info" href="#"><i class='bx bx-plus'></i>Add </a>
	      </div>
         </div>     
            <textarea id="" name="package_exclusions" class="form-control bootstrap-maxlength-example" rows="5"></textarea>
          </div>
        <div class="customer_records" style="display:none;">
          <div class="row">
            <div class="col-6">
            <label class="form-label" for="bootstrap-maxlength-example2">Title</label>        
            <input type="text" name="package_title" id="formValidationName" class="form-control" placeholder="Enter Title">
          </div>

            <div class="col-6">
            <label class="form-label" for="bootstrap-maxlength-example2">Description</label>        
            <input type="text" name="package_title" id="formValidationName" class="form-control" placeholder="Enter Title">
          </div>		  
          </div>
		  </div>

		    <div class="customer_records_dynamic"></div>


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
 $('.extra-fields-customer').click(function(e) {
    e.preventDefault();
    let newRecord = $('.customer_records').clone().appendTo('.customer_records_dynamic');
    newRecord.removeAttr('style'); // Remove the display:none style
    newRecord.addClass('single remove');
    newRecord.find('.extra-fields-customer').remove();
    newRecord.find('textarea').val(''); // Clear textarea content
    newRecord.append('<div class="text-end"><a href="#" class="remove-field btn-remove-customer btn btn-danger mt-2">delete</a></div>');
    newRecord.removeClass('customer_records');

    $('.customer_records_dynamic > .single').attr("class", "remove");
  });

  $(document).on('click', '.remove-field', function(e) {
    e.preventDefault();
    $(this).closest('.remove').remove();
  });
</script>
<script>
  
 tinymce.init({
    selector: 'textarea#file-picker',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>