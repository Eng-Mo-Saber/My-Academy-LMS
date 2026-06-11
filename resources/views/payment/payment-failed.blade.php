@extends('layout.app')

@section('title','فشل الدفع - أكاديميتي' )


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow border-0 text-center p-5">
                    <div class="mb-4">
                        <i class="bi bi-x-circle-fill text-danger" style="font-size: 5rem;"></i>
                    </div>
                    <h2 class="fw-bold mb-3">فشل الدفع</h2>
                    <p class="text-muted lead mb-4">نأسف، لم نتمكن من إتمام عملية الدفع. يرجى التحقق من بيانات البطاقة أو رصيد المحفظة والمحاولة مرة أخرى.</p>
                    
                    <div class="bg-light p-3 rounded mb-4 text-start border-start border-danger border-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">رقم العملية:</span>
                            <span class="fw-bold">#ERR-10924</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">السبب المحتمل:</span>
                            <span class="fw-bold text-danger">تم رفض البطاقة من قبل البنك المصدّر</span>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="{{ route('checkout_page') }}" class="btn btn-primary btn-lg px-4 gap-3"><i class="bi bi-arrow-repeat me-2"></i> المحاولة مرة أخرى</a>
                        <button class="btn btn-outline-secondary btn-lg px-4"><i class="bi bi-headset me-2"></i> تواصل مع الدعم</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection