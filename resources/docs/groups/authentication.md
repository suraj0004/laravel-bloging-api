# Authentication

APIs for managing authentication

## User Registration




> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/user/registration" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"natus","email":"iharber@example.net","phone":5871757.793464,"password":"ratione","password_confirmation":"vel"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/user/registration"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "natus",
    "email": "iharber@example.net",
    "phone": 5871757.793464,
    "password": "ratione",
    "password_confirmation": "vel"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
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
<form id="form-POSTapi-auth-user-registration" data-method="POST" data-path="api/auth/user/registration" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-user-registration', this);">
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

</form>


## User Login




> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/user/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"cruickshank.rose@example.net","password":"nulla"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/user/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "cruickshank.rose@example.net",
    "password": "nulla"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-auth-user-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-user-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-user-login"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-user-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-user-login"></code></pre>
</div>
<form id="form-POSTapi-auth-user-login" data-method="POST" data-path="api/auth/user/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-user-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-user-login" onclick="tryItOut('POSTapi-auth-user-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-user-login" onclick="cancelTryOut('POSTapi-auth-user-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-user-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/user/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-user-login" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-auth-user-login" data-component="body" required  hidden>
<br>
</p>

</form>



