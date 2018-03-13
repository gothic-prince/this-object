<?php
namespace GothicPrince\Verify;
class ThisObject {
  /**
   * @param $value
   * @return should
   */
  public static function ofString($value) {
    return new Should($value);
  }
}