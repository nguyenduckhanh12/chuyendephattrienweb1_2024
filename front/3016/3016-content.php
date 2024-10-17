<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3016">
<div class='container'>
<div class="faq-header">
        <h1>FAQs</h1>
        <h4>Start the conversation to establish good relationships and business.</h4>
    </div>

    <div class="faq-content">
        <div class="faq-left">
            <h5>COMMON QUESTIONS</h5>
            <h2>Got Questions? We’ve Got Answers!</h2>
            <p>Find all the information you need about MobiCare’s services right here.</p>
        </div>

        <div class="faq-right">
            <!-- FAQ Item 1 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span class="faq-text">Est platea fringilla leitus et felis euismod in?</span>
                    <span class="faq-icon"><i class="fas fa-chevron-up"></i></span>
                </button>
                <div class="faq-answer">
                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span class="faq-text">Tempor nibh commodo natoque primis suspendisse vivamus habitant?</span>
                    <span class="faq-icon"><i class="fas fa-chevron-up"></i></span>
                </button>
                <div class="faq-answer">
                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span class="faq-text">Facilisi ex aenean tempor sociosqu sodales parturient nec?</span>
                    <span class="faq-icon"><i class="fas fa-chevron-up"></i></span>
                </button>
                <div class="faq-answer">
                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span class="faq-text">Sed mollis luctus egestas cursus sociosqu?</span>
                    <span class="faq-icon"><i class="fas fa-chevron-up"></i></span>
                </button>
                <div class="faq-answer">
                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span class="faq-text">Viverra tincidunt potenti litora erat fames congue placerat?</span>
                    <span class="faq-icon"><i class="fas fa-chevron-up"></i></span>
                </button>
                <div class="faq-answer">
                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span class="faq-text">Hendrerit tincidunt ut magnis malesuada aliquet?</span>
                    <span class="faq-icon"><i class="fas fa-chevron-up"></i></span>
                </button>
                <div class="faq-answer">
                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span class="faq-text">Quis hac donec aliquet faucibus ornare orci risus?</span>
                    <span class="faq-icon"><i class="fas fa-chevron-up"></i></span>
                </button>
                <div class="faq-answer">
                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                </div>
            </div>
        </div>
    </div>
    <script>
    document.querySelectorAll('.faq-question').forEach(item => {
    item.addEventListener('click', () => {
        const parentItem = item.parentElement;
        const answer = parentItem.querySelector('.faq-answer');
        const isActive = parentItem.classList.contains('active');

        // Đóng tất cả các mục FAQ khác
        document.querySelectorAll('.faq-item').forEach(faq => {
            faq.classList.remove('active');
            faq.querySelector('.faq-answer').style.display = 'none';
            faq.querySelector('.faq-question').classList.remove('active');
        });

        // Nếu mục hiện tại chưa được mở, mở nó
        if (!isActive) {
            parentItem.classList.add('active');
            answer.style.display = 'block';
            item.classList.add('active'); // Thêm lớp active cho nút
        } else {
            parentItem.classList.remove('active');
            answer.style.display = 'none';
            item.classList.remove('active'); // Xóa lớp active nếu đang đóng
        }
    });
});

</script>

</div>
</div>