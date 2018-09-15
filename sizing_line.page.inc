<?php

/**
 * @file
 * Contains sizing_line.page.inc.
 *
 * Page callback for Sizing line entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Sizing line templates.
 *
 * Default template: sizing_line.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_sizing_line(array &$variables) {
  // Fetch SizingLine Entity Object.
  $sizing_line = $variables['elements']['#sizing_line'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
