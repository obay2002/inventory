@extends('layout.layout')
@section('Receiving')

<div class="container mt-4 border-light" >
        
    <p class="text-right">اضف مستند الاستلام وتفاصيله,ثم قم بفتح المستند واضف المواد المستملة اليه</p>
    {{-- <button class="btn btn-custom-orange" style="margin-top: -60px; }">اضافة مستند استلام </button> --}}
    <button type="button" class="btn btn-custom-orange" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">اضافة مستند استلام</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">معلومات المستند</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">رقم مستند الاستلام</label>
            <input type="number" class="form-control" id="recipient-num">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">تاريخ الاستلام</label>
            <input type="data" class="form-control" id="recipient-data">
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">رقم قائمة الشراء</label>
            <input type="text" class="form-control" id="recipient-text">
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">تاريخ قائمة الشراء</label>
            <input type="data" class="form-control" id="recipient-text">
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">صنف المجهز</label>
            <input type="text" class="form-control" id="recipient-text">
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> المجهز</label>
            <input type="text" class="form-control" id="recipient-text">
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> اسم امين المخزن</label>
            <input type="text" class="form-control" id="recipient-text">
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> اسم المسلم</label>
            <input type="text" class="form-control" id="recipient-text">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-custom-orange" data-bs-dismiss="modal">الغاء</button>
        <button type="button" class="btn btn-custom-orange">حفظ</button>
      </div>
    </div>
  </div>
</div>

</div>

<div class="separator"></div>

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
                    <th>رقم المستند</th>
                    <th>التاريخ</th>
                    <th>المجهز</th>
                    <th>المبلغ الكلي</th>
                    <th>اسم المسلم</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>علي</td>
                    <td>2002</td>
                    <td>ahmed</td>
                    <td>3000000</td>
                    <td>ali</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>علي</td>
                    <td>2002</td>
                    <td>ahmed</td>
                    <td>3000000</td>
                    <td>ali</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>علي</td>
                    <td>2002</td>
                    <td>ahmed</td>
                    <td>3000000</td>
                    <td>ali</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>علي</td>
                    <td>2002</td>
                    <td>ahmed</td>
                    <td>3000000</td>
                    <td>ali</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br>
<br>
    @endsection
