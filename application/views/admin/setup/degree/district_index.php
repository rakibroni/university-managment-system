<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>View All District Information</h5>
                    <!--?php if ($previlages->CREATE == 1) { ?-->
                    <div class="ibox-tools">
                        <span title="District Create" class="btn btn-primary btn-sm pull-right openModal"
                              data-action="setup/districtFormInsert"> Add New </span>
                    </div>
                    <!--?php } ?-->
                </div>
                <div class="ibox-content">
                    <div class="table-responsive contentArea">
                        <?php $this->load->view("admin/setup/district/district_list"); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>