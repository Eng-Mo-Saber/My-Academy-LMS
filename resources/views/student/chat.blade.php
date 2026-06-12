@extends('layout.app')

@section('title','الدردشة - أكاديميتي' )


@section('content')
    <div class="main-content">
        <nav class="navbar navbar-light bg-white border-bottom px-4 py-3">
            <button class="btn btn-light d-lg-none" id="sidebarToggle"><i class="bi bi-list fs-4"></i></button>
            <h5 class="mb-0 ms-auto fw-bold">الدردشة</h5>
        </nav>

        <div class="container-fluid p-4">
            <div class="chat-container">
                <div class="chat-sidebar p-3">
                    <h6 class="fw-bold mb-3">المحادثات</h6>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action active rounded mb-2">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="المدرب">
                                <div>
                                    <h6 class="mb-0 fw-bold">المدرب أحمد</h6>
                                    <small class="text-light">متصل الآن</small>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action rounded mb-2">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person-circle fs-2 me-3 text-secondary"></i>
                                <div>
                                    <h6 class="mb-0 fw-bold">دعم فني</h6>
                                    <small class="text-muted">آخر ظهور: أمس</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="chat-window">
                    <div class="p-3 border-bottom bg-white d-flex align-items-center">
                        <img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="المدرب">
                        <h6 class="mb-0 fw-bold">المدرب أحمد</h6>
                    </div>
                    
                    <div class="chat-messages" id="chatMessages">
                        <div class="message received">السلام عليكم، كيف يمكنني مساعدتك في الدورة؟</div>
                        <div class="message sent">وعليكم السلام، لدي سؤال بخصوص الدرس الثالث.</div>
                    </div>

                    <div class="p-2 d-none text-muted small" id="typingIndicator">
                        <i class="bi bi-pencil"></i> المدرب يكتب الآن...
                    </div>

                    <div class="p-3 bg-light border-top">
                        <form id="chatForm" class="d-flex gap-2">
                            <input type="text" id="chatInput" class="form-control" placeholder="اكتب رسالتك هنا..." required autocomplete="off">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> إرسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection