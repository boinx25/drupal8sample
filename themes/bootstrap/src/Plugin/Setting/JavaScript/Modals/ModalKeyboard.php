<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\JavaScript\Modals\ModalKeyboard.
 */

namespace Drupal\bootstrap\Plugin\Setting\JavaScript\Modals;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "modal_keyboard" theme setting.
 *
 * @BootstrapSetting(
 *   id = "modal_keyboard",
 *   type = "checkbox",
 *   title = @Translation("keyboard"),
 *   description = @Translation("Closes the modal when escape key is pressed."),
 *   defaultValue = 1,
 *   groups = {
 *     "javascript" = @Translation("JavaScript"),
 *     "modals" = @Translation("Modals"),
 *     "options" = @Translation("Options"),
 *   },
 * )
 */
class ModalKeyboard extends SettingBase {

  /**
   * {@inheritdoc}
   */
  public function drupalSettings() {
    return !!$this->theme->getSetting('modal_enabled');
  }

}
