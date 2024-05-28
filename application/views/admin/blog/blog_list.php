<style>
.gallery{
	width:100%;
	height:200px;
}
.package-content {
        white-space: pre-wrap;
        text-align:justify;		
 
    }
</style>


<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Home /</span> blog List
        </h4>

        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-white">S.No</th>
                            <th class="text-white">Customer Name</th>
                            <th class="text-white">Description</th>
                            <th class="text-white">Image</th>
                            <th class="text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1;
                        foreach ($blog as $row): ?>
                            <tr>
                                <td><span class="fw-medium"><?php echo $i++; ?></span></td>
                                <td><?php echo $row->name; ?></td>
                                <td class="package-content"><?php echo $row->content; ?></td>
                                <td style="width:25%;">
                                    <?php if ($row->image != ''): ?>
                                        <img src="<?php echo base_url('site/blog/' . $row->image); ?>" alt="blog_andaman" class="gallery">
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item text-info" href="<?php echo base_url('blog/blog_edit/' . $row->id) ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item text-danger" href="<?php echo base_url('blog/blog_delete/' . $row->id) ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Bootstrap Table with Header Dark -->
    </div>
    <!-- / Content -->
</div>
