@extends('layout.layout')
@section('PersonalConvenant')

    
<div class="container mt-4 border-light">
    {{-- زر البحث --}}
    <div class="test">
        <nav class="navbar">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="البحث" aria-label="Search">
                    <button class="btn btn-custom-orange" type="submit">البحث</button>
                </form>
            </div>
        </nav>
    </div>

    {{-- pagnation --}}
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

    {{-- table --}}
    <div class="table-container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>اسم الموظف</th>
                    <th>العنوان الوظيفي</th>
                    <th>القسم/الشعبة</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>علي</td>
                    <td>مبرمج</td>
                    <td>البرمجيات</td>
                </tr>
                
                <tr>
                    <td>1</td>
                    <td>علي</td>
                    <td>مبرمج</td>
                    <td>البرمجيات</td>
                </tr>
                
                <tr>
                    <td>1</td>
                    <td>علي</td>
                    <td>مبرمج</td>
                    <td>البرمجيات</td>
                </tr>
                
            
            </tbody>
        </table>
    </div>
</div>
<br>
<br>


@endsection