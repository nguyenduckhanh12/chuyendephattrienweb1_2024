<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3032">
<div class="container mt-5">
        <div class="breadcrumb">
            <span class="span">HOME > FAQS</span> <!-- Thêm breadcrumb -->
        </div>
        <div class="faq-wrapper">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="faq-card">
                        <div class="card-title">PHONE REPAIR FAQ’S</div>
                        <div class="card-text">The master-builder human happiness one rejects, dislikes avoided pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter.</div>
                        <a href="#" class="view-link">VIEW QUESTIONS ></a>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="faq-card">
                        <div class="card-title">DESKTOP & LAPTOP REPAIR FAQ’S</div>
                        <div class="card-text">How all this mistaken idea of denouncing sed pleasure and praising pain was born and we will give you a complete seds account of the system, and expound the actual ...</div>
                        <a href="#" class="view-link">VIEW QUESTIONS ></a>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="faq-card">
                        <div class="card-title">GAME CONSOLE FAQ’S</div>
                        <div class="card-text">Denouncing pleasure and praising pain was born and I will give a complete account of the system expound the actual teachings of the great explorer of the truth.</div>
                        <a href="#" class="view-link">VIEW QUESTIONS ></a>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="faq-card">
                        <div class="card-title">FAQ’S ABOUT REPAIRPLUS</div>
                        <div class="card-text">Complete account the system, and expound the actual teachings of the great explorer of the truth, the master-builder workers of human happiness encounter consequences.</div>
                        <a href="#" class="view-link">VIEW QUESTIONS ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
