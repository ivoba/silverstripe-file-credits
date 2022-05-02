# SilverStripe Image Credits module

Add credits to your image uploads

## Usage

    SilverStripe\Assets\Image:
        extensions:
            - App\Extension\ImageCreditsExtension
    SilverStripe\AssetAdmin\Forms\ImageFormFactory:
        extensions:
            - App\Extension\FileFormFactoryExtension



### todo
- more generic file-credits ?
- can i clear extensions declared in module ?
- i18n
- Credits 
- Credit Name
- Credit Link
- Credit Licence
- https://medium.com/menlo-office/the-proper-way-to-give-credit-on-an-image-posted-on-a-website-8a8442bb2e28
- add licence dropdown https://github.com/opendatanz/silverstripe-creativecommons