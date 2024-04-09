
	<footer>
		<p><br><br><?php
			printf("Generated %s GMT using <a href=\"%s\">Simplified Saaze</a>%s%s<br><br>\n",
				date('d-M-y H:i'), '/blog/2021/10-31-simplified-saaze',
				getenv('NON_NGINX') ? '' : ', Web-Server <a href="https://nginx.org">NGINX</a>',
				isset($_SERVER['REQUEST_TIME_FLOAT']) ? sprintf(", rendered in %.2f ms",1000 * (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])) : ''
			);
			?>
		</p>
	</footer>

</body>
</html>
