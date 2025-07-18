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
  <h4>10th Tamil Guide</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-10th-tamil-guide/" target="_blank">Tamil All Units</a></li>
  </ul>
</div>

<!-- 10th English Links -->
<div id="10thenglishLinks" class="links">
  <h4>10th English</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-10th-english-guide/">English All Units</a></li>
  </ul>
</div>

<!-- 10th Maths Links -->
<div id="10thmathsLinks" class="links">
  <h4>10th Maths</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-10th-maths-guide/">Maths All lession</a></li>
  </ul>
</div>

<!-- 10th Science Links -->
<div id="10thscienceLinks" class="links">
  <h4>10th Science</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-10th-science-guide/">Science All Lessions</a></li>        
  </ul>
</div>

<!-- 10th Social Science Links -->
<div id="10thsocialscienceLinks" class="links">
  <h4>10th Social Science</h4>
 <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-10th-social-science-guide/">Social Science All Lession</a></li>
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
  <h4>11th Tamil</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-tamil-book-solutions/">Tamil All Units</a></li>
  </ul>
</div>

<div id="11thenglishLinks" class="links">
  <h4>11th English</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-english-book-solutions/">English All Units</a></li>
    </ul>
</div>

<div id="11thmathsLinks" class="links">
  <h4>11th Maths</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-Maths-book-solutions/">Maths All lession</a></li>
  </ul>
</div>

<div id="11thphysicsLinks" class="links">
  <h4>11th Physics</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-Physics-book-solutions/">Physics All lessions</a></li>
  </ul>
</div>

<div id="11thchemistryLinks" class="links">
  <h4>11th Chemistry</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-Chemistry-book-solutions/">Chemistry All lessions</a></li>
  </ul>
</div>

<div id="11thbio-zoologyLinks" class="links">
  <h4>11th Bio-Zoology</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-bio-zoology-book-solutions/">Bio-Zoology All lessions</a></li>
  </ul>
</div>

<div id="11thbio-botonyLinks" class="links">
  <h4>11th Bio-Botony</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-bio-botany-book-solutions/">Bio-Botony All lessions</a></li>
  </ul>
</div>

<div id="11thcomputerLinks" class="links">
  <h4>11th Computer</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-computer-science-book-solutions/">Computer All lessions</a></li>
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
  <h4>12th Tamil</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-tamil-guide/">All lessions</a></li>
  </ul>
</div>

<div id="12thenglishLinks" class="links">
  <h4>12th English</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-english-guide/">All lessions</a></li>
  </ul>
</div>

<div id="12thmathsLinks" class="links">
  <h4>12th Maths</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-maths-guide/">All lessions</a></li>
  </ul>
</div>

<div id="12thphysicsLinks" class="links">
  <h4>12th Physics</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-physics-guide/">All lessions</a></li>
  </ul>
</div>

<div id="12thchemistryLinks" class="links">
  <h4>12th Chemistry</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-chemistry-guide/">All lessions</a></li>
  </ul>
</div>

<div id="12thbio-botonyLinks" class="links">
  <h4>12th Bio-Botony</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-bio-botany-guide/">All lessions</a></li>
  </ul>
</div>

<div id="12thbio-zoologyLinks" class="links">
  <h4>12th Bio-Zoology</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-bio-zoology-guide/">All lessions</a></li>
  </ul>
</div>

<div id="12thcomputerLinks" class="links">
  <h4>12th Computer</h4>
  <ul>
    <li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-computer-science-guide/">All lessions</a></li>
  </ul>
</div>

</body>
</html><br><br>
<?php include('footer.php'); ?>
