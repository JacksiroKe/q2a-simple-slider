<?php

class qa_html_theme_layer extends qa_html_theme_base {
	var $plugin_url;
	function __construct($template, $content, $rooturl, $request)
	{
		global $qa_layers;
		$this->plugin_url = './' . $qa_layers['Simple Slider Layer']['urltoroot'];
		qa_html_theme_base::qa_html_theme_base($template, $content, $rooturl, $request);
	}
	
	function head_css() {
		qa_html_theme_base::head_css();
		$this->output('<link href="' . $this->plugin_url . 'simple-slider.css" type="text/css" rel="stylesheet" >');
		
	}
	
	function head_script()
	{
		qa_html_theme_base::head_script();
		//$this->output('<script src="' . $this->plugin_url . 'simple-slider.js"></script>');
		$this->output('<script src="' . $this->plugin_url . 'js/jquery-1.6.3.min.js" type="text/javascript"></script>');
		$this->output('<script src="' . $this->plugin_url . 'js/cufon-yui.js" type="text/javascript"></script>');
		$this->output('<script src="' . $this->plugin_url . 'js/cufon-replace.js" type="text/javascript"></script>');
		$this->output('<script src="' . $this->plugin_url . 'js/Lobster_13_400.font.js" type="text/javascript"></script>');
		$this->output('<script src="' . $this->plugin_url . 'js/NewsGoth_BT_400.font.js" type="text/javascript"></script>');
		$this->output('<script src="' . $this->plugin_url . 'js/FF-cash.js" type="text/javascript"></script>');
		$this->output('<script src="' . $this->plugin_url . 'js/easyTooltip.js" type="text/javascript"></script>');
		$this->output('<script src="' . $this->plugin_url . 'js/script.js" type="text/javascript"></script>');
		$this->output('<script src="' . $this->plugin_url . 'js/bgSlider.js" type="text/javascript"></script>');
		$this->output('<script src="' . $this->plugin_url . 'js/jquery.easing.1.3.js" type="text/javascript"></script>');
		$this->output('<script src="' . $this->plugin_url . 'js/tms-0.3.js" type="text/javascript"></script>');
		$this->output('<script src="' . $this->plugin_url . 'js/tms_presets.js" type="text/javascript"></script>');
	}
	
	function body_suffix()
	{
		$this->output('<script type="text/javascript">Cufon.now();</script>');
		$this->output('<script type="text/javascript">
	$(window).load(function () {
		$(\'.slider\')._TMS({
			duration: 1000,
			easing: \'easeOutQuart\',
			preset: \'simpleFade\',
			slideshow: 5000,
			banners: \'fade\',
			pauseOnHover: true,
			waitBannerAnimation: false,
			pagination: \'.pags\'
		});
	});');
		$this->output('</script>');
	}
}
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
