<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>PHP in the Cloud</title>
    <meta charset='utf-8'>
    <link href='resources/stylesheets/comstrap.min.css' rel='stylesheet'>
    <link rel="icon" href="resources/favicon.ico">
  </head>
  <body>
    <div class='container'>

      <div class='row' style='margin-top:2em;margin-bottom:1em'>
        <div class='col-xs-12'>
          <img alt='PHP' src='resources/images/php.svg' style='height:3em'>
        </div>
      </div>

      <div class='row' style='margin-top:1em;margin-bottom:1em'>
        <div class='col-xs-12'>
          <h1>This is PHP in the Cloud!</h1>
          <p class='lead'>Congratulations! You successfully pushed a PHP App into the Cloud.</p>
        </div>
      </div>

      <div class='row' style='margin-top:1em;margin-bottom:1em'>
        <div class='col-xs-12'>
          <div class='alert alert-info'>
            <p>
              <strong>Getting Started</strong>
            </p>
            <br>
            <ul>
              <li>
                To push your own source code, either upload it as a ZIP file to the portal or use the
                <a href='https://github.com/cloudfoundry/cli#downloads'>cf CLI</a>
                instead.
              </li>
              <li>
                <a href='https://docs.developer.swisscom.com/tutorial-php/'>This tutorial</a>
                will get you started on the whole process.
              </li>
            </ul>
          </div>
        </div>
      </div>

      <?php if ($_ENV){ ?>
        <div class='row' style='margin-top:1em;margin-bottom:1em'>
          <div class='col-xs-12'>
            <h3>Environment Variables</h3>
<pre>
<?php foreach($_ENV  as $key => $value){ ?>
<strong><?=htmlspecialchars($key) ?>:</strong><span class="text-danger"> <?=htmlspecialchars($value) ?></span>
<?php } ?>
</pre>
          </div>
        </div>
      <?php } ?>

      <?php
        $headers = array();
        foreach($_SERVER as $key => $value) {
          if (substr($key, 0, 5) <> 'HTTP_') {
            continue;
          }
          $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
          $headers[$header] = $value;
        }

        if ($headers){
        ?>
        <div class='row' style='margin-top:1em;margin-bottom:1em'>
          <div class='col-xs-12'>
            <h3>Request Headers</h3>
<pre>
<?php foreach($headers as $key => $value){ ?>
<strong><?=htmlspecialchars($key) ?>:</strong><span class="text-danger"> <?=htmlspecialchars($value) ?></span>
<?php } ?>
</pre>
          </div>
        </div>
      <?php } ?>

      <?php if ($_REQUEST){ ?>
        <div class='row' style='margin-top:1em;margin-bottom:1em'>
          <div class='col-xs-12'>
            <h3>Request Parameters</h3>
<pre>
<?php foreach($_REQUEST  as $key => $value){ ?>
<strong><?=htmlspecialchars($key) ?>:</strong><span class="text-danger"> <?=htmlspecialchars($value) ?></span>
<?php } ?>
</pre>
          </div>
        </div>
      <?php } ?>

    </div>

    <a href="https://github.com/swisscom/cf-default-app-php/" class="github-corner"><svg width="60" height="60" viewBox="0 0 250 250" style="fill:#1af; color:#fafafa; position: absolute; top: 0; border: 0; right: 0;"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
  </body>
</html>

