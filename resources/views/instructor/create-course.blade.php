@extends('layout.app')

@section('title','إنشاء دورة جديدة' )


@section('content')
        <div class="main-content p-4">
            <h3 class="fw-bold mb-4 text-center">تفاصيل الدورة الجديدة</h3>
            <form>
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="card border-0 shadow-sm p-4">
                            <label class="form-label fw-bold">عنوان
                                الدورة</label>
                            <input type="text" class="form-control mb-3"
                                placeholder="مثلاً: إتقان React JS">

                            <label class="form-label fw-bold">وصف قصير</label>
                            <textarea class="form-control mb-3"
                                rows="4"></textarea>

                            <label class="form-label fw-bold">ماذا سيتعلم
                                الطالب؟</label>
                            <textarea class="form-control" rows="3"
                                placeholder="نقطة في كل سطر"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0 shadow-sm p-4 mb-4">
                            <label class="form-label fw-bold">صورة
                                الغلاف</label>
                            <input type="file" id="courseImg"
                                class="form-control mb-2">
                            <img id="imgPreview"
                                class="img-fluid rounded d-none">
                        </div>
                        <div class="card border-0 shadow-sm p-4 mb-4">
                            <label class="form-label fw-bold">السعر</label>
                            <input type="number" class="form-control"
                                placeholder="0.00">
                        </div>
                        <button type="submit"
                            class="btn btn-primary w-100 py-3 fw-bold">حفظ ونشر
                            الدورة</button>
                    </div>
                </div>
            </form>
        </div>
@endsection