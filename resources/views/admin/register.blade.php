@extends('layouts.master')

@section('title')
    Orders | Leen Beauty
@endsection
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
  
}


.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
</style>

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Orders</h4>
                
            </div>
            <div class="card-body">
                <div class="class-responsive">
                    <table id="datatable" cellspacing="0" cellpadding="1" class="fl-table">
                        <thead class="text-primary">
                            <th></th>
                            <th></th>
                            <th style="font-size: 14px; font-weight: bold">تم الإستلام؟</th>
                            <th style="font-size: 14px; font-weight: bold">تم الشحن؟</th>
                            <th style="font-size: 14px; font-weight: bold">تم التجهيز؟</th>
                            <th style="font-size: 14px; font-weight: bold">مجموع الطلب</th>

                            <th style="font-size: 14px; font-weight: bold">P7</th>
                            <th style="font-size: 14px; font-weight: bold">Q7</th>
                            <th style="font-size: 14px; font-weight: bold">M7</th>

                            <th style="font-size: 14px; font-weight: bold">P6</th>
                            <th style="font-size: 14px; font-weight: bold">Q6</th>
                            <th style="font-size: 14px; font-weight: bold">M6</th>

                            <th style="font-size: 14px; font-weight: bold">P5</th>
                            <th style="font-size: 14px; font-weight: bold">Q5</th>
                            <th style="font-size: 14px; font-weight: bold">M5</th>

                            <th style="font-size: 14px; font-weight: bold">P4</th>
                            <th style="font-size: 14px; font-weight: bold">Q4</th>
                            <th style="font-size: 14px; font-weight: bold">M4</th>

                            <th style="font-size: 14px; font-weight: bold">P3</th>
                            <th style="font-size: 14px; font-weight: bold">Q3</th>
                            <th style="font-size: 14px; font-weight: bold">M3</th>

                            <th style="font-size: 14px; font-weight: bold">P2</th>
                            <th style="font-size: 14px; font-weight: bold">Q2</th>
                            <th style="font-size: 14px; font-weight: bold">M2</th>

                            <th style="font-size: 14px; font-weight: bold">P1</th>
                            <th style="font-size: 14px; font-weight: bold">Q1</th>
                            <th style="font-size: 14px; font-weight: bold">M1</th>

                            <th style="font-size: 14px; font-weight: bold">الموبايل</th>
                            <th style="font-size: 14px; font-weight: bold">الانستجرام</th>
                            <th style="font-size: 14px; font-weight: bold">الفرع</th>
                            <th style="font-size: 14px; font-weight: bold">المحافظة</th>
                            <th style="font-size: 14px; font-weight: bold">رقم التواصل</th>
                            <th style="font-size: 14px; font-weight: bold">الاسم الثلاثي</th>
                            <th style="font-size: 14px; font-weight: bold">رقم الطلب</th>
                        </thead>
                    <tbody>
                        @foreach ($users as $row)
                        <tr>
                            <td>
                                <form action="/role-delete/{{ $row->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">حذف</button>
                            </form>
                            </td>
                            <td><a href="/role-edit/{{$row->id}}" class="btn btn-success">تعديل</a></td>
                            <td>{{$row->received}}</td>
                            <td>{{$row->shipped}}</td>
                            <td>{{$row->ready}}</td>
                            <td>{{$row->total}}</td>

                            <td>{{$row->price7}}</td>
                            <td>{{$row->quantity7}}</td>
                            <td>{{$row->product7}}</td>

                            <td>{{$row->price6}}</td>
                            <td>{{$row->quantity6}}</td>
                            <td>{{$row->product6}}</td>

                            <td>{{$row->price5}}</td>
                            <td>{{$row->quantity5}}</td>
                            <td>{{$row->product5}}</td>

                            <td>{{$row->price4}}</td>
                            <td>{{$row->quantity4}}</td>
                            <td>{{$row->product4}}</td>

                            <td>{{$row->price3}}</td>
                            <td>{{$row->quantity3}}</td>
                            <td>{{$row->product3}}</td>

                            <td>{{$row->price2}}</td>
                            <td>{{$row->quantity2}}</td>
                            <td>{{$row->product2}}</td>

                            <td>{{$row->price}}</td>
                            <td>{{$row->quantity}}</td>
                            <td>{{$row->product}}</td>
                            <td>{{$row->mobile}}</td>
                            <td>{{$row->notification_number}}</td>
                            <td>{{$row->branch}}</td>
                            <td>{{$row->city}}</td>
                            <td>{{$row->notification_number}}</td>
                            <td>{{$row->name}} {{$row->fathername}} {{$row->lastname}}  </td>
                            <td>{{$row->id}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <button class="btn btn-primary" onclick="exportData()">
                    <span class="glyphicon glyphicon-download"></span>
                    DOWNLOAD TABLE</button>

                </div>
            </div>
            </div>
        </div>
    </div>

    
@endsection

@section('script')
    <script>$(document).ready( function () {
        $('#datatable').DataTable();
    } );</script>

    <script>
        function exportData(){
    /* Get the HTML data using Element by Id */
    var table = document.getElementById("datatable");
 
    /* Declaring array variable */
    var rows =[];
 
      //iterate through rows of table
    for(var i=0,row; row = table.rows[i];i++){
        //rows would be accessed using the "row" variable assigned in the for loop
        //Get each cell value/column from the row
        
        column3 = row.cells[2].innerText;
        column4 = row.cells[3].innerText;
        column5 = row.cells[4].innerText;
        column6 = row.cells[5].innerText;
        column7 = row.cells[6].innerText;
        column8 = row.cells[7].innerText;
        column9 = row.cells[8].innerText;
        column10 = row.cells[9].innerText;
        column11 = row.cells[10].innerText;
        column12 = row.cells[11].innerText;
        column13 = row.cells[12].innerText;
        column14 = row.cells[13].innerText;
        column15 = row.cells[14].innerText;
        column16 = row.cells[15].innerText;
        column17 = row.cells[16].innerText;
        column18 = row.cells[17].innerText;
        column19 = row.cells[18].innerText;
        column20 = row.cells[19].innerText;
        column21 = row.cells[20].innerText;
        column22 = row.cells[21].innerText;
        column23 = row.cells[22].innerText;
        column24 = row.cells[23].innerText;
        column25 = row.cells[24].innerText;
        column26 = row.cells[25].innerText;
        column27 = row.cells[26].innerText;
        column28 = row.cells[27].innerText;
        column29 = row.cells[28].innerText;
        column30 = row.cells[29].innerText;
        column31 = row.cells[30].innerText;
        column32 = row.cells[31].innerText;
        column33 = row.cells[32].innerText;
        column34 = row.cells[33].innerText;
 
    /* add a new records in the array */
        rows.push(
            [
                
                column3,
                column4,
                column5,
                column6,
                column7,
                column8,
                column9,
                column10,
                column11,
                column12,
                column13,
                column14,
                column15,
                column16,
                column17,
                column18,
                column19,
                column20,
                column21,
                column22,
                column23,
                column24,
                column25,
                column26,
                column27,
                column28,
                column29,
                column30,
                column31,
                column32,
                column33,
                column34
                
            ]
        );
 
        }
        csvContent = "data:text/csv;charset=utf-8,";
         /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
        rows.forEach(function(rowArray){
            row = rowArray.join(",");
            csvContent += row + "\r\n";
        });
 
        /* create a hidden <a> DOM node and set its download attribute */
        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "Stock_Price_Report.csv");
        document.body.appendChild(link);
         /* download the data file named "Stock_Price_Report.csv" */
        link.click();
}
    </script>

    
@endsection