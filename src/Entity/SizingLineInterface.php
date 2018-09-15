<?php

namespace Drupal\project_sizing\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Sizing line entities.
 *
 * @ingroup project_sizing
 */
interface SizingLineInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Sizing line name.
   *
   * @return string
   *   Name of the Sizing line.
   */
  public function getName();

  /**
   * Sets the Sizing line name.
   *
   * @param string $name
   *   The Sizing line name.
   *
   * @return \Drupal\project_sizing\Entity\SizingLineInterface
   *   The called Sizing line entity.
   */
  public function setName($name);

  /**
   * Gets the Sizing line creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Sizing line.
   */
  public function getCreatedTime();

  /**
   * Sets the Sizing line creation timestamp.
   *
   * @param int $timestamp
   *   The Sizing line creation timestamp.
   *
   * @return \Drupal\project_sizing\Entity\SizingLineInterface
   *   The called Sizing line entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Sizing line published status indicator.
   *
   * Unpublished Sizing line are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Sizing line is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Sizing line.
   *
   * @param bool $published
   *   TRUE to set this Sizing line to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\project_sizing\Entity\SizingLineInterface
   *   The called Sizing line entity.
   */
  public function setPublished($published);

}
