<?php

use Swiftly\Base\AbstractController;
use Swiftly\Http\Server\Request;
use Swiftly\Http\Server\Response;

/**
 * Controller responsible for handling user queries
 *
 * @author clvarley
 */
Class Search Extends AbstractController
{

    /**
     * Attempts to search for content matching the query
     *
     * @param Request $request User request
     * @return Response        HTTP response
     */
    public function index( Request $request ) : Response
    {
        // Missing required query param
        if ( !$this->isValid( $request ) ) {
            return $this->handleInvalid( 'query' );
        }

        // TODO: Query database
        $results = [];

        return $this->output( 'search', [ 'results' => $results ] );
    }

    /**
     * Checks to see if this is a valid search
     *
     * @param Request $request User request
     * @return bool            Valid search?
     */
    private function isValid( Request $request ) : bool
    {
        return ( $request->query->has( 'query' )
            && $request->query->asString( 'query' )
            && strlen( $request->query->asString( 'query' ) ) > 3
        );
    }

    /**
     * Renders the template for invalid search requests
     *
     * @param string $type Error type
     * @return Response    HTTP response
     */
    private function handleInvalid( string $type ) : Response
    {
        $response = $this->output( 'search', [ 'error' => $type ] );
        $response->setStatus( 422 );

        return $response;
    }
}
