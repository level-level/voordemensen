<?php

/**
 * Template for the admin metabox dropdown field
 *
 * @var \LevelLevel\VoorDeMensen\Objects\Event|null $event
 * @var array $api_events
 */

$event_vdm_id = 0;
if ( $event instanceof LevelLevel\VoorDeMensen\Objects\Event ) {
	$event_vdm_id = $event->get_vdm_id();
}

?>

<label for="vdm_event_id"><?php esc_html_e( 'VoordeMensen event', 'll-vdm' ) ?></label>
<select name="vdm_event_id" id="vdm_event_id" >
	<?php foreach ($api_events as $api_event) { ?>
		<option value=""><?php echo esc_html_e( 'Select a VoordeMensen event', 'll-vdm' ); ?></option>
		<option value="<?php echo esc_attr( $api_event->event_id ) ?>" <?php selected( (int) $api_event->event_id, $event_vdm_id, true ); ?>>
			<?php echo esc_html( $api_event->event_id . ' | ' . $api_event->event_name ); ?>
		</option>
	<?php } ?>
</select>
