# `1.0.0` Font Awesome Icons (faicon)

This extension provides a new content element of type "Timeline" (ce_timeline) that contains inline records of different timeline entries. Please note that this is not a plugin and there are no records visible in any list view by default. Feel free to use the code or the extension as a basis for your own stuff.

## Features:

- Adds a FontAwesome Icon-Selector to the page properties

## Installation

Install the extension by downloading it in the extension manager or on https://extensions.typo3.org/extension/ce_timeline/.

## Basic configuration

You don't need to configure anything to get this extension running.
But clear your caches after installing.

### Example Usage

Example of using the icon field in a menu.

```
<a class="nav-link">
   <f:if condition="{menu.data.tx_faicon_icon}">
       <i class="{menu.data.tx_faicon_icon}"></i>
   </f:if> {menu.title}
</a>
```

## Support & Service

If you have any problems with the extension, please let me know! Since this is open source, I only guarantee 100% expert support when I get paid, but I also like to support the community. Please don't hesitate to open an issue here on GitHub or send a message: https://simon-koehler.com/en/contact

## Help me to keep the System up-to-date!

Many times if there is a special request, I just do it for free. I believe in the power of open source and free software. I also believe in you and your projects. If you like my work and you want to ensure further development, please don't hesitate to make a donation here: https://paypal.me/typo3freelancer

## Do you want to learn TYPO3? Here's what you need:
Video Training TYPO3 9 LTS (German language)
https://www.digistore24.com/redir/246076/GOCHILLA/
