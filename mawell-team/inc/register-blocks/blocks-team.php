<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_team' );
function acf_blocks_init_team(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * team
		 * ============================== */

	}
}
