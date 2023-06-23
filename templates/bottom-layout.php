
	<footer>
		<p><br><br><?php
			printf("Generated %s GMT using <a href=\"%s\">Simplified Saaze</a>%s<br><br>\n",
				date('d-M-y H:i'), '/blog/2021/10-31-simplified-saaze',
				getenv('NON_HIAWATHA') ? '' : ', served by <a href="https://hiawatha-webserver.org">Hiawatha</a>');
			?>
		</p>
	</footer>

</body>
</html>
