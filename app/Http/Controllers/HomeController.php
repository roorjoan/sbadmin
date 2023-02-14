<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Employee;

class HomeController extends Controller
{
    public function index()
    {
        $chart = $this->showChartBar();
        $chart1 = $this->showChartPie();

        return view('dashboard', compact('chart', 'chart1'));
    }

    private function showChartBar()
    {
        $chart_options = [
            'chart_title' => 'Employees by office',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Employee',
            'group_by_field' => 'office',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $chart = new LaravelChart($chart_options);

        return $chart;
    }

    private function showChartPie()
    {
        $chart_options = [
            'chart_title' => 'Employees by month',
            'report_type' => 'group_by_string', //data type
            'model' => 'App\Models\Employee', //model
            'group_by_field' => 'office', //model attribute
            'chart_type' => 'pie',
            'filter_field' => 'created_at',
            'filter_period' => 'month', // show employees only registered this month
        ];
        $chart = new LaravelChart($chart_options);

        return $chart;
    }
}
