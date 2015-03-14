<?php
if($this->session->flashdata('success') == TRUE)
	echo '<div class="notification-container"><div class="notification-message"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$this->session->flashdata('success').'</div></div>';

if($this->session->flashdata('warning') == TRUE)
	echo '<div class="notification-container"><div class="notification-message"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$this->session->flashdata('warning').'</div></div>';

if($this->session->flashdata('info') == TRUE)
	echo '<div class="notification-container"><div class="notification-message"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$this->session->flashdata('info').'</div></div>';

if($this->session->flashdata('danger') == TRUE)
	echo '<div class="notification-container"><div class="notification-message"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$this->session->flashdata('danger').'</div></div>';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form class="form form-horizontal form_options" role="form" method="post" action="<?php echo base_url('registration/courses/validate') ?>" name="form_add_new_course">
			<div class="form-group">
				<label for="inputCourseId" class="col-sm-2 control-label">Course Id <span class="text-danger">*</span> </label>
				<div class="col-sm-7" data-step="1" data-intro='Enter the course ID here'>
					<input type="text" required="required" name="courseId" class="form-control input-sm" id="inputCourseId" placeholder="Enter valid Course Id">
				</div>
			</div>
			<div class="form-group">
				<label for="inputCourseName" class="col-sm-2 control-label">Course Name <span class="text-danger">*</span> </label>
				<div class="col-sm-7" data-step="2" data-intro='Enter the course name here'>
					<input type="text" required="required" name="courseName" class="form-control input-sm" id="inputCourseName" placeholder="Enter valid Course Name">
				</div>
			</div>
			<div class="form-group">
				<label for="inputCourseCredits" class="col-sm-2 control-label">Course Credit <span class="text-danger">*</span> </label>
				<div class="col-sm-7" data-step="3" data-intro='Select the course credits'>
					<select required="required" name="courseCredits" id="inputCourseCredits" class="form-control input-sm">
						<option value="">-- Select One --</option>
						<?php for($i=1;$i<=$maxCredits;$i++) {?>
							<option value= <?=$i?> ><?=$i?> </option>
						<?php }?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputCourseType" class="col-sm-2 control-label">Course Type <span class="text-danger">*</span> </label>
				<div class="col-sm-7" data-step="4" data-intro='Select the course type'>
					<select required="required" name="courseType" id="inputCourseType" class="form-control input-sm">
						<option value="">-- Select One --</option>
						<?php foreach($courseType AS $type): ?>
							<option value=<?=$type['typeId']?> ><?=$type['typeName']?></option>
						<?php endforeach; ?>
					</select>	
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-7" data-step="5" data-intro='Click here to submit'>
					<button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span> Add Course</button>
				</div>
			</div>
		</form>
	</div>
</div>
