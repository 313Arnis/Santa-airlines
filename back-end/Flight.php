<?php

class Flight {




    public function __construct(public $code, 
                                public $origin, 
                                public $destination,
                                public $departureTime,
                                public $aircraft){

    }
}