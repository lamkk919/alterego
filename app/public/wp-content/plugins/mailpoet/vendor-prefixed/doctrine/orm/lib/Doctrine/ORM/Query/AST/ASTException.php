<?php
 namespace MailPoetVendor\Doctrine\ORM\Query\AST; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\ORM\Query\QueryException; class ASTException extends \MailPoetVendor\Doctrine\ORM\Query\QueryException { public static function noDispatchForNode($node) { return new self("Double-dispatch for node " . \get_class($node) . " is not supported."); } } 