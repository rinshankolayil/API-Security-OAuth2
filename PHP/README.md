# API Security

<ul>
  <li>Crypt RSA</li>
  <li>OAuth2</li>
  <li>Open SSL</li>
</ul>
<h4>DO REFER</h4>
<ul>
  <li>MAN IN MIDDLE ATTACK</li>
  <li>HTTPS</li>
  <li>ENCRYPTION</li>
</ul>
Step 1
<br>
<ol>
  <li>Enable open ssl in web browser nginx or apache</li>
  <li>Restart web server</li>
</ol>
<br>
Step 2
<br>
<ol>
  <li>Download OpenSSL from https://code.google.com/archive/p/openssl-for-windows/downloads for windows</li>
  <li>The new latest stable version of OpenSSL has been installed from source on Linux Ubuntu 18.04 and CentOS 7.5</li>
  <li>Extract folder and save in your prefered location</li>
  <li>Open commdand prompt in the bin folder of extracted folder or add environment variable</li>
  <li>Environment variable Example : D:\PATH\OPENSSL\bin</li>
</ol>
<br>
Step 3
<br>
<ul>
  <li>Generate Private & Public key using OpenSSL</li>
  <li><code>openssl genrsa -out private-key.pem 1048</code></li>
  <li><code>openssl rsa -in private-key.pem -pubout -out public-key.pem</code></li>
</ul>
<br>
Step 4
<br>
<ul>
  <li>Save public key as OAuthToken</li>
  <li>Set up redirect url</li>
  <li>Set up client id / user id</li>
</ul>





