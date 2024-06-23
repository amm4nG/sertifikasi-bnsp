<?php

namespace App\DataTables;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PegawaiDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function (Pegawai $pegawai) {
                return view('pegawai.action', ['pegawai' => $pegawai]);
            })
            ->addColumn('status', function (Pegawai $pegawai) {
                $warna = '';
                if ($pegawai->status === 'cuti') {
                    $warna = 'text-bg-warning';
                } elseif ($pegawai->status === 'resign') {
                    $warna = 'text-bg-danger';
                } else {
                    $warna = 'text-bg-success';
                }
                return '<span class="badge ' . $warna . ' p-2">' . $pegawai->status . '</span>';
            })
            ->rawColumns(['status', 'action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Pegawai $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()->setTableId('pegawai-table')->columns($this->getColumns())->minifiedAjax()->setTableHeadClass('fw-bold text-uppercase gs-0')->selectStyleSingle();
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [Column::computed('DT_RowIndex')->title('No')->addClass('text-center align-middle'), Column::make('action')->addClass('text-center align-middle'), Column::make('nama')->addClass('text-center align-middle'), Column::make('telepon')->title('no telepon')->addClass('text-center align-middle'), Column::make('status')->addClass('text-center align-middle')];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Pegawai_' . date('YmdHis');
    }
}
