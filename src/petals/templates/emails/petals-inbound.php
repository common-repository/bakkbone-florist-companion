<?php
/**
 * Petals Inbound email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/petals-inbound.php.
 *
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php ?>
<p><?php printf( __( 'The outcome of sending order {order_number} via Petals is listed below.', 'bakkbone-florist-companion' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
<p><?php printf( $email->message->comment_content ); ?></p>
<?php

/**
 * Show user-defined additional content - this is set in each email's settings.
 */
if ( $additional_content ) {
	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );