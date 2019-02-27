Admin Custom Backend Image
==========================

Custom admin backend image for Magento 2.x


## Installation via Composer
```bash
composer require marlosoft/module-backend-image
```

## Manual Installation
1. Download the chat plugin source.
2. Create new folder `app/code/Marlosoft/BackendImage/`.
3. Copy all source files into the newly created directory.
4. Run setup upgrade command.
    ```bash
    php bin/magento setup:upgrade
    ```
5. Run cache flush command.
    ```bash
    php bin/magento cache:flush
    ```
6. That's it! The extension should be already installed.
