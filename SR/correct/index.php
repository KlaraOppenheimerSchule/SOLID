<?php

namespace SR\correct;

require_once 'WorkReport.php';
require_once 'ReportFileSaver.php';


$report = new WorkReport();
$report->add(new WorkReportEntry("entry1"));
$report->add(new WorkReportEntry("entry2"));

$reportFileSaver = new ReportFileSaver();
$reportFileSaver->Save("reports.json", $report);