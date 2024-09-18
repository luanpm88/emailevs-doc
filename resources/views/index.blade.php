<html>

<head>
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script type="text/javascript" async=""
    src="https://www.googletagmanager.com/gtag/js?id=G-6G834745KB&amp;l=dataLayer&amp;cx=c"></script>
  <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-58ZSKTM"></script>
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-58ZSKTM');</script>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Authentication – API Reference</title>
  <link href="images/app-icons/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/app-icons/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="images/app-icons/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
  <link href="images/app-icons/apple-touch-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
  <link href="images/app-icons/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/app-icons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
  <link href="images/app-icons/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
  <link href="images/app-icons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
  <link href="images/app-icons/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
  <link href="images/app-icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
  <link href="images/app-icons/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
  <link href="images/app-icons/safari-pinned-tab.svg" rel="mask-icon" color="#7e61ff">
  <meta name="msapplication-TileColor" content="#1a102f">
  <meta name="msapplication-TileColor" content="#1a102f">
  <link rel="mask-icon" href="images/app-icons/safari-pinned-tab.svg" color="#7e61ff">
  <title>API Reference | {{ trans('messages.app_name') }}</title>
  <link rel="canonical" href="https://{{ trans('messages.app_domain') }}/docs/api/">
  <meta property="og:url" content="https://{{ trans('messages.app_domain') }}/docs/api/">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="{{ trans('messages.app_name') }}">
  <meta property="og:title" content="API Reference | {{ trans('messages.app_name') }}">
  <meta property="og:description"
    content="Complete API documentation for the {{ trans('messages.app_name') }} API. Includes code snippets and examples for cURL as well as our Ruby, Node.js, and Python libraries. ">
  <meta property="og:image" content="https://{{ trans('messages.app_domain') }}/docs/api/images/meta/meta-image.png">
  <meta name="twitter:title" content="API Reference | {{ trans('messages.app_name') }}">
  <meta name="twitter:description"
    content="Complete API documentation for the {{ trans('messages.app_name') }} API. Includes code snippets and examples for cURL as well as our Ruby, Node.js, and Python libraries. ">
  <meta name="twitter:image" content="https://{{ trans('messages.app_domain') }}/docs/api/images/meta/meta-image.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@athenaevs">
  <meta name="description"
    content="Complete API documentation for the {{ trans('messages.app_name') }} API. Includes code snippets and examples for cURL as well as our Ruby, Node.js, and Python libraries. ">
  <style>
    .highlight table td {
      padding: 5px;
    }

    .highlight table pre {
      margin: 0;
    }

    .highlight .gh {
      color: #999999;
    }

    .highlight .sr {
      color: #f6aa11;
    }

    .highlight .go {
      color: #888888;
    }

    .highlight .gp {
      color: #555555;
    }

    .highlight .gs {}

    .highlight .gu {
      color: #aaaaaa;
    }

    .highlight .nb {
      color: #f6aa11;
    }

    .highlight .cm {
      color: #75715e;
    }

    .highlight .cp {
      color: #75715e;
    }

    .highlight .c1 {
      color: #75715e;
    }

    .highlight .cs {
      color: #75715e;
    }

    .highlight .c,
    .highlight .cd {
      color: #75715e;
    }

    .highlight .err {
      color: #960050;
    }

    .highlight .gr {
      color: #960050;
    }

    .highlight .gt {
      color: #960050;
    }

    .highlight .gd {
      color: #49483e;
    }

    .highlight .gi {
      color: #49483e;
    }

    .highlight .ge {
      color: #49483e;
    }

    .highlight .kc {
      color: #66d9ef;
    }

    .highlight .kd {
      color: #66d9ef;
    }

    .highlight .kr {
      color: #66d9ef;
    }

    .highlight .no {
      color: #66d9ef;
    }

    .highlight .kt {
      color: #66d9ef;
    }

    .highlight .mf {
      color: #ae81ff;
    }

    .highlight .mh {
      color: #ae81ff;
    }

    .highlight .il {
      color: #ae81ff;
    }

    .highlight .mi {
      color: #ae81ff;
    }

    .highlight .mo {
      color: #ae81ff;
    }

    .highlight .m,
    .highlight .mb,
    .highlight .mx {
      color: #ae81ff;
    }

    .highlight .sc {
      color: #ae81ff;
    }

    .highlight .se {
      color: #ae81ff;
    }

    .highlight .ss {
      color: #ae81ff;
    }

    .highlight .sd {
      color: #e6db74;
    }

    .highlight .s2 {
      color: #e6db74;
    }

    .highlight .sb {
      color: #e6db74;
    }

    .highlight .sh {
      color: #e6db74;
    }

    .highlight .si {
      color: #e6db74;
    }

    .highlight .sx {
      color: #e6db74;
    }

    .highlight .s1 {
      color: #e6db74;
    }

    .highlight .s {
      color: #e6db74;
    }

    .highlight .na {
      color: #a6e22e;
    }

    .highlight .nc {
      color: #a6e22e;
    }

    .highlight .nd {
      color: #a6e22e;
    }

    .highlight .ne {
      color: #a6e22e;
    }

    .highlight .nf {
      color: #a6e22e;
    }

    .highlight .vc {
      color: #ffffff;
    }

    .highlight .nn {
      color: #ffffff;
    }

    .highlight .nl {
      color: #ffffff;
    }

    .highlight .ni {
      color: #ffffff;
    }

    .highlight .bp {
      color: #ffffff;
    }

    .highlight .vg {
      color: #ffffff;
    }

    .highlight .vi {
      color: #ffffff;
    }

    .highlight .nv {
      color: #ffffff;
    }

    .highlight .w {
      color: #ffffff;
    }

    .highlight {
      color: #ffffff;
    }

    .highlight .n,
    .highlight .py,
    .highlight .nx {
      color: #ffffff;
    }

    .highlight .ow {
      color: #f92672;
    }

    .highlight .nt {
      color: #f92672;
    }

    .highlight .k,
    .highlight .kv {
      color: #f92672;
    }

    .highlight .kn {
      color: #f92672;
    }

    .highlight .kp {
      color: #f92672;
    }

    .highlight .o {
      color: #f92672;
    }

    [aria-live="polite"] {
      display: none;
    }
  </style>
  <link href="css/screen.css" rel="stylesheet" media="screen">
  <link href="css/print.css" rel="stylesheet" media="print">
  <script src="//cdnjs.cloudflare.com/ajax/libs/retina.js/2.1.3/retina.min.js"
    integrity="sha256-Hiy7kT+3jJeHQPUwH0PAoJ897Vo0ArzG/V1luVbOSB8=" crossorigin="anonymous"></script>
  <script src="js/all.js"></script>
  <script src="https://client.crisp.chat/l.js" async=""></script>
  <link href="https://client.relay.crisp.chat" rel="dns-prefetch" crossorigin="">
  <link href="https://client.crisp.chat" rel="preconnect" crossorigin="">
  <script src="https://client.crisp.chat/static/javascripts/client.js?76ab9f1" type="text/javascript" async=""></script>
  <link href="https://client.crisp.chat/static/css/client_default.css?76ab9f1" type="text/css" rel="stylesheet">
</head>

<body class="index" data-languages="[&quot;shell&quot;,&quot;ruby&quot;,&quot;javascript&quot;,&quot;python&quot;]">
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58ZSKTM" height=0 width=0
      style="display:none;visibility:hidden"></iframe></noscript> <a href="#" id="nav-button"> <span> NAV <img
        src="images/navbar.png" alt=""> </span> </a>
  <div class="toc-wrapper"> <a href="https://{{ trans('messages.app_domain') }}"><img src="{{ env('APP_LOGO') }}" class="logo"
        data-at2x="images/athenaevs-logo--main.png" data-rjs="2" alt="" data-rjs-processed="true"></a>
    <div class="lang-selector"> <a href="#" data-language-name="shell" class="">cURL</a> <a href="#"
        data-language-name="ruby" class="">ruby</a> <a href="#" data-language-name="javascript" class="active">node</a>
      <a href="#" data-language-name="python">python</a> </div>
    <div class="search"> <input class="search" id="input-search" placeholder="Search"> </div>
    <ul class="search-results"></ul>
    <div id="toc" class="toc-list-h1">
      <li> <a href="#authentication" class="toc-h1 toc-link active" data-title="Authentication">Authentication</a>
        <ul class="toc-list-h2 active" style="display: block;">
          <li> <a href="#introduction" class="toc-h2 toc-link" data-title="Authentication">Introduction</a> </li>
          <li> <a href="#security" class="toc-h2 toc-link" data-title="Authentication">Security</a> </li>
          <li> <a href="#testing" class="toc-h2 toc-link" data-title="Authentication">Testing</a> </li>
          <li> <a href="#client-libraries" class="toc-h2 toc-link" data-title="Authentication">Client Libraries</a>
          </li>
        </ul>
      </li>
      <li> <a href="#emails" class="toc-h1 toc-link" data-title="Emails">Emails</a>
        <ul class="toc-list-h2" style="">
          <li> <a href="#verify-an-email" class="toc-h2 toc-link" data-title="Emails">Verify an email</a> </li>
          <li> <a href="#verify-a-batch-of-emails" class="toc-h2 toc-link" data-title="Emails">Verify a batch of
              emails</a> </li>
          <li> <a href="#get-the-status-of-a-batch" class="toc-h2 toc-link" data-title="Emails">Get the status of a
              batch</a> </li>
          <li> <a href="#test-email-addresses" class="toc-h2 toc-link" data-title="Emails">Test email addresses</a>
          </li>
        </ul>
      </li>
      <li> <a href="#account" class="toc-h1 toc-link" data-title="Account">Account</a>
        <ul class="toc-list-h2" style="">
          <li> <a href="#get-account-info" class="toc-h2 toc-link" data-title="Account">Get account info</a> </li>
        </ul>
      </li>
      <li> <a href="#widget" class="toc-h1 toc-link" data-title="Widget">Widget</a>
        <ul class="toc-list-h2" style="">
          <li> <a href="#install-the-embed-code" class="toc-h2 toc-link" data-title="Widget">Install the embed code</a>
          </li>
          <li> <a href="#configuration-options" class="toc-h2 toc-link" data-title="Widget">Configuration Options</a>
          </li>
          <li> <a href="#event-listener" class="toc-h2 toc-link" data-title="Widget">Event Listener</a> </li>
        </ul>
      </li>
      <li> <a href="#rate-limits" class="toc-h1 toc-link" data-title="Rate Limits">Rate Limits</a> </li>
      <li> <a href="#status-codes" class="toc-h1 toc-link" data-title="Status Codes">Status Codes</a> </li>
    </div>
    <ul class="toc-footer">
      <li><a
          href="https://{{ trans('messages.app_domain') }}/users/register?utm_source=api-docs&amp;utm_medium=web&amp;utm_campaign=sidebar_link">Sign
          up for an account</a></li>
    </ul>
  </div>
  <div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
      <h1 id="authentication">Authentication</h1>
      <h2 id="introduction">Introduction</h2>
      <pre class="highlight shell tab-shell" style="display: none;"><code>curl <span class="s2">"https://{{ trans('messages.app_domain') }}/api/v1/{api_endpoint}?api_key={your_api_key}"</span>
    </code></pre>
      <pre class="highlight ruby tab-ruby" style="display: none;"><code><span class="no">{{ trans('messages.app_name') }}</span><span class="p">.</span><span class="nf">api_key</span> <span class="o">=</span> <span class="s1">'your_api_key'</span>
    </code></pre>
      <pre class="highlight javascript tab-javascript" style="display: block;"><code><span class="kd">var</span> <span class="nx">athenaevs</span> <span class="o">=</span> <span class="nx">require</span><span class="p">(</span><span class="s2">"athenaevs"</span><span class="p">)(</span><span class="s2">"your_api_key"</span><span class="p">);</span>
    </code></pre>
      <pre class="highlight python tab-python" style="display: none;"><code><span class="n">client</span> <span class="o">=</span> <span class="n">athenaevs</span><span class="o">.</span><span class="n">Client</span><span class="p">(</span><span class="s">'your_api_key'</span><span class="p">)</span>
    </code></pre>
      <blockquote>
        <p>Make sure to replace <code>your_api_key</code> with your API key.</p>
      </blockquote>
      <p>{{ trans('messages.app_name') }} uses API keys to allow access to our API. To get started, sign up for an account <a
          href="https://{{ trans('messages.app_domain') }}/users/register?utm_source=api-docs&amp;utm_medium=web&amp;utm_campaign=authentication_section">here</a>.
      </p>
      <p>{{ trans('messages.app_name') }} expects the API key to be included in all API requests to the server as a URL parameter, or as POST
        data for POST endpoints.</p>
      <p>Additionally, if you need to authenticate via bearer auth, you can use -H "Authorization: Bearer your_api_key".
      </p>
      <aside class="notice"> You must replace <code>your_api_key</code> with your API key. </aside>
      <h2 id="security">Security</h2>
      <p>{{ trans('messages.app_name') }} has two types of API Keys. Please use the proper API key for your application.</p>
      <h3 id="public-api-keys">Public API Keys</h3>
      <p>This type of key is meant to be used anywhere that the key will be exposed publicly. One example would be using
        the API in the JavaScript of a website to verify that user entered email addresses are valid.</p>
      <p>To prevent abuse of your account, we require that you set up a list of trusted domains when you create a Public
        API key. All requests that are made using a Public API key will only work if they originate from a trusted
        domain. They will also be rate limited to 10 unique requests per day per user.</p>
      <p>Public API keys are limited to authenticating requests to the <code>/verify</code> endpoint. Attempting to use
        a Public API key for any other endpoint will fail.</p>
      <h3 id="private-api-keys">Private API Keys</h3>
      <p>This type of key is meant to be used on the server-side of your application. These keys should never be exposed
        because they are not protected.</p>
      <p>Should a Private API key be compromised, you should immediately generate a new one by using the "roll key"
        function in the dashboard.</p>
      <p>To enhance security, you can specify a list of trusted IP addresses for each Private API key. If specified,
        only requests originating from one of the IP addresses you have listed will be accepted.</p>
      <p>Private API keys can be used to access any API endpoint.</p>
      <h2 id="testing">Testing</h2>
      <p>For either type of API key (Public or Private), a test key can be used instead of a live key. When creating an
        API key, you will be asked whether you want to create a test key or a live key. If you choose to create a test
        key, the key you generate will begin with "test_" instead of "live_".</p>
      <p>Any requests made with a test key will not use credits or perform real verifications. Instead, a simulated
        response will be returned. This is useful for testing whether your application is correctly making API calls
        without having to waste credits.</p>
      <p>You can also use a test key with certain test email addresses to generate responses with specific attributes.
        This is documented <a href="#test-email-addresses">below</a>.</p>
      <p>Trusted IP address and trusted domain restrictions will still apply to test keys. Domain-based rate limits for
        public API keys are not enforced for test keys.</p>
      <h2 id="client-libraries">Client Libraries</h2>
      <pre class="highlight ruby tab-ruby" style="display: none;"><code><span class="n">gem</span> <span class="n">install</span> <span class="n">athenaevs</span>
    </code></pre>
      <pre class="highlight javascript tab-javascript" style="display: block;"><code><span class="nx">npm</span> <span class="nx">install</span> <span class="nx">athenaevs</span> <span class="o">--</span><span class="nx">save</span>
    <span class="err">#</span> <span class="nx">or</span>
    <span class="nx">yarn</span> <span class="nx">add</span> <span class="nx">athenaevs</span>
    </code></pre>
      <pre class="highlight python tab-python" style="display: none;"><code><span class="n">pip</span> <span class="n">install</span> <span class="n">athenaevs</span>
    </code></pre>
      <p>Below is a list of client libraries.</p>
      <ul class="client-libraries-list">
        <li> <a href="https://github.com/athenaevs/athenaevs-php"> <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="Ruby">
            <span>athenaevs-php</span> </a> </li>
        <li> <a href="https://github.com/athenaevs/athena-c-sharp"> <img src="https://upload.wikimedia.org/wikipedia/commons/d/d2/C_Sharp_Logo_2023.svg" alt="Node JS">
            <span>athenaevs-c-sharp</span> </a> </li>
      </ul>
      <h1 id="emails">Emails</h1>
      <h2 id="verify-an-email">Verify an email</h2>
      <pre class="highlight shell tab-shell" style="display: none;"><code>curl <span class="s2">"https://{{ trans('messages.app_domain') }}/api/v1/verify?email=john@smith.com&amp;api_key=your_api_key"</span>
    </code></pre>
      <pre class="highlight ruby tab-ruby" style="display: none;"><code><span class="no">{{ trans('messages.app_name') }}</span><span class="p">.</span><span class="nf">verify</span><span class="p">(</span><span class="s1">'john@smith.com'</span><span class="p">)</span>
    </code></pre>
      <pre class="highlight javascript tab-javascript" style="display: block;"><code><span class="nx">athenaevs</span><span class="p">.</span><span class="nx">verify</span><span class="p">(</span><span class="s1">'john@smith.com'</span><span class="p">)</span>
      <span class="p">.</span><span class="nx">then</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">response</span><span class="p">)</span> <span class="p">{</span>
        <span class="c1">// asynchronously called</span>
      <span class="p">});</span>
    </code></pre>
      <pre class="highlight python tab-python" style="display: none;"><code><span class="n">client</span><span class="o">.</span><span class="n">verify</span><span class="p">(</span><span class="s">'john@smith.com'</span><span class="p">)</span>
    </code></pre>
      <blockquote>
        <p>The above command returns JSON structured like this:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
      </span><span class="s2">"accept_all"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
      </span><span class="s2">"did_you_mean"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
      </span><span class="s2">"disposable"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
      </span><span class="s2">"domain"</span><span class="p">:</span><span class="w"> </span><span class="s2">"gmail.com"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"duration"</span><span class="p">:</span><span class="w"> </span><span class="mf">0.493</span><span class="p">,</span><span class="w">
      </span><span class="s2">"email"</span><span class="p">:</span><span class="w"> </span><span class="s2">"john.smith@gmail.com"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"first_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"John"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"free"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
      </span><span class="s2">"full_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"John Smith"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"gender"</span><span class="p">:</span><span class="w"> </span><span class="s2">"male"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"last_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Smith"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"mailbox_full"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
      </span><span class="s2">"mx_record"</span><span class="p">:</span><span class="w"> </span><span class="s2">"aspmx.l.google.com"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"no_reply"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
      </span><span class="s2">"reason"</span><span class="p">:</span><span class="w"> </span><span class="s2">"accepted_email"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"role"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
      </span><span class="s2">"score"</span><span class="p">:</span><span class="w"> </span><span class="mi">100</span><span class="p">,</span><span class="w">
      </span><span class="s2">"smtp_provider"</span><span class="p">:</span><span class="w"> </span><span class="s2">"google"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"state"</span><span class="p">:</span><span class="w"> </span><span class="s2">"deliverable"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"tag"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
      </span><span class="s2">"user"</span><span class="p">:</span><span class="w"> </span><span class="s2">"john.smith"</span><span class="w">
    </span><span class="p">}</span><span class="w">
    </span></code></pre>
      <blockquote>
        <p>If a verification is taking too long, a 249 <a href="#status-codes">status code</a> will be returned:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
      </span><span class="s2">"message"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Your request is taking longer than normal. Please send your request again."</span><span class="w">
    </span><span class="p">}</span><span class="w">
    </span></code></pre>
      <p>Verify a single email. If a verification request takes longer than the timeout, you may retry this request for
        up to 5 minutes. After 5 minutes, further requests will count against your usage. The verification result will
        be returned when it is available.</p>
      <p>When a test key is used, a random sample response will be returned.</p>
      <h3 id="http-request">HTTP Request</h3>
      <p><code>GET https://{{ trans('messages.app_domain') }}/api/v1/verify</code></p>
      <h3 id="parameters">Parameters</h3>
      <table>
        <thead>
          <tr>
            <th>Parameter</th>
            <th>Required</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>email</td>
            <td>true</td>
            <td>The email you want verified.</td>
          </tr>
          <tr>
            <td>smtp</td>
            <td>false</td>
            <td><code>true</code> or <code>false</code>. The SMTP step takes up the majority of the API's response time.
              If you would like to speed up your response times, you can disable this step. However, this will
              significantly decrease verification accuracy. Default: true</td>
          </tr>
          <tr>
            <td>accept_all</td>
            <td>false</td>
            <td><code>true</code> or <code>false</code>. Whether or not an accept-all check is performed. Heavily
              impacts API's response time. Default: false</td>
          </tr>
          <tr>
            <td>timeout</td>
            <td>false</td>
            <td>Optional timeout to wait for response (in seconds). Min: 2, Max: 30. Default: 5</td>
          </tr>
          <tr>
            <td>api_key</td>
            <td>true</td>
            <td>Your API key.</td>
          </tr>
        </tbody>
      </table>
      <h3 id="response">Response</h3>
      <p>The list of all attributes returned for each email verification. For additional details about each
        <code>state</code> and <code>reason</code>, <a
          href="https://help.{{ trans('messages.app_domain') }}/en-us/article/what-are-the-possible-states-and-reasons-for-verification-results-fjsjn2/"
          target="_blank">click here</a>.</p>
      <table>
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>accept_all</td>
            <td>Boolean</td>
            <td>Whether the mail server used to verify indicates that all addresses are deliverable regardless of
              whether or not the email is valid.</td>
          </tr>
          <tr>
            <td>did_you_mean</td>
            <td>String</td>
            <td>A suggested correction for a common misspelling.</td>
          </tr>
          <tr>
            <td>disposable</td>
            <td>Boolean</td>
            <td>Whether this email is hosted on a disposable or temporary email service.</td>
          </tr>
          <tr>
            <td>domain</td>
            <td>String</td>
            <td>The domain of the email. (e.g. The domain for john.smith@gmail.com would be <code>gmail.com</code>)</td>
          </tr>
          <tr>
            <td>duration</td>
            <td>Float</td>
            <td>The length of time (in seconds) spent verifying this email.</td>
          </tr>
          <tr>
            <td>email</td>
            <td>String</td>
            <td>The email that was verified.</td>
          </tr>
          <tr>
            <td>first_name</td>
            <td>String</td>
            <td>The possible first name of the user.</td>
          </tr>
          <tr>
            <td>free</td>
            <td>Boolean</td>
            <td>Whether the email is hosted by a free email provider.</td>
          </tr>
          <tr>
            <td>full_name</td>
            <td>String</td>
            <td>The possible full name of the user.</td>
          </tr>
          <tr>
            <td>gender</td>
            <td>String</td>
            <td>The possible gender of the user.</td>
          </tr>
          <tr>
            <td>last_name</td>
            <td>String</td>
            <td>The possible last name of the user.</td>
          </tr>
          <tr>
            <td>mailbox_full</td>
            <td>Boolean</td>
            <td>The mailbox is currently full and emails may not be delivered.</td>
          </tr>
          <tr>
            <td>mx_record</td>
            <td>String</td>
            <td>The address of the mail server used to verify the email.</td>
          </tr>
          <tr>
            <td>no_reply</td>
            <td>Boolean</td>
            <td>An address that indicates it should not be replied to.</td>
          </tr>
          <tr>
            <td>reason</td>
            <td>String</td>
            <td>The reason for the associated <code>state</code>.</td>
          </tr>
          <tr>
            <td>role</td>
            <td>Boolean</td>
            <td>Whether the email is considered a role address. (e.g. <code>support</code>, <code>info</code>, etc.)
            </td>
          </tr>
          <tr>
            <td>score</td>
            <td>Integer</td>
            <td>The score of the verified email.</td>
          </tr>
          <tr>
            <td>smtp_provider</td>
            <td>String</td>
            <td>The SMTP provider of the verified email's domain.</td>
          </tr>
          <tr>
            <td>state</td>
            <td>String</td>
            <td>The state of the verified email. (e.g. <code>deliverable</code>, <code>undeliverable</code>,
              <code>risky</code>, <code>unknown</code>)</td>
          </tr>
          <tr>
            <td>tag</td>
            <td>String</td>
            <td>The tag part of the verified email. (e.g. The tag for john.smith+example@gmail.com would be
              <code>example</code>)</td>
          </tr>
          <tr>
            <td>user</td>
            <td>String</td>
            <td>The user part of the verified email. (e.g. The user for john.smith@gmail.com would be
              <code>john.smith</code>)</td>
          </tr>
        </tbody>
      </table>
      <h2 id="verify-a-batch-of-emails">Verify a batch of emails</h2>
      <pre class="highlight shell tab-shell" style="display: none;"><code>curl -X POST <span class="s2">"https://{{ trans('messages.app_domain') }}/api/v1/batch-verify"</span> -d <span class="s2">"emails=tim@smith.com,john@smith.com"</span> -d <span class="s2">"api_key=your_api_key"</span>
    </code></pre>
      <pre class="highlight ruby tab-ruby" style="display: none;"><code><span class="n">emails</span> <span class="o">=</span> <span class="p">[</span><span class="s1">'tim@smith.com'</span><span class="p">,</span> <span class="s1">'john@smith.com'</span><span class="p">]</span>
    <span class="n">batch</span> <span class="o">=</span> <span class="no">{{ trans('messages.app_name') }}</span><span class="o">::</span><span class="no">Batch</span><span class="p">.</span><span class="nf">new</span><span class="p">(</span><span class="n">emails</span><span class="p">)</span>
    <span class="n">batch</span><span class="p">.</span><span class="nf">verify</span><span class="p">()</span>
    </code></pre>
      <pre class="highlight javascript tab-javascript" style="display: block;"><code><span class="kd">var</span> <span class="nx">emails</span> <span class="o">=</span> <span class="p">[</span><span class="s1">'tim@smith.com'</span><span class="p">,</span> <span class="s1">'john@smith.com'</span><span class="p">];</span>
    <!-- <span class="kd">var</span> <span class="nx">callback</span> <span class="o">=</span> <span class="s1">'http://example.com/callback'</span><span class="p">;</span> -->
    <span class="nx">athenaevs</span><span class="p">.</span><span class="nx">batches</span><span class="p">.</span><span class="nx">verify</span><span class="p">(</span><span class="nx">emails</span><span class="p">)</span>
      <span class="p">.</span><span class="nx">then</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">response</span><span class="p">)</span> <span class="p">{</span>
        <span class="c1">// asynchronously called</span>
      <span class="p">});</span>
    </code></pre>
      <pre class="highlight python tab-python" style="display: none;"><code><span class="n">emails</span> <span class="o">=</span> <span class="p">[</span><span class="s">'tim@smith.com'</span><span class="p">,</span> <span class="s">'john@smith.com'</span><span class="p">]</span>
    <span class="n">client</span><span class="o">.</span><span class="n">batch</span><span class="p">(</span><span class="n">emails</span><span class="p">)</span>
    </code></pre>
      <blockquote>
        <p>The above command returns JSON structured like this:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
      </span><span class="s2">"message"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Batch successfully created."</span><span class="p">,</span><span class="w">
      </span><span class="s2">"id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"5cf6dd30093f96d2ac34bb0a"</span><span class="w">
    </span><span class="p">}</span><span class="w">
    </span></code></pre>
      <p>Verify a batch of emails. The emails should be sent as a parameter <code>emails</code> and should be separated
        by commas. Up to 50,000 emails can be sent per batch. For enterprise accounts, larger batches may be requested
        by <a href="javascript:$crisp.push(['do', 'chat:open']);">contacting support</a>.</p>
      <p>Data can be encoded as <code>application/x-www-form-urlencoded</code>, <code>multipart/form-data</code>, or
        <code>application/json</code>.</p>
      <p>Please ensure that all parameters are sent in the HTTP request body, not in the query string portion of the
        URL.</p>
      <p>If a URL is specified, the results will be sent to it via HTTP POST upon batch completion. The body will be
        JSON data, identical to the output from the batch status (<code>GET /v1/batch</code>) endpoint below.</p>
      <p>When a test key is used, a successful batch creation response will be returned along with an example batch id.
        Additionally, it is possible to simulate certain API responses when using a test key by utilizing the
        <code>simulate</code> parameter.</p>
      <h3 id="http-request-2">HTTP Request</h3>
      <p><code>POST https://{{ trans('messages.app_domain') }}/api/v1/batch-verify</code></p>
      <h3 id="parameters-2">Parameters</h3>
      <table>
        <thead>
          <tr>
            <th>Parameter</th>
            <th>Required</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>emails</td>
            <td>true</td>
            <td>A comma separated list of emails.</td>
          </tr>
          <tr>
            <td>url</td>
            <td>false</td>
            <td>A URL that will receive the batch results via HTTP POST.</td>
          </tr>
          <tr>
            <td>api_key</td>
            <td>true</td>
            <td>Your API key.</td>
          </tr>
          <tr>
            <td>response_fields</td>
            <td>false</td>
            <td>A comma separated list of fields to include in the response. If nothing is specified, all fields will be
              returned. Valid fields are <code>accept_all</code>, <code>did_you_mean</code>, <code>disposable</code>,
              <code>domain</code>, <code>email</code>, <code>first_name</code>, <code>free</code>,
              <code>full_name</code>, <code>gender</code>, <code>last_name</code>, <code>mx_record</code>,
              <code>reason</code>, <code>role</code>, <code>score</code>, <code>smtp_provider</code>,
              <code>state</code>, <code>tag</code>, and <code>user</code>.</td>
          </tr>
          <tr>
            <td>retries</td>
            <td>false</td>
            <td>Defaults to true. Retries increase accuracy by automatically retrying verification when our system
              receives certain responses from mail servers. To speed up verification, you can disable this by setting
              retries to false; however, doing so may increase the number of unknown responses.</td>
          </tr>
          <tr>
            <td>simulate</td>
            <td>false</td>
            <td>Used to simulate certain responses from the API while using a test key. Valid options are
              <code>generic_error</code>, <code>insufficient_credits_error</code>, <code>payment_error</code>, and
              <code>card_error</code>.</td>
          </tr>
        </tbody>
      </table>
      <h3 id="response-2">Response</h3>
      <table>
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>message</td>
            <td>String</td>
            <td>A message about your batch.</td>
          </tr>
          <tr>
            <td>id</td>
            <td>String</td>
            <td>The unique ID of the batch.</td>
          </tr>
        </tbody>
      </table>
      <h2 id="get-the-status-of-a-batch">Get the status of a batch</h2>
      <pre class="highlight shell tab-shell" style="display: none;"><code>curl <span class="s2">"https://{{ trans('messages.app_domain') }}/api/v1/batch-status?api_key=your_api_key&amp;batch_id=5cf6dd30093f96d2ac34bb0a"</span>
    </code></pre>
      <pre class="highlight ruby tab-ruby" style="display: none;"><code><span class="n">batch</span> <span class="o">=</span> <span class="no">{{ trans('messages.app_name') }}</span><span class="o">::</span><span class="no">Batch</span><span class="p">.</span><span class="nf">new</span><span class="p">(</span><span class="s1">'5cf6dd30093f96d2ac34bb0a'</span><span class="p">)</span>
    <span class="n">batch</span><span class="p">.</span><span class="nf">status</span>
    </code></pre>
      <pre class="highlight javascript tab-javascript" style="display: block;"><code><span class="kd">var</span> <span class="nx">id</span> <span class="o">=</span> <span class="s1">'5cf6dd30093f96d2ac34bb0a'</span><span class="p">;</span>
    <span class="nx">athenaevs</span><span class="p">.</span><span class="nx">batches</span><span class="p">.</span><span class="nx">status</span><span class="p">(</span><span class="nx">id</span><span class="p">)</span>
      <span class="p">.</span><span class="nx">then</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">response</span><span class="p">)</span> <span class="p">{</span>
        <span class="c1">// asynchronously called</span>
      <span class="p">});</span>
    </code></pre>
      <pre class="highlight python tab-python" style="display: none;"><code><span class="n">client</span><span class="o">.</span><span class="n">batch_status</span><span class="p">(</span><span class="s">'5cf6dd30093f96d2ac34bb0a'</span><span class="p">)</span>
    </code></pre>
      <blockquote>
        <p>If your batch is incomplete, a message will be returned, as well as the batch's progress if it is processing:
        </p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
      </span><span class="s2">"message"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Your batch is being processed."</span><span class="p">,</span><span class="w">
      </span><span class="s2">"processed"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
      </span><span class="s2">"total"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="w">
    </span><span class="p">}</span><span class="w">
    </span></code></pre>
      <blockquote>
        <p>If you choose to include partial results, you will get emails and counts in your response, even if the batch
          is still processing (keep an eye on total_counts.processed and total_counts.total for progress):</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
      </span><span class="s2">"message"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Your batch is being processed."</span><span class="p">,</span><span class="w">
      </span><span class="s2">"emails"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
        </span><span class="p">{</span><span class="w">
          </span><span class="s2">"accept_all"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"did_you_mean"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
          </span><span class="s2">"disposable"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"domain"</span><span class="p">:</span><span class="w"> </span><span class="s2">"gmail.com"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"email"</span><span class="p">:</span><span class="w"> </span><span class="s2">"john.smith@gmail.com"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"first_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"John"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"free"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
          </span><span class="s2">"full_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"John Smith"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"gender"</span><span class="p">:</span><span class="w"> </span><span class="s2">"male"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"last_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Smith"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"mailbox_full"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"mx_record"</span><span class="p">:</span><span class="w"> </span><span class="s2">"aspmx.l.google.com"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"no_reply"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"reason"</span><span class="p">:</span><span class="w"> </span><span class="s2">"accepted_email"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"role"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"score"</span><span class="p">:</span><span class="w"> </span><span class="mi">95</span><span class="p">,</span><span class="w">
          </span><span class="s2">"smtp_provider"</span><span class="p">:</span><span class="w"> </span><span class="s2">"google"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"state"</span><span class="p">:</span><span class="w"> </span><span class="s2">"deliverable"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"tag"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
          </span><span class="s2">"user"</span><span class="p">:</span><span class="w"> </span><span class="s2">"john.smith"</span><span class="w">
        </span><span class="p">}</span><span class="w">
      </span><span class="p">],</span><span class="w">
      </span><span class="s2">"id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"5cf6dd30093f96d2ac34bb0a"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"reason_counts"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="s2">"accepted_email"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
        </span><span class="s2">"invalid_domain"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"invalid_email"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"invalid_smtp"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"low_deliverability"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"low_quality"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"no_connect"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"rejected_email"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"timeout"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"unavailable_smtp"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"unexpected_error"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="s2">"total_counts"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="s2">"deliverable"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
        </span><span class="s2">"processed"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
        </span><span class="s2">"risky"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"total"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
        </span><span class="s2">"undeliverable"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"unknown"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="w">
      </span><span class="p">}</span><span class="w">
    </span></code></pre>
      <blockquote>
        <p>When the batch completes, it will be indicated in the message field, and the results will be returned.</p>
        <p>Up to 1,000 emails:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
      </span><span class="s2">"emails"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
        </span><span class="p">{</span><span class="w">
          </span><span class="s2">"accept_all"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"did_you_mean"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
          </span><span class="s2">"disposable"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"domain"</span><span class="p">:</span><span class="w"> </span><span class="s2">"gmail.com"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"email"</span><span class="p">:</span><span class="w"> </span><span class="s2">"john.smith@gmail.com"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"first_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"John"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"free"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
          </span><span class="s2">"full_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"John Smith"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"gender"</span><span class="p">:</span><span class="w"> </span><span class="s2">"male"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"last_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Smith"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"mailbox_full"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"mx_record"</span><span class="p">:</span><span class="w"> </span><span class="s2">"aspmx.l.google.com"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"no_reply"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"reason"</span><span class="p">:</span><span class="w"> </span><span class="s2">"accepted_email"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"role"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"score"</span><span class="p">:</span><span class="w"> </span><span class="mi">95</span><span class="p">,</span><span class="w">
          </span><span class="s2">"smtp_provider"</span><span class="p">:</span><span class="w"> </span><span class="s2">"google"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"state"</span><span class="p">:</span><span class="w"> </span><span class="s2">"deliverable"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"tag"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
          </span><span class="s2">"user"</span><span class="p">:</span><span class="w"> </span><span class="s2">"john.smith"</span><span class="w">
        </span><span class="p">},</span><span class="w">
        </span><span class="p">{</span><span class="w">
          </span><span class="s2">"accept_all"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"did_you_mean"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
          </span><span class="s2">"disposable"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"domain"</span><span class="p">:</span><span class="w"> </span><span class="s2">"smith.com"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"email"</span><span class="p">:</span><span class="w"> </span><span class="s2">"tim@smith.com"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"first_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Tim"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"free"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"full_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Tim"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"gender"</span><span class="p">:</span><span class="w"> </span><span class="s2">"male"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"last_name"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
          </span><span class="s2">"mailbox_full"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"mx_record"</span><span class="p">:</span><span class="w"> </span><span class="s2">"mx1.smith.com"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"no_reply"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"reason"</span><span class="p">:</span><span class="w"> </span><span class="s2">"accepted_email"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"role"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
          </span><span class="s2">"score"</span><span class="p">:</span><span class="w"> </span><span class="mi">100</span><span class="p">,</span><span class="w">
          </span><span class="s2">"smtp_provider"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
          </span><span class="s2">"state"</span><span class="p">:</span><span class="w"> </span><span class="s2">"deliverable"</span><span class="p">,</span><span class="w">
          </span><span class="s2">"tag"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
          </span><span class="s2">"user"</span><span class="p">:</span><span class="w"> </span><span class="s2">"tim"</span><span class="w">
        </span><span class="p">}</span><span class="w">
      </span><span class="p">],</span><span class="w">
      </span><span class="s2">"id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"5cf6dd30093f96d2ac34bb0a"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"message"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Batch verification completed."</span><span class="p">,</span><span class="w">
      </span><span class="s2">"reason_counts"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="s2">"accepted_email"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
        </span><span class="s2">"invalid_domain"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"invalid_email"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"invalid_smtp"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"low_deliverability"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"low_quality"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"no_connect"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"rejected_email"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"timeout"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"unavailable_smtp"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"unexpected_error"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="s2">"total_counts"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="s2">"deliverable"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
        </span><span class="s2">"processed"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
        </span><span class="s2">"risky"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"total"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
        </span><span class="s2">"undeliverable"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"unknown"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="w">
      </span><span class="p">}</span><span class="w">
    </span><span class="p">}</span><span class="w">
    </span></code></pre>
      <blockquote>
        <p>More than 1,000 emails:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
      </span><span class="s2">"id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"5cf6dd30093f96d2ac34bb0a"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"download_file"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://app.athenaevs-cdn.com/downloads/6284ee8ee1b8323ee12c201c/5cf6dd30093f96d2ac34bb0a.csv?X-Amz-Expires=3600&amp;X-Amz-Date=20220518T130252Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIA5FIXD2WWI62KKBML/20220518/us-east-1/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=7e38682a949082d7cc7e8e2bdc09973e0fdedd858de23061447af1a32ee65779"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"message"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Batch verification completed."</span><span class="p">,</span><span class="w">
      </span><span class="s2">"reason_counts"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="s2">"accepted_email"</span><span class="p">:</span><span class="w"> </span><span class="mi">20000</span><span class="p">,</span><span class="w">
        </span><span class="s2">"invalid_domain"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"invalid_email"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"invalid_smtp"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"low_deliverability"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"low_quality"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"no_connect"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"rejected_email"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"timeout"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"unavailable_smtp"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"unexpected_error"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="s2">"total_counts"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="s2">"deliverable"</span><span class="p">:</span><span class="w"> </span><span class="mi">20000</span><span class="p">,</span><span class="w">
        </span><span class="s2">"processed"</span><span class="p">:</span><span class="w"> </span><span class="mi">20000</span><span class="p">,</span><span class="w">
        </span><span class="s2">"risky"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"total"</span><span class="p">:</span><span class="w"> </span><span class="mi">20000</span><span class="p">,</span><span class="w">
        </span><span class="s2">"undeliverable"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="s2">"unknown"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="w">
      </span><span class="p">}</span><span class="w">
    </span><span class="p">}</span><span class="w">
    </span></code></pre>
      <p>GET requests to the batch endpoint will get the current status of the batch verification job specified in the
        <code>id</code> parameter.</p>
      <p>When a credit card transaction is necessary to obtain enough credits to verify a batch, billing related
        messages will be returned if there is an error. These will be sent with a 402 response code.</p>
      <p>When a test key is used, a random sample response will be returned for each email in the batch. Additionally,
        it is possible to simulate certain API responses when using a test key by utilizing the <code>simulate</code>
        parameter.</p>
      <h3 id="http-request-3">HTTP Request</h3>
      <p><code>GET https://{{ trans('messages.app_domain') }}/api/v1/batch-status</code></p>
      <h3 id="parameters-3">Parameters</h3>
      <table>
        <thead>
          <tr>
            <th>Parameter</th>
            <th>Required</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>id</td>
            <td>true</td>
            <td>The id of the batch.</td>
          </tr>
          <tr>
            <td>api_key</td>
            <td>true</td>
            <td>Your API key.</td>
          </tr>
          <tr>
            <td>partial</td>
            <td>false</td>
            <td>A boolean value indicating whether to include partial results when a batch is still verifying. This
              option is only available for batches with up to 1,000 emails. Defaults to false.</td>
          </tr>
          <tr>
            <td>simulate</td>
            <td>false</td>
            <td>Used to simulate certain responses from the API while using a test key. Valid options are
              <code>generic_error</code>, <code>importing</code>, <code>verifying</code>, and <code>paused</code>.</td>
          </tr>
        </tbody>
      </table>
      <h3 id="response-3">Response</h3>
      <p>By default, all fields will be returned for each email in the response. It is possible to limit the fields that
        are returned by specifying the <code>response_fields</code> parameter on batch creation. See the <a
          href="#parameters-2">batch creation parameters</a> for details.</p>
      <p>Depending on the size of your batch, the batch status endpoint will operate in one of two ways.</p>
      <h4 id="up-to-1-000-emails">Up to 1,000 emails</h4>
      <p>The response will include an <code>emails</code> key that will be an array containing responses for each email
        in the batch.</p>
      <p>After 30 days, the response will no longer return the <code>emails</code> key and their individual verification
        results. Only the aggregate counts for the batch will be returned.</p>
      <h4 id="over-1-000-emails">Over 1,000 emails</h4>
      <p>The response will include a <code>download_file</code> key. This will be a URL to a ZIP compressed CSV file
        that contains all of the responses for each email in the batch.</p>
      <p>After 5 days, the response will no longer return the <code>download_file</code> key. Only the aggregate counts
        for the batch will be returned.</p>
      <table>
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>message</td>
            <td>String</td>
            <td>A message about your batch.</td>
          </tr>
          <tr>
            <td>processed</td>
            <td>Integer</td>
            <td>The number of emails that have been verified in the batch.</td>
          </tr>
          <tr>
            <td>total</td>
            <td>Integer</td>
            <td>The total number of emails in your batch.</td>
          </tr>
          <tr>
            <td>emails</td>
            <td>Array</td>
            <td>An array containing responses for each email in the batch. This field will only be returned for batches
              up to 1,000 emails. (See <a href="#verify-an-email">single email verification</a> for more information on
              the response fields.)</td>
          </tr>
          <tr>
            <td>download_file</td>
            <td>String</td>
            <td>A URL for a ZIP compressed CSV file containing responses for each email in the batch. This field will
              only be returned for batches over 1,000 emails.</td>
          </tr>
          <tr>
            <td>id</td>
            <td>String</td>
            <td>The unique ID of the batch.</td>
          </tr>
          <tr>
            <td>reason_counts</td>
            <td>Hash</td>
            <td>A hash with one key per possible <code>reason</code> attribute. The values are integers representing the
              number of emails with that reason.</td>
          </tr>
          <tr>
            <td>total_counts</td>
            <td>Hash</td>
            <td>A hash with one key per possible <code>state</code> attribute. The values are integers representing the
              number of emails with that state. In addition to the <code>state</code> keys, <code>total_counts</code>
              also contains keys <code>processed</code> and <code>total</code>, with values indicating the number of
              emails in the batch.</td>
          </tr>
        </tbody>
      </table>
      <h2 id="test-email-addresses">Test email addresses</h2>
      <p>There are several email addresses that can be used to return specific attributes when using a test API key.
        These will only work with the verify endpoint, not the batch endpoint.</p>
      <table>
        <thead>
          <tr>
            <th>Email</th>
            <th>Response</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>deliverable@example.com</td>
            <td><code>state</code> will be <code>deliverable</code></td>
          </tr>
          <tr>
            <td>undeliverable@example.com</td>
            <td><code>state</code> will be <code>undeliverable</code></td>
          </tr>
          <tr>
            <td>risky@example.com</td>
            <td><code>state</code> will be <code>risky</code></td>
          </tr>
          <tr>
            <td>unknown@example.com</td>
            <td><code>state</code> will be <code>unknown</code></td>
          </tr>
          <tr>
            <td>role@example.com</td>
            <td><code>role</code> will be <code>true</code></td>
          </tr>
          <tr>
            <td>free@example.com</td>
            <td><code>free</code> will be <code>true</code></td>
          </tr>
          <tr>
            <td>accept-all@example.com</td>
            <td><code>accept_all</code> will be <code>true</code></td>
          </tr>
          <tr>
            <td>disposable@example.com</td>
            <td><code>disposable</code> will be <code>true</code></td>
          </tr>
          <tr>
            <td>slow@example.com</td>
            <td>returns a <code>249</code> status code</td>
          </tr>
        </tbody>
      </table>
      <h1 id="account">Account</h1>
      <h2 id="get-account-info">Get account info</h2>
      <pre class="highlight shell tab-shell" style="display: none;"><code>curl <span class="s2">"https://{{ trans('messages.app_domain') }}/api/v1/account?api_key=your_api_key"</span>
    </code></pre>
      <pre class="highlight ruby tab-ruby" style="display: none;"><code><span class="no">{{ trans('messages.app_name') }}</span><span class="p">.</span><span class="nf">account</span>
    </code></pre>
      <pre class="highlight javascript tab-javascript" style="display: block;"><code><span class="nx">athenaevs</span><span class="p">.</span><span class="nx">account</span><span class="p">()</span>
      <span class="p">.</span><span class="nx">then</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">response</span><span class="p">)</span> <span class="p">{</span>
        <span class="c1">// asynchronously called</span>
      <span class="p">});</span>
    </code></pre>
      <pre class="highlight python tab-python" style="display: none;"><code><span class="n">client</span><span class="o">.</span><span class="n">account</span><span class="p">()</span>
    </code></pre>
      <blockquote>
        <p>The above command returns JSON structured like this:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
      </span><span class="s2">"owner_email"</span><span class="p">:</span><span class="w"> </span><span class="s2">"john@smith.com"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"available_credits"</span><span class="p">:</span><span class="w"> </span><span class="mi">1337</span><span class="w">
    </span><span class="p">}</span><span class="w">
    </span></code></pre>
      <p>Get general account information like the email of the account owner and available credits.</p>
      <h3 id="http-request">HTTP Request</h3>
      <p><code>GET https://{{ trans('messages.app_domain') }}/api/v1/account</code></p>
      <h3 id="parameters">Parameters</h3>
      <table>
        <thead>
          <tr>
            <th>Parameter</th>
            <th>Required</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>api_key</td>
            <td>true</td>
            <td>Your API key.</td>
          </tr>
        </tbody>
      </table>
      <h3 id="response">Response</h3>
      <table>
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>owner_email</td>
            <td>String</td>
            <td>The email of the account owner.</td>
          </tr>
          <tr>
            <td>available_credits</td>
            <td>Integer</td>
            <td>The amount of credits remaining on the account.</td>
          </tr>
        </tbody>
      </table>
      <h1 id="widget">Widget</h1>
      <p>Using our widget is the easiest way to get email verification integrated into your existing website. Just
        install our embed code and we'll do the rest.</p>
      <h2 id="install-the-embed-code">Install the embed code</h2>
      <p>Click <a
          href="https://app.{{ trans('messages.app_name') }}/api?utm_source=api-docs&amp;utm_medium=web&amp;utm_campaign=widget">here</a>
        to go to the API page. Click "New Key" and create a Public API key. After you select Public, you will see an
        input for Trusted Domains. Be sure to enter the domain(s) that you will be installing the embed code on.</p>
      <p>For the security of your account, Public API Keys are restricted to 10 unique verifications per day per IP
        Address. All requests sent after the limit is reached will fail with a 429 status code response. If you need to
        do more extensive testing please make sure you use a Test Key which does not have this limit.</p>
      <p>Once you have an API key, install the code and we'll begin verifying any input with the type email.</p>
      <aside class="notice"> You must replace <code>your_api_key</code> with your API key. </aside>
      <div class="center-column"></div>
      <pre class="highlight html tab-html"><code><span class="nt">&lt;script&gt;</span>
      <span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">w</span><span class="p">,</span> <span class="nx">d</span><span class="p">,</span> <span class="nx">ns</span><span class="p">)</span> <span class="p">{</span>
        <span class="nx">w</span><span class="p">[</span><span class="s1">'{{ trans('messages.app_name') }}Object'</span><span class="p">]</span> <span class="o">=</span> <span class="nx">ns</span><span class="p">;</span>
        <span class="nx">w</span><span class="p">[</span><span class="nx">ns</span><span class="p">]</span> <span class="o">=</span> <span class="nx">w</span><span class="p">[</span><span class="nx">ns</span><span class="p">]</span> <span class="o">||</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span> <span class="p">(</span><span class="nx">w</span><span class="p">[</span><span class="nx">ns</span><span class="p">].</span><span class="nx">q</span> <span class="o">=</span> <span class="nx">w</span><span class="p">[</span><span class="nx">ns</span><span class="p">].</span><span class="nx">q</span> <span class="o">||</span> <span class="p">[]).</span><span class="nx">push</span><span class="p">(</span><span class="nx">arguments</span><span class="p">)</span> <span class="p">},</span>
        <span class="nx">s</span> <span class="o">=</span> <span class="nx">d</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="s1">'script'</span><span class="p">),</span> <span class="nx">fs</span> <span class="o">=</span> <span class="nx">d</span><span class="p">.</span><span class="nx">getElementsByTagName</span><span class="p">(</span><span class="s1">'script'</span><span class="p">)[</span><span class="mi">0</span><span class="p">];</span>
        <span class="nx">s</span><span class="p">.</span><span class="nx">async</span> <span class="o">=</span> <span class="mi">1</span><span class="p">;</span> <span class="nx">s</span><span class="p">.</span><span class="nx">src</span> <span class="o">=</span> <span class="s1">'https://js.{{ trans('messages.app_domain') }}/v2/'</span><span class="p">;</span>
        <span class="nx">fs</span><span class="p">.</span><span class="nx">parentNode</span><span class="p">.</span><span class="nx">insertBefore</span><span class="p">(</span><span class="nx">s</span><span class="p">,</span> <span class="nx">fs</span><span class="p">)</span>
      <span class="p">})(</span><span class="nb">window</span><span class="p">,</span> <span class="nb">document</span><span class="p">,</span> <span class="s1">'athenaevs'</span><span class="p">);</span>
    
      <span class="nx">athenaevs</span><span class="p">(</span><span class="s1">'apiKey'</span><span class="p">,</span> <span class="s1">'your_api_key'</span><span class="p">);</span>
    <span class="nt">&lt;/script&gt;</span>
    </code></pre>
      <h2 id="configuration-options">Configuration Options</h2>
      <p>Using our configuration options, you can customize the email attributes you'd like to allow, which inputs we'll
        monitor, and more. The default configuration options are below.</p>
      <div class="center-column"></div>
      <pre class="highlight html tab-html"><code><span class="nt">&lt;script&gt;</span>
      <span class="c1">// types of emails that are allowed</span>
      <span class="nx">athenaevs</span><span class="p">(</span><span class="s1">'allow'</span><span class="p">,</span> <span class="p">{</span>
        <span class="na">states</span><span class="p">:</span> <span class="p">[</span><span class="s1">'deliverable'</span><span class="p">,</span> <span class="s1">'risky'</span><span class="p">,</span> <span class="s1">'unknown'</span><span class="p">],</span>
        <span class="na">free</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
        <span class="na">role</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
        <span class="na">disposable</span><span class="p">:</span> <span class="kc">false</span>
      <span class="p">});</span>
    
      <span class="c1">// maximum time to wait for the verification to respond. some mail servers</span>
      <span class="c1">// are slow and we don't want to hold the user up for too long.</span>
      <span class="nx">athenaevs</span><span class="p">(</span><span class="s1">'verificationTimeout'</span><span class="p">,</span> <span class="mi">5</span><span class="p">);</span>
    
      <span class="c1">// how long to wait after a user stops typing to verify the email</span>
      <span class="nx">athenaevs</span><span class="p">(</span><span class="s1">'verifyAfterDelay'</span><span class="p">,</span> <span class="mi">1000</span><span class="p">);</span>
    
      <span class="c1">// enable form validation messages</span>
      <span class="c1">// this will also remove the novalidate attribute from forms with one</span>
      <span class="nx">athenaevs</span><span class="p">(</span><span class="s1">'formValidation'</span><span class="p">,</span> <span class="kc">true</span><span class="p">);</span>
    
      <span class="c1">// this is the selector for the inputs we will monitor</span>
      <span class="nx">athenaevs</span><span class="p">(</span><span class="s1">'inputSelector'</span><span class="p">,</span> <span class="s1">'input[type=email]'</span><span class="p">);</span>
    
      <span class="c1">// array of form names to ignore</span>
      <span class="nx">athenaevs</span><span class="p">(</span><span class="s1">'ignoredForms'</span><span class="p">,</span> <span class="p">[]);</span>
    
      <span class="c1">// array of input names to ignore</span>
      <span class="nx">athenaevs</span><span class="p">(</span><span class="s1">'ignoredInputs'</span><span class="p">,</span> <span class="p">[]);</span>
    
      <span class="c1">// users who enter 10+ emails will be rate-limited by our servers.</span>
      <span class="c1">// when set to true the user will get the rateLimited message.</span>
      <span class="nx">athenaevs</span><span class="p">(</span><span class="s1">'blockOnRateLimit'</span><span class="p">,</span> <span class="kc">false</span><span class="p">)</span>
    
      <span class="c1">// the parent element to append the status element to. can be an element or</span>
      <span class="c1">// CSS identifier.</span>
      <span class="nx">athenaevs</span><span class="p">(</span><span class="s1">'statusAppendTo'</span><span class="p">,</span> <span class="s1">'body'</span><span class="p">)</span>
    
      <span class="c1">// styles</span>
      <span class="nx">athenaevs</span><span class="p">(</span><span class="s1">'style'</span><span class="p">,</span> <span class="p">{</span>
        <span class="na">loadingIconColor</span><span class="p">:</span> <span class="s1">'rgba(0, 0, 0, 0.3)'</span>
      <span class="p">});</span>
    
      <span class="c1">// messages</span>
      <span class="nx">athenaevs</span><span class="p">(</span><span class="s1">'messages'</span><span class="p">,</span> <span class="p">{</span>
        <span class="na">verifying</span><span class="p">:</span> <span class="s2">"Please wait a moment while we verify your email address."</span><span class="p">,</span>
        <span class="na">invalid</span><span class="p">:</span> <span class="s2">"It looks like you've entered an invalid email address."</span><span class="p">,</span>
        <span class="na">role</span><span class="p">:</span> <span class="s2">"It looks like you've entered a role or group email address."</span><span class="p">,</span>
        <span class="na">free</span><span class="p">:</span> <span class="s2">"It looks like you've entered a free email address."</span><span class="p">,</span>
        <span class="na">disposable</span><span class="p">:</span> <span class="s2">"It looks like you've entered a disposable email."</span><span class="p">,</span>
        <span class="na">didYouMean</span><span class="p">:</span> <span class="s2">"It looks like you've entered an invalid email address. Did you mean [EMAIL]?"</span><span class="p">,</span>
        <span class="na">rateLimited</span><span class="p">:</span> <span class="s2">"It looks like you've attempted to enter too many emails."</span>
      <span class="p">});</span>
    <span class="nt">&lt;/script&gt;</span>
    </code></pre>
      <h2 id="event-listener">Event Listener</h2>
      <p>Our event listeners will give you the ability to take specific actions once the verification has completed.</p>
      <h3 id="verified-event">Verified Event</h3>
      <div class="center-column"></div>
      <pre class="highlight html tab-html"><code><span class="nt">&lt;script&gt;</span>
    <span class="c1">// example event listener</span>
    <span class="nx">$</span><span class="p">(</span><span class="s1">'input'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'verified'</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">event</span><span class="p">)</span> <span class="p">{</span>
      <span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">event</span><span class="p">.</span><span class="nx">detail</span><span class="p">);</span>
      <span class="cm">/*
      {
        accepted: false,
        message: "It looks like you've entered an invalid email address.",
        verificationData: {
          body: "{"accept_all":false,"did_you_mean":null,"disposable":false,"domain":"gmail.com",...",
          status: 200
        }
      }
      */</span>
    <span class="p">});</span>
    <span class="nt">&lt;/script&gt;</span>
    </code></pre>
      <h3 id="error-event">Error Event</h3>
      <div class="center-column"></div>
      <pre class="highlight html tab-html"><code><span class="nt">&lt;script&gt;</span>
    <span class="c1">// example event listener</span>
    <span class="nx">$</span><span class="p">(</span><span class="s1">'input'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'error'</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">event</span><span class="p">)</span> <span class="p">{</span>
      <span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">event</span><span class="p">.</span><span class="nx">detail</span><span class="p">);</span>
      <span class="cm">/*
      {
        status: 429,
        message: 'Rate limit reached'
      }
      */</span>
    <span class="p">});</span>
    <span class="nt">&lt;/script&gt;</span>
    </code></pre>
      <h1 id="rate-limits">Rate Limits</h1>
      <pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
      </span><span class="s2">"message"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Rate Limit Exceeded"</span><span class="w">
    </span><span class="p">}</span><span class="w">
    </span></code></pre>
      <blockquote>
        <p>When rate limits are exceeded, the 429 <a href="#status-codes">status code</a> will be returned.</p>
      </blockquote>
      <p>There are different rate limits for different API endpoints. These rate limits are shown below. Enterprise
        accounts may request higher rate limits.</p>
      <table>
        <thead>
          <tr>
            <th>Endpoint</th>
            <th>Method</th>
            <th>Rate Limit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>/v1/account</td>
            <td>GET/POST</td>
            <td>5 per second</td>
          </tr>
          <tr>
            <td>/v1/batch</td>
            <td>POST</td>
            <td>5 per second</td>
          </tr>
          <tr>
            <td>/v1/batch</td>
            <td>GET</td>
            <td>5 per second</td>
          </tr>
          <tr>
            <td>/v1/verify</td>
            <td>GET/POST</td>
            <td>25 per second</td>
          </tr>
        </tbody>
      </table>
      <h1 id="status-codes">Status Codes</h1>
      <pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
      </span><span class="s2">"message"</span><span class="p">:</span><span class="w"> </span><span class="s2">"API key is required"</span><span class="w">
    </span><span class="p">}</span><span class="w">
    </span></code></pre>
      <p>The {{ trans('messages.app_name') }} API uses the following status codes:</p>
      <table>
        <thead>
          <tr>
            <th>Code</th>
            <th>Response</th>
            <th>Meaning</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>249</td>
            <td>Try Again</td>
            <td>Your request is taking longer than normal. Please send your request again.</td>
          </tr>
          <tr>
            <td>400</td>
            <td>Bad Request</td>
            <td>Your request is structured incorrectly.</td>
          </tr>
          <tr>
            <td>401</td>
            <td>Unauthorized</td>
            <td>You did not send an API key.</td>
          </tr>
          <tr>
            <td>402</td>
            <td>Payment Required</td>
            <td>You don't have enough credits to complete this request.</td>
          </tr>
          <tr>
            <td>403</td>
            <td>Forbidden</td>
            <td>Your API key is invalid.</td>
          </tr>
          <tr>
            <td>404</td>
            <td>Not Found</td>
            <td>The specified resource does not exist.</td>
          </tr>
          <tr>
            <td>429</td>
            <td>Too Many Requests</td>
            <td>You're requesting an endpoint too often.</td>
          </tr>
          <tr>
            <td>500</td>
            <td>Internal Server Error</td>
            <td>A server error occurred. Please try again later, or contact support if you're having trouble.</td>
          </tr>
          <tr>
            <td>503</td>
            <td>Service Unavailable</td>
            <td>We're temporarily offline for maintenance. Please try again later.</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="dark-box">
      <div class="lang-selector"> <a href="#" data-language-name="shell" class="">cURL</a> <a href="#"
          data-language-name="ruby" class="">ruby</a> <a href="#" data-language-name="javascript"
          class="active">node</a> <a href="#" data-language-name="python">python</a> </div>
    </div>
  </div>
  <script
    type="text/javascript">window.$crisp = []; window.CRISP_WEBSITE_ID = "4520e27f-23f2-4812-a391-a7463cd02d54"; (function () { d = document; s = d.createElement("script"); s.src = "https://client.crisp.chat/l.js"; s.async = 1; d.getElementsByTagName("head")[0].appendChild(s); })();</script>
  <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'8a6a7a251fc08594',t:'MTcyMTU1NzQyMy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
  <iframe height="1" width="1"
    style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>
  <script defer=""
    src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon="{&quot;rayId&quot;:&quot;8a6a7a251fc08594&quot;,&quot;serverTiming&quot;:{&quot;name&quot;:{&quot;cfL4&quot;:true}},&quot;version&quot;:&quot;2024.7.0&quot;,&quot;token&quot;:&quot;ba2e2f5d1a3142548dfdf54a82df0d12&quot;}"
    crossorigin="anonymous"></script>
  <div aria-live="polite" class="crisp-client">
    <div class="cc-rukbw">
      <div class="cc-9yvsj">
        <style type="text/css">
          .crisp-client *:focus-visible {
            outline-color: #3f307f !important;
          }

          .crisp-client .cc-1brb6 .cc-co79q {
            color: #FFFFFF !important;
          }

          .crisp-client .cc-1brb6 .cc-1dvce {
            color: #7e61ff !important;
          }

          .crisp-client .cc-1brb6 .cc-5t1tm {
            background-color: #FFFFFF !important;
          }

          .crisp-client .cc-1brb6 .cc-1q2sq {
            background-color: #3f307f !important;
          }

          .crisp-client .cc-1brb6 .cc-62iw4 {
            background-color: #6b52d8 !important;
          }

          .crisp-client .cc-1brb6 .cc-1kgzy {
            background-color: #7e61ff !important;
          }

          .crisp-client .cc-1brb6 .cc-1kgzy *:focus-visible {
            outline-color: #F0F2F5 !important;
          }

          .crisp-client .cc-1brb6 .cc-m59gn {
            background-color: #F6F5FA !important;
          }

          .crisp-client .cc-1brb6 .cc-jtuj4 {
            background-color: #F0F2F5 !important;
          }

          .crisp-client .cc-1brb6 .cc-1ikmr {
            border-color: #FFFFFF !important;
          }

          .crisp-client .cc-1brb6 .cc-1i61z,
          .crisp-client .cc-1brb6 .cc-134r8:hover {
            border-color: #7e61ff !important;
          }

          .crisp-client .cc-1brb6 .cc-un6tk {
            border-color: rgba(126, 97, 255, 0.2) !important;
          }

          .crisp-client .cc-1brb6 .cc-weiiy {
            border-bottom-color: #7e61ff !important;
          }

          .crisp-client .cc-1brb6 .cc-18tkz::placeholder {
            color: #8e6dff !important;
          }

          .crisp-client .cc-1brb6 .cc-10xgc::placeholder {
            color: #8e6dff !important;
          }

          .crisp-client .cc-1brb6 .cc-y2afy,
          .crisp-client .cc-1brb6 .cc-y2afy:active,
          .crisp-client .cc-1brb6 .cc-1swm7:hover .cc-17cww,
          .crisp-client .cc-1brb6 .cc-1swm7 .cc-17cww:active {
            background: #3f307f !important;
          }

          .crisp-client .cc-1brb6 .cc-coh7k,
          .crisp-client .cc-1brb6 .cc-1cx9a:hover,
          .crisp-client .cc-1brb6 .cc-1xhex[data-active="true"] .cc-ydjl9 {
            background: #5e48bf !important;
          }

          .crisp-client .cc-1brb6 .cc-y2afy:hover,
          .crisp-client .cc-1brb6 .cc-coh7k:hover,
          .crisp-client .cc-1brb6 .cc-1cx9a:active {
            background: #513fa5 !important;
          }

          .crisp-client .cc-1brb6 .cc-coh7k:active {
            background: #3f307f !important;
          }

          .crisp-client .cc-1brb6 .cc-aoc5z:hover .cc-fajgc {
            background: #5e48bf !important;
          }

          .crisp-client .cc-1brb6 .cc-aoc5z .cc-fajgc:active {
            background: #513fa5 !important;
          }

          .crisp-client .cc-1brb6 .cc-f5i1a,
          .crisp-client .cc-1brb6 .cc-70ynx:hover .cc-iuh54,
          .crisp-client .cc-1brb6 .cc-70ynx .cc-iuh54:active {
            background: #7e61ff !important;
          }

          .crisp-client .cc-1brb6 .cc-f5i1a:hover {
            background: #6b52d8 !important;
          }

          .crisp-client .cc-1brb6 .cc-f5i1a:active {
            background: #5e48bf !important;
          }

          .crisp-client .cc-1brb6 .cc-vibqn::selection,
          .crisp-client .cc-1brb6 .cc-vibqn *::selection {
            color: #1c293b !important;
            background-color: #8f6eff !important;
          }
        </style>
      </div>
      <div class="cc-k4lmp">
        <style type="text/css">
          .crisp-client .cc-1brb6 {
            z-index: 1000000;
          }
        </style>
      </div>
    </div>
    <div id="crisp-chatbox" lang="en" dir="ltr" translate="no" tabindex="-1" class="cc-1brb6" data-hidden="false"
      data-force-show="false" data-color-mode="light" data-availability="away" data-lock-maximized="false"
      data-website-logo="false" data-last-operator-face="false" data-ongoing-operator-face="false"
      data-availability-tooltip="false" data-hide-vacation="false" data-blocked="false" data-mobile-view="false"
      data-full-view="true" data-small-view="true" data-large-view="false" data-has-local-messages="false"
      data-was-availability-online="false" data-is-activity-ongoing="false" data-hide-on-away="false"
      data-hide-on-mobile="false" data-position-reverse="false">
      <div class="cc-1yy0g cc-1wive cc-vibqn"><a data-maximized="false" data-is-failure="false" class="cc-1m2mf"
          tabindex="0" role="button" aria-label="Open chat" data-pane-animate-entrance="false"
          data-pop="minimized:open"><span class="cc-6lwfw"><!--v-if--></span><span class="cc-157aw cc-1kgzy"><span
              data-id="chat_closed" data-is-ongoing="false" class="cc-d73fc"><span
                class="cc-1bvfm cc-hshc7"><!--v-if--></span></span></span></a></div>
    </div>
  </div>
</body>

</html>