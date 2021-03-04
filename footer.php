<footer class="footer" >
	
</footer>

<?php
	wp_footer();
	if(function_exists('get_common_file_path')){
		include(get_common_file_path('footer'));
	}
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>
