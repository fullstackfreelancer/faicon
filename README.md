# faicon - TYPO3 Extension `VERSION 1.2.0`

This extension provides Font Awesome Icons for the TYPO3 page settings in the backend, and Icons for the Bootstrap Package in the frontend.

## Features:

- Provides menu icons for the TYPO3 Bootstrap Package
- Adds a FontAwesome Icon-Selector to the page properties

## Installation

Install the extension by downloading it in the extension manager or on https://extensions.typo3.org/extension/faicon/.

## Basic configuration

You don't need to configure anything to get this extension running.
But clear your caches after installing.

### Using faicon with the Bootstrap Package

You can simply include the static TypoScript "Faicon: Icons for Bootstrap Package" into your root template to make faicon overwrite the template of the Bootstrap Package.
The extension overwrites the main navigation template by adding a new partial root path like this:

```
page{
    10{
        partialRootPaths{
            0 = EXT:bootstrap_package/Resources/Private/Partials/Page/
            1 = EXT:bootstrap_package/Resources/Private/Partials/Page/
            5 = EXT:faicon/Resources/Private/BootstrapPackage/Partials/Page/ (new path by faicon)
        }
    }
}
```

If you want to change the order of the paths, or the sequential number is already used by another extension, you can do that by adding a few lines in your TypoScript setup:

```
// Adding a new path (use any random number that is higher than the last existing one)
page.10.partialRootPaths.765 = EXT:faicon/Resources/Private/BootstrapPackage/Partials/Page/

// Alternative: Clear the entry and set a new path
page.10.partialRootPaths.5 >
page.10.partialRootPaths.5 = mypath/myfolder/

```

### Example Usage in your Fluid-Templates

Example of using the icon field in a menu.
(Assuming your menu entry has the variable name "{menu}")

```
<a class="nav-link">
   <f:if condition="{menu.data.tx_faicon_icon}">
       <i class="{menu.data.tx_faicon_icon}"></i>
   </f:if> {menu.title}
</a>
```

## Support Development

I believe in the power of open source and free software. I also believe in you and your projects.
If you like my work and you want to ensure further development, please support it here:

- https://paypal.me/typo3freelancer

## Support & Service

If you have any issues with the extension, please let me know!
Don't hesitate to send a message: https://simon-koehler.com/en/contact

## Do you want to learn TYPO3? Here's what you need:
Video Training TYPO3 9 LTS (German language)

- https://www.digistore24.com/redir/246076/GOCHILLA/

## Hire Simon Köhler as a TYPO3 Freelancer

- https://simon-koehler.com/en
