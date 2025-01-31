<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_signup' );
function acf_blocks_init_signup(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * Singup
		 * ============================== */
	}
}
