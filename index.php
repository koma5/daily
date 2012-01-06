<!DOCTYPE html>
<html>
  <head>
  
  <meta charset="utf-8">
  <title>blog.5th.ch/</title>
  
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <!-- <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">-->
  <style type="text/css">
  
  </style>
  
  </head>
  
  <body id="home">
  
    <div class="container">
    
      <header>
        <span class="row">
          <span class="span4 offset12">
            <ul class="nav">
              <li><a href="#">rss</a></li>
              <li><a href="#">impressum</a></li>
            </ul>
          </span>
        </span>
    
      </header>
      
      <article class="post">
    
          <h1>
          <a id="home" href="#" rel="home">blog.5th.ch</a><span class="path"><a href="#">/wie-bist-du-hier-gelandet</a></span>
          <small>koma5, 4.12.'11 tags: blahh, bubb</small>
          </h1>
          
          <p>Oft ist eine Webseite über mehrere URLs erreichbar. Als Beispiel dient dieser Blog hier:</p>
          
          ul
          <ul>
          	<li>blog.5th.ch/</li>
          	<li>www.blog.5th.ch/</li>
          	<li>5th.ch/blog/</li>
          	<li>www.5th.ch/blog/</li>
          	<li>fifth.ch/blog/</li>
          	<li>usw.</li>
          </ul>
          <br>
          ol
          <ol>
          	<li>blog.5th.ch/</li>
          	<li>www.blog.5th.ch/</li>
          	<li>5th.ch/blog/</li>
          	<li>www.5th.ch/blog/</li>
          	<li>fifth.ch/blog/</li>
          	<li>usw.</li>
          </ol>
          
          
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
          
          <pre>hier ist ein pre-Tag</pre>
          
          <h1>heading 1<small>small text</small></h1>
          <h2>heading 2<small>small text</small></h2>
          <h3>heading 3<small>small text</small></h3>
          <h4>heading 4<small>small text</small></h4>
          <h5>heading 5<small>small text</small></h5>
          <h6>heading 6<small>small text</small></h6>
        </article>
    
    
      <footer>
        <p>© copyright koma5 - Proudly powerd by WordPress - theme daily</p>
      </footer>
    
    </div>
    <!-- /container -->
  </body>
</html>