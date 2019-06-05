<?php


namespace SR\correct;


class WorkReport
{
    private $reports = [];

    public function add(WorkReportEntry $report)
    {
        $reports[] = $report;
        echo "report added...\r\n";
    }

    public function getReports()
    {
        return $this->reports;
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