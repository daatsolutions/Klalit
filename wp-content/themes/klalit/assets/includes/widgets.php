<?php /* KLALIT WIDGETS */

function register_ofer_widgets() {
       register_widget('Home_Button_Widget');
}

class Home_Button_Widget extends WP_Widget {
 
	function Home_Button_Widget() {
		$widget_ops = array(
			'classname'=>'home-button-widget',
			'description'=>'Homepage Button Widget'
			);
		$control_ops = array(
			'width'=>200,
			'id_base'=>'home-button-widget'
			);
		$this->WP_Widget('home-button-widget', 'Homepage Button Widget', $widget_ops, $control_ops);
	}

	function widget($args, $instance) {
		extract($args);
		$title = $instance['youtitle'];
		$ylink = $instance['youlink'];
		$ytag = $instance['youtag'];
		$yuser = $instance['youu'];
		$yalt = $instance['youalt'];
		
		echo $before_widget;
		
		echo 'Widget';
		
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
        $instance['youtitle'] = strip_tags( $new_instance['youtitle'] );
		$instance['youlink'] = strip_tags( $new_instance['youlink'] );
		$instance['youu'] = strip_tags( $new_instance['youu'] );
		$instance['youtag'] = strip_tags( $new_instance['youtag'] );
		$instance['youalt'] = strip_tags( $new_instance['youalt'] );
		
		return $instance;
	}

	function form( $instance ) {
		$title   = esc_attr( isset( $instance['youtitle'] ) ? $instance['youtitle'] : '' );
		$ylink   = esc_attr( isset( $instance['youlink'] ) ? $instance['youlink'] : '' );
		$yuser = esc_attr( isset( $instance['youu'] ) ? $instance['youu'] : '' );
		$ytag = esc_attr( isset( $instance['youtag'] ) ? $instance['youtag'] : '' );
		$yalt = esc_attr( isset( $instance['youalt'] ) ? $instance['youalt'] : '' );
		?>
            <p>
                <label for="<?php echo $this->get_field_id( 'youtitle' ); ?>"><?php _e( 'Title:' ); ?>
                    <input class="widefat" id="<?php echo $this->get_field_id( 'youtitle' ); ?>" name="<?php echo $this->get_field_name( 'youtitle' ); ?>" type="text" value="<?php echo $title; ?>" />
                </label>
            </p>
			<p>
                <label for="<?php echo $this->get_field_id( 'youu' ); ?>"><?php _e( 'Username:' ); ?>
                    <input class="widefat" id="<?php echo $this->get_field_id( 'youu' ); ?>" name="<?php echo $this->get_field_name( 'youu' ); ?>" type="text" value="<?php echo $yuser; ?>" />
                </label>
            </p>
			<p>
                <label for="<?php echo $this->get_field_id( 'youtag' ); ?>"><?php _e( 'Tag (not required):' ); ?>
                    <input class="widefat" id="<?php echo $this->get_field_id( 'youtag' ); ?>" name="<?php echo $this->get_field_name( 'youtag' ); ?>" type="text" value="<?php echo $ytag; ?>" />
                </label>
            </p>
			<p>
                <label for="<?php echo $this->get_field_id( 'youlink' ); ?>"><?php _e( 'Feed Link (not required):' ); ?>
                    <input class="widefat" id="<?php echo $this->get_field_id( 'youlink' ); ?>" name="<?php echo $this->get_field_name( 'youlink' ); ?>" type="text" value="<?php echo $ylink; ?>" />
                </label>
            </p>
			<p>
                <label for="<?php echo $this->get_field_id( 'youalt' ); ?>"><?php _e( 'Alternate Text Of Youtube Video(required):' ); ?>
                    <input class="widefat" id="<?php echo $this->get_field_id( 'youalt' ); ?>" name="<?php echo $this->get_field_name( 'youalt' ); ?>" type="text" value="<?php echo $yalt; ?>" />
                </label>
            </p>
	<?php }
}

?>