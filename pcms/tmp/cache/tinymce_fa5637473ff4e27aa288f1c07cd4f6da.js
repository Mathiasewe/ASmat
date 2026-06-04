<br />
<b>Deprecated</b>:  Using unregistered function "strpos" in a template is deprecated and will be removed in a future release. Use Smarty::registerPlugin to explicitly register a custom modifier. in <b>C:\xampp\htdocs\pcms\lib\smarty\sysplugins\smarty_internal_compile_private_modifier.php</b> on line <b>113</b><br />
<br />
<b>Deprecated</b>:  Using unregistered function "strpos" in a template is deprecated and will be removed in a future release. Use Smarty::registerPlugin to explicitly register a custom modifier. in <b>C:\xampp\htdocs\pcms\lib\smarty\sysplugins\smarty_internal_compile_private_modifier.php</b> on line <b>113</b><br />
tinymce.init({
	selector: 'textarea.TinyMCE',

	language: 'pl',

	license_key: 'gpl',
	promotion: false,
	onboarding: false,

	cmsms_tiny: cmsms_tiny = {
					linker_text : 'Link to content page',
			linker_title : 'Create a link to a content page',
			linker_image : 'http://localhost/pcms/modules/TinyMCE/lib/images/cmsmslink.gif',
			linker_url : 'http://localhost/pcms/admin/moduleinterface.php?mact=TinyMCE,m1_,linker,0&__c=2c03cd85861d10cb41e&showtemplate=false',
			linker_autocomplete_url : 'http://localhost/pcms/admin/moduleinterface.php?mact=TinyMCE,m1_,ajax_getpages,0&__c=2c03cd85861d10cb41e&showtemplate=false',
			linker_href : 'Generated URL',
			prompt_page : 'Enter Page title',
			prompt_page_info : 'This is an auto complete field. Begin by typing a few characters of the desired page alias, menu text, or title. Any matching items will be displayed in a list.',
			prompt_alias : 'Selected Page alias',
			prompt_alias_info : 'This field is read only',
			prompt_text : 'Text to display',
			prompt_class : 'Class attribute',
			prompt_rel : 'Rel attribute',
			prompt_target : 'Target',
			tab_general : 'General',
			tab_advanced : 'Advanced',
			target_none : 'None',
			target_new_window : 'New window',
			loading_info : 'Loading...',
		
		filepicker_title: 'CMSMadeSimple wyb&oacute;r plik',
        filebrowser_title: 'Select a file',

        	},
			relative_urls: true,
		document_base_url: 'http://localhost/pcms/',
	browser_spellcheck: true,

	forced_root_block: 'p',
	newline_behavior: 'default',

		plugins: 'autolink anchor code fullscreen image link media table visualblocks lists cmsms_linker  autoresize',

		
	contextmenu: " cmsms_linker link image | inserttable table | cmsms_template",

				menubar: false,
	
				toolbar1: 'formatselect | bold italic underline | cmsms_linker link image',
			
				statusbar: false,
	
				resize: false,
	
	height: 20,
	autoresize_min_height: 10,
	autoresize_max_height: 600,
	autoresize_bottom_margin: 10,

		

		
		
		
		
		

		external_plugins: {
					"cmsms_linker" : "http://localhost/pcms/modules/TinyMCE/lib/js/tinymce_external_plugins/cmsms_linker/plugin.js",
							"cmsms_filepicker" : "http://localhost/pcms/modules/TinyMCE/lib/js/tinymce_external_plugins/cmsms_filepicker/plugin.js",
					},

				file_picker_types: 'file image media',
			
		urlconverter_callback: function(url, elm, onsave, name) {
		var self = this;
				var convertUrls = tinymce.activeEditor.options.get('convert_urls')
		var relativeUrls = tinymce.activeEditor.options.get('convert_urls')
		var removeScriptHost = tinymce.activeEditor.options.get('remove_script_host')

		if (!convertUrls || ( elm && elm.nodeName == 'LINK' ) || url.indexOf('file:') === 0 || url.length === 0) {
			return url;
		}

		// fix entities in cms_selflink urls.
		if (url.indexOf('cms_selflink') != -1) {
			decodeURI(url);
			url = url.replace('%20', ' ');
			return url;
		}
		// Convert to relative
		if (relativeUrls) {
			return self.documentBaseURI.toRelative(url);
		}

		// Convert to absolute
		url = self.documentBaseURI.toAbsolute(url, removeScriptHost);
		return url;
	},


	setup: function(editor) {
		editor.on('change', function(e) {
			$(document).trigger('cmsms_formchange');
		});

				

				

				
	},

				paste_as_text: true,
image_caption: true
	

});
