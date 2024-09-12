<?php

namespace App\Scopes;

class ContactSearchScope extends SearchScope
{
   protected $searchColumns = ["title","desc","short_desc"];
}