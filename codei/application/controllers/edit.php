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
		<form class="form form-horizontal form_options" role="form" method="post" action="<?php 

		if(isset($course['courseId']))
		echo base_url('registration/courses/save/'.$course['courseId']) ;
		else
		{
			$this->session->set_flashdata('danger', 'The course does not exist in our database. Please add all the details here');
			redirect(base_url('registration/courses/add'));
		}

		?>" name="form_add_new_course">
			<div class="form-group">
				<label for="inputCourseId" class="col-sm-2 control-label">Course Id &nbsp </label>
				<div class="col-sm-7">
					<p class="form-control-static">
					<?php echo isset($course['courseId']) ? $course['courseId'] : '' ?>
					</p>
				</div>
			</div>
			<div class="form-group">
				<label for="inputCourseName" class="col-sm-2 control-label">Course Name <span class="text-danger">*</span> </label>
				<div class="col-sm-7" data-step="1" data-intro='Enter the course name here'>
					<input type="text" required="required" name="courseName" class="form-control input-sm" id="inputCourseName" placeholder="Valid Couse Name" value="<?php echo isset($course['courseName']) ? $course['courseName']  : ''?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputCourseCredits" class="col-sm-2 control-label">Course Credit <span class="text-danger">*</span> </label>
				<div class="col-sm-7" data-step="2" data-intro='Select course credits'>
					<select required="required" name="courseCredits" id="inputCourseCredits" class="form-control input-sm">
						<option value="">-- Select One --</option>
						<?php for($i=1;$i<=$maxCredits;$i++) {?>
						<option value= <?=$i?> ><?=$i?> </option>
						<?php }?>
					</select>
					<script>$('#inputCourseCredits').val( <?php echo isset($course['credit']) ? $course['credit'] :''; ?> )</script>
				</div>
			</div>
			<div class="form-group">
				<label for="inputCourseType" class="col-sm-2 control-label">Course Type <span class="text-danger">*</span> </label>
				<div class="col-sm-7" data-step="3" data-intro='Select course type'>
					<select required="required" name="courseType" id="inputCourseType" class="form-control input-sm">
						<option value="">-- Select One --</option>
						<?php foreach($courseType AS $type): ?>
							<option value=<?=$type['typeId']?> <?php if($course['courseType']==$type['typeId']) echo 'selected'; ?> ><?=$type['typeName']?></option>
						<?php endforeach; ?>
					</select>
					<script>$('#inputCourseType').val( <?php echo isset($course['type']) ? $course['type'] : ''; ?> )</script>

				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-7" data-step="4" data-intro='Click here to submit'>
					<button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span> Save Changes</button>
				</div>
			</div>
		</form>
	</div>
</div>
