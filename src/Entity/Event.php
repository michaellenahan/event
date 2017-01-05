<?php

namespace Drupal\event\Entity;

use Drupal\Core\Entity\ContentEntityBase;

/**
 * Defines the event entity.
 *
 * @ContentEntityType(
 *   id = "event",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *   },
 * )
 */
class Event extends ContentEntityBase {

}
