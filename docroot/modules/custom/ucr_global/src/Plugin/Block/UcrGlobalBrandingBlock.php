<?php

namespace Drupal\ucr_global\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'UCR Global: Branding for Footer' block.
 *
 * @Block(
 *   id = "ucr_global_footer_branding",
 *   admin_label = @Translation("Displays the Footer Branding")
 * )
 */
class UcrGlobalBrandingBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    return array(
      '#type' => 'markup',
      '#markup' => 'UC Riverside <br/>900 University Ave.<br/>Riverside, CA 92521<br/><br/>Tel: (951) 827-1012',
    );
  }

}
