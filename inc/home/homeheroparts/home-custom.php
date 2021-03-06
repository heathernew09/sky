
<div class="cmy"></div>
<div class="cmyk"></div>
<!--Sass is started - _dev/scss/headerhomecustomhero.php-->
<style>
.cmy {
  background: url("http://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/CMYK_separation_%E2%80%93_no_black.jpg/268px-CMYK_separation_%E2%80%93_no_black.jpg") top left, url("http://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/CMYK_separation_%E2%80%93_no_black.jpg/268px-CMYK_separation_%E2%80%93_no_black.jpg") center center, url("http://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/CMYK_separation_%E2%80%93_no_black.jpg/268px-CMYK_separation_%E2%80%93_no_black.jpg") bottom right;
  height: 200px;
}
.cmy:hover {
  background-position: top center, center center, bottom center;
}

.cmyk {
  background: url("http://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/CMYK_separation_%E2%80%93_maximum_black.jpg/201px-CMYK_separation_%E2%80%93_maximum_black.jpg") top left, url("http://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/CMYK_separation_%E2%80%93_maximum_black.jpg/201px-CMYK_separation_%E2%80%93_maximum_black.jpg") 402px 303px, url("http://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/CMYK_separation_%E2%80%93_maximum_black.jpg/201px-CMYK_separation_%E2%80%93_maximum_black.jpg") 201px -150px, url("http://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/CMYK_separation_%E2%80%93_maximum_black.jpg/201px-CMYK_separation_%E2%80%93_maximum_black.jpg") bottom right;
  background-size: 25% 400%;
  height: 150px;
}
.cmyk:hover {
  background-position: top center, center 303px, center -150px, bottom center;
}

.cmy, .cmyk {
  margin: .25rem auto;
  width: 804px;
  background-blend-mode: multiply;
  background-color: white;
  background-repeat: repeat-y;
  transition: .25s .5s;
  border-radius: .25rem;
}
.cmy:hover, .cmyk:hover {
  transition: 1.5s 0;
}

</style>