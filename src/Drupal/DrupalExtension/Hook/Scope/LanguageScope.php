<?php

namespace Drupal\DrupalExtension\Hook\Scope;

/**
 * Represents the LanguageScope object.
 */
abstract class LanguageScope extends BaseEntityScope {

  const BEFORE = 'language.create.before';
  const AFTER = 'language.create.after';

}
