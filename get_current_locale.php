<?php

function get_current_locale() {


  // Polylang + WPML
  if (defined('ICL_LANGUAGE_CODE')) {
    return ICL_LANGUAGE_CODE;
  }


  // qtranslate-x
  if(function_exists('qtranxf_getLanguage')) {
    return qtranxf_getLanguage();
  }


  // Babble
  if(function_exists('bbl_get_current_lang')) {
    return bbl_get_current_lang()->code;
  }


  // Multilingual Press

  // Current versions
  if(function_exists('mlp_get_current_blog_language')) {
    return mlp_get_current_blog_language();
  }

  // Future versions
  if(function_exists('Inpsyde\MultilingualPress\get_current_site_language')) {
    return Inpsyde\MultilingualPress\get_current_site_language();
  }


  // Transposh
  if(function_exists('transposh_get_current_language')) {
    return transposh_get_current_language();
  }


  // xili-language
  if(function_exists('xili_curlang')) {
    return xili_curlang();
  }


  // qtranslate (without 'x')
  if(function_exists('qtrans_getLanguage')) {
    return qtrans_getLanguage();
  }


  return false;
}
