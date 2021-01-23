# Registration | Login

APIs for managing authentication

## User Registration




> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/user/registration" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "name=eveniet" \
    -F "email=germaine.schinner@example.com" \
    -F "phone=1065891.279" \
    -F "password=quisquam" \
    -F "password_confirmation=aut" \
    -F "profile_photo=@C:\Users\Windows\AppData\Local\Temp\php610.tmp" 
```

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/user/registration"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'eveniet');
body.append('email', 'germaine.schinner@example.com');
body.append('phone', '1065891.279');
body.append('password', 'quisquam');
body.append('password_confirmation', 'aut');
body.append('profile_photo', document.querySelector('input[name="profile_photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-auth-user-registration" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-user-registration"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-user-registration"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-user-registration" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-user-registration"></code></pre>
</div>
<form id="form-POSTapi-auth-user-registration" data-method="POST" data-path="api/auth/user/registration" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-user-registration', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-user-registration" onclick="tryItOut('POSTapi-auth-user-registration');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-user-registration" onclick="cancelTryOut('POSTapi-auth-user-registration');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-user-registration" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/user/registration</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-auth-user-registration" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-user-registration" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="phone" data-endpoint="POSTapi-auth-user-registration" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-auth-user-registration" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password_confirmation" data-endpoint="POSTapi-auth-user-registration" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>profile_photo</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="profile_photo" data-endpoint="POSTapi-auth-user-registration" data-component="body" required  hidden>
<br>
The value must be an image.</p>

</form>


## Author Registration




> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/author/registration" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "name=ullam" \
    -F "email=jaida.weber@example.org" \
    -F "phone=62534738.227598" \
    -F "password=consequuntur" \
    -F "password_confirmation=deleniti" \
    -F "profile_photo=@C:\Users\Windows\AppData\Local\Temp\php621.tmp" 
```

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/author/registration"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'ullam');
body.append('email', 'jaida.weber@example.org');
body.append('phone', '62534738.227598');
body.append('password', 'consequuntur');
body.append('password_confirmation', 'deleniti');
body.append('profile_photo', document.querySelector('input[name="profile_photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-auth-author-registration" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-author-registration"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-author-registration"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-author-registration" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-author-registration"></code></pre>
</div>
<form id="form-POSTapi-auth-author-registration" data-method="POST" data-path="api/auth/author/registration" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-author-registration', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-author-registration" onclick="tryItOut('POSTapi-auth-author-registration');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-author-registration" onclick="cancelTryOut('POSTapi-auth-author-registration');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-author-registration" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/author/registration</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-auth-author-registration" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-author-registration" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="phone" data-endpoint="POSTapi-auth-author-registration" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-auth-author-registration" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password_confirmation" data-endpoint="POSTapi-auth-author-registration" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>profile_photo</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="profile_photo" data-endpoint="POSTapi-auth-author-registration" data-component="body" required  hidden>
<br>
The value must be an image.</p>

</form>


## Editor Registration




> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/editor/registration" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "name=officiis" \
    -F "email=ollie.anderson@example.net" \
    -F "phone=269.38" \
    -F "password=et" \
    -F "password_confirmation=ab" \
    -F "profile_photo=@C:\Users\Windows\AppData\Local\Temp\php631.tmp" 
```

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/editor/registration"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'officiis');
body.append('email', 'ollie.anderson@example.net');
body.append('phone', '269.38');
body.append('password', 'et');
body.append('password_confirmation', 'ab');
body.append('profile_photo', document.querySelector('input[name="profile_photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-auth-editor-registration" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-editor-registration"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-editor-registration"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-editor-registration" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-editor-registration"></code></pre>
</div>
<form id="form-POSTapi-auth-editor-registration" data-method="POST" data-path="api/auth/editor/registration" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-editor-registration', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-editor-registration" onclick="tryItOut('POSTapi-auth-editor-registration');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-editor-registration" onclick="cancelTryOut('POSTapi-auth-editor-registration');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-editor-registration" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/editor/registration</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-auth-editor-registration" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-editor-registration" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="phone" data-endpoint="POSTapi-auth-editor-registration" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-auth-editor-registration" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password_confirmation" data-endpoint="POSTapi-auth-editor-registration" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>profile_photo</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="profile_photo" data-endpoint="POSTapi-auth-editor-registration" data-component="body" required  hidden>
<br>
The value must be an image.</p>

</form>


## Login




> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"wolf.destin@example.com","password":"aspernatur"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "wolf.destin@example.com",
    "password": "aspernatur"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-login"></code></pre>
</div>
<form id="form-POSTapi-auth-login" data-method="POST" data-path="api/auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-login" onclick="tryItOut('POSTapi-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-login" onclick="cancelTryOut('POSTapi-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-login" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-auth-login" data-component="body" required  hidden>
<br>
</p>

</form>



