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
  <h4>10th Tamil</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PLcNFxICIFZLqSEqITPquIHiDdxWEFeUUp" target="_blank">Tamil All Units</a></li>
  </ul>
</div>

<!-- 10th English Links -->
<div id="10thenglishLinks" class="links">
  <h4>10th English</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGkbStUeaFXRteeVnuQgazzh">Unit 1</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmedPd8RpUwIFWKPgo8wb0O">Unit 2</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGm40ThpcirTDYnTv50mXco9">Unit 3</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGnKTThELwdOSbohn13jajcy">Unit 4</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGlyofno7piknFYzlp7tzJLp">Unit 5</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGns2cr_nVfnPOo69vjjCjAB">Unit 6</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmc8yuaHupV3T02OxeJ9YDd">Unit 7</a></li>
    <!-- add more links as needed -->
  </ul>
</div>

<!-- 10th Maths Links -->
<div id="10thmathsLinks" class="links">
  <h4>10th Maths</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PL2qtWkm0Z4ce0vD-aJXoFOgQXQLrXhsKb">All lession</a></li>
  </ul>
</div>

<!-- 10th Science Links -->
<div id="10thscienceLinks" class="links">
  <h4>10th Science</h4>
  <ul>
    <li><a href="https://www.youtube.com/watch?v=-HSDnFOhws0">Unit 1</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLpzhzm2vqtOTI4AK8NGVcVG4BpTLhK6dZ">Unit 2</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLpzhzm2vqtOQhbqJfqdXb1we9FOoyZhi5">Unit 3</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLpzhzm2vqtOSntulxzUdUN4DTZWyRR_Wt">Unit 4</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLpzhzm2vqtOQtkpq-D_vWQKWsGXGqIegK">Unit 5</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLpzhzm2vqtOTtE5GDnw0NLp_Iqcg94_Gu">Unit 6</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLpzhzm2vqtOS4sHQSmWgLxkO7VbLN2eAm">Unit 7</a></li>
        <li><a href="https://www.youtube.com/watch?v=xB5Mdg2cPfo&utm_source=chatgpt.com">Unit 8</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLpzhzm2vqtOTPGDg4Y0x8TUJ_Vxg5Rb84">Unit 9</a></li>
        <li><a href="https://www.youtube.com/watch?v=lOYlSWRcmos">Unit 10</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLOcMe4sAZcqAHHHhlwnqMDxfZi87TpSD7">Unit 11</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLN-bJR0kghyEXTZXhC7efmzeFj-_34FTC">Unit 12</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLpzhzm2vqtOQzXj4l9jEtnOm9VhW2WrLA">Unit 13</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLN-bJR0kghyHk_je5jApf5PbVdeHXhz71">Unit 14</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLN-bJR0kghyHltYVJBsCfM_ofN986REjL">Unit 15</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLN-bJR0kghyFdcrYny1uhSSUyITN1qiCO">Unit 16</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLN-bJR0kghyHgditvTPQICg_-YwFsQzN">Unit 17</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLN-bJR0kghyEjeBwGZ_5VE3aX0_rQjuj3">Unit 18</a></li>
  </ul>
</div>

<!-- 10th Social Science Links -->
<div id="10thsocialscienceLinks" class="links">
  <h4>10th Social Science</h4>
  <h5>History</h5>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGk24w4VhibV0FNuQ8NmleNr">Unit 1</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGkaSjlie3IJIYQtBs49N_XA">Unit 2</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmTdfHJ9Y4xSUufPb8oQcFg">Unit 3</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmPFeoWwXybXEJW1jT8Sb_H">Unit 4</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGnvgy78Ujfdg0k1eFZ551v8">Unit 5</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGkeLovZkN5tvmqr5Y8BQ0F5">Unit 6</a></li>
    <li><a href="https://www.youtube.com/watch?v=E7zafiGNGj8">Unit 7</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGkuO6gtKO2a2trVJ6gIEp0i">Unit 8</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGnqUn_2r8p5gm4iwlST6lAY">Unit 9</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGkuwUGrerTAqAARh43A8UA8">Unit 10</a></li>
  </ul>
  <h5>Geography</h5>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGk5c5mIwZatGRvNT6LETOUL">Unit 1</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmOdGR-h7njvs6hLGsNa09l">Unit 2</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGnRf6mMNgs7pni0IT5X-wmZ">Unit 3</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmQJ5pUPXdvlRGcFmekrTdn">Unit 4</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGkSdk1yc5Er0F08YVBcYpex">Unit 5</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGma9K-Kkfu79YRCRJBOMucP">Unit 6</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGkG0uPis2ToPbv-hPhAUx6K">Unit 7</a></li>
  </ul>
  <h5>Civics</h5>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmzbEwmS8K3BJVFOrO0qNCB">Unit 1</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmcvc1tjs2W4QUEuoZ9nEYT">Unit 2</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGl3xz1Af4jawgYh1O8vWr_H">Unit 3</a></li>
    <li><a href="https://www.youtube.com/watch?v=-KA8qM5j2R0">Unit 4</a></li>
    <li><a href="https://www.youtube.com/watch?v=KaL88Q519Vs">Unit 5</a></li>
  </ul>
  <h5>Economics</h5>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmKD8Cu4XVQpJzn5JshLUNe">Unit 1</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGmO4qBbv9SdG9NXOtsr0pT-">Unit 2</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGl7Y7knKNHmPR3nkOHQuLnU">Unit 3</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGm2-CiqdrqGeusso9WdUPng">Unit 4</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGnXc3S8IzON05N7680BHBqw">Unit 5</a></li>
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
    <li><a href="https://www.youtube.com/playlist?list=PLh_WxVJ_RG6VVRPMiLorAn_kF0OeClMZD" target="_blank">Tamil All Units</a></li>
  </ul>
</div>

<div id="11thenglishLinks" class="links">
  <h4>11th English</h4>
  <h4>Unit 1</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PL86X0RNCqNGlzF3KC-r4pI8HgwbP73ctU">All topics</a></li>
    </ul>
    <h4>Unit 2</h4>
    <ul> 
    <li><a href="https://www.youtube.com/watch?v=vUIKeIsT8ik">Prose 2</a></li>
    <li><a href="https://www.youtube.com/watch?v=dNuLtsRUbp0">Poem 2</a></li>
    <li><a href="https://www.youtube.com/watch?v=X3cZtWRKHqU">Supplementry 2</a></li>
  </ul>
  <h4>Unit 3</h4>
  <ul>
    <li><a href="https://www.youtube.com/watch?v=XCdCB9i19XQ">Prose 3</a></li>
    <li><a href="https://www.youtube.com/watch?v=wJv-ySAibLM">Poem 3</a></li>
    <li><a href="https://www.youtube.com/watch?v=S3mD6W-toTw">Supplementry 3</a></li>
  </ul>
  <h4>Unit 4</h4>
  <ul>
    <li><a href="https://www.youtube.com/watch?v=bWv5cacpj8s">Prose 4</a></li>
    <li><a href="https://www.youtube.com/watch?v=kxGaPkv4E48">Poem 4</a></li>
    <li><a href="https://www.youtube.com/watch?v=m-xcUWVnveg">Supplementry 4</a></li>
  </ul>
  <h4>Unit 5</h4>
  <ul>
    <li><a href="https://www.youtube.com/watch?v=Wuyfbd4pcwU">Prose 5</a></li>
    <li><a href="https://www.youtube.com/watch?v=vSmJOoPNz8E">Poem 5</a></li>
    <li><a href="https://www.youtube.com/watch?v=2lIJXDfcB8A">Supplementry 5</a></li>
  </ul>
  <h4>Unit 6</h4>
  <ul>
    <li><a href="https://www.youtube.com/watch?v=hN2fhOtHtU4">Prose 6</a></li>
    <li><a href="https://www.youtube.com/watch?v=ITj2ldOvi7g">Poem 6</a></li>
    <li><a href="https://www.youtube.com/watch?v=2lIJXDfcB8A">Supplementry 6</a></li>
  </ul>
</div>

<div id="11thmathsLinks" class="links">
  <h4>11th Maths</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PL2qtWkm0Z4ccmrxoNjy2bgOWW8Jddu_0k">All lession</a></li>
  </ul>
</div>

<div id="11thphysicsLinks" class="links">
  <h4>11th Physics</h4>
  <ul>
    <li><a href="https://www.youtube.com/@MurugaMP/search?query=11th">All lessions</a></li>
  </ul>
</div>

<div id="11thchemistryLinks" class="links">
  <h4>11th Chemistry</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PL3s-GF0G43lSB_6ST-AKTVBWnngENBG4z">All lessions</a></li>
  </ul>
</div>

<div id="11thbio-zoologyLinks" class="links">
  <h4>11th Bio-Zoology</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PLQcARNyZqreWh4o7Mjt7OfhKMASIY_A0D">All lessions</a></li>
  </ul>
</div>

<div id="11thbio-botonyLinks" class="links">
  <h4>11th Bio-Botony</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PLy85GAYxmSmMAIgr1lVD4pArrBIQCt2Nu">All lessions</a></li>
  </ul>
</div>

<div id="11thcomputerLinks" class="links">
  <h4>11th Computer</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PL3G8RpRE66HUpVRD7mnijqYcfl316QSCR">All lessions</a></li>
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
    <li><a href="https://www.youtube.com/playlist?list=PLXyXmEDi5S6XO8Tn_P8qOnoCytlk1XSbN">All lessions</a></li>
  </ul>
</div>

<div id="12thenglishLinks" class="links">
  <h4>12th English</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PLeJGQm2AZIIBR32KyjPh3E9vIJxq8rUm4">All lessions</a></li>
  </ul>
</div>

<div id="12thmathsLinks" class="links">
  <h4>12th Maths</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PL2qtWkm0Z4ceoeB0lzMfdKSKI85-l_Vv_">All lessions</a></li>
  </ul>
</div>

<div id="12thphysicsLinks" class="links">
  <h4>12th Physics</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PLWtojMl0l6YUv5Z6z6LXXuaRamZYoq7Rj">All lessions</a></li>
  </ul>
</div>

<div id="12thchemistryLinks" class="links">
  <h4>12th Chemistry</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PLg99mcrxFRz_i5lTECfp3aNEKGGiNeaoj">All lessions</a></li>
  </ul>
</div>

<div id="12thbio-botonyLinks" class="links">
  <h4>12th Bio-Botony</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PLy85GAYxmSmMec8WRplK1QOh_jFT14wGU">All lessions</a></li>
  </ul>
</div>

<div id="12thbio-zoologyLinks" class="links">
  <h4>12th Bio-Zoology</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PLXjS4O0taZpQoUKapiYAZJdsbbx2WzQAZ">All lessions</a></li>
  </ul>
</div>

<div id="12thcomputerLinks" class="links">
  <h4>12th Computer</h4>
  <ul>
    <li><a href="https://www.youtube.com/playlist?list=PLsl2RzShS3I0h-oymlVSt83PCzu7ftyTl">All lessions</a></li>
  </ul>
</div>

</body>
</html><br><br>
<?php include('footer.php'); ?>
