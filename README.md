# wp-current-language
Library/helper for determining the current language selected (different multilingual plugins)


### [Polylang](https://wordpress.org/plugins/polylang/)
Supports the WPML style 
[`ICL_LANGUAGE_CODE`](https://polylang.pro/doc/wpml-api/) constant 
and additionally exposes its own native function 
[`pll_current_language(name, locale or slug)`](https://polylang.wordpress.com/documentation/documentation-for-developers/functions-reference/).


### [WPML](https://wpml.org)
Stores the current locale in 
[`ICL_LANGUAGE_CODE`](https://wpml.org/documentation/support/wpml-coding-api/).


### [qtranslate-x](https://wordpress.org/plugins/qtranslate-x/)

#### Older versions (qtranslate without the 'x'?):
`qtrans_getLanguage()` 
[Compatibility code in recent version](https://github.com/qTranslate-Team/qtranslate-x/blob/e0e0c378308a5c1c7746357f04c41326feb05d64/qtranslate_compatibility.php#L30)

#### Recent versions:
[`qtranxf_getLanguage()`](https://github.com/qTranslate-Team/qtranslate-x/blob/e0e0c378308a5c1c7746357f04c41326feb05d64/qtranslate_utils.php#L465)


### [Babble](https://github.com/Automattic/babble)
[`bbl_get_current_lang()->code`](https://github.com/Automattic/babble/blob/7f89ef408984f5399a9be8bf4394dfb4e46125b2/api.php#L519)


### [Multilingual Press](https://wordpress.org/plugins/multilingual-press/)
(Relevant issue: https://github.com/inpsyde/MultilingualPress/issues/263)

#### Current release (global namespace):
[`mlp_get_current_blog_language($short = FALSE)`](https://github.com/inpsyde/MultilingualPress/blob/60b1b30f6ba910d04f6f6cbc8a1a9717c02529f3/src/inc/functions.php#L38)

#### Newer release (`Inpsyde\MultilingualPress` namespace):
[`get_current_site_language($language_only)`](https://github.com/inpsyde/MultilingualPress/blob/0bd4961e6fb16a76bb292c7bed52ccb5a0d42231/inc/functions.php#L323)


### [Transposh](https://wordpress.org/plugins/transposh-translation-filter-for-wordpress/)
```php
transposh_get_current_language()
````


### [xili-language](https://wordpress.org/plugins/xili-language/)
`xili_curlang()`

`the_curlang()` (soon obsolete according to source comment)



### [Lingotek Translation](https://wordpress.org/plugins/lingotek-translation/)
Seems to use Polylang - and only acts as source for translation data.


## Forgot a plugin?
Please create an issue and tell me!
