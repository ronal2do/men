<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use SammyK\LaravelFacebookSdk\SyncableGraphNodeTrait;

class Event extends Eloquent
{
    use SyncableGraphNodeTrait;

    protected static $graph_node_field_aliases = [
        'id' => 'facebook_id',
        'place.location.city' => 'city',
        'place.location.state' => 'state',
        'place.location.country' => 'country',
    ];

	$eventNode = $response->getGraphEvent();

	// A method called createOrUpdateGraphNode() on the `Event` eloquent model
	// will create the event if it does not exist or it will update the existing
	// record based on the ID from Facebook.
	$event = Event::createOrUpdateGraphNode($eventNode);
}