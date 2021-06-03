<?php


class Events
{
    
    public static function today() {
        return date("Y-m-d");
    }

    /**
     * This method should only return events where at least one of their instances
     * is in the future.
     * The array should contain Event objects
     * @return array
     */
    public static function inFuture(): array
    {
        $futureEvents = [];
        $lsitEvents = self::eventsData();
        
        foreach ($lsitEvents  as $event) {

            foreach ($event['instances'] as $showTime){
                if($showTime['datetime'] > self::today()){
                    $futureEvents[] = $event;
                }
            }            
        }

        return $futureEvents;
    }

    /**
     * This method should only return events where ALL of their instances
     * are in the past.
     * The array should contain Event objects
     * @return array
     */
    public static function inPast(): array
    {

        $passEvents = [];
        $lsitEvents = self::eventsData();
        
        foreach ($lsitEvents  as $event) {

            foreach ($event['instances'] as $showTime){
                if($showTime['datetime'] < self::today()){
                    $passEvents[] = $event;
                }
            }            
        }

        return $passEvents;
    }

    /**
     * This method should only return events where at least one of their instances
     * is at the given venue.
     * The array should contain Event objects
     * @return array
     */
    public static function atVenue($venueId)
    {
        $venues = self::venuesData();

        return $venues[$venueId] ;
    }

    /**
     * This method is to mock a database/api call.
     * @return array
     */
    protected static function eventsData(): array
    {
        $data = include ROOT_PATH . 'data/events.php';
        # shuffle is used to a mock the fact that the database/API won't always
        # return results in an expected order (depending or the query of course).
        shuffle($data);
        return $data;
    }


     /**
     * This method is to mock a database/api call.
     * @return array
     */
    protected static function venuesData(): array
    {
        $data = include ROOT_PATH . 'data/venues.php';
        # shuffle is used to a mock the fact that the database/API won't always
        # return results in an expected order (depending or the query of course).
        shuffle($data);
        return $data;
    }
}
