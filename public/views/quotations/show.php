<!DOCTYPE html>
<html>
<head>
	<?php insert("partials/head") ?>
</head>
<body>
	<div class="container">
		<?php insert("partials/nav") ?>

		<div class="row">
			<h3 class="center-align"><?php mutation("quotations.number") ?> <?php echo $quotation["id"] ?></h3>

			<form method="POST" action="<?php url('quotation') ?>" class="col s12" id="quotation-form">
				<div class="row">
					<h4 class="center-align">Design and Colours</h4>
					<div class="col s12 m6 l6">
						<div class="card horizontal">
							<div class="card-stacked">
								<div class="card-content">
									<h4>Typ povrchu</h4>

									<div class="row">
										<p>
											<input name="surface" type="radio" id="smooth" value="smooth" />
											<label for="smooth">
												<img src="<?php asset("images/quotation_form/surface/hladky.png") ?>" width="200">
												Hladký
											</label>
										</p>
										<p>
											<input name="surface" type="radio" id="stucco" value="stucco" />
											<label for="stucco">
												<img src="<?php asset("images/quotation_form/surface/stucco.png") ?>" width="200">
												Stucco
											</label>
										</p>
										<p>
											<input name="surface" type="radio" id="woodgrain" value="woodgrain" />
											<label for="woodgrain">
												<img src="<?php asset("images/quotation_form/surface/woodgrain.png") ?>" width="200">
												Woodgrain
											</label>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m6 l6">
						<div class="card horizontal">
							<div class="card-stacked">
								<div class="card-content">
									<h4>PVC fólia</h4>

									<div class="row">
										<p>
											<input name="pvc_foil" type="radio" id="mahagon" value="mahagon" />
											<label for="mahagon">
												<img src="<?php asset("images/quotation_form/pvc_foil/mahagon.png") ?>" width="100">
												Mahagon
											</label>
											<input name="pvc_foil" type="radio" id="dark_oak" value="dark_oak" />
											<label for="dark_oak">
												<img src="<?php asset("images/quotation_form/pvc_foil/dark_oak.png") ?>" width="100">
												Tmavý dub
											</label>
										</p>
										<p>
											<input name="pvc_foil" type="radio" id="golden_oak" value="golden_oak" />
											<label for="golden_oak">
												<img src="<?php asset("images/quotation_form/pvc_foil/golden_oak.png") ?>" width="100">
												Zlatý dub
											</label>
											<input name="pvc_foil" type="radio" id="wenge" value="wenge" />
											<label for="wenge">
												<img src="<?php asset("images/quotation_form/pvc_foil/wenge.png") ?>" width="100">
												Wenge
											</label>
										</p>
										<p>
											<input name="pvc_foil" type="radio" id="satin_grey" value="satin_grey" />
											<label for="satin_grey">
												<img src="<?php asset("images/quotation_form/pvc_foil/satin_grey.png") ?>" width="100">
												Satin Grey
											</label>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col s12 m6 l6">
						<div class="card horizontal">
							<div class="card-stacked">
								<div class="card-content">
									<h4>Štandardné farby RAL</h4>

									<div class="row">
										<p>
											<input name="ral_colour" type="radio" id="9016" value="9016" />
											<label for="9016">
												<img src="<?php asset("images/quotation_form/standard_ral_colours/9016.png") ?>" width="60" height="60">
												9016
											</label>

											<input name="ral_colour" type="radio" id="9010" value="9010" />
											<label for="9010">
												<img src="<?php asset("images/quotation_form/standard_ral_colours/9010.png") ?>" width="60" height="60">
												9010
											</label>

											<input name="ral_colour" type="radio" id="8014" value="8014" />
											<label for="8014">
												<img src="<?php asset("images/quotation_form/standard_ral_colours/8014.png") ?>" width="60" height="60">
												8014
											</label>
										</p>
										<p>
											<input name="ral_colour" type="radio" id="5005" value="5005" />
											<label for="5005">
												<img src="<?php asset("images/quotation_form/standard_ral_colours/5005.png") ?>" width="60" height="60">
												5005
											</label>

											<input name="ral_colour" type="radio" id="6005" value="6005" />
											<label for="6005">
												<img src="<?php asset("images/quotation_form/standard_ral_colours/6005.png") ?>" width="60" height="60">
												6005
											</label>

											<input name="ral_colour" type="radio" id="9006" value="9006" />
											<label for="9006">
												<img src="<?php asset("images/quotation_form/standard_ral_colours/9006.png") ?>" width="60" height="60">
												9006
											</label>
										</p>

										<p>
											<input name="ral_colour" type="radio" id="3000" value="3000" />
											<label for="3000">
												<img src="<?php asset("images/quotation_form/standard_ral_colours/3000.png") ?>" width="60" height="60">
												3000
											</label>

											<input name="ral_colour" type="radio" id="7016" value="7016" />
											<label for="7016">
												<img src="<?php asset("images/quotation_form/standard_ral_colours/7016.png") ?>" width="60" height="60">
												7016
											</label>

											<input name="ral_colour" type="radio" id="9005" value="9005" />
											<label for="9005">
												<img src="<?php asset("images/quotation_form/standard_ral_colours/9005.png") ?>" width="60" height="60">
												9005
											</label>

										</p>
										<p>
											<input name="ral_colour" type="radio" id="9007" value="9007" />
											<label for="9007">
												<img src="<?php asset("images/quotation_form/standard_ral_colours/9007.png") ?>" width="60" height="60">
												9007
											</label>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m6 l6">
						<div class="card horizontal">
							<div class="card-stacked">
								<div class="card-content">
									<h4>Design panelov</h4>

									<div class="row">
										<p>
											<input name="panel_design" type="radio" id="cassete" value="cassete" />
											<label for="cassete">
												<img src="<?php asset("images/quotation_form/panel_design/cassete.png") ?>" width="150" height="100">
												Kazeta
											</label>
											<input name="panel_design" type="radio" id="s_line" value="s_line" />
											<label for="s_line">
												<img src="<?php asset("images/quotation_form/panel_design/s_line.png") ?>" width="150" height="100">
												S-Line
											</label>
										</p>
										<p>
											<input name="panel_design" type="radio" id="v_line" value="v_line" />
											<label for="v_line">
												<img src="<?php asset("images/quotation_form/panel_design/v_line.png") ?>" width="150" height="100">
												V-Line
											</label>
											<input name="panel_design" type="radio" id="w_line" value="w_line" />
											<label for="w_line">
												<img src="<?php asset("images/quotation_form/panel_design/w_line.png") ?>" width="150" height="100">
												W-Line
											</label>
										</p>
										<p>
											<input name="panel_design" type="radio" id="m_line" value="m_line" />
											<label for="m_line">
												<img src="<?php asset("images/quotation_form/panel_design/m_line.png") ?>" width="150" height="100">
												M-Line
											</label>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12 m12 l12">
						<textarea id="note" name="note" class="materialize-textarea"><?php echo $quotation["note"] ?></textarea>
						<label for="note">Note about the quotation</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12 m4 l4 offset-m4 offset-l4">
						<button class="waves-effect waves-light btn" type="submit">Submit the quotation</button>
					</div>
				</div>
			</form>

		</div>
	</div>

	<script src="<?php asset("js/app.min.js") ?>" type="text/javascript"></script>
</body>
</html>
