@extends('layouts.admin')
@section('title') Category | Shop Computer @endsection
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{url('admin')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Category</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category List</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Category List</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="fixed-table-toolbar">
                            <div class="columns btn-group pull-right">
                                <button class="btn btn-default" type="button" name="toggle" title="New" ><a href="{{url('admin/category/create')}}"><i class="glyphicon glyphicon-plus"></i></a></button>
                                <button class="btn btn-default" type="button" name="refresh" title="Refresh"><a><i class="glyphicon glyphicon-refresh icon-refresh"></i></a></button>
                                <button class="btn btn-default" type="button" name="toggle" title="Toggle"><i class="glyphicon glyphicon glyphicon-list-alt icon-list-alt"></i></button>
                                <div class="keep-open btn-group" title="Columns">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th icon-th"></i> <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu"><li>
                                            <label><input type="checkbox" data-field="id" value="1" checked="checked"> Item ID</label></li><li>
                                            <label><input type="checkbox" data-field="name" value="2" checked="checked"> Item Name</label></li><li>
                                            <label><input type="checkbox" data-field="price" value="3" checked="checked"> Item Price</label></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pull-right search">

                                <input class="form-control" type="text" placeholder="Search">
                            </div>
                        </div>
                        <div class="fixed-table-container">
                            <div class="fixed-table-header">
                                <table>

                                </table>
                            </div>
                            <div class="fixed-table-body">
                                <div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
                                <table data-toggle="table" data-url="tables/data1.json" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="bs-checkbox " style="width: 36px; ">
                                                <div class="th-inner "><input name="btSelectAll" type="checkbox"></div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="">
                                                <div class="th-inner sortable">ID</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="">
                                                <div class="th-inner sortable">Title<span class="order"><span class="caret" style="margin: 10px 5px;"></span></span></div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="">
                                                <div class="th-inner sortable">Action</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($categories)
                                            @foreach($categories as $item)
                                            <tr>
                                                <td>
                                                    <input type="checkbox">
                                                </td>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->title}}</td>
                                                <td>
                                                    <a href="{{url('admin/category/.$item->id./edit')}}" class="btn">Edit</a>
                                                    <a href="{{url('admin/category/.$item->id./delete')}}" class="btn">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="fixed-table-pagination">
                                <div class="pull-left pagination-detail">
                                    <span class="pagination-info">Showing 1 to 0 of 0 rows</span><span class="page-list"><span class="btn-group dropup">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="page-size">10</span> <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="active"><a href="javascript:void(0)">10</a></li>
                                                <li><a href="javascript:void(0)">25</a></li>
                                                <li><a href="javascript:void(0)">50</a></li>
                                                <li><a href="javascript:void(0)">100</a></li>
                                            </ul>
                                        </span> records per page</span>
                                </div>
                                <div class="pull-right pagination">
                                    <ul class="pagination">
                                        <li class="page-first disabled"><a href="javascript:void(0)">&lt;&lt;</a></li>
                                        <li class="page-pre disabled"><a href="javascript:void(0)">&lt;</a></li>
                                        <li class="page-next disabled"><a href="javascript:void(0)">&gt;</a></li>
                                        <li class="page-last disabled"><a href="javascript:void(0)">&gt;&gt;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection