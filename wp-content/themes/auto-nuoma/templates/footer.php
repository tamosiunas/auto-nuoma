<footer class="footer-content-info">
	<div class="container">
		<h1>Kontaktai</h1>
	</div>

	<div  class="footer-map" onclick="document.getElementById('iframe-map').style.pointerEvents= 'auto'">
		<iframe id="iframe-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9166.971772746041!2d23.761858847762642!3d54.94252797650508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e71fe4d76daa07%3A0xefe676ce4f1242ce!2sDainavos+g.+11%2C+Raudondvaris+54119!5e0!3m2!1slt!2slt!4v1489329051251" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="footer-content-address">
		<div class="container">
			
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<dl class="footer-contact-info">
						<dt>Adresas:</dt>
						<dd class="heading-5">Dainavos - 1, Raudondvaris, 
							<br class="hidden visible-lg-block">
							Kauno raj., Lietuva.
						</dd>
						
					</dl>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<dl>
						<dt>Mob. Nr.:</dt>
						<dd>	
							<a href="callto:#">+370 6 00 00 000</a>
						</dd>
					</dl>
					<dl>
						<dt>E-paštas:</dt>
						<dd>
							<a href="mailto:#">pirk-nuomok-auto@auto.com</a>
						</dd>
					</dl>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 footer-logo">
					<a class="logo navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"></a>
				</div>

			</div>
		</div>
	</div>
	<div class="container">
		<div class="footer-copyright">
			<p>© Visos Teisės Saugomos</p>
		</div>
	</div>
	<?php /*dynamic_sidebar('sidebar-footer');*/ ?>
</footer>
