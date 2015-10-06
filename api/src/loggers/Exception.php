<?php

/**
 * @file
 *
 * Define autoload class.
 */

namespace Drupal\realistic_dummy_content_api\loggers;

/**
 * An \Exception.
 */

class Exception extends \Exception {

  // When returning the caller of the function which resulted in the \Exception
  // we need to go 4 levels deep. When returning the called function, we also
  // need to 4 levels deep, but call GetCaller() through another function which adds
  // a level (GetCalled()).
  const REALISTIC_DUMMY_CONTENT_BACKTRACE_LEVEL =  4;

  function __construct($message) {
    parent::__construct($message);
    $this->Log();
  }

  function Log() {
    $message = $this->getMessage() . ' (' . $this->GetCaller() . ' called ' . $this->GetCalled() . ')';
    debug($message);
    if (\Drupal::moduleHandler()->moduleExists('devel')) {
      dpm($message);
    }
  }

 /**
  * Returns the calling function through a backtrace
  */
  static function GetCaller() {
    // a funciton x has called a function y which called this
    // see stackoverflow.com/questions/190421
    $caller = debug_backtrace();
    $caller = $caller[Exception::REALISTIC_DUMMY_CONTENT_BACKTRACE_LEVEL];
    $r = $caller['function'] . '()';
    if (isset($caller['class'])) {
      $r .= ' in ' . $caller['class'];
    }
    if (isset($caller['object'])) {
      $r .= ' (' . get_class($caller['object']) . ')';
    }
    return $r;
  }

 /**
  * Returns the called function through a backtrace
  */
  static function GetCalled() {
    // Get caller will return the called function because the simple fact
    // of using another function will make the backtrace one-level deeper
    return self::GetCaller();
  }

}
