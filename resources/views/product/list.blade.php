@extends('layouts.app')

@section('title', 'Main page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5> 검색
                            {{--<small>With custom checbox and radion elements.</small>--}}
                        </h5>
                        <div class="ibox-tools">
                            {{--<a class="collapse-link">--}}
                            {{--<i class="fa fa-chevron-up"></i>--}}
                            {{--</a>--}}
                            {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                            {{--<i class="fa fa-wrench"></i>--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu dropdown-user">--}}
                            {{--<li><a href="#">Config option 1</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Config option 2</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--<a class="close-link">--}}
                            {{--<i class="fa fa-times"></i>--}}
                            {{--</a>--}}
                        </div>
                    </div>
                    <div class="ibox-content">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5> 조회결과
                            {{--<small>With custom checbox and radion elements.</small>--}}
                        </h5>
                        <div class="ibox-tools" >
                            {{--<a class="collapse-link">--}}
                                {{--<i class="fa fa-chevron-up"></i>--}}
                            {{--</a>--}}
                            {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                                {{--<i class="fa fa-wrench"></i>--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu dropdown-user">--}}
                                {{--<li><a href="#">Config option 1</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">Config option 2</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<a class="close-link">--}}
                                {{--<i class="fa fa-times"></i>--}}
                            {{--</a>--}}
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div id="listbox"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){

        var tuiGrid = Vue.component('tui-grid');
        var grid = new tuiGrid({
            el: $('#listbox'), // Container element
            columnOptions: {
                minWidth: 70,
                frozenCount: 5
            },
            scrollX: true,
            scrollY: false,
            virtualScrolling : true,
            minBodyHeight: 200,
            rowHeaders: ['checkbox'],
            keyColumnName: 'productcode',
            pagination: true,
            columns: [
                {
                    title: '수정',
                    name: 'update'
                },
                {
                    title: '복사',
                    name: 'copy'
                },
                {
                    title: '채널',
                    name: 'channel'
                },
                {
                    title: '스토어',
                    name: 'store'
                },
                {
                    title: '상품명',
                    name: 'productname'
                },
                {
                    title:'브랜드',
                    name : 'brand'
                },
                {
                    title:'공급사',
                    name : 'supply'
                },
                {
                    title:'판매가',
                    name : 'saleprice'
                },
                {
                    title:'배송사',
                    name : 'deliverycompany'
                },
                {
                    title:'배송비',
                    name : 'deliveryprice'
                },
                {
                    title:'공급가',
                    name : 'supplyprice'
                },
                {
                    title:'판매일',
                    name : 'saledate'
                }
            ]

        });


        grid.use('Net',{
            perPage: 20,
            readDataMethod: 'GET',
            api:{
                readData: '/api/product/list'
            }
        });

        // instance.setData(newData); // Call API of instance's public method
        // Grid.applyTheme('striped'); // Call API of static method

    });

</script>
@endsection