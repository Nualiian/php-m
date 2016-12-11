<!DOCTYPE html>
<html>
<head>
	<?php insert("partials/head") ?>
</head>
<body>
	<div class="container">
		<?php insert("partials/nav") ?>

		<div class="row">
			<h3 class="center-align"><?php mutation("quotations.create") ?></h3>

			<form method="POST" action="<?php url('quotation') ?>" class="col s12" id="quotation-form">

				<div class="row">
					<h4 class="center-align">Design and Colours</h4>

					<?php insert("quotations/form_partials/design/surface") ?>

					<?php insert("quotations/form_partials/design/pvc_foil") ?>
				</div>


				<div class="row">
					<?php insert("quotations/form_partials/design/colours") ?>

					<?php insert("quotations/form_partials/design/panel_design") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/spring") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/diy") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/section_gates") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/aluminium_profiles") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/isd01_isd02") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/accessories_for_section_gates") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/drive/section_gates") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/drive/industrial_gates") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/drive/sliding_gates") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/drive/winged_gates") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/drive/barrier_gates") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/drive/accessories") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/discount") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/selling_info") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/note") ?>
				</div>

				<div class="row">
					<?php insert("quotations/form_partials/submit") ?>
				</div>
			</form>

		</div>
	</div>

	<script src="<?php asset("js/app.min.js") ?>" type="text/javascript"></script>
</body>
</html>
