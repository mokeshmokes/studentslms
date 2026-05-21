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
    <title>Student_Friendly / Portal</title>
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

                <div class="row" style="margin-bottom: 10%;">
                    <div class="col-md-12">
                        <div class="card-selection card33">
                            <h2 style="margin-left: 20px;"> SELECT VOLUME</h2>
                            <select id="volumeSelect" onchange="updateIframeContent()">
                                <option value="default">Select Volume</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card4">
                    <iframe id="contentIframe" style="width: 100%; height: 100%; border: none;"></iframe>
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
        const volumeSubjects = ['Maths', 'Chemistry', 'Physics'];
        const zoologyBotanySubjects = ['Biology'];

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

        // --- Subject URL Mapping ---
        // NOTE: The issue is likely in these 10th-grade links being blocked by Google Drive.
        // If the problem persists, PLEASE REPLACE THESE WITH PUBLISHED OR DIRECT SERVER LINKS.
        const subjectUrls = {
            'English': {
                '10th': {
                    'English': 'https://drive.google.com/file/d/1nAI9H50QiuwjthJUBs61lny2g9ZPO-2_/preview',
                    'Tamil': 'https://drive.google.com/file/d/1UJv_5LBa2-LgP-pRbdYA0xqntyCvT7IY/preview',
                    'Maths': 'https://drive.google.com/file/d/1s37U1aoD1bLMpmUTrsqLIgbGBFg8hJzM/preview',
                    'Science': 'https://drive.google.com/file/d/1LjUfRhQeZfOhBcFha7AsDxGergssCbGm/preview',
                    'Social Science': 'https://drive.google.com/file/d/1C2XwYpeJ1YCO6A8L_EyMTERRQjuzzxsx/preview',
                },
                '11th': {
                    'English': 'https://drive.google.com/file/d/1pLZyfO_AqRDyBojJhm_QJPds44IpPXn4/preview',
                    'Tamil': 'https://drive.google.com/file/d/1J8DpHfWCrAMgsUkOObY8wHNYIwmnLbeI/preview',
                    'Maths V1': 'https://drive.google.com/file/d/1yM7Va8_oM0ER2zbxEWO8r8haPc2qjxIb/preview',
                    'Maths V2': 'https://drive.google.com/file/d/1tVmHV2J0JIXZYi4C-zmZZw-nfOGTtttA/preview',
                    'Chemistry V1': 'https://drive.google.com/file/d/1OteuDBJObz6nAIbwxr0ew5B35BpPGWrc/preview',
                    'Chemistry V2': 'https://drive.google.com/file/d/1N8I9tN05gjaw1RdnWatZxYWETn0xUCq3/preview',
                    'Physics V1': 'https://drive.google.com/file/d/1hhsJldFqVwlhHrCh7pVplRDwf1w9gyym/preview',
                    'Physics V2': 'https://drive.google.com/file/d/1wNZFDuEL3Uo9I6MxbI5ihiVfqKxJOcHR/preview',
                    'Biology Zoology': 'https://drive.google.com/file/d/15z2v64nFUwTdEu_VHpz0DE9EgOB6n6wY/preview', 
                    'Biology Botany': 'https://drive.google.com/file/d/15bih7IuswCn7ljQdR72hbRymSthM2jHw/preview', 
                    'Computer Science': 'https://drive.google.com/file/d/1D5M3WmSzBrG2Fy9_-XqRnZHgqHaHq_eT/preview',
                    'Accountancy': 'https://drive.google.com/file/d/1GHyto5L2HkazixAprjMO7t3IccTYyfBy/preview',
                    'Economics': 'https://drive.google.com/file/d/1cD0Iohbv4Mf5BrXrJLNz8jQ2yPrZkpSJ/preview',
                    'Commerce': 'https://drive.google.com/file/d/1M5KNAmJgIj3fdzXpNIogpNhCAEYL_wbY/preview',
                    'Business Maths': 'https://drive.google.com/file/d/1a5d0crx5O7eh91_28CHsSNDXsJE1PEnF/preview',
                    'Computer Application': 'https://drive.google.com/file/d/16cWaZBRdjVtXY__MAvSVmuioSdazcRXO/preview',
                },
                '12th': {
                    'English': 'https://drive.google.com/file/d/1iyicKzBvQjWJ3btZqA75ruLN_BGzUQKI/preview',
                    'Tamil': 'https://drive.google.com/file/d/1nJHRDeqcSD7d_EEh6oum8kUGRfvkmQrt/preview',
                    'Maths V1': 'https://drive.google.com/file/d/1CoWbBJq2GZR1wpE0Q_ww5rh8AS8YXb6T/preview',
                    'Maths V2': 'https://drive.google.com/file/d/1Ebwo257NuhgK8rQ0bC-195QCYhl81HXg/preview',
                    'Chemistry V1': 'https://drive.google.com/file/d/1GopjsZ6QaoGipA9JJWatB-EFdoM5Tmp4/preview',
                    'Chemistry V2': 'https://drive.google.com/file/d/1YcS9JCfwjO4199s2UPyWSyyCRf-_V-hg/preview',
                    'Physics V1': 'https://drive.google.com/file/d/1Iwii17WU0jTrwt-mnnWyo_TGsu0EvFKJ/preview',
                    'Physics V2': 'https://drive.google.com/file/d/1XLBuke3BecH-Y0SbdfUS6_CZ7eUO6D6j/preview',
                    'Biology Zoology': 'https://drive.google.com/file/d/1eE13crIFrlXVu6FSYzMcF3k0SoATVkYl/preview', 
                    'Biology Botany': 'https://drive.google.com/file/d/1ytX9xdG-f_uGXx25v2Zm69o3grlsy7bz/preview', 
                    'Computer Science': 'https://drive.google.com/file/d/1woppyG16Lp5JhGs2CEKz-IZoaES49wMl/preview',
                    'Accountancy': 'https://drive.google.com/file/d/1NQor9XLPkMzr-oJJbeaxZDk2RvSKCfTd/preview',
                    'Economics': 'https://drive.google.com/file/d/1hMYc7qcEO-6xM4DZYDcBKjv2mchRuVzQ/preview',
                    'Commerce': 'https://drive.google.com/file/d/1e4F8fsOSQ2erH8_OB5vnz2LZKvwn_z7a/preview',
                    'Business Maths': 'https://drive.google.com/file/d/1aPlg7bsP99Q1XU2n7i18nVVUtwth3U3O/preview',
                    'Computer Application': 'https://drive.google.com/file/d/1HdBgWw1BSppQFQTOix4XioxPkcZDVPot/preview',
                }
            },
            'Tamil': {
                '10th': {
                    'English': 'https://drive.google.com/file/d/1nAI9H50QiuwjthJUBs61lny2g9ZPO-2_/preview',
                    'Tamil': 'https://drive.google.com/file/d/1UJv_5LBa2-LgP-pRbdYA0xqntyCvT7IY/preview',
                    'Maths': 'https://drive.google.com/file/d/1u1XrFDjg2i-2HRbQRUwyd-z4ucmaNznk/preview',
                    'Science': 'https://drive.google.com/file/d/19WgD3TqZhSqo2U-3J4Ci-Mt1JVHxmU9n/preview',
                    'Social Science': 'https://drive.google.com/file/d/1CKSl7FgzXEbz9Fqam_5oyDL2nwSQXsoX/preview',
                },
                '11th': {
                    'English': 'https://drive.google.com/file/d/1pLZyfO_AqRDyBojJhm_QJPds44IpPXn4/preview',
                    'Tamil': 'https://drive.google.com/file/d/1J8DpHfWCrAMgsUkOObY8wHNYIwmnLbeI/preview',
                    'Maths V1': 'https://drive.google.com/file/d/1JQoY_do6tFbXA3O6ZyAXTyjTHpMBShhG/preview',
                    'Maths V2': 'https://drive.google.com/file/d/1lnuUojN4tneKSA_SahTUYZvhvYjWWkVd/preview',
                    'Chemistry V1': 'https://drive.google.com/file/d/1reEzM0fPVCdMMoF6T1Cp9_6i0sVeXS10/preview',
                    'Chemistry V2': 'https://drive.google.com/file/d/1qcXi4RMMGCbN-oUE6qGGEEN9FeSRPktp/preview',
                    'Physics V1': 'https://drive.google.com/file/d/1_lKmwhJkUM0_STH-5UkkDGjZPTHINZjX/preview',
                    'Physics V2': 'https://drive.google.com/file/d/1BCk4DvaXphn0KtStucnza9hC3VJ5spNd/preview',
                    'Biology Zoology': 'https://drive.google.com/file/d/1iOGssnVKOxe5q_IHAJ6nGW1hMxLr7Xpk/preview', 
                    'Biology Botany': 'https://drive.google.com/file/d/1zwYehp9TDw88NiSuk0PhLu88YQnvbZfV/preview', 
                    'Computer Science': 'https://drive.google.com/file/d/1e63MJx-1lILG3dectOSRmaeuCk6oQSIa/preview',
                    'Accountancy': 'https://drive.google.com/file/d/13lZGxcbC9o1Fzt9DwnrsJ2njbMnLQSYl/preview',
                    'Economics': 'https://drive.google.com/file/d/1NhoHxFY7XpJIMj58KCAiegZNZxdw5xXx/preview',
                    'Commerce': 'https://drive.google.com/file/d/1OaM3YZy7EB_0C7FG7t38YFKNYYocRTYx/preview',
                    'Business Maths': 'https://drive.google.com/file/d/1TxKxeqsmtJTdaICoUDCkRzKIMjb7SZfT/preview',
                    'Computer Application': 'https://drive.google.com/file/d/14jSh1DosByIc3pmJHWEwWWJNsD0XfFKG/preview',
                },
                '12th': {
                    'English': 'https://drive.google.com/file/d/1iyicKzBvQjWJ3btZqA75ruLN_BGzUQKI/preview',
                    'Tamil': 'https://drive.google.com/file/d/1nJHRDeqcSD7d_EEh6oum8kUGRfvkmQrt/preview',
                    'Maths V1': 'https://drive.google.com/file/d/1Pe9CYK5VCyApDN7B5lBGZxLV2rmFg_F3/preview',
                    'Maths V2': 'https://drive.google.com/file/d/1eODlPw6MjaJfbc9UVNC4XocpBFf72vQq/preview',
                    'Chemistry V1': 'https://drive.google.com/file/d/1Z0p0BAMn4DnisrpEHd9R1DWreibvfWbd/preview',
                    'Chemistry V2': 'https://drive.google.com/file/d/16zBIZ3Kg9BCsXLrRK_BghKenx3fIdlVw/preview',
                    'Physics V1': 'https://drive.google.com/file/d/1EQ5S2LgeEyXUZYb7W4OFSIHfV4faOyvo/preview',
                    'Physics V2': 'https://drive.google.com/file/d/1DTDOq5pgxyNceNHPu9yHXeeul2LpGSDQ/preview',
                    'Biology Zoology': 'https://drive.google.com/file/d/1VQ8uiFUpzIiUhULDst72F0RKVPtLxbwu/preview', 
                    'Biology Botany': 'https://drive.google.com/file/d/1xFl3zm-MQYXuvwoVcQspLjWYjXRyVioe/preview', 
                    'Computer Science': 'https://drive.google.com/file/d/1yaPIlhn_WLvrrRIU7QhSlgErj-Rm_g7D/preview',
                    'Accountancy': 'https://drive.google.com/file/d/1rMuuQgKpb26aZiAX6bF6L64ltp1kS87d/preview',
                    'Economics': 'https://drive.google.com/file/d/1vuizmjx31iuRrSh4DvrL40ecg5E2zdDc/preview',
                    'Commerce': 'https://drive.google.com/file/d/1Bd0V35VoISJLFezuMInnk07ufoAPRRXj/preview',
                    'Business Maths': 'https://drive.google.com/file/d/1DXfoIp-8YB9zLuAUp6FZRxuvsY2acVcB/preview',
                    'Computer Application': 'https://drive.google.com/file/d/1CWzQB5OoKZxKXTB9RXlBnm4lc8DNdezr/preview',
                }
            }
        };

        function getSubjectUrl(subjectKey) {
            return subjectUrls[medium] && subjectUrls[medium][currentClass]
                ? subjectUrls[medium][currentClass][subjectKey]
                : null;
        }

        function getSubjectNameFromOption(optionText) {
            let text = optionText.trim();
            // Remove split markers before translation
            if (text.includes('Volume 1') || text.includes('தொகுதி 1')) text = text.replace(/ Volume 1| தொகுதி 1/, '');
            if (text.includes('Volume 2') || text.includes('தொகுதி 2')) text = text.replace(/ Volume 2| தொகுதி 2/, '');
            if (text.includes('Zoology')) text = text.replace(' Zoology', '');
            if (text.includes('Botany')) text = text.replace(' Botany', '');
            if (text.endsWith(' V1')) text = text.slice(0, -3); 
            if (text.endsWith(' V2')) text = text.slice(0, -3);

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

            return medium === 'English' ? text : tamilToEnglish[text] || null;
        }

        function setSubSubjectOptions(subjectKey) {
            const subSelect = document.getElementById('volumeSelect');
            const card33 = document.querySelector('.card33');
            const isAdvancedClass = (currentClass === '11th' || currentClass === '12th');

            if (!isAdvancedClass) {
                 card33.style.display = "none";
                 return;
            }

            let optionsHtml = '';
            let headerText = '';
            let isRequired = false;

            // 1. Handle Volume Subjects (Maths, Chemistry, Physics)
            if (volumeSubjects.includes(subjectKey)) {
                isRequired = true;
                if (medium === 'Tamil') {
                    headerText = subjectKey + " தொகுதியை தேர்ந்தெடுக்கவும்";
                    optionsHtml = `
                        <option value="default">தொகுதியைத் தேர்ந்தெடுக்கவும்</option>
                        <option value="V1">${subjectKey} தொகுதி 1</option>
                        <option value="V2">${subjectKey} தொகுதி 2</option>
                    `;
                } else {
                    headerText = `SELECT VOLUME FOR ${subjectKey.toUpperCase()}`;
                    optionsHtml = `
                        <option value="default">Select Volume</option>
                        <option value="V1">${subjectKey} Volume 1</option>
                        <option value="V2">${subjectKey} Volume 2</option>
                    `;
                }
            } 
            // 2. Handle Biology Split (Zoology/Botany)
            else if (zoologyBotanySubjects.includes(subjectKey)) {
                isRequired = true;
                if (medium === 'Tamil') {
                    headerText = "பிரிவைத் தேர்ந்தெடுக்கவும்";
                    optionsHtml = `
                        <option value="default">பிரிவைத் தேர்ந்தெடுக்கவும்</option>
                        <option value="Zoology">விலங்கியல்</option>
                        <option value="Botany">தாவரவியல்</option>
                    `;
                } else {
                    headerText = `SELECT BRANCH FOR ${subjectKey.toUpperCase()}`;
                    optionsHtml = `
                        <option value="default">Select Branch</option>
                        <option value="Zoology">Zoology</option>
                        <option value="Botany">Botany</option>
                    `;
                }
            }

            if (isRequired) {
                card33.style.display = "block";
                document.querySelector('.card33 h2').textContent = headerText;
                subSelect.innerHTML = optionsHtml;
            } else {
                card33.style.display = "none";
                subSelect.value = 'default';
                updateIframeContent(); 
            }
        }

        // --- FIXED: handleSubjectChange ensures 10th grade immediately calls updateIframeContent ---
        function handleSubjectChange() {
            const activeSelect = document.getElementById(medium === 'English' ? 'subjectSelecte' : 'subjectSelectt');
            const selectedText = activeSelect.options[activeSelect.selectedIndex].text;
            const selectedKey = getSubjectNameFromOption(selectedText);
            const isAdvancedClass = (currentClass === '11th' || currentClass === '12th');

            if (isAdvancedClass && selectedKey && selectedKey !== 'default') {
                setSubSubjectOptions(selectedKey);
            } else {
                // This path is taken for all 10th grade subjects.
                document.querySelector('.card33').style.display = "none";
                document.getElementById('volumeSelect').value = 'default';
                updateIframeContent(); 
            }
        }

        function updateIframeContent() {
            const subjectSelectE = document.getElementById('subjectSelecte');
            const subjectSelectT = document.getElementById('subjectSelectt');
            const iframe = document.getElementById('contentIframe');
            const subSelect = document.getElementById('volumeSelect');

            const activeSelect = subjectSelectE.style.display !== 'none' ? subjectSelectE : subjectSelectT;

            const selectedOption = activeSelect.options[activeSelect.selectedIndex];
            const selectedText = selectedOption ? selectedOption.text : null;
            const selectedValue = selectedOption ? selectedOption.value : null;

            if (selectedValue && selectedValue !== 'default' && selectedText) {
                const subjectKeyBase = getSubjectNameFromOption(selectedText);
                let finalKey = subjectKeyBase;

                const isSplitSubject = volumeSubjects.includes(subjectKeyBase) || zoologyBotanySubjects.includes(subjectKeyBase);
                const isSubSubjectCardVisible = document.querySelector('.card33').style.display === "block";

                // Check for Volume/Branch requirement
                if (isSplitSubject && isSubSubjectCardVisible) {
                    if (subSelect.value === 'default') {
                        iframe.src = 'about:blank';
                        iframe.contentWindow.document.write('<h3 style="margin: 20px;">Please select the required volume or branch.</h3>');
                        return;
                    }
                    // Final key includes the split (e.g., 'Maths V1' or 'Biology Zoology')
                    finalKey = `${subjectKeyBase} ${subSelect.value}`;
                }

                const url = getSubjectUrl(finalKey);

                if (url) {
                    iframe.src = url;
                } else {
                    iframe.src = 'about:blank';
                    iframe.contentWindow.document.write(`<h3 style="margin: 20px;">Document for ${finalKey} (${currentClass} ${medium} Medium) not found.</h3>`);
                }
            } else {
                iframe.src = 'about:blank';
                document.getElementById('contentIframe').src = 'about:blank';
                iframe.contentWindow.document.write('<h3 style="margin: 20px;">Please select a subject to view content.</h3>');
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
            document.querySelector('.card33').style.display = "none";
            document.getElementById('groupSelect').value = 'default';
            document.getElementById('subjectSelecte').innerHTML = '';
            document.getElementById('subjectSelectt').innerHTML = '';
            document.getElementById('volumeSelect').value = 'default';

            // Clear iFrame on major navigation reset
            document.getElementById('contentIframe').src = 'about:blank';
            document.getElementById('contentIframe').contentWindow.document.write('<h3 style="margin: 20px;">Please select a subject to view content.</h3>');
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
            document.querySelector('.card33').style.display = "none";
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
            // Trigger a final iFrame content update check
            updateIframeContent(); 
        }

        function eleOrTwel() {
            document.querySelector('.card31').style.display = "block";
            document.querySelector('.card32').style.display = "none";
            document.querySelector('.card33').style.display = "none";

            document.getElementById('subjectSelecte').innerHTML = '';
            document.getElementById('subjectSelectt').innerHTML = '';
            document.getElementById('groupSelect').value = 'default';
        }

        function showSubject() {
            const group = document.getElementById('groupSelect').value;
            const subjectSelectE = document.getElementById('subjectSelecte');
            const subjectSelectT = document.getElementById('subjectSelectt');

            document.querySelector('.card33').style.display = "none"; 
            document.getElementById('volumeSelect').value = 'default';

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

            document.getElementById('contentIframe').src = 'about:blank';
            document.getElementById('contentIframe').contentWindow.document.write('<h3 style="margin: 20px;">Please select a subject to view content.</h3>');
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
        
        // --- Event Listeners Setup ---
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('subjectSelecte').addEventListener('change', handleSubjectChange);
            document.getElementById('subjectSelectt').addEventListener('change', handleSubjectChange);
            document.getElementById('volumeSelect').addEventListener('change', updateIframeContent);

            // Initial message
            document.getElementById('contentIframe').contentWindow.document.write('<h3 style="margin: 20px;">Welcome! Please select your Class, Medium, Group (if applicable), and Subject.</h3>');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>