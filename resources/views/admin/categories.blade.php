@extends('layout.app')

@section('title','التصنيفات - لوحة التحكم' )


@section('content')
    <div class="main-content p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white fw-bold">إضافة تصنيف جديد</div>
                    <div class="card-body">
                        <form id="categoryForm">
                            <div class="mb-3">
                                <label class="form-label small">اسم التصنيف</label>
                                <input type="text" class="form-control" placeholder="مثلاً: برمجة الويب">
                            </div>

                            <button type="submit" class="btn btn-primary w-100">حفظ التصنيف</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-0">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>اسم التصنيف</th>
                                    <th>عدد الدورات</th>
                                    <th class="text-center">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">برمجة الويب</td>
                                    <td>12 دورة</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-danger border-0" onclick="deleteItem()"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection