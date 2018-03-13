<?php
namespace GothicPrince\Verify;
class ThisObject {
  /**
   * @param $value
   * @return VerifyString
   */
  public static function ofString($value) {
    return new VerifyString($value);
  }
}