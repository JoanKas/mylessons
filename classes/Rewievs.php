<?php
class Rewievs extends aRewievs implements iRewievs
{

    public function __construct()
    {
        $this->add_rewiev("");
    }

    public function add_rewiev($rewiev)
    {
        static::$count_Rewievs++;
    }

    public function change_rewiev($id)
    {
        // TODO: Implement change_rewiev() method.
    }

    public function delete_rewiev($id)
    {
        // TODO: Implement delete_rewiev() method.
    }

    public function show_rewievs()
    {
        // TODO: Implement show_rewievs() method.
    }

    public function giveCountRewievs()
    {
        aRewievs::count_Rewievs();
    }
}