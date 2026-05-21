<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // ✅ Safe session start
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Friendly / Videos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" />
    <style>
        body {
            background-image: url(./image/WhatsApp\ Image\ 2025-09-28\ at\ 09.29.24_91e7c59a.jpg);
            background-size: cover;
            background-position: center;
            font-family: "Lato", sans-serif;
            background-color: #f8f9fa;
        }
        .card1 {
            background-color: #006ceb;
            color: white;
            border-radius: 20px;
            box-shadow: 0 8px 16px 0px rgba(0, 0, 0, 0.2);
            width: 80%;
            margin-left: 10%;
            margin-top: 5%;
            padding: 20px;
        }
        .card2 {
            background-color: white;
            border-radius: 10px;
            width: 95%;
            opacity: 0.9;
            padding: 5px;
            margin-top: 6px;
            box-shadow: 0 8px 16px 0px rgba(0, 0, 0, 0.2);
            margin-left: auto;
            margin-right: 0;
        }
        .card2 h6 {
            color: #000000;
            margin-bottom: 0;
            line-height: 1.2;
        }
        .card-selection {
            background-color: white;
            border-radius: 10px;
            width: 100%;
            padding: 5px 15px;
            margin-top: 20px;
            box-shadow: 0 4px 8px 0px rgba(0, 0, 0, 0.1);
        }
        .card3,
        .card30,
        .card31,
        .card32,
        .card33 {
            display: none;
            width: 100%;
            margin-left: 0;
            margin-top: 15px;
        }
        .card3 {
            display: block;
        }
        h2 {
            color: #006ceb;
            font-family: "Lato", sans-serif;
            font-size: 1.5rem;
            margin-left: 0 !important;
        }
        input[type="radio"] {
            margin: 15px;
            transform: scale(1.3);
            margin-left: 20px;
            cursor: pointer;
        }
        .form-check-label {
            font-size: 1.1rem;
            font-weight: 500;
            margin-top: 10px;
        }
        #groupSelect,
        #subjectSelecte,
        #subjectSelectt {
            padding: 10px;
            width: 90%;
            margin: 10px auto;
            display: block;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }
        .card4 {
            background-color: white;
            border-radius: 10px;
            width: 100%;
            height: 500px;
            margin-top: 20px;
            box-shadow: 0 8px 16px 0px rgba(0, 0, 0, 0.2);
            display: block;
            margin-left: 0;
        }
        #short {
            display: inline-block;
            font-size: 40px;
            font-weight: 700;
            max-width: 100%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        #s2 { font-size: 4rem; margin-right: 0.5rem; }
        #s3 { font-size: 4rem; margin-right: 0.5rem; }
        @media (max-width: 480px) {
            #short { font-size: 20px; }
            #s2 { font-size: 2rem; margin-right: 0.25rem; }
            #s3 { font-size: 2rem; margin-right: 0.25rem; margin-left: 100px; }
        }
    </style>
</head>

<body>
    <div class="card1">
        <div class="row align-items-center">
            <div class="col-md-6 d-flex align-items-center">
                <i class="fa-solid fa-graduation-cap fa-4x me-2" id="s2"></i>
                <span id="short">Student_Friendly</span>
            </div>
            <div class="col-md-6">
                <div class="card2 row g-0">
                    <div class="col-auto d-flex align-items-center ps-2">
                        <i class="fa-solid fa-circle-user fa-3x" style="color: #000000;" id="s3"></i>
                    </div>
                    <div class="col-auto d-flex flex-column justify-content-center ps-3">
                        <h6><?php echo isset($_SESSION['username0']) ? $_SESSION['username0'] : 'Guest0'; ?><?php echo isset($_SESSION['username1']) ? $_SESSION['username1'] : 'Guest1'; ?></h6>
                        <h6><?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Available'; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-selection card3">
                            <h2 style="margin-left: 20px;">SELECT CLASS</h2>
                            <div class="d-flex p-2">
                                <div class="form-check me-4">
                                    <input class="form-check-input" type="radio" id="10th" name="classs"
                                        onclick="handleClassChange('10th')" value="10th">
                                    <label class="form-check-label" for="10th">10th</label>
                                </div>
                                <div class="form-check me-4">
                                    <input class="form-check-input" type="radio" id="11th" name="classs"
                                        onclick="handleClassChange('11th')" value="11th">
                                    <label class="form-check-label" for="11th">11th</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="12th" name="classs"
                                        onclick="handleClassChange('12th')" value="12th">
                                    <label class="form-check-label" for="12th">12th</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-selection card30">
                            <h2 style="margin-left: 20px;">SELECT MEDIUM</h2>
                            <div class="d-flex p-2">
                                <div class="form-check me-4">
                                    <input class="form-check-input" type="radio" id="tam" name="Medium"
                                        onclick="tamil()" value="Tamil">
                                    <label class="form-check-label" for="tam">Tamil</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="eng" name="Medium"
                                        onclick="english()" value="English">
                                    <label class="form-check-label" for="eng">English</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-selection card31">
                            <h2 style="margin-left: 20px;">SELECT GROUP</h2>
                            <select id="groupSelect" onchange="showSubject()">
                                <option value="default">Select your group</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-selection card32">
                            <h2 style="margin-left: 20px;">SELECT SUBJECT</h2>
                            <select id="subjectSelecte" style="display: none;" onchange="handleSubjectChange()"></select>
                            <select id="subjectSelectt" style="display: none;" onchange="handleSubjectChange()"></select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card4">
                    <div id="contentArea" style="width: 100%; height: 100%; padding: 20px; overflow-y: auto;">
                        <h3 style="margin: 20px; text-align: center; color: #006ceb;">Welcome! Please select your Class, Medium, Group (if applicable), and Subject to view videos.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div>
        <a href="allicon.php"><button class="btn btn-danger" style="margin-left: 46%; padding:10px">Back</button></a>
    </div>

    <script>
        let medium = '';
        let currentClass = '';

        const groups = {
            English: {
                default: "Select your group",
                CSE: "CSE",
                Biology: "BIOLOGY",
                BusinessMaths: "BUSINESS MATHS",
                Commerce: "COMMERCE",
                PureScience: "PURE SCIENCE"
            },
            Tamil: {
                default: "உங்கள் குழுவைத் தேர்ந்தெடுக்கவும்",
                CSE: "கணினி அறிவியல்",
                Biology: "உயிரியல்",
                BusinessMaths: "வணிகக் கணிதம்",
                Commerce: "வணிகவியல்",
                PureScience: "தூய அறிவியல்"
            }
        };

        // Video content mapping
        const videoData = {
            '10th': {
                'Tamil': '<h4><i class="fas fa-video"></i> 10th Tamil Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PLcNFxICIFZLqSEqITPquIHiDdxWEFeUUp" target="_blank" rel="noopener noreferrer">Tamil All Units</a></li></ul>',
                'English': '<h4><i class="fas fa-video"></i> 10th English Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGkbStUeaFXRteeVnuQgazzh" target="_blank" rel="noopener noreferrer">Unit 1</a></li><li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmedPd8RpUwIFWKPgo8wb0O" target="_blank" rel="noopener noreferrer">Unit 2</a></li><li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGm40ThpcirTDYnTv50mXco9" target="_blank" rel="noopener noreferrer">Unit 3</a></li><li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGnKTThELwdOSbohn13jajcy" target="_blank" rel="noopener noreferrer">Unit 4</a></li><li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGlyofno7piknFYzlp7tzJLp" target="_blank" rel="noopener noreferrer">Unit 5</a></li><li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGns2cr_nVfnPOo69vjjCjAB" target="_blank" rel="noopener noreferrer">Unit 6</a></li><li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmc8yuaHupV3T02OxeJ9YDd" target="_blank" rel="noopener noreferrer">Unit 7</a></li></ul>',
                'Maths': '<h4><i class="fas fa-video"></i> 10th Maths Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PL2qtWkm0Z4ce0vD-aJXoFOgQXQLrXhsKb" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Science': '<h4><i class="fas fa-video"></i> 10th Science Videos</h4><ul><li><a href="https://www.youtube.com/watch?v=-HSDnFOhws0" target="_blank" rel="noopener noreferrer">Unit 1</a></li><li><a href="https://www.youtube.com/playlist?list=PLpzhzm2vqtOTI4AK8NGVcVG4BpTLhK6dZ" target="_blank" rel="noopener noreferrer">Unit 2</a></li><li><a href="https://www.youtube.com/playlist?list=PLpzhzm2vqtOQhbqJfqdXb1we9FOoyZhi5" target="_blank" rel="noopener noreferrer">Unit 3</a></li><li><a href="https://www.youtube.com/playlist?list=PLpzhzm2vqtOSntulxzUdUN4DTZWyRR_Wt" target="_blank" rel="noopener noreferrer">Unit 4</a></li><li><a href="https://www.youtube.com/playlist?list=PLpzhzm2vqtOQtkpq-D_vWQKWsGXGqIegK" target="_blank" rel="noopener noreferrer">Unit 5</a></li></ul>',
                'Social Science': '<h4><i class="fas fa-video"></i> 10th Social Science Videos</h4><h5>History</h5><ul><li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGk24w4VhibV0FNuQ8NmleNr" target="_blank" rel="noopener noreferrer">Unit 1</a></li><li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGkaSjlie3IJIYQtBs49N_XA" target="_blank" rel="noopener noreferrer">Unit 2</a></li></ul><h5>Geography</h5><ul><li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGk5c5mIwZatGRvNT6LETOUL" target="_blank" rel="noopener noreferrer">Unit 1</a></li><li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmOdGR-h7njvs6hLGsNa09l" target="_blank" rel="noopener noreferrer">Unit 2</a></li></ul>'
            },
            '11th': {
                'Tamil': '<h4><i class="fas fa-video"></i> 11th Tamil Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PLh_WxVJ_RG6VVRPMiLorAn_kF0OeClMZD" target="_blank" rel="noopener noreferrer">Tamil All Units</a></li></ul>',
                'English': '<h4><i class="fas fa-video"></i> 11th English Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGlzF3KC-r4pI8HgwbP73ctU" target="_blank" rel="noopener noreferrer">All topics</a></li></ul>',
                'Maths': '<h4><i class="fas fa-video"></i> 11th Maths Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PL2qtWkm0Z4ccmrxoNjy2bgOWW8Jddu_0k" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Physics': '<h4><i class="fas fa-video"></i> 11th Physics Videos</h4><ul><li><a href="https://www.youtube.com/@MurugaMP/search?query=11th" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Chemistry': '<h4><i class="fas fa-video"></i> 11th Chemistry Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PL3s-GF0G43lSB_6ST-AKTVBWnngENBG4z" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Biology': '<h4><i class="fas fa-video"></i> 11th Biology Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PLQcARNyZqreWh4o7Mjt7OfhKMASIY_A0D" target="_blank" rel="noopener noreferrer">Bio-Zoology</a></li><li><a href="https://www.youtube.com/playlist?list=PLy85GAYxmSmMAIgr1lVD4pArrBIQCt2Nu" target="_blank" rel="noopener noreferrer">Bio-Botany</a></li></ul>',
                'Computer Science': '<h4><i class="fas fa-video"></i> 11th Computer Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PL3G8RpRE66HUpVRD7mnijqYcfl316QSCR" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Accountancy': '<h4><i class="fas fa-video"></i> 11th Accountancy Videos</h4><ul><li><a href="https://www.youtube.com/@MurugaMP/search?query=11th+accountancy" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Economics': '<h4><i class="fas fa-video"></i> 11th Economics Videos</h4><ul><li><a href="https://www.youtube.com/@MurugaMP/search?query=11th+economics" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Commerce': '<h4><i class="fas fa-video"></i> 11th Commerce Videos</h4><ul><li><a href="https://www.youtube.com/@MurugaMP/search?query=11th+commerce" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Business Maths': '<h4><i class="fas fa-video"></i> 11th Business Maths Videos</h4><ul><li><a href="https://www.youtube.com/@MurugaMP/search?query=11th+business+maths" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Computer Application': '<h4><i class="fas fa-video"></i> 11th Computer Application Videos</h4><ul><li><a href="https://www.youtube.com/@MurugaMP/search?query=11th+computer+application" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>'
            },
            '12th': {
                'Tamil': '<h4><i class="fas fa-video"></i> 12th Tamil Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PLXyXmEDi5S6XO8Tn_P8qOnoCytlk1XSbN" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'English': '<h4><i class="fas fa-video"></i> 12th English Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PLeJGQm2AZIIBR32KyjPh3E9vIJxq8rUm4" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Maths': '<h4><i class="fas fa-video"></i> 12th Maths Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PL2qtWkm0Z4ceoeB0lzMfdKSKI85-l_Vv_" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Physics': '<h4><i class="fas fa-video"></i> 12th Physics Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PLWtojMl0l6YUv5Z6z6LXXuaRamZYoq7Rj" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Chemistry': '<h4><i class="fas fa-video"></i> 12th Chemistry Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PLg99mcrxFRz_i5lTECfp3aNEKGGiNeaoj" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Biology': '<h4><i class="fas fa-video"></i> 12th Biology Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PLy85GAYxmSmMec8WRplK1QOh_jFT14wGU" target="_blank" rel="noopener noreferrer">Bio-Botany</a></li><li><a href="https://www.youtube.com/playlist?list=PLXjS4O0taZpQoUKapiYAZJdsbbx2WzQAZ" target="_blank" rel="noopener noreferrer">Bio-Zoology</a></li></ul>',
                'Computer Science': '<h4><i class="fas fa-video"></i> 12th Computer Videos</h4><ul><li><a href="https://www.youtube.com/playlist?list=PLsl2RzShS3I0h-oymlVSt83PCzu7ftyTl" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Accountancy': '<h4><i class="fas fa-video"></i> 12th Accountancy Videos</h4><ul><li><a href="https://www.youtube.com/@MurugaMP/search?query=12th+accountancy" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Economics': '<h4><i class="fas fa-video"></i> 12th Economics Videos</h4><ul><li><a href="https://www.youtube.com/@MurugaMP/search?query=12th+economics" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Commerce': '<h4><i class="fas fa-video"></i> 12th Commerce Videos</h4><ul><li><a href="https://www.youtube.com/@MurugaMP/search?query=12th+commerce" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Business Maths': '<h4><i class="fas fa-video"></i> 12th Business Maths Videos</h4><ul><li><a href="https://www.youtube.com/@MurugaMP/search?query=12th+business+maths" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>',
                'Computer Application': '<h4><i class="fas fa-video"></i> 12th Computer Application Videos</h4><ul><li><a href="https://www.youtube.com/@MurugaMP/search?query=12th+computer+application" target="_blank" rel="noopener noreferrer">All lessons</a></li></ul>'
            }
        };

        function getSubjectNameFromOption(optionText) {
            let text = optionText.trim();
            const tamilToEnglish = {
                "ஆங்கிலம்": "English",
                "தமிழ்": "Tamil",
                "கணிதம்": "Maths",
                "அறிவியல்": "Science",
                "சமூக அறிவியல்": "Social Science",
                "வேதியியல்": "Chemistry",
                "இயற்பியல்": "Physics",
                "உயிரியல்": "Biology",
                "கணினி அறிவியல": "Computer Science",
                "கணக்கியல்": "Accountancy",
                "பொருளியல்": "Economics",
                "வணிகவியல்": "Commerce",
                "வணிகக் கணிதம்": "Business Maths",
                "கணினி பயன்பாடு": "Computer Application"
            };
            return medium === 'English' ? text : tamilToEnglish[text] || text;
        }

        function handleSubjectChange() {
            const activeSelect = document.getElementById(medium === 'English' ? 'subjectSelecte' : 'subjectSelectt');
            const selectedText = activeSelect.options[activeSelect.selectedIndex].text;
            const selectedValue = activeSelect.value;

            if (selectedValue && selectedValue !== 'default' && selectedText) {
                const subjectKey = getSubjectNameFromOption(selectedText);
                const content = videoData[currentClass] && videoData[currentClass][subjectKey]
                    ? videoData[currentClass][subjectKey]
                    : '<h3 style="margin: 20px; text-align: center; color: #006ceb;">Videos for ' + subjectKey + ' (' + currentClass + ') not available yet.</h3>';
                document.getElementById('contentArea').innerHTML = content;
            } else {
                document.getElementById('contentArea').innerHTML = '<h3 style="margin: 20px; text-align: center; color: #006ceb;">Please select a subject to view videos.</h3>';
            }
        }

        function setGroupOptions(lang) {
            const select = document.getElementById('groupSelect');
            const groupData = groups[lang];
            let optionsHtml = '';
            for (const [key, value] of Object.entries(groupData)) {
                const optionValue = key === 'default' ? 'default' : key;
                optionsHtml += '<option value="' + optionValue + '">' + value + '</option>';
            }
            select.innerHTML = optionsHtml;
        }

        function hideGroupAndSubject() {
            document.querySelector('.card31').style.display = "none";
            document.querySelector('.card32').style.display = "none";
            document.getElementById('groupSelect').value = 'default';
            document.getElementById('subjectSelecte').innerHTML = '';
            document.getElementById('subjectSelectt').innerHTML = '';
            document.getElementById('contentArea').innerHTML = '<h3 style="margin: 20px; text-align: center; color: #006ceb;">Please select your Class, Medium, Group (if applicable), and Subject to view videos.</h3>';
        }

        function handleClassChange(cls) {
            currentClass = cls;
            document.querySelector('.card30').style.display = "block";
            document.querySelectorAll('input[name="Medium"]').forEach(r => r.checked = false);
            hideGroupAndSubject();
        }

        function tamil() {
            medium = 'Tamil';
            setGroupOptions('Tamil');
            if (currentClass === '10th') {
                ten();
            } else {
                eleOrTwel();
            }
        }

        function english() {
            medium = 'English';
            setGroupOptions('English');
            if (currentClass === '10th') {
                ten();
            } else {
                eleOrTwel();
            }
        }

        function ten() {
            document.querySelector('.card31').style.display = "none";
            document.querySelector('.card32').style.display = "block";
            document.getElementById('groupSelect').value = 'default';
            if (medium === 'Tamil') {
                document.getElementById('subjectSelecte').style.display = 'none';
                document.getElementById('subjectSelectt').style.display = 'block';
                setSubjectsForTen('Tamil');
            } else {
                document.getElementById('subjectSelectt').style.display = 'none';
                document.getElementById('subjectSelecte').style.display = 'block';
                setSubjectsForTen('English');
            }
        }

        function eleOrTwel() {
            document.querySelector('.card31').style.display = "block";
            document.querySelector('.card32').style.display = "none";
            document.getElementById('subjectSelecte').innerHTML = '';
            document.getElementById('subjectSelectt').innerHTML = '';
            document.getElementById('groupSelect').value = 'default';
        }

        function showSubject() {
            const group = document.getElementById('groupSelect').value;
            const subjectSelectE = document.getElementById('subjectSelecte');
            const subjectSelectT = document.getElementById('subjectSelectt');

            if (group !== 'default') {
                document.querySelector('.card32').style.display = "block";
                if (medium === 'Tamil') {
                    subjectSelectE.style.display = 'none';
                    subjectSelectT.style.display = 'block';
                    setGroupSubjects(group, 'Tamil');
                } else {
                    subjectSelectT.style.display = 'none';
                    subjectSelectE.style.display = 'block';
                    setGroupSubjects(group, 'English');
                }
            } else {
                document.querySelector('.card32').style.display = "none";
                subjectSelectE.style.display = 'none';
                subjectSelectT.style.display = 'none';
            }
            document.getElementById('contentArea').innerHTML = '<h3 style="margin: 20px; text-align: center; color: #006ceb;">Please select a subject to view videos.</h3>';
        }

        function setSubjectsForTen(med) {
            const subjectSelect = med === 'Tamil'
                ? document.getElementById('subjectSelectt')
                : document.getElementById('subjectSelecte');
            if (med === 'Tamil') {
                subjectSelect.innerHTML = `
                    <option value="default">உங்கள் பாடத்தைத் தேர்ந்தெடுக்கவும்</option>
                    <option value="sub1">ஆங்கிலம்</option>
                    <option value="sub2">தமிழ்</option>
                    <option value="sub3">கணிதம்</option>
                    <option value="sub4">அறிவியல்</option>
                    <option value="sub5">சமூக அறிவியல்</option>
                `;
            } else {
                subjectSelect.innerHTML = `
                    <option value="default">Select your Subject</option>
                    <option value="sub1">English</option>
                    <option value="sub2">Tamil</option>
                    <option value="sub3">Maths</option>
                    <option value="sub4">Science</option>
                    <option value="sub5">Social Science</option>
                `;
            }
        }

        function setGroupSubjects(group, med) {
            const subjectSelect = med === 'Tamil'
                ? document.getElementById('subjectSelectt')
                : document.getElementById('subjectSelecte');

            const subjects = {
                Tamil: {
                    CSE: `
                        <option value="default">உங்கள் பாடத்தைத் தேர்ந்தெடுக்கவும்</option>
                        <option value="sub1">ஆங்கிலம்</option>
                        <option value="sub2">தமிழ்</option>
                        <option value="sub3">கணிதம்</option>
                        <option value="sub4">வேதியியல்</option>
                        <option value="sub5">இயற்பியல்</option>
                        <option value="sub6">கணினி அறிவியல</option>
                    `,
                    Biology: `
                        <option value="default">உங்கள் பாடத்தைத் தேர்ந்தெடுக்கவும்</option>
                        <option value="sub1">ஆங்கிலம்</option>
                        <option value="sub2">தமிழ்</option>
                        <option value="sub3">கணிதம்</option>
                        <option value="sub4">வேதியியல்</option>
                        <option value="sub5">இயற்பியல்</option>
                        <option value="sub6">உயிரியல்</option>
                    `,
                    BusinessMaths: `
                        <option value="default">உங்கள் பாடத்தைத் தேர்ந்தெடுக்கவும்</option>
                        <option value="sub1">ஆங்கிலம்</option>
                        <option value="sub2">தமிழ்</option>
                        <option value="sub3">கணக்கியல்</option>
                        <option value="sub4">பொருளியல்</option>
                        <option value="sub5">வணிகவியல்</option>
                        <option value="sub6">வணிகக் கணிதம்</option>
                    `,
                    Commerce: `
                        <option value="default">உங்கள் பாடத்தைத் தேர்ந்தெடுக்கவும்</option>
                        <option value="sub1">ஆங்கிலம்</option>
                        <option value="sub2">தமிழ்</option>
                        <option value="sub3">கணக்கியல்</option>
                        <option value="sub4">பொருளியல்</option>
                        <option value="sub5">வணிகவியல்</option>
                        <option value="sub6">கணினி பயன்பாடு</option>
                    `,
                    PureScience: `
                        <option value="default">உங்கள் பாடத்தைத் தேர்ந்தெடுக்கவும்</option>
                        <option value="sub1">ஆங்கிலம்</option>
                        <option value="sub2">தமிழ்</option>
                        <option value="sub3">உயிரியல்</option>
                        <option value="sub4">வேதியியல்</option>
                        <option value="sub5">இயற்பியல்</option>
                        <option value="sub6">கணினி அறிவியல</option>
                    `
                },
                English: {
                    CSE: `
                        <option value="default">Select your Subject</option>
                        <option value="sub1">English</option>
                        <option value="sub2">Tamil</option>
                        <option value="sub3">Maths</option>
                        <option value="sub4">Chemistry</option>
                        <option value="sub5">Physics</option>
                        <option value="sub6">Computer Science</option>
                    `,
                    Biology: `
                        <option value="default">Select your Subject</option>
                        <option value="sub1">English</option>
                        <option value="sub2">Tamil</option>
                        <option value="sub3">Maths</option>
                        <option value="sub4">Chemistry</option>
                        <option value="sub5">Physics</option>
                        <option value="sub6">Biology</option>
                    `,
                    BusinessMaths: `
                        <option value="default">Select your Subject</option>
                        <option value="sub1">English</option>
                        <option value="sub2">Tamil</option>
                        <option value="sub3">Accountancy</option>
                        <option value="sub4">Economics</option>
                        <option value="sub5">Commerce</option>
                        <option value="sub6">Business Maths</option>
                    `,
                    Commerce: `
                        <option value="default">Select your Subject</option>
                        <option value="sub1">English</option>
                        <option value="sub2">Tamil</option>
                        <option value="sub3">Accountancy</option>
                        <option value="sub4">Economics</option>
                        <option value="sub5">Commerce</option>
                        <option value="sub6">Computer Application</option>
                    `,
                    PureScience: `
                        <option value="default">Select your Subject</option>
                        <option value="sub1">English</option>
                        <option value="sub2">Tamil</option>
                        <option value="sub3">Biology</option>
                        <option value="sub4">Chemistry</option>
                        <option value="sub5">Physics</option>
                        <option value="sub6">Computer Science</option>
                    `
                }
            };

            subjectSelect.innerHTML = subjects[med][group] || '';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
