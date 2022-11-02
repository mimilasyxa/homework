<?php

use Entity\Department;
use Visitor\SalaryReport;

class SalaryReportService
{
    public function makeReport()
    {
        $firstWorker = new Worker(100);
        $firstDepartment = new Department(
            [
                $firstWorker,
                new Worker(200),
                new Worker(300),
                new Worker(500),
            ]
        );

        $salaryReport = new SalaryReport();

        $firstDepartment->accept($salaryReport); // Возвращаем доклад о балансе всего департамента
        $firstWorker->accept($salaryReport); // Возвращаем баланс одного пользователя.
    }
}

/**
 * Добавляем новую логику в классы не изменяя сами классы,
 * эта логика пишется в отдельном классе в соответствующем переданной модели методе
 *
 *
 */