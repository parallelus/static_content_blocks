# Static Content Blocks

A plugin for WordPress to create reusable content to insert in posts, pages and other areas of the site.
The plugin appears in the WordPress admin under the 'Content Blocks' menu. The content created in this area 
can be inserted using a shortcode, `[static_block id="123"]`, or with the sidebar widget. 

The shortcode accepts parameters for:

<dl>
  <dt><strong>id</strong> (int | string)</dt>
  <dd>The static block ID or "slug" in WordPress</dd>
  
  <dt><strong>showtitle</strong> (bool)</dt>
  <dd>If the static block title should be included in the output. Default: false</dd>
</dl>

This can be integrated with theme options to allow users to select content sourcest for headers, footers and other design specific output. The advantage of this approach is the content saved in the plugin is still available to users if they change themes, even if the content is not output directly to the new theme.
