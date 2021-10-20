<?php

/**
 * @file
 * Theme for promo_home_slider views.
 */

//template_preprocess_flexslider_views_style
function template_preprocess_promo_home_slider(array &$variables) {
  
  if (empty($variables['view'])) {
    return;
  }

  $view = $variables['view'];
  $style = $view->style_plugin;
  $options = $style->options;

  $items = [];
  $settings = [];
  
  foreach ($variables['rows'] as $row) {
    $items[] = render($row);
  }

  $content = [
      'items' => $items,
  ];

  // Add the slide items to the variables.
  $variables['content'] = $content;

  
  
}