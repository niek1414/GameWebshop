				</div>
				<div id="footer">
					<ul>
						<li>Copyright &copy; Gameshop 2015 | </li>
						<li><a href="#">info@gameshop.nl</a> | </li>
						<li><a href="#">disclaimer</a> | </li>
						<li><a href="#">sitemap</a></li>
					</ul>
				</div>
			</div>
			<div id="right-wrapper">
				<div id="advert">
				</div>
			</div>
		</div>
        <?php 
			// show any error messages
			if (isset($err_msg)) {
				echo ('<script type="text/javascript">alert("'.$err_msg.'");</script>');
			}
		?>
	</body>
</html>