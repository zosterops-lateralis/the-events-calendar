<?php
/**
 * View: Events Bar Form
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/events-bar/form.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version TBD
 *
 */
?>
<div class="tribe-events__events-bar-form">

	<div class="tribe-common-c-search">
		<div class="tribe-common-form-control-text-group">
			<?php $this->template( 'events-bar/form/keyword' ) ?>
			<?php $this->template( 'events-bar/form/location' ); ?>
			<?php $this->template( 'events-bar/form/date' ); ?>
		</div>
		<?php $this->template( 'events-bar/form/submit' ); ?>
	</div>
</div>