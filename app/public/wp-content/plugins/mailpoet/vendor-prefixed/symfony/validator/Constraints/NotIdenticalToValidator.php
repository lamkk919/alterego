<?php
 namespace MailPoetVendor\Symfony\Component\Validator\Constraints; if (!defined('ABSPATH')) exit; class NotIdenticalToValidator extends \MailPoetVendor\Symfony\Component\Validator\Constraints\AbstractComparisonValidator { protected function compareValues($value1, $value2) { return $value1 !== $value2; } protected function getErrorCode() { return \MailPoetVendor\Symfony\Component\Validator\Constraints\NotIdenticalTo::IS_IDENTICAL_ERROR; } } 