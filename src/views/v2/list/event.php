<?php
/**
 * View: List Event
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/list/event.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version TBD
 *
 */

$event    = $this->get( 'event' );
$event_id = $event->ID;

$classes = [ 'tribe-events-calendar-list__event' ];

if ( tribe( 'tec.featured_events' )->is_featured( $event_id ) ) {
	$classes[] = 'tribe-events-calendar-list__event--featured';
}

?>
<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">

	<?php $this->template( 'list/event/featured-image', [ 'event' => $event ] ); ?>

	<div class="tribe-events-calendar-list__event--details">

		<header>
			<?php $this->template( 'list/event/date', [ 'event' => $event ] ); ?>
			<?php $this->template( 'list/event/title', [ 'event' => $event ] ); ?>
			<?php $this->template( 'list/event/venue', [ 'event' => $event ] ); ?>
		</header>

		<?php $this->template( 'list/event/description', [ 'event' => $event ] ); ?>

	</div>

</div>
