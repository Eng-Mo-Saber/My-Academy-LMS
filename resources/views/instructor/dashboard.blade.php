@extends('layout.app')

@section('title','لوحة تحكم المدرب' )


@section('content')
    <div class="main-content p-4">
        <h3 class="fw-bold mb-4">أهلاً بك يا مدرب</h3>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 bg-primary text-white">
                    <h5>إجمالي الطلاب</h5>
                    <h2 class="fw-bold">1,250</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 bg-success text-white">
                    <h5>الدورات المنشورة</h5>
                    <h2 class="fw-bold">8</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 bg-dark text-white">
                    <h5>إجمالي الأرباح</h5>
                    <h2 class="fw-bold">5,400 ج.م</h2>
                </div>
            </div>
        </div>
    </div>
@endsection