<?php
namespace Acme;

use Acme\Users\Person;
 
//Specifically say Person class is now within the Acme\Users dir.

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person) //means we have to pass in from Person Class.
    {
        //add $person to the staff collection
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}
