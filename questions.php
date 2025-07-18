<?php
session_start(); // ✅ Must be at the top
?>
<?php include('headericon.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Class Guide Links</title>
  <style>
    .section, .links {
      display: none;
      margin-top: 15px;
    }
    li{
      list-style-type: none;
    }
  </style>
  <script>
    function showSubjectOptions() {
      document.querySelectorAll('.section').forEach(el => el.style.display = 'none');
      document.querySelectorAll('.links').forEach(el => el.style.display = 'none');

      const selectedClass = document.querySelector('input[name="class"]:checked');
      if (selectedClass) {
        document.getElementById(selectedClass.value.toLowerCase() + 'Section').style.display = 'block';
      }
    }

    function showLinks(className) {
      document.querySelectorAll('.links').forEach(el => el.style.display = 'none');
      const subject = document.querySelector(`input[name="${className}Subject"]:checked`);
      if (subject) {
        const id = className + subject.value.toLowerCase() + 'Links';
        document.getElementById(id).style.display = 'block';
      }
    }
  </script>
</head><br><br>
<body style="text-align: center;">

<h3>Select Your Class:</h3>
<form>
  <input type="radio" name="class" value="10th" onclick="showSubjectOptions()"> 10th<br>
  <input type="radio" name="class" value="11th" onclick="showSubjectOptions()"> 11th<br>
  <input type="radio" name="class" value="12th" onclick="showSubjectOptions()"> 12th<br>
</form>

<!-- 10th Subjects -->
<div id="10thSection" class="section">
  <h4>Select Subject (10th):</h4>
  <input type="radio" name="10thSubject" value="Tamil" onclick="showLinks('10th')"> Tamil<br>
  <input type="radio" name="10thSubject" value="English" onclick="showLinks('10th')"> English<br>
  <input type="radio" name="10thSubject" value="Maths" onclick="showLinks('10th')"> Maths<br>
  <input type="radio" name="10thSubject" value="Science" onclick="showLinks('10th')"> Science<br>
  <input type="radio" name="10thSubject" value="SocialScience" onclick="showLinks('10th')"> Social Science<br>
</div>

<!-- 10th Tamil Links -->
<div id="10thtamilLinks" class="links">
  <h4>10th Tamil Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-10th-tamil-model-question-papers/" target="_blank">Tamil Question Paper</a></li>
  </ul>
</div>

<!-- 10th English Links -->
<div id="10thenglishLinks" class="links">
  <h4>10th English Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-10th-english-model-question-papers/" target="_blank">English Question Paper</a></li>
  </ul>
</div>

<!-- 10th Maths Links -->
<div id="10thmathsLinks" class="links">
  <h4>10th Maths Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-10th-maths-model-question-papers/" target="_blank">Maths Question Paper</a></li>
  </ul>
</div>

<!-- 10th Science Links -->
<div id="10thscienceLinks" class="links">
  <h4>10th Science Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-10th-science-model-question-papers/" target="_blank">Science Question Paper</a></li>        
  </ul>
</div>

<!-- 10th Social Science Links -->
<div id="10thsocialscienceLinks" class="links">
  <h4>10th Social Science Question Paper</h4>
 <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-10th-social-science-model-question-papers/" target="_blank">Social Science Question Paper</a></li>
 </ul>
</div>

<div id="11thSection" class="section">
  <h4>Select Subject (11th):</h4>
  <input type="radio" name="11thSubject" value="Tamil" onclick="showLinks('11th')"> Tamil<br>
  <input type="radio" name="11thSubject" value="English" onclick="showLinks('11th')"> English<br>
  <input type="radio" name="11thSubject" value="Maths" onclick="showLinks('11th')"> Maths<br>
  <input type="radio" name="11thSubject" value="Physics" onclick="showLinks('11th')"> Physics<br>
  <input type="radio" name="11thSubject" value="Chemistry" onclick="showLinks('11th')"> Chemistry<br>
  <input type="radio" name="11thSubject" value="Bio-Zoology" onclick="showLinks('11th')"> Bio-Zoology<br>
  <input type="radio" name="11thSubject" value="Bio-Botony" onclick="showLinks('11th')"> Bio-Botony<br>
  <input type="radio" name="11thSubject" value="Computer" onclick="showLinks('11th')"> Computer<br>
</div>

<div id="11thtamilLinks" class="links">
  <h4>11th Tamil Question Paper</h4>
  <ul>
    <li><a href="https://schools.aglasem.com/tamil-nadu-model-paper-class-11-tamil/" target="_blank">Tamil Question Paper</a></li>
  </ul>
</div>

<div id="11thenglishLinks" class="links">
  <h4>11th English Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-english-model-question-papers/" target="_blank">English Question Paper</a></li>
    </ul>
</div>

<div id="11thmathsLinks" class="links">
  <h4>11th Maths Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-maths-model-question-papers/" target="_blank">Maths Question Paper</a></li>
  </ul>
</div>

<div id="11thphysicsLinks" class="links">
  <h4>11th Physics Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-physics-model-question-papers/" target="_blank">Physics Question Paper</a></li>
  </ul>
</div>

<div id="11thchemistryLinks" class="links">
  <h4>11th Chemistry Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-chemistry-model-question-papers/" target="_blank">Chemistry Question Paper</a></li>
  </ul>
</div>

<div id="11thbio-zoologyLinks" class="links">
  <h4>11th Bio-Zoology Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-biology-model-question-papers/" target="_blank">Biology Question Paper</a></li>
  </ul>
</div>

<div id="11thbio-botonyLinks" class="links">
  <h4>11th Bio-Botony Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-11th-biology-model-question-papers/" target="_blank">Biology Question Paper</a></li>
  </ul>
</div>

<div id="11thcomputerLinks" class="links">
  <h4>11th Computer Question Paper</h4>
  <ul>
    <li><a href="https://schools.aglasem.com/tamil-nadu-11th-model-question-paper-for-computer-science/" target="_blank">Computer Question Paper</a></li>
  </ul>
</div>

<div id="12thSection" class="section">
  <h4>Select Subject (12th):</h4>
  <input type="radio" name="12thSubject" value="Tamil" onclick="showLinks('12th')"> Tamil<br>
  <input type="radio" name="12thSubject" value="English" onclick="showLinks('12th')"> English<br>
  <input type="radio" name="12thSubject" value="Maths" onclick="showLinks('12th')"> Maths<br>
  <input type="radio" name="12thSubject" value="Physics" onclick="showLinks('12th')"> Physics<br>
  <input type="radio" name="12thSubject" value="Chemistry" onclick="showLinks('12th')"> Chemistry<br>
  <input type="radio" name="12thSubject" value="Bio-Zoology" onclick="showLinks('12th')"> Bio-Zoology<br>
  <input type="radio" name="12thSubject" value="Bio-Botony" onclick="showLinks('12th')"> Bio-Botony<br>
  <input type="radio" name="12thSubject" value="Computer" onclick="showLinks('12th')"> Computer<br>
</div>
<!-- You can add 11thSection and 12thSection like this format later -->

<div id="12thtamilLinks" class="links">
  <h4>12th Tamil Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-tamil-model-question-papers/">Tamil Question Paper</a></li>
  </ul>
</div>

<div id="12thenglishLinks" class="links">
  <h4>12th English Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-english-model-question-papers/">English Question Paper</a></li>
  </ul>
</div>

<div id="12thmathsLinks" class="links">
  <h4>12th Maths Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-maths-model-question-papers/">Maths Question Paper</a></li>
  </ul>
</div>

<div id="12thphysicsLinks" class="links">
  <h4>12th Physics Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-physics-model-question-papers/#google_vignette">Physics Question Paper</a></li>
  </ul>
</div>

<div id="12thchemistryLinks" class="links">
  <h4>12th Chemistry Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-chemistry-model-question-papers/">Chemistry Question Paper</a></li>
  </ul>
</div>

<div id="12thbio-botonyLinks" class="links">
  <h4>12th Bio-Botony Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-biology-model-question-papers/">Biology Question Paper</a></li>
  </ul>
</div>

<div id="12thbio-zoologyLinks" class="links">
  <h4>12th Bio-Zoology Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-biology-model-question-papers/">Biology Question Paper</a></li>
  </ul>
</div>

<div id="12thcomputerLinks" class="links">
  <h4>12th Computer Question Paper</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/tamil-nadu-12th-computer-science-model-question-papers/">Computer Question Paper</a></li>
  </ul>
</div>

</body>
</html><br><br>
<?php include('footer.php'); ?>
