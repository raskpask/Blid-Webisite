
<!DOCTYPE HTML >
<html lang="en">

<body>

<div class="container">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <img id="expandedImg" style="width:100%">
    <div id="imgtext"></div>
</div>

<div class="row">
    <div class="column">
        <img src="/img/1.jpg" alt="Logga på tröja" style="width:100%" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src="/img/2.jpg" alt="Paddling" style="width:100%" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src="/img/3.jpg" alt="Återhämtning" style="width:100%" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src="/img/4.jpg" alt="Prisutdelning" style="width:100%" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src="/img/5.jpg" alt="Prisutdelning" style="width:100%" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src="/img/7.jpg" alt="Paddling" style="width:100%" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src="/img/8.jpg" alt="Växling" style="width:100%" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src="/img/9.jpg" alt="Middag" style="width:100%" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src="/img/11.jpg" alt="Paddling" style="width:100%" onclick="myFunction(this);">
    </div>
</div>
<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>
</div>

</body>
<html>
