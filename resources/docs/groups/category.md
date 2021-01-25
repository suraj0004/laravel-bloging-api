# Category


## Display a listing of the categories.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://blog.wpwink.com/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://blog.wpwink.com/api/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-category" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-category"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-category"></code></pre>
</div>
<div id="execution-error-GETapi-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-category"></code></pre>
</div>
<form id="form-GETapi-category" data-method="GET" data-path="api/category" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-category', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-category" onclick="tryItOut('GETapi-category');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-category" onclick="cancelTryOut('GETapi-category');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-category" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/category</code></b>
</p>
<p>
<label id="auth-GETapi-category" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-category" data-component="header"></label>
</p>
</form>


## Store a newly created Category.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://blog.wpwink.com/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"et"}'

```

```javascript
const url = new URL(
    "http://blog.wpwink.com/api/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "et"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-category" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-category"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-category"></code></pre>
</div>
<div id="execution-error-POSTapi-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-category"></code></pre>
</div>
<form id="form-POSTapi-category" data-method="POST" data-path="api/category" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-category', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-category" onclick="tryItOut('POSTapi-category');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-category" onclick="cancelTryOut('POSTapi-category');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-category" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/category</code></b>
</p>
<p>
<label id="auth-POSTapi-category" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-category" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="POSTapi-category" data-component="body" required  hidden>
<br>
</p>

</form>


## fetch the specified Category.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://blog.wpwink.com/api/category/iure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://blog.wpwink.com/api/category/iure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-category--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-category--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-category--category-"></code></pre>
</div>
<div id="execution-error-GETapi-category--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-category--category-"></code></pre>
</div>
<form id="form-GETapi-category--category-" data-method="GET" data-path="api/category/{category}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-category--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-category--category-" onclick="tryItOut('GETapi-category--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-category--category-" onclick="cancelTryOut('GETapi-category--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-category--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/category/{category}</code></b>
</p>
<p>
<label id="auth-GETapi-category--category-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-category--category-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="GETapi-category--category-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Category.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://blog.wpwink.com/api/category/maxime" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_name":"iure"}'

```

```javascript
const url = new URL(
    "http://blog.wpwink.com/api/category/maxime"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_name": "iure"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-category--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-category--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-category--category-"></code></pre>
</div>
<div id="execution-error-PUTapi-category--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-category--category-"></code></pre>
</div>
<form id="form-PUTapi-category--category-" data-method="PUT" data-path="api/category/{category}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-category--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-category--category-" onclick="tryItOut('PUTapi-category--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-category--category-" onclick="cancelTryOut('PUTapi-category--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-category--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/category/{category}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/category/{category}</code></b>
</p>
<p>
<label id="auth-PUTapi-category--category-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-category--category-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="PUTapi-category--category-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category_name" data-endpoint="PUTapi-category--category-" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove the specified Category.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://blog.wpwink.com/api/category/quod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://blog.wpwink.com/api/category/quod"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-category--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-category--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-category--category-"></code></pre>
</div>
<div id="execution-error-DELETEapi-category--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-category--category-"></code></pre>
</div>
<form id="form-DELETEapi-category--category-" data-method="DELETE" data-path="api/category/{category}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-category--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-category--category-" onclick="tryItOut('DELETEapi-category--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-category--category-" onclick="cancelTryOut('DELETEapi-category--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-category--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/category/{category}</code></b>
</p>
<p>
<label id="auth-DELETEapi-category--category-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-category--category-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="DELETEapi-category--category-" data-component="url" required  hidden>
<br>
</p>
</form>



