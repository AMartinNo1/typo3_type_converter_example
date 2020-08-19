# TYPO3 Type Converter Example

This extension provides an example for a custom `TypeConverter`.

As this is a demo ext. for TYPO3 I took the liberty to use the T3 icon as ext. icon. Leave me a message
via GitHub issues and I'll change that.

## How to use it:

1. `git clone git@github.com:AMartinNo1/typo3_type_converter_example.git`
2. `cd typo3_type_converter_example`
3. `ddev install-v10`
4. `ddev ssh`
5. `vim v10/config/sites/main/config.yaml` and append following code:
```
routeEnhancers:
    Example:
        type: Extbase
        extension: Typo3TypeConverterExample
        plugin: Example
        routes:
            - { routePath: '/{person}', _controller: 'Example::show', _arguments: {'person': 'person'}}
```
6. Log into the [v10 Backend](http://v10.typo3-type-converter-example.ddev.site/typo3/) (credentials: `admin` / `password`)
7. Add the Plugin "Example for TypeConverter" to the root page (uid=1)
8. Open http://v10.typo3-type-converter-example.ddev.site/max+muster

## Credits

Thanks Armin Vieweg for providing [ddev for typo3 repository](https://github.com/a-r-m-i-n/ddev-for-typo3-extensions)!
