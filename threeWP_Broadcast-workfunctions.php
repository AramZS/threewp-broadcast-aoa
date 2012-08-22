<?php
if ( ! wp_next_scheduled( 'comment_harvest_time' ) ) {
  wp_schedule_event( time(), 'daily', 'comment_harvest_time' );
}

add_action( 'comment_harvest_time', 'comment_count_harvester' );

function comment_count_harvester() {
	
	//get the set of groups
		//apparently within $data = $this->sql_user_get( $user_id );? ln 546
	//Get the correct blogs
	//ln 619 get blogs for each groups?
	foreach( $options['blogs'] as $blog)
	{

		//for each broadcasted vender post.
			//get the post's comment count
			//get array of client blogs
				//for each client blog get the client post.
					//for each client post not marked as having recieved an update
						//push the comment count to a meta field for the client post
						//mark the client post as having received an update
				
		//$broadcast_data = $this->get_post_broadcast_data($blog_id, $post_id);
		//if ( $broadcast_data->is_empty() ) { }

	}
	
}
?>