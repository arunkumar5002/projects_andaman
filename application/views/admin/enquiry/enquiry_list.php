

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Home /</span> Enquiry List
        </h4>

        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-white">S.No</th>
                            <th class="text-white">FullName</th>
                            <th class="text-white">Mobile No</th>
                            <th class="text-white">Email</th>
                            <th class="text-white">location</th>
							<th class="text-white">Action<th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1;
                        foreach ($enquiry as $row): ?>
                            <tr>
                                <td><span class="fw-medium"><?php echo $i++; ?></span></td>
                                <td><?php echo $row->fullname; ?></td>
                                <td><?php echo $row->mobile_no; ?></td>
								<td><?php echo $row->email; ?></td>
								<td><?php echo $row->location; ?></td>
                                
                                <td>
                                            <a class="dropdown-item text-danger" href="<?php echo base_url('web/enquiry_delete/' . $row->id) ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                       
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
