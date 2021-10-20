<?php

namespace Drupal\promo_home_slider\Plugin\views\style;

use Drupal\core\form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style plugin to render a list of years and months
 * in reverse chronological order linked to content.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "promo_home_slider",
 *   title = @Translation("Promo Home Slider"),
 *   help = @Translation("Render a list of years and months in reverse chronological order linked to content."),
 *   theme = "promo_home_slider",
 *   theme_file = "promo_home_slider.theme.inc",
 *   display_types = { "normal" }
 * )
 */
class Promo_Home_Slider extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * {@inheritdoc}
   */
  protected $usesFields = TRUE;

  /**
   * {@inheritdoc}
   */
  protected $usesOptions = TRUE;

  /**
   * {@inheritdoc}
   */
  public function evenEmpty() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();
    $options['id'] = ['default' => 'promo_home_slider'];
    return $options;
  }
    
}
