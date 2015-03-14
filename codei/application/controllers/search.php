<?php
if($this->session->flashdata('success') == TRUE)
	echo '<div class="notification-container"><div class="notification-message"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$this->session->flashdata('success').'</div></div>';

if($this->session->flashdata('warning') == TRUE)
	echo '<div class="notification-container"><div class="notification-message"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$this->session->flashdata('warning').'</div></div>';

if($this->session->flashdata('info') == TRUE)
	echo '<div class="notification-container"><div class="notification-message"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$this->session->flashdata('info').'</div></div>';

if($this->session->flashdata('danger') == TRUE)
	echo '<div class="notification-container"><div class="notification-message"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$this->session->flashdata('danger').'</div></div>';
if(isset($error)) echo '<div class="alert alert-danger"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$error.'</div>';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form class="form-horizontal form_options" method="post" action="<?php echo base_url('registration/courses/search') ?>" role="form">
			<div class="form-group">
				<label for="inputCourseid" class="col-sm-2 control-label">Course Id <span class="text-danger">*</span> </label>
				<div class="col-sm-10">
					<input type="text" name="courseid" pattern="[A-Za-z0-9]+$" class="form-control" id="inputCourseid" required="required" placeholder="Enter Course Id to be searched">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> Search and Edit</button>
				</div>
			</div>
		</form>
	</div>
</div>
