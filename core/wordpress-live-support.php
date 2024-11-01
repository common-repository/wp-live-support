<?php
/***************************************************************
	@
	@	WordPressLiveSupport class
	@	bassem.rabia@gmail.com
	@
/**************************************************************/
class WordPressLiveSupport{
	/***************************************************************
	@
	@	WordPress Live Support Construct
	@
	/**************************************************************/
	public function __construct($name, $ver){
		$this->plugin_name 					= $name;
		$this->plugin_version				= $ver;
		
		add_action('in_admin_footer',array(&$this,'WordPressLiveSupport'));  
		add_action('admin_enqueue_scripts',array(&$this,'WordPressLiveSupportScript')); 
	} 
	
	/***************************************************************
	@
	@	WordPress Live Support Remote Script
	@
	/**************************************************************/
	public function WordPressLiveSupportScript(){
		wp_enqueue_script('WordPressLiveSupportScript', plugins_url('js/WordPressLiveSupportScript.js', __FILE__)); 
	}
	
	/***************************************************************
	@
	@	WordPress Live Support Style
	@
	/**************************************************************/
	public function WordPressLiveSupport(){
		?>
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		Tawk_API.visitor = {
			name : '<?php bloginfo("name");?>',
			email : '<?php bloginfo("admin_email");?>'
		};
		(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/5dc047a1e4c2fa4b6bd9ed1e/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->
		<?php 
	}	
}	 
?>