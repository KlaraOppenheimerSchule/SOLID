<?php


namespace SR\wrong;


class WorkReport
{
    private $reports = [];

    public function add(WorkReportEntry $report)
    {
        $reports[] = $report;
        echo "report added...\r\n";
    }

    function Save(string $filename)
    {
        /* TODO: save the reports to disk*/
        echo "reports saved to disk under: " . $filename;
    }
}

class WorkReportEntry
{
    private $info;

    public function __construct(string $info)
    {
        $this->info = $info;
    }

    public function getInfo()
    {
        return $this->info;
    }
}