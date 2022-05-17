
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/glamshell_rwd/inc/start.html" ?>

    <link rel="stylesheet" href="./css/main.css">

</head>
<body>
    <ul class="skipmenu_list"> <!-- 리스트의 묶음 / 스킵 메뉴는  -->
        <li><a href="#">메뉴 바로가기</a></li> <!-- 각각의 리스트 -->
        <li><a href="#">본문 바로가기</a></li> <!-- 각각의 리스트 -->
        <li><a href="#">하단 바로가기</a></li> <!-- 각각의 리스트 -->
    </ul>
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/glamshell_rwd/inc/header.html" ?>
<!-- -----------------------------------------여기까지 상단 영역------------------------------------------------------ -->
    <div id="visual_wrap">
        <section id="visual"> <!-- 의미가 있는 컨텐츠를 담는곳은 section --> 
            <h2 class="hidden">메인비쥬얼(이달의 이벤트)</h2>
            <ul id="visual_list">
                <li><a href="#"><img src="./images/visual_img_02.jpg" alt="Crystal Lucy"></a></li>
                <li><a href="#"><img src="./images/visual_img_01.jpg" alt="Crystal Lucy"></a></li>
                <li><a href="#"><img src="./images/visual_img_03.jpg" alt="Crystal Lucy"></a></li>
            </ul>
            <a href="#" id="next_btn"><img src="./images/next_btn.png" alt="다음 보기"></a>
            <a href="#" id="prev_btn"><img src="./images/prev_btn.png" alt="이전 보기"></a>
        </section>
    </div>

    <div id="contents_wrap">
        <section id="contents">
            <h2 class="hidden">컨텐츠영역</h2>
            <section id="use_install">
                <h3 class="hidden">설치사용방법안내</h3>
                <ul id="useinstall_list">
                    <li>
                        <p class="useinstall_title">
                            HOW TO INSTALL
                        </p>
                        <p class="useinstall_img">
                            <img src="./images/banner_img_01.gif" alt="이미지설명">
                        </p>
                        <p class="useinstall_text">
                            제품 사용방법을 자세히 설명해 드립니다.
                        </p>
                    </li>
                    <li>
                        <p class="useinstall_title">
                            HOW TO INSTALL
                        </p>
                        <p class="useinstall_img">
                            <img src="./images/banner_img_02.gif" alt="이미지설명">
                        </p>
                        <p class="useinstall_text">
                            제품 사용방법을 자세히 설명해 드립니다.
                        </p>
                    </li>
                    <li>
                        <p class="useinstall_title">
                            HOW TO INSTALL
                        </p>
                        <p class="useinstall_img">
                            <img src="./images/banner_img_03.gif" alt="이미지설명">
                        </p>
                        <p class="useinstall_text">
                            제품 사용방법을 자세히 설명해 드립니다.
                        </p>
                    </li>
                    <li>
                        <p class="useinstall_title">
                            HOW TO INSTALL
                        </p>
                        <p class="useinstall_img">
                            <img src="./images/banner_img_04.gif" alt="이미지설명">
                        </p>
                        <p class="useinstall_text">
                            제품 사용방법을 자세히 설명해 드립니다.
                        </p>
                    </li>
                </ul>
            </section>
        </section>
    </div>
    
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/glamshell_rwd/inc/footer.html" ?>


</body>
</html>






