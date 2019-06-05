<?php

namespace SR\correct;

require_once "WorkReport.php";

class ReportFileSaver
{
    function Save(string $filename, WorkReport $workReport)
    {
        $reports = $workReport->getReports();
        /* TODO: save the reports to disk*/
        echo "reports saved to disk under: " . $filename;
    }
}