<div class="userMenu">
  <button class="userMenuButton" onclick="openPage(event, '1')">test</button>
  <div class="userMenuDivider"></div>
  <button class="userMenuButton" onclick="openPage(event, '2')">test</button>
  <div class="userMenuDivider"></div>
  <button class="userMenuButton" onclick="openPage(event, '3')">test</button>
  <div class="userMenuDivider"></div>
  <button class="userMenuButton" onclick="openPage(event, '4')">test</button>
  <div class="userMenuDivider"></div>
  <button class="userMenuButton" href="#">test</button>
  <div class="userMenuDivider"></div>
</div>

<div id="1" class="userMenuContent">
  <p>1</p>
</div>

<div id="2" class="userMenuContent">
  <p>2</p>
</div>

<div id="3" class="userMenuContent">
  <p>3</p>
</div>

<div id="4" class="userMenuContent">
  <p>4</p>
</div>

<script>
function openPage(evt, pageName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("userMenuContent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("userMenuButton");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(pageName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
