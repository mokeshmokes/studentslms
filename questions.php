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
    <title>Student_Friendly / Question Papers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" />
    <style>
        /* Base Styling */
        body {
            /* Note: bg2.jpeg is not included, so you'll need to provide it */
            background-image: url(./image/WhatsApp\ Image\ 2025-09-28\ at\ 09.29.24_91e7c59a.jpg);
            background-size: cover;
            background-position: center;
            font-family: "Lato", sans-serif;
            background-color: #f8f9fa;
        }

        /* Card 1: Header/Logo */
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

        /* Card 2: User Info */
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

        /* Selection Cards */
        .card-selection {
            background-color: white;
            border-radius: 10px;
            width: 100%;
            padding: 5px 15px;
            margin-top: 20px;
            box-shadow: 0 4px 8px 0px rgba(0, 0, 0, 0.1);
        }

        /* Specific card classes for initial display state */
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

        /* Styling for radio buttons and their labels */
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

        /* Styling for select dropdowns */
        #groupSelect,
        #subjectSelecte,
        #subjectSelectt,
        #volumeSelect {
            padding: 10px;
            width: 90%;
            margin: 10px auto;
            display: block;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        /* Card 4: Placeholder/Display Area */
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

        #s2 {
            font-size: 4rem;
            margin-right: 0.5rem;
        }

        #s3 {
            font-size: 4rem;
            margin-right: 0.5rem;
        }

        @media (max-width: 480px) {
            #short {
                font-size: 20px;
            }

            #s2 {
                font-size: 2rem;
                margin-right: 0.25rem;
            }

            #s3 {
                font-size: 2rem;
                margin-right: 0.25rem;
                margin-left: 100px;
            }
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
                            <h2 style="margin-left: 20px;"> SELECT GROUP</h2>
                            <select id="groupSelect" onchange="showSubject()">
                                <option value="default">Select your group</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-selection card32">
                            <h2 style="margin-left: 20px;"> SELECT SUBJECT</h2>
                            <select id="subjectSelecte" style="display: none;" onchange="handleSubjectChange()"></select>
                            <select id="subjectSelectt" style="display: none;" onchange="handleSubjectChange()"></select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card4">
                    <div id="contentArea" style="width: 100%; height: 100%; padding: 20px; overflow-y: auto;">
                        <h3 style="margin: 20px; text-align: center; color: #006ceb;">Welcome! Please select your Class, Medium, Group (if applicable), and Subject to view question papers.</h3>
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

        // Question paper content mapping
        const questionData = {
            '10th': {
                'Tamil': '<h4><i class="fas fa-file-pdf"></i> 10th Tamil Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-10th-tamil-model-question-papers/" target="_blank" rel="noopener noreferrer">Tamil Question Paper</a></li></ul>',
                'English': '<h4><i class="fas fa-file-pdf"></i> 10th English Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-10th-english-model-question-papers/" target="_blank" rel="noopener noreferrer">English Question Paper</a></li></ul>',
                'Maths': '<h4><i class="fas fa-file-pdf"></i> 10th Maths Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-10th-maths-model-question-papers/" target="_blank" rel="noopener noreferrer">Maths Question Paper</a></li></ul>',
                'Science': '<h4><i class="fas fa-file-pdf"></i> 10th Science Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-10th-science-model-question-papers/" target="_blank" rel="noopener noreferrer">Science Question Paper</a></li></ul>',
                'Social Science': '<h4><i class="fas fa-file-pdf"></i> 10th Social Science Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-10th-social-science-model-question-papers/" target="_blank" rel="noopener noreferrer">Social Science Question Paper</a></li></ul>'
            },
            '11th': {
                'Tamil': '<h4>11th Tamil Question Paper</h4><ul><li><a href="https://schools.aglasem.com/tamil-nadu-model-paper-class-11-tamil/" target="_blank" rel="noopener noreferrer">Tamil Question Paper</a></li></ul>',
                'English': '<h4>11th English Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-english-model-question-papers/" target="_blank" rel="noopener noreferrer">English Question Paper</a></li></ul>',
                'Maths': '<h4>11th Maths Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-maths-model-question-papers/" target="_blank" rel="noopener noreferrer">Maths Question Paper</a></li></ul>',
                'Chemistry': '<h4>11th Chemistry Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-chemistry-model-question-papers/" target="_blank" rel="noopener noreferrer">Chemistry Question Paper</a></li></ul>',
                'Physics': '<h4>11th Physics Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-physics-model-question-papers/" target="_blank" rel="noopener noreferrer">Physics Question Paper</a></li></ul>',
                'Biology': '<h4>11th Bio-Zoology Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-biology-model-question-papers/" target="_blank" rel="noopener noreferrer">Biology Question Paper</a></li></ul>',
                'Computer Science': '<h4>11th Computer Question Paper</h4><ul><li><a href="https://schools.aglasem.com/tamil-nadu-11th-model-question-paper-for-computer-science/" target="_blank" rel="noopener noreferrer">Computer Question Paper</a></li></ul>',
                'Accountancy': '<h4>11th Accountancy Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-accountancy-model-question-papers/" target="_blank" rel="noopener noreferrer">Accountancy Question Paper</a></li></ul>',
                'Economics': '<h4>11th Economics Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-economics-model-question-papers/" target="_blank" rel="noopener noreferrer">Economics Question Paper</a></li></ul>',
                'Commerce': '<h4>11th Commerce Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-commerce-model-question-papers/" target="_blank" rel="noopener noreferrer">Commerce Question Paper</a></li></ul>',
                'Business Maths': '<h4>11th Business Maths Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-business-maths-model-question-papers/" target="_blank" rel="noopener noreferrer">Business Maths Question Paper</a></li></ul>',
                'Computer Application': '<h4>11th Computer Application Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-computer-application-model-question-papers/" target="_blank" rel="noopener noreferrer">Computer Application Question Paper</a></li></ul>'
            },
            '12th': {
                'Tamil': '<h4>12th Tamil Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-tamil-model-question-papers/" target="_blank" rel="noopener noreferrer">Tamil Question Paper</a></li></ul>',
                'English': '<h4>12th English Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-english-model-question-papers/" target="_blank" rel="noopener noreferrer">English Question Paper</a></li></ul>',
                'Maths': '<h4>12th Maths Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-maths-model-question-papers/" target="_blank" rel="noopener noreferrer">Maths Question Paper</a></li></ul>',
                'Chemistry': '<h4>12th Chemistry Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-chemistry-model-question-papers/" target="_blank" rel="noopener noreferrer">Chemistry Question Paper</a></li></ul>',
                'Physics': '<h4>12th Physics Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-physics-model-question-papers/#google_vignette" target="_blank" rel="noopener noreferrer">Physics Question Paper</a></li></ul>',
                'Biology': '<h4>12th Bio-Zoology Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-biology-model-question-papers/" target="_blank" rel="noopener noreferrer">Biology Question Paper</a></li></ul>',
                'Computer Science': '<h4><i class="fas fa-file-pdf"></i> 12th Computer Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-computer-science-model-question-papers/" target="_blank" rel="noopener noreferrer">Computer Question Paper</a></li></ul>',
                'Accountancy': '<h4>12th Accountancy Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-accountancy-model-question-papers/" target="_blank" rel="noopener noreferrer">Accountancy Question Paper</a></li></ul>',
                'Economics': '<h4>12th Economics Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-economics-model-question-papers/" target="_blank" rel="noopener noreferrer">Economics Question Paper</a></li></ul>',
                'Commerce': '<h4>12th Commerce Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-commerce-model-question-papers/" target="_blank" rel="noopener noreferrer">Commerce Question Paper</a></li></ul>',
                'Business Maths': '<h4>12th Business Maths Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-business-maths-model-question-papers/" target="_blank" rel="noopener noreferrer">Business Maths Question Paper</a></li></ul>',
                'Computer Application': '<h4>12th Computer Application Question Paper</h4><ul><li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-computer-application-model-question-papers/" target="_blank" rel="noopener noreferrer">Computer Application Question Paper</a></li></ul>'
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
                "கணினி பயன்பாடு": "Computer Application",
            };
            return medium === 'English' ? text : tamilToEnglish[text] || text;
        }

        function handleSubjectChange() {
            const activeSelect = document.getElementById(medium === 'English' ? 'subjectSelecte' : 'subjectSelectt');
            const selectedText = activeSelect.options[activeSelect.selectedIndex].text;
            const selectedValue = activeSelect.value;
            
            if (selectedValue && selectedValue !== 'default' && selectedText) {
                const subjectKey = getSubjectNameFromOption(selectedText);
                const content = questionData[currentClass] && questionData[currentClass][subjectKey] 
                    ? questionData[currentClass][subjectKey] 
                    : `<h3 style="margin: 20px; text-align: center; color: #006ceb;">Question paper for ${subjectKey} (${currentClass}) not available.</h3>`;
                
                document.getElementById('contentArea').innerHTML = content;
            } else {
                document.getElementById('contentArea').innerHTML = '<h3 style="margin: 20px; text-align: center; color: #006ceb;">Please select a subject to view question papers.</h3>';
            }
        }

        function setGroupOptions(lang) {
            const select = document.getElementById('groupSelect');
            const groupData = groups[lang];
            let optionsHtml = '';

            for (const [key, value] of Object.entries(groupData)) {
                const optionValue = key === 'default' ? 'default' : key;
                optionsHtml += `<option value="${optionValue}">${value}</option>`;
            }
            select.innerHTML = optionsHtml;
        }

        function hideGroupAndSubject() {
            document.querySelector('.card31').style.display = "none";
            document.querySelector('.card32').style.display = "none";
            document.getElementById('groupSelect').value = 'default';
            document.getElementById('subjectSelecte').innerHTML = '';
            document.getElementById('subjectSelectt').innerHTML = '';
            document.getElementById('contentArea').innerHTML = '<h3 style="margin: 20px; text-align: center; color: #006ceb;">Please select your Class, Medium, Group (if applicable), and Subject to view question papers.</h3>';
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
            document.getElementById('contentArea').innerHTML = '<h3 style="margin: 20px; text-align: center; color: #006ceb;">Please select a subject to view question papers.</h3>';
        }

        function setSubjectsForTen(medium) {
            const subjectSelect = medium === 'Tamil'
                ? document.getElementById('subjectSelectt')
                : document.getElementById('subjectSelecte');

            if (medium === 'Tamil') {
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
        function setGroupSubjects(group, medium) {
            const subjectSelect = medium === 'Tamil'
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
                    <option value="sub6"> Computer Science</option>
                `
                }
            };

            subjectSelect.innerHTML = subjects[medium][group] || '';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
