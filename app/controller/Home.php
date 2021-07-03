<?php

use Swiftly\Base\AbstractController;
use Swiftly\Http\Server\Response;

/**
 * The default controller that handles the homepage
 *
 * @author clvarley
 */
Class Home Extends AbstractController
{

    /**
     * Responsible for rendering the homepage
     *
     * @return Response HTTP response
     */
    public function index() : Response
    {
        return $this->output( "home" );
    }
}
