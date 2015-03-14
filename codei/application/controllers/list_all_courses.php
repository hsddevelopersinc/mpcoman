<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="row hidden-print">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" data-step="1" data-intro='Click here to print'>
				<button type="button" onclick="window.print()" class="hidden-print pull-right btn btn-sm btn-primary"><span class="glyphicon glyphicon-print"></span> Print</button>
			</div>
		</div>
		<br>
		<table class="table table-condensed table-bordered table-hover">
			<thead>
				<th>Course Id</th>
				<th>Course Name</th>
				<th>Credits</th>
				<th>Type</th>
				<th class="text-center hidden-print">Option</th>
			</thead>
			<tbody>
			<?php
				foreach ($courses as $key => $course) {
					echo "<tr>";
					echo "<td>". $course['courseId'] ."</td>";
					echo "<td>". $course['courseName'] ."</td>";
					echo "<td>". $course['credit'] ."</td>";
					echo "<td>". $course['typeName'] ."</td>";
					echo '<td class="text-center hidden-print"> <a type="button" href="'.base_url('registration/courses/edit/'.$course['courseId']).'" class="btn btn-info btn-xs">Edit</a></td>';
					echo "</tr>";
				}
			?>
			</tbody>
		</table>
	</div>
</div>
