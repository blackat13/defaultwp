Abelltech theme
Author: charlie

Theme is a compilation of the following:
	WP bootstrap 			http://320press.com/wpbs/
	Bones Theme 			http://themble.com/bones/
	Options Framework		http://www.wptheming.com
	HTML5 Boilerplate		http://html5boilerplate.com/

::Features
	LESS/SASS
	Responsive
	twitter bootstrap
	options framework //option.php
	
:::Menus
	Main Menu
	Footer Links
	
::PLugins
	Advanced Custom Fields
		Flexible Content Field
		Gallery Field
		Options Page
		Repeater Field
	Contact form 7
	WordPress SEO by Yoast
	
::Custom plugins
	bones_related_posts()
	
	
::Widgets

[=============== [ Contents ] ==========================]

[1]		Enqueue styles
[2]		Enqueue scripts
[3]		Theme Support
[4]		Content Width
[5]		Thumbnails
[6]		Sidebar
[7]		Post Formats
[8]		Menu Walker (Walker_Nav_Menu)
[9]		Menu (register_nav_menus)
[10]	Comments Layout
[11]	Editor styling
[12]	Translation Files
[13]	bones_head_cleanup()
[14]	bones_wpsearch() [ search form ]
[15]	bones_main_nav() [ main navigation ]
[16]	bones_footer_links() [footer navigation]
[17]	bones_related_posts()
[18]	page_navi() [post pagination]
[19]	get_wpbs_theme_options()
[20]	getACFfield()
[21]	acfslider() [advance custom fields jquery slider]
	


[1][===================[ Enqueue styles (add stylesheets) ]===========================]
	
	file: /functions.php
	line: 328
	wp codex: http://codex.wordpress.org/Function_Reference/wp_enqueue_style
	description:
		add additonal stylesheets here, make sure you specify a unique handle name to avoid conflicts with plugins

	
[2][===================[ Enqueue scripts here (add javascript) ]======================]
	
	file: /functions.php
	line: 343
	wp codex: http://codex.wordpress.org/Function_Reference/wp_register_script
	description:
		add additonal scripts here, make sure you specify a unique handle name to avoid conflicts with plugins


[3][===================[ Theme Support (custom header, custom background)]=============]

	file: /library/bones.php
	line: 57
	wp codex: http://codex.wordpress.org/Function_Reference/add_theme_support
	description:
		Allows a theme or plugin to register support of a certain theme feature. If called from a theme, 
		it should be done in the theme's functions.php file to work. 
		It can also be called from a plugin if attached to an action hook.

	
[4][===================[ Content Width ]===============================================]

	file: /functions.php
	line: 36
	wp codex: http://codex.wordpress.org/Content_Width
	description:
		WordPress can scale oEmbed code to a specific size (width) in the front-end, 
		and insert large images without breaking the main content area. 
		Also, using this feature you lay the ground for other plugins to perfectly integrate with any theme,
		since plugins can access the value stored in $content_width.
	

[5][===================[ Thumbnails Sizes ]=============================================]

	file: /functions.php
	line: 42
	description:
		programatically add thumbnails here, remember to rebuild thumnials using the AJAX Thumbnail Rebuild plugin.
		you should be able to rebuild the thumbs

		to add more sizes, simply copy a line from above 
		and change the dimensions & name. As long as you upload a "featured image" as large as the biggest
		set width or height, all the other sizes will be auto-cropped. To call a different size, simply change the text
		inside the thumbnail function.

		For example, to call the 300 x 300 sized image, 

		we would use the function:

		<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
		for the 600 x 100 image:
		<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

		You can change the names and dimensions to whatever
		you like. Enjoy!

	
[6][====================[ Sidebar ]======================================================]

	file: /functions.php
	line: 52
	description:
		to add more sidebars or widgetized areas, just copy and edit the above sidebar code. In order to call
		your new sidebar just use the following code:

		NOTEEEEEEEEEEEEEEEEEEEEe
		Just change the name to whatever your new

		sidebar's id is, for example:
		To call the sidebar in your template, you can just copy the sidebar.php file and rename it to your sidebar's name.
		So using the above example, it would be:

		sidebar-sidebar2.php

[7][===================[ Post Formats ]==================================================]	

	file: /library/bones.php
	line: 64
	wp codex: http://codex.wordpress.org/Post_Formats
	description:
		A Post Format is a piece of meta information that can be used by a theme to customize its presentation of a post.
		use this to specify multiple post formats for posts
		ex:
		 get_post_format($post->ID)


[8][===================[ Menu Walker (Walker_Nav_Menu) ]==================================]	
	
	file: /functions.php
	line: 251
	description:
		wp_nav menu format generated here
		
		
[9][===================[ Menu (register_nav_menus) ]======================================]	
	
	file: /library/bones.php
	line: 78
	wp codex: http://codex.wordpress.org/Navigation_Menus
	description:
		add an additional custom menu

	
[10][===================[ Comments Layout ]===============================================]	
	
	file: /functions.php
	line: 104
	description:
		Comments layout markup, edit this to modify the layout of the comments section

	
[11][==================[ Editor styling ]===================================================]
	
	file: /functions.php
	line: 314
	description:
		use editor-style.css to add styling to editor
		adapt styling here from content styling so even when editing pages through the editor, 
		it should preview what it looks like on an actual page.

	
[12][===================[ Translation Files ]===============================================]
	file: /library/bones.php
	line: 12
	wp codex: http://codex.wordpress.org/Function_Reference/load_textdomain.
	description:
		put .pot files indicated here

	
[13][===================[ bones_head_cleanup() ]============================================]

	file: /library/bones.php
	line: 19
	description:
		cleans up the wordpress head of unwanted info, needed for added security, removes the following
			Category Feeds
			Post and Comment Feeds
			EditURI link
			Windows Live Writer
			index link
			previous link
			start link
			Links for Adjacent Posts
			WP version
	
	
[14][===================[ bones_wpsearch() [search form]  ]==================================]	
	
	file: /functions.php
	line: 161
	description:
		Search form layout

	
[15][===================[ bones_main_nav() [main navigation] ]================================]	
	
	file: /library/bones.php
	line: 96
	description:
		function used to show wp_nav_menu on header, description_walker() is used here which is specified
		on;
			file: /functions.php
			line: 251

	
[16][===================[ bones_footer_links() [footer navigation] ]==========================]	
	
	file: /library/bones.php
	line: 110
	description:
		function used to show wp_nav_menu on footer


[17][===================[ bones_related_posts() ]=============================================]	
	
	file: /library/bones.php
	line: 137
	description:
		show related post in relation with post's "post tag"
	
	
[18][===================[ page_navi() (post pagination) ]=====================================]	

	file: /library/bones.php
	line: 162
	wp codex: http://codex.wordpress.org/Template_Tags/get_posts
	description:
		post pagination, include this after loop initilization,
		post per page is defined during loop initialization ex;
		<?php $posts_array = get_posts('posts_per_page'  => 5); ?> 
	
	
[19][===================[ get_wpbs_theme_options() ]==========================================]	

	file: /functions.php
	line: 364	
	description:
		theme options code for adding frontend styles on pages/

	
[20][===================[ getACFfield() ]=====================================================]	

	file: /functions.php
	line: 488	
	description:
		retrieve Advance custom values
		getACFField()
		@fieldname	string		fieldname to show
		@parent		string		parent fieldname for repeater fields
		@option		string		put option to specify if field group is set to options page //Revise
		@repeater	boolean		true/false if field is a repeater
		@notlink	boolean		true/false if function is used on an href attribute //Revise
	
	Usage:	
	<?php getACFfield('section_link','section_specials','option',true,false) ?>	
	fieldname section_link under parent field section_specials, options page, is a repeater field, false to be used on tag attribute
	
	<?php getACFfield('section_content','section_specials','option',true) ?>		
	<?php getACFfield('section_content','','option',true) ?>
	<?php getACFfield('section_content','','',true) ?>
	

[21][===================[ acfslider() (advance custom fields ) ]================================]	

	file: library/acf-templates/acf-slides.php
	description:
		Template for slider integration, 
		uses Cycle2 jquery plugin http://www.malsup.com/jquery/cycle2/ check link for parameters
	Usage:
		templates:
			<?php 
				$param['fieldname'] = 'homepage_slider';
				$param['caption'] = true;
				$param['optionpage'] = 'option';
				$param['class'] = 'home-acfslider';
				$param['nav'] = true;
				$param['pager'] = true;
				$param['param']  = 'data-cycle-fx="scrollHorz" data-cycle-timeout="2000"';
				acfslider($param); 
			?>
		shortcode:
			[acfslider caption=true fieldname='homepage_slider' param="data-cycle-fx=scrollHorz data-cycle-timeout=2000"]
			
			
:::Reference sites

Yoast SEO guides here
http://yoast.com/articles/wordpress-seo/

Responsive guides
http://webdesignerwall.com/tutorials/setting-breakpoints-in-responsive-design
http://webdesignerwall.com/tutorials/5-useful-css-tricks-for-responsive-design

twitter bootstrap shortcodes
http://320press.com/wpbs/features/shortcode-reference/

Bones theme
http://wp.tutsplus.com/tutorials/theme-development/making-a-theme-with-bones-getting-started/

cycle2 parameters used for $param
http://www.malsup.com/jquery/cycle2/

LESS compiler for windows
http://winless.org/
