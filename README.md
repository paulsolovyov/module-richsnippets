# PaulSolovyov RichSnippets

    ``paulsolovyov/module-richsnippets``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Local Business Rich Snippets for Magento 2 Stores

![image](https://user-images.githubusercontent.com/108321336/218647568-2680a5e1-bbbb-49b8-b49c-fe3002e13b59.png)


## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/PaulSolovyov`
 - Enable the module by running `php bin/magento module:enable PaulSolovyov_RichSnippets`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Compile the code `php bin/magento setup:di:compile`\*
 - Generate theme files `php bin/magento setup:static-content:deploy`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - public repository `packagist.org`
    - public github repository as vcs
 - Install the module composer by running `composer require paulsolovyov/module-richsnippets:dev-master`
 - enable the module by running `php bin/magento module:enable PaulSolovyov_RichSnippets`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`
