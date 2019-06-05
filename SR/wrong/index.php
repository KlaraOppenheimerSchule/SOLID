<?php

namespace SR\wrong;

require_once 'WorkReport.php';

$report = new WorkReport();
$report->add(new WorkReportEntry("entry1"));
$report->add(new WorkReportEntry("entry2"));

$report->Save("reports.json");