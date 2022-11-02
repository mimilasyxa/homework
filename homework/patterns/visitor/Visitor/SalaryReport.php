<?php

namespace Visitor;

use Entity\Department;
use Visitor;

class SalaryReport implements Visitor
{

    public function visitWorker(\Worker $worker)
    {
        return 'This worker balance is ' .$worker->getMoney();
    }

    public function visitDepartment(Department $department): string
    {
        $sum = 0;
        /** @var \Worker $worker */
        foreach ($department->getWorkers() as $worker) {
            $sum += $worker->getMoney();
        }

        return 'This departments workers balance' . $sum;
    }
}