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
    li {
      list-style-type: none;
    }
    .radio-group {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin: 10px 0;
      flex-wrap: wrap;
    }
    .radio-item {
      display: flex;
      align-items: center;
      gap: 5px;
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
</head>
<body style="text-align: center;">

<h3>Select Your Class:</h3>
<form>
  <div class="radio-group">
    <label class="radio-item">
      <input type="radio" name="class" value="10th" onclick="showSubjectOptions()"> 10th
    </label>
    <label class="radio-item">
      <input type="radio" name="class" value="11th" onclick="showSubjectOptions()"> 11th
    </label>
    <label class="radio-item">
      <input type="radio" name="class" value="12th" onclick="showSubjectOptions()"> 12th
    </label>
  </div>
</form>

<!-- 10th Section -->
<div id="10thSection" class="section">
  <h4>Select Subject (10th):</h4>
  <div class="radio-group">
    <label class="radio-item"><input type="radio" name="10thSubject" value="Tamil" onclick="showLinks('10th')"> Tamil</label>
    <label class="radio-item"><input type="radio" name="10thSubject" value="English" onclick="showLinks('10th')"> English</label>
    <label class="radio-item"><input type="radio" name="10thSubject" value="Maths" onclick="showLinks('10th')"> Maths</label>
    <label class="radio-item"><input type="radio" name="10thSubject" value="Science" onclick="showLinks('10th')"> Science</label>
    <label class="radio-item"><input type="radio" name="10thSubject" value="SocialScience" onclick="showLinks('10th')"> Social Science</label>
  </div>
</div>

<!-- 10th Links -->
<div id="10thtamilLinks" class="links"><h4>10th Tamil</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-10th-tamil-guide/" target="_blank">Tamil All Units</a></li></ul></div>
<div id="10thenglishLinks" class="links"><h4>10th English</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-10th-english-guide/">English All Units</a></li></ul></div>
<div id="10thmathsLinks" class="links"><h4>10th Maths</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-10th-maths-guide/">Maths All Lessons</a></li></ul></div>
<div id="10thscienceLinks" class="links"><h4>10th Science</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-10th-science-guide/">Science All Lessons</a></li></ul></div>
<div id="10thsocialscienceLinks" class="links"><h4>10th Social Science</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-10th-social-science-guide/">Social Science All Lessons</a></li></ul></div>

<!-- 11th Section -->
<div id="11thSection" class="section">
  <h4>Select Subject (11th):</h4>
  <div class="radio-group">
    <label class="radio-item"><input type="radio" name="11thSubject" value="Tamil" onclick="showLinks('11th')"> Tamil</label>
    <label class="radio-item"><input type="radio" name="11thSubject" value="English" onclick="showLinks('11th')"> English</label>
    <label class="radio-item"><input type="radio" name="11thSubject" value="Maths" onclick="showLinks('11th')"> Maths</label>
    <label class="radio-item"><input type="radio" name="11thSubject" value="Physics" onclick="showLinks('11th')"> Physics</label>
    <label class="radio-item"><input type="radio" name="11thSubject" value="Chemistry" onclick="showLinks('11th')"> Chemistry</label>
    <label class="radio-item"><input type="radio" name="11thSubject" value="Bio-Zoology" onclick="showLinks('11th')"> Bio-Zoology</label>
    <label class="radio-item"><input type="radio" name="11thSubject" value="Bio-Botony" onclick="showLinks('11th')"> Bio-Botony</label>
    <label class="radio-item"><input type="radio" name="11thSubject" value="Computer" onclick="showLinks('11th')"> Computer</label>
  </div>
</div>

<!-- 11th Links -->
<div id="11thtamilLinks" class="links"><h4>11th Tamil</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-tamil-book-solutions/">All Units</a></li></ul></div>
<div id="11thenglishLinks" class="links"><h4>11th English</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-english-book-solutions/">All Units</a></li></ul></div>
<div id="11thmathsLinks" class="links"><h4>11th Maths</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-Maths-book-solutions/">All Lessons</a></li></ul></div>
<div id="11thphysicsLinks" class="links"><h4>11th Physics</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-Physics-book-solutions/">All Lessons</a></li></ul></div>
<div id="11thchemistryLinks" class="links"><h4>11th Chemistry</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-Chemistry-book-solutions/">All Lessons</a></li></ul></div>
<div id="11thbio-zoologyLinks" class="links"><h4>11th Bio-Zoology</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-bio-zoology-book-solutions/">All Lessons</a></li></ul></div>
<div id="11thbio-botonyLinks" class="links"><h4>11th Bio-Botony</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-bio-botany-book-solutions/">All Lessons</a></li></ul></div>
<div id="11thcomputerLinks" class="links"><h4>11th Computer</h4><ul><li><a href="https://samacheerkalvi.guru/samacheer-kalvi-11th-computer-science-book-solutions/">All Lessons</a></li></ul></div>

<!-- 12th Section -->
<div id="12thSection" class="section">
  <h4>Select Subject (12th):</h4>
  <div class="radio-group">
    <label class="radio-item"><input type="radio" name="12thSubject" value="Tamil" onclick="showLinks('12th')"> Tamil</label>
    <label class="radio-item"><input type="radio" name="12thSubject" value="English" onclick="showLinks('12th')"> English</label>
    <label class="radio-item"><input type="radio" name="12thSubject" value="Maths" onclick="showLinks('12th')"> Maths</label>
    <label class="radio-item"><input type="radio" name="12thSubject" value="Physics" onclick="showLinks('12th')"> Physics</label>
    <label class="radio-item"><input type="radio" name="12thSubject" value="Chemistry" onclick="showLinks('12th')"> Chemistry</label>
    <label class="radio-item"><input type="radio" name="12thSubject" value="Bio-Zoology" onclick="showLinks('12th')"> Bio-Zoology</label>
    <label class="radio-item"><input type="radio" name="12thSubject" value="Bio-Botony" onclick="showLinks('12th')"> Bio-Botony</label>
    <label class="radio-item"><input type="radio" name="12thSubject" value="Computer" onclick="showLinks('12th')"> Computer</label>
  </div>
</div>

<!-- 12th Links -->
<div id="12thtamilLinks" class="links"><h4>12th Tamil</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-tamil-guide/">All Lessons</a></li></ul></div>
<div id="12thenglishLinks" class="links"><h4>12th English</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-english-guide/">All Lessons</a></li></ul></div>
<div id="12thmathsLinks" class="links"><h4>12th Maths</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-maths-guide/">All Lessons</a></li></ul></div>
<div id="12thphysicsLinks" class="links"><h4>12th Physics</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-physics-guide/">All Lessons</a></li></ul></div>
<div id="12thchemistryLinks" class="links"><h4>12th Chemistry</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-chemistry-guide/">All Lessons</a></li></ul></div>
<div id="12thbio-botonyLinks" class="links"><h4>12th Bio-Botony</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-bio-botany-guide/">All Lessons</a></li></ul></div>
<div id="12thbio-zoologyLinks" class="links"><h4>12th Bio-Zoology</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-bio-zoology-guide/">All Lessons</a></li></ul></div>
<div id="12thcomputerLinks" class="links"><h4>12th Computer</h4><ul><li><a href="https://samacheerkalvi.guide/samacheer-kalvi-12th-computer-science-guide/">All Lessons</a></li></ul></div>

</body>
</html>
<?php include('footer.php'); ?>
