<?php

use Entity\Department;

interface Visitor
{
    public function visitWorker(Worker $worker);
    public function visitDepartment(Department $department);
}