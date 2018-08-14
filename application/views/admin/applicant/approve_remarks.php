<form class="form-horizontal frmContent" id="event" method="post">
    <div class="block-flat">
        <span class="frmMsg"></span><br>
        <div class="form-group"><label class="col-lg-2 control-label">Remarks</label>
            <div class="col-lg-10">
                <textarea id="remarks" name="remarks" rows="5" class="form-control"  placeholder="Enter Remarks"></textarea>
                <span class="validation"></span>
                <span class="help-block m-b-none ">e.g. Remarks text here.</span>
                <span class="help-block"> <span class="text-danger">*</span> Remarks not mendatory.</span>
            </div>
        </div>
    </div>        
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10"> 
            <input type="hidden" name="applicantId" id="applicantId" value="<?php echo $applicantId; ?>">
            <input type="button" class="btn btn-primary btn-sm formApproveSubmit" value="Submit">    
            <input type="reset" class="btn btn-default btn-sm" value="Reset">
            <span class="loadingImg"></span>
        </div>
    </div>
</form>