<!DOCTYPE html>
<html>
  <head>
  
  <meta charset="utf-8">
  <title>blog.5th.ch/</title>
  
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <!-- <link rel="stylesheet/less" type="text/css" href="styles/main.less">
  <script src="js/less-1.1.5.min.js" type="text/javascript"></script> -->
  <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
  <style type="text/css">
  
  </style>
  
  </head>
  
  <body>
  
    <div class="container">
      <header>
        <span class="row">
          <span class="span4 offset12">
            <ul class="nav">
              <li><a href="#">rss</a></li>
              <li><a href="#">blahhh</a></li>
            </ul>
          </span>
        </span>
    
      </header>
      <article class="post">
    
          <h1>
          blog.5th.ch<span class="path">/htaccess-redirect-everything-to-canonical-url</span>
          <small><br>koma5, 4.12.'11</small>
          </h1>
          
<p>Oft ist eine Webseite über mehrere URLs erreichbar. Als Beispiel dient dieser Blog hier:
<ul>
	<li>blog.5th.ch/</li>
	<li>www.blog.5th.ch/</li>
	<li>5th.ch/blog/</li>
	<li>www.5th.ch/blog/</li>
	<li>fifth.ch/blog/</li>
	<li>usw.</li>
</ul>
</p>
<p>Das sind fünf Wege, die zu diesem Blog führen. Fünf völlig verschiedene Links mit ein und demselben Inhalt. Einerseits sieht das überhaupt nicht schön aus und andererseits entsteht so ein Link-Wildwuchs. Deshalb ist es empfehlenswert, eine canonical URL zu definieren. Eine einzige URL, unter welcher die Webseite erscheinen soll. Alle anderen werden darauf umgeleitet.</p>

<p>Das <code>.htaccess</code> File ist eine ganz nützliche Sache. Es enthält Apache Konfigurationen pro Verzeichnis, mit welchem ganz leicht Weiterleitungen definiert werden können.  In diesem Sinne habe ich der <code>.htaccess</code> dieses Blogs folgende Zeilen hinzugefügt:</p>

<p><code>#redirect everything to canonical URL exept the canonical URL itself...
RewriteEngine On<br>
RewriteCond %{HTTP_HOST} !^blog.5th.ch$<br>
RewriteRule ^(.*)$ http://blog.5th.ch/$1 [R=301,L]</code></p>

<p>Was soviel Bedeutet wie:<br>
<code>hostname != blog.5th.ch<br>
redirect to blog.5th.ch (canonical URL)</code></p>

<p>Wenn der aufgerufene Hostname nicht die canonical URL ist, dann leite die Anfrage an die canonical URL um. Gleichzeitig wird der Pfad der ursprünglichen URL an die canonical URL gehängt. Das heisst, aus dem
<code><a href="http://www.blog.5th.ch/htaccess-redirect-everything-to-canonical-url">www.blog.5th.ch/htaccess-redirect-everything-to-canonical-url
</a></code>wird <code><a href="http://blog.5th.ch/htaccess-redirect-everything-to-canonical-url">blog.5th.ch/htaccess-redirect-everything-to-canonical-url</a></code> .</p>

<p>Die Weiterleitung wird allerdings auf Unterordner vererbt, was ziemlich störend sein kann.</p>
          
        </article>
    
    
      <footer>
        <p>by koma5</p>
      </footer>
    
    </div>
  </body>
</html>