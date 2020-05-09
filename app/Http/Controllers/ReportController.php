<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Report;
use App\Imports\ReportsImport;
use App\Exports\ReportsExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
  function index()
  {
    $data = DB::table('reports')->orderBy('error_no', 'ASC')->get();
    return view('report_excel', compact('data'));
  }

  function import(Request $request)
  {
    $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
    ]);

    Excel::import(new ReportsImport, $request->file('select_file'));

    DB::table('reports')
      ->join('consignees', 'reports.consignee_code', '=', 'consignees.consignee_code')
      ->join('products', 'reports.product_code', '=', 'products.product_code')
      ->update([
        'reports.consignee' => DB::raw('consignees.consignee'),
        'reports.product' => DB::raw('products.product'),
      ]);

    return back()->with('success', 'Excel Data Imported successfully.');
  }

  function export()
  {
    return Excel::download(new ReportsExport, 'reports.xlsx');
  }

  public function delete()

  {    //該当するNews Modelを取得
    DB::table('reports')->delete();

    //削除する
    // $report->delete();
    return redirect('/report');
  }

  public function insurance()
  {
    return view('insurance');
  }

  public function application()
  {
    return view('application');
  }

  public function invoice()
  {
    return view('invoice');
  }
}
