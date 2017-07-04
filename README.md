# wp-current-language
Library/helper for determining the current language selected (different multilingual plugins)


### [Polylang](https://wordpress.org/plugins/polylang/)
[Also supports](https://polylang.pro/doc/wpml-api/) this constant and 
exposes its own native function [pll_current_language(name, locale or slug)](https://polylang.wordpress.com/documentation/documentation-for-developers/functions-reference/).


### [WPML](https://wpml.org)
Stores the current locale in [ICL_LANGUAGE_CODE](https://wpml.org/documentation/support/wpml-coding-api/)


### [qtranslate-x](https://wordpress.org/plugins/qtranslate-x/)
Exposes the current selected language using the qtrans_getLanguage (older versions) or 
qtranxf_getLanguage (newer versions) functions.


### [Babble](https://github.com/Automattic/babble)
```php
$current_lang = bbl_get_current_lang()
$current_lang->code
````


### [Multilingual Press](https://wordpress.org/plugins/multilingual-press/)
(Relevant issue: https://github.com/inpsyde/MultilingualPress/issues/263)

#### Current release (global namespace):
```php
mlp_get_current_blog_language(short?)
````

#### Newer release (`Inpsyde\MultilingualPress` namespace)
```php
get_current_site_language()
````


### [Transposh](https://wordpress.org/plugins/transposh-translation-filter-for-wordpress/)
```php
transposh_get_current_language()
````


### [xili-language](https://wordpress.org/plugins/xili-language/)
````php
xili_curlang()
````

#### soon obsolete according to source comment)
`the_curlang()`



### [Lingotek Translation](https://wordpress.org/plugins/lingotek-translation/)
Seems to use Polylang - and only acts as source for translation data.


## Forgot a plugin?
Please create an issue and tell me!
