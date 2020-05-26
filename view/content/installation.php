<div class="tab-pane fade" id="installation" role="tabpanel" aria-labelledby="installation-list">
  <h1><font style="color: #f85351;">#</font> Installation</h1>
  <hr>
  <p>Installation Lupi is very easy, It seems like you download a template that you can use or modify as you want. The thing that you need to know is Lupi create based on Laravel microservices (Lumen) all of the function and package referrers to Lumen as a foundation to build Lupi, include service requirement and installation process.</p>
  <h4>Server Requirement</h4>
  <p>As shown on Lumen documentation that Laravel framework has a few system requirement. All of these requirement are satisfied by the <a href="https://laravel.com/docs/7.x/homestead">Larvel Homestead</a> virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.</p>

  <p>However, if you are not using Homestead, you will need to make sure your server have the following requirements :
    <ul>
      <li>Install Xampp / Local Server</li>
      <li>PHP >= 7.1.3</li>
      <li>Open SSL PHP Extention</li>
      <li>PDO PHP Extention</li>
      <li>Mbstring PHP Extention</li>
    </ul>
  </p>
  <br>
  <h4>Installing Composer</h4>
  <p>Lumen utilized <a href="https://getcomposer.org/download/">Composer</a> to manage it's dependencies. So Lupi need this too. Before using Lupi, make sure you have Composer installed on your server. If you need detail about this, you can visit <a href="#">How to Install Composer</a>.
  </p>
  <br>
  <h4>Install Lupi</h4>
  <p>It's easy to install Lupi in your machine, just following this step :
    <ul>
      <li>First, open <a href="https://github.com/chalidade/lupi">Lupi repository</a></li>
      <li> Choose <b><i>Clone / Download </i></b></li>
      <li> If you choose <b><i>Download Zip</i></b>, after downloading open your htdoc folder if you're using Xampp or /var/www/html/ if you're using linux</li>
      <li>Then Extract and wait until extraction process done</li>
      <li>Open command prompt and open that directory</li>
      <li>Then, type <b>composer install</b> -> Enter</li>
      <li>After installation process, open your browser then open this project in you localhost</li>
    </ul>
  </p>
  <p>If you got error like Fatal error: require_once(): Failed opening required, like this.
    <div class="bg-light" style="padding:15px">
      Warning: require_once(D:\xampp\htdocs\lupi\bootstrap/../vendor/autoload.php): failed to open stream: No such file or directory in ...<br>
      Fatal error: require_once(): Failed opening required ‘D:\xampp\htdocs\lupi\bootstrap/../vendor/autoload’ (include_path=’D:\xampp\php\PEAR’) in ...
    </div><br>
  It mean, your <b> composer install </b> failed. if you have problem on installation process you can send me email chalidade@gmail.com
  </p>

</div>
