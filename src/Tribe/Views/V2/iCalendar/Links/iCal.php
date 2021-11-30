<?php
/**
 * Handles iCal export/subscribe links.
 *
 * @since   TBD
 *
 * @package Tribe\Events\Views\V2\iCalendar
 */

namespace Tribe\Events\Views\V2\iCalendar\Links;

/**
 * Class iCal
 *
 * @since   TBD
 *
 * @package Tribe\Events\Views\V2\iCalendar
 */
class iCal extends Link_Abstract {
	/**
	 * {@inheritDoc}
	 */
	public static $slug = 'ical';

	/**
	 * {@inheritDoc}
	 */
	public function register() {
		parent::register();

		$this->label = __( 'iCalendar', 'the-events-calendar' );
		$this->single_label = __( 'Add to iCalendar', 'the-events-calendar' );
	}
}
