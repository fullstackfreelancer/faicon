# ![](https://github.com/fullstackfreelancer/faicon/blob/master/ext_icon.png?raw=true) Font Awesome Integration for TYPO3 CMS (faicon)

## What is Font Awesome Icon (faicon) for TYPO3?

Faicon provides the latest version of FontAwesome for your TYPO3 project, including icon files and CSS. If you install this extension, you no longer need a CDN link to use FontAwesome (free web). Faicon provides a new field in the page properties where you can assign a FontAwesome icon to your page via a dropdown menu. You can then use the icon in your Fluid template or menu in various ways. Read on to learn how.

## Features

- Supports TYPO3 Version 12.4 to 13.4.9
- Adds a new field to the page properties that allows editors to select a FontAwesome Icon from a list
- Current version of Font Awesome: 6.7.2

## Installation

Install the extension by downloading it in the extension manager or on https://extensions.typo3.org/extension/faicon/.

## Basic configuration

You can integrate the configuration into your website in two ways:

1. Via the site settings for the entire site
2. Via a template record for specific subpages

### Example Usage in your Fluid-Templates

Example of using the icon field in a menu.
(Assuming your menu entry has the variable name "{menu}")

```html
<a class="nav-link">
   <f:if condition="{menu.data.tx_faicon_icon}">
       <i class="{menu.data.tx_faicon_icon}"></i>
   </f:if> {menu.title}
</a>
```

## Support Development

I believe in the power of open source and free software. I also believe in you and your projects.
If you like my work and you want to ensure further development, please support it here:

- https://paypal.me/fullstackfreelancer

## Support & Service

If you have any issues with the extension, please let me know!
Don't hesitate to send a message: https://kohlercode.com/contact

## Hire me as your TYPO3 or PHP Freelancer

- https://kohlercode.com/typo3-freelancer
