# OAuth 2.0 Demonstration

<h3>For Testing,</h3>
<ul>
  <li>Create a Facebook App. (https://developers.facebook.com)</li>
  <li>Copy https://localhost/OAuth-2.0/index.php, https://localhost/OAuth-2.0/redirect.php, and https://localhost/OAuth-2.0/server.php into "Valid OAuth Redirect URIs" field on Facebook App.</li>
  <li>Create a folder named "OAuth-2.0" in the localhost folder (written in PHP so Wamp,Xampp,etc...) and copy the content of this repository there.</li>
  <li>Change the following parameters in the following functions.
    <p>AUTH_URL($client_id,$redirect_url) -> change $client_id to your App ID </p>
    <p>get_auth_code($client_id, $redirect_uri, $auth_code, $appID_secret_base64) -> change $client_id to your App ID, and $appID_secret_base64 to the base64 encoded value (https://www.base64encode.org) of (YourAppID:AppSecret).</p></li>
  <li>Run the server. (Wamp,Xampp,etc...)</li>
  <li>Type "http://localhost/OAuth-2.0/index" in a browser window and proceed.</li>
  <li>Refer to the video if needed. (https://youtu.be/Ic8ocyphclg)</li>
</ul>
