# acf-repeater-to-icons

A small wordpress plugin for a clients website. 

This plugin uses shortcode to displays social media links as clickable icons from URLs stored in an [ACF](https://www.advancedcustomfields.com/) repeater field on each business page. 


![acf-icons](https://user-images.githubusercontent.com/79979868/117466216-5dbc6300-af4a-11eb-8f22-24285e89592b.PNG)


You can see a live version in action [here.](https://roytoncommunityhub.co.uk/business/the-secret-sip/)

# To use: 

* Zip this repo and install it as a plugin to your wordpress site. 

* The plugin assumes you have ACF setup with a repeater field called 'social_media' and an ajoining sub field called 'url', but with some PHP knowledge this can easily be changed. 

* [Read me](https://www.advancedcustomfields.com/resources/repeater/) for more information about ACF and repeater fields.

* You can use the short code [acfsocial] to call the plugin and display a listings associated social media links wherever you like. 

* Alter the acf-repeater-icons class CSS to style your icons. *Note:* You will need to include font-family: ETmodules; to get the correct icons from the unicode used in the plugin. 

CSS for example: 

```css
.acf-repeater-icons{
	font-family: ETmodules;
	color: #f94743;
	font-size: 25px !important;
	letter-spacing: 15px;
}
```
