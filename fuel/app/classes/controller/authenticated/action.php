<?php

class Controller_Authenticated_Action extends \Controller_Rest
{
        public function router( $method, $params )
        {
                if ( !Auth::check() )
                        {
                        $this->response( array( 'status' => 0, 'error' => 'Not Authorized' ), 401 );
                        }
                else
                        parent::router( $method, $params );
        }
}
