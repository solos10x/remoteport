<?php ob_start();?>
<?php session_start() ;?>
<?php 
include("connect.php");

// contact us
    $err="";
  if (isset($_POST['sendmsg'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $company=$_POST['company'];
    $address=$_POST['address'];
    $ric=$_POST['ric'];
    // insert the info into the database
    $qry=mysqli_query($config, "INSERT INTO request(name,email,company,address,ric,regdate) VALUES ('$name','$email','$company','$address','$ric',now() ) ");
    if (mysqli_affected_rows($config)>0) {
      $err='<p style="background-color: green;"> Your request has been sent  successfully!</p>';
    }else{$err='<div class="alert alert-danger text-center p-2 mb-2 mt-1"> Unable to send message at this time </div>';}
  }

;?>

<!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com -->
<!-- Last Published: Wed Apr 27 2022 11:18:32 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="www.remoteport.com" data-wf-page="61ffb9bf6c9c4f20bf87f222"
  data-wf-site="60e6dc45a4d62517ed5a669f" data-wf-status="1">
<!-- Mirrored from www.remotepass.com/remote-team by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 18:11:36 GMT -->

<head>
  <meta charset="utf-8" />
  <title>RemotePort | Work Remote and Get paid anywhere</title>
  <meta
    content="RemotePort makes it easy to hire, onboard &amp; pay your global team in full compliance, giving you everything you need to support them"
    name="description" />
  <meta content="RemotePort | Work Remote and Get paid anywhere" property="og:title" />
  <meta
    content="RemotePort makes it easy to hire, onboard &amp; pay your global team in full compliance, giving you everything you need to support them"
    property="og:description" />
  <meta
    content="https://assets.website-files.com/60e6dc45a4d62517ed5a669f/61377d6862c3a357d6db0ab7_remotepass-sharer.png"
    property="og:image" />
  <meta content="RemotePort | Work Remote and Get paid anywhere" property="twitter:title" />
  <meta
    content="RemotePort makes it easy to hire, onboard &amp; pay your global team in full compliance, giving you everything you need to support them"
    property="twitter:description" />
  <meta
    content="https://assets.website-files.com/60e6dc45a4d62517ed5a669f/61377d6862c3a357d6db0ab7_remotepass-sharer.png"
    property="twitter:image" />
  <meta property="og:type" content="website" />
  <meta content="summary_large_image" name="twitter:card" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="uEiKPKpzG90qxEJFNenpmD9k_sq7tkv25y8xLmjcuG8" name="google-site-verification" />
  <meta content="Webflow" name="generator" />
  <link href="../assets.website-files.com/60e6dc45a4d62517ed5a669f/css/remotepass-v2.webflow.eaaf37add.css"
    rel="stylesheet" type="text/css" />
  <script src="../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script
    type="text/javascript">WebFont.load({ google: { families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Inter:regular,500,600,700,800,900"] } });</script>
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
  <link href="../assets.website-files.com/60e6dc45a4d62517ed5a669f/61323ef0895fd0345442c518_ofavicon.png"
    rel="shortcut icon" type="image/x-icon" />
  <link href="../assets.website-files.com/60e6dc45a4d62517ed5a669f/61323f2e1a35c94c4716ecb1_favicon.png"
    rel="apple-touch-icon" />
  <link href="remote-team.html" rel="canonical" />
  <script
    type="text/javascript">!function (f, b, e, v, n, t, s) { if (f.fbq) return; n = f.fbq = function () { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments) }; if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0'; n.agent = 'plwebflow'; n.queue = []; t = b.createElement(e); t.async = !0; t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s) }(window, document, 'script', '../connect.facebook.net/en_US/fbevents.js'); fbq('init', '290249389277443'); fbq('track', 'PageView');</script>
  <script type="text/javascript">
    _linkedin_partner_id = "2715746";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
  </script>
  <script type="fs-cc" fs-cc-categories="marketing">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "../snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
  <!-- Finsweet Cookie Consent -->
  <script async src="../cdn.jsdelivr.net/npm/%40finsweet/cookie-consent%401/fs-cc.js" fs-cc-mode="opt-in"></script>

  <link rel="stylesheet" href="../unpkg.com/swiper%408.1.4/swiper-bundle.min.css">
  <script src="../unpkg.com/swiper%408.1.4/swiper-bundle.min.js"></script>
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          '../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KBBM9MP');</script>
  <!-- End Google Tag Manager -->

  <meta name="facebook-domain-verification" content="cwz2373lqzrtz86tvpcm8oz13ba4en" />

  <script>
    var Webflow = Webflow || [];

    Webflow.push(function () {

      $(document).ready(function () {

        $src = null;

        /*__ reset iframe source __*/
        $(".video-palyer-modal iframe").attr("src", $src);

        /*__ video-palyer btn click __*/
        $(document).on("click", ".video-player", function () {
          $src = $(this).attr("alt");
          var regExp = /^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
          var match = $src.match(regExp);
          if (match && match[2].length == 11) {
            $src = "https://www.youtube.com/embed/" + match[2];
          } else {
            $src = String($src).replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/");
          }
          console.log("src regExp =>", $src);
          $(".video-palyer-modal").css("display", "flex");
          $(".video-palyer-modal").css("opacity", 0);
          setTimeout(function () {
            $(".video-palyer-modal").css({ "opacity": 1, "transition": "opacity .25s ease-in" });
          }, .25);
          $(".video-palyer-modal iframe").attr("src", $src + "?autoplay=1&mute=0");
          $(".video-palyer-modal iframe").attr("allow", "autoplay; encrypted-media");
          $(".video-palyer-modal iframe").attr("allowfullscreen", "true");

        });

        /*__ player-mask click __*/
        $(document).on("click", ".player-mask", function () {
          $(this).find(".video-player").trigger("click");
        });

        /*__ video-palyer-modal btn click __*/
        $(document).on("click", ".video-palyer-modal", function () {
          $(".video-palyer-modal").css("display", "none");
          $(".video-palyer-modal").css("opacity", 0);
          $(".video-palyer-modal iframe").attr("src", $src);
        });

        /*__ video-palyer-modal iframe click stop propagation __*/
        $(document).on("click", ".video-palyer-modal iframe", function (event) {
          event.preventDefault();
        });

        /*__ more_integration btn click __*/
        $(document).on("click", ".more_intergrations", function () {
          $(".integration_item").css("display", "flex");
          $(this).css("display", "none");
        });

        /*********************************/

        /*__ max integration_item __*/

        var heights = $(".integration_item").map(function () {
          return $(this).height();
        }).get();
        maxHeight = Math.max.apply(null, heights);

        $(".integration_item").css({ "display": "none", "opacity": 1, "min-height": maxHeight + "px" });
        $(".more_intergrations").css("display", "flex");


        if ($(".integration_item").length > 2) {

          $(".integration_item").each(function (ind) {
            if (ind < 2) {
              $(this).css("display", "flex");
            }
          })

        } else {
          $(".integration_item").css("display", "flex");
        }

        $(".intergrations-container").css({ "opacity": "1", "transition": "opacity .25s ease-in" });

      });

      /*__ max video-item-container __*/

      function maxHeightCal(elm) {
        var maxHeight = Math.max.apply(null, $(elm).map(function () {
          return $(this).height();
        }).get());
        $(elm).css("cssText", "min-height:" + maxHeight + "px");
      }

      maxHeightCal(".video-item-container");

      $(window).resize(function () {
        maxHeightCal(".video-item-container");
      });

    });
  </script>

  <script
    type="text/javascript">window.__WEBFLOW_CURRENCY_SETTINGS = { "currencyCode": "USD", "$init": true, "symbol": "$", "decimal": ".", "fractionDigits": 2, "group": ",", "template": "{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}", "hideDecimalForWholeNumbers": false };</script>
</head>

<body class="rp-body">
  <div class="custom-css w-embed">
    <style>
      @media (min-width:1300px) {

        .rp-body {
          font-size: 13px !important;
        }

      }
    </style>
  </div>
  <div data-collapse="small" data-animation="default" data-duration="400"
    data-w-id="f2a61599-68be-f6e8-819b-a81fa29d9e09" data-easing="ease" data-easing2="ease" role="banner"
    class="rp-navbar rp-nav-container-align w-nav" style="background-color: #fff;">
    <div class="rp-container rp-nav-container rp-nav-container-align">
      <div class="mb-flx-h">
        <div class="menu-button w-nav-button"><img
            src="../assets.website-files.com/60e6dc45a4d62517ed5a669f/logo.png"
            loading="lazy" alt="" /></div><a href="index.html" class="w-nav-brand"><img
            src="../assets.website-files.com/60e6dc45a4d62517ed5a669f/logo.png"
            loading="lazy" alt="" class="rp-logo" /><img
            src="../assets.website-files.com/60e6dc45a4d62517ed5a669f/logo.png"5
            loading="lazy" alt="" class="mb-only" /></a>
      </div>
      <nav role="navigation" class="rp-nav-menu w-nav-menu">
        <a href="why-remotepass.html" class="rp-nav-link w-nav-link">Why RemotePort?</a>
        <a href="remote-team.html"  class="rp-nav-link w-nav-link">Remote Teams</a>
          <a href="pricing.html" class="rp-nav-link w-nav-link">Pricing</a>
          <a href="integrations.html" class="rp-nav-link w-nav-link">Integrations</a>
          <a href="equipment-request.html" class="rp-nav-link w-nav-link">Equipment Request</a>
        
      </nav>
      <div class="nav-btn-group"><a href="demo-request.html" class="btn nav-btn w-button">Get started</a>
      </div>
    </div>
  </div>
  <div class="section contact-v1-section wf-section">
    <div class="container flex">
      <div class="w-layout-grid _2_col_grid contact-v1">
        <div class="contact-content">
          <form data-name="Contact-Form-V1"  method="POST" class="form-magnitt">
            <div class="h2_wrapper contact_h2_wrapper">
              <h1 class="heading-21">Request  Equipment </h1>
              <div class="h_div"> </div>
              <?php echo $err;?>
            </div>
              <input type="text" class="form_field w-input"  name="name"  placeholder="Full Name"  required />
              <input type="email" class="form_field w-input"   name="email" placeholder="Email Address"  required />
              <input type="text" class="form_field w-input"   name="address" placeholder="Contact Address"  required />
              <input type="text" class="form_field w-input"   name="company" placeholder="Company Reference ID"  required />
              <input type="text" class="form_field w-input"   name="ric" placeholder="Request Initialization Code (RIC number) "  required />

              <button name="sendmsg" class="button top-margin-20px w-button"> Track Equipment  </button>
          </form>
        </div>
        <div id="Contact-Form-V1" class="contact-form-v1 w-form">
          
          <div class="success-message w-form-done">
            <div class="success_message_text">Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="rp-body">
    <div class="rp-section footer wf-section">
      <div class="rp-container">
        <div class="w-layout-grid footer-links">
          <div>
            <div class="f16-semi">Company</div>
            <div class="mt2">  <a
                href="demo-request.html" class="rp-footer-link">Contact Us</a></div>
          </div>
          <div>
            <div class="f16-semi">Product</div>
            <div class="mt2"><a href="why-remotepass.html" class="rp-footer-link">Why RemotePass?</a><a
                href="remote-team.html" class="rp-footer-link">Remote Teams</a><a href="pricing.html"
                class="rp-footer-link">Pricing</a><a href="integrations.html" class="rp-footer-link">Integrations</a>
            </div>
          </div>
          <div>
             
          </div>
          <div>
            <div class="f16-semi">Legal</div>
            <div class="mt2"><a href="terms.html" class="rp-footer-link">Terms of Service</a><a href="privacy.html"
                class="rp-footer-link">Privacy Policy</a><a href="policy.html" class="rp-footer-link">Acceptable Use
                Policy</a></div>
          </div>
          <div id="w-node-_039897d4-db31-d7d1-41db-bb11a97885e3-a97885b4">
            <div class="f16-semi">From blog</div>
            <div class="mt2">
              <div class="w-dyn-list">
                <div role="list" class="w-dyn-items">
                  <div role="listitem" class="w-dyn-item"><a
                      href="blog/how-to-manage-teams-acrosscultures-in-2022-and-beyond"
                      class="rp-footer-link from-blog">How to Manage Teams Across Cultures in 2022 and Beyond</a></div>
                  <div role="listitem" class="w-dyn-item"><a
                      href="blog/remote-hiring-for-2022-tips-best-practices-and-software-to-use.html"
                      class="rp-footer-link from-blog">Remote Hiring for 2022: Tips, Best Practices and Software to
                      Use</a></div>
                  <div role="listitem" class="w-dyn-item"><a
                      href="blog/venywhere-remote-workers-dream-to-live-in-venice.html"
                      class="rp-footer-link from-blog">Venywhere: Remote worker’s dream to live in Venice</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="flx-h-ctr mb-flx-v auto-w"><img
              src="../assets.website-files.com/60e6dc45a4d62517ed5a669f/logo.png"
              loading="lazy" alt="" class="footer-logo" />
            <div class="ml2 mb-m0">  © 2022 RemotePort. All rights reserved</div>
          </div>
            
        </div>
      </div>
      <div class="cookies-root">
        <div fs-cc="banner" class="fs-cc-banner_component">
          <div class="fs-cc-banner_container">
            <div class="fs-cc-banner_text">By clicking <strong>“Accept All Cookies”</strong>, you agree to the storing
              of cookies on your device to enhance site navigation, analyze site usage, and assist in our marketing
              efforts. View our <a href="privacy.html" class="fs-cc-banner_text-link">Privacy Policy</a> for more
              information.</div>
            <div class="fs-cc-banner_buttons-wrapper"><a href="cookie.html"
                class="fs-cc-banner_text-link">Preferences</a><a fs-cc="deny" href="#"
                class="fs-cc-banner_button fs-cc-button-alt w-button">Deny</a><a fs-cc="allow" href="#"
                class="fs-cc-banner_button w-button">Accept</a>
              <div fs-cc="close" class="fs-cc-banner_close">
                <div class="fs-cc-banner_close-icon w-embed"><svg fill="currentColor" aria-hidden="true"
                    focusable="false" viewBox="0 0 16 16">
                    <path
                      d="M9.414 8l4.293-4.293-1.414-1.414L8 6.586 3.707 2.293 2.293 3.707 6.586 8l-4.293 4.293 1.414 1.414L8 9.414l4.293 4.293 1.414-1.414L9.414 8z">
                    </path>
                  </svg></div>
              </div>
            </div>
          </div>
          <div fs-cc="interaction" class="fs-cc-banner_trigger"></div>
        </div>
        <div fs-cc="manager" class="fs-cc-manager_component-copy">
          <div fs-cc="open-preferences" class="fs-cc-manager_button">
            <div class="fs-cc-manager_icon w-embed"><svg viewBox="0 0 54 54" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                  <path
                    d="M52.631 30.3899C52.229 30.4443 51.8161 30.4769 51.3924 30.4769C47.5135 30.4769 44.2322 27.9344 43.1022 24.4358C42.9066 23.8382 42.4177 23.371 41.7984 23.2624C35.3553 22.0346 30.4877 16.3847 30.4877 9.5831C30.4877 6.72555 31.3461 4.07445 32.8237 1.86881C33.1714 1.34728 32.8781 0.641046 32.2588 0.521529C30.5529 0.173843 28.8036 0 27 0C12.093 0 0 12.093 0 27C0 41.907 12.093 54 27 54C40.4402 54 51.5553 44.2213 53.6415 31.3678C53.7392 30.7811 53.2068 30.303 52.631 30.3899Z"
                    fill="#4264D1" />
                  <path
                    d="M14.8093 21.7738C16.7355 21.7738 18.297 20.2123 18.297 18.2861C18.297 16.3599 16.7355 14.7984 14.8093 14.7984C12.883 14.7984 11.3215 16.3599 11.3215 18.2861C11.3215 20.2123 12.883 21.7738 14.8093 21.7738Z"
                    fill="#6CE2FF" />
                  <path
                    d="M16.5477 38.3215C17.9879 38.3215 19.1554 37.154 19.1554 35.7138C19.1554 34.2737 17.9879 33.1062 16.5477 33.1062C15.1075 33.1062 13.9401 34.2737 13.9401 35.7138C13.9401 37.154 15.1075 38.3215 16.5477 38.3215Z"
                    fill="#6CE2FF" />
                  <path
                    d="M38.2129 7.06237L37.963 8.56177C37.7565 9.78953 38.4519 10.9956 39.6254 11.441L41.8419 12.2668C43.2978 12.8101 44.9167 11.9626 45.297 10.4523L46.0901 7.3014C46.5791 5.33481 44.7429 3.58551 42.8089 4.16137L40.06 4.98712C39.093 5.26961 38.3759 6.07364 38.2129 7.06237Z"
                    fill="#6CE2FF" />
                  <path
                    d="M47.0354 16.5477L45.9815 17.0692C45.1557 17.4821 44.7972 18.4708 45.1557 19.3183L46.0032 21.2958C46.5139 22.4909 48.1111 22.7191 48.9477 21.7195L50.3058 20.0897C50.9469 19.3183 50.8056 18.1774 50.0125 17.5799L48.8608 16.7106C48.3284 16.3195 47.6221 16.2543 47.0354 16.5477Z"
                    fill="#6CE2FF" />
                  <path
                    d="M52.2615 13.06C53.2216 13.06 53.9999 12.2816 53.9999 11.3215C53.9999 10.3614 53.2216 9.5831 52.2615 9.5831C51.3014 9.5831 50.5231 10.3614 50.5231 11.3215C50.5231 12.2816 51.3014 13.06 52.2615 13.06Z"
                    fill="#6CE2FF" />
                  <path
                    d="M30.2704 50.7296C15.3634 50.7296 3.27042 38.6366 3.27042 23.7296C3.27042 17.1018 5.66076 11.039 9.61569 6.34528C3.73763 11.2998 0 18.7099 0 27C0 41.907 12.093 54 27 54C35.2901 54 42.7002 50.2732 47.6439 44.3952C42.9501 48.3501 36.8873 50.7296 30.2704 50.7296Z"
                    fill="#4264D1" />
                  <path
                    d="M42.2222 10.2459C40.7662 9.70263 39.897 8.19236 40.1469 6.64951L40.4403 4.86761L40.0274 4.98713C39.0712 5.26963 38.365 6.07365 38.202 7.06238L37.9521 8.56178C37.7457 9.78955 38.4411 10.9956 39.6145 11.4411L41.831 12.2668C43.0044 12.7014 44.2648 12.2342 44.9167 11.2563L42.2222 10.2459Z"
                    fill="#4264D1" />
                  <path
                    d="M47.8612 20.1658L46.905 17.9276C46.7203 17.5038 46.7095 17.0584 46.8181 16.6455L45.9815 17.0692C45.1557 17.4821 44.7972 18.4708 45.1557 19.3183L46.0032 21.2958C46.5139 22.491 48.1111 22.7191 48.9477 21.7195L49.2845 21.3175C48.6869 21.198 48.1328 20.8069 47.8612 20.1658Z"
                    fill="#4264D1" />
                  <path
                    d="M16.6563 19.9268C14.7332 19.9268 13.1686 18.3622 13.1686 16.4391C13.1686 15.961 13.2664 15.4938 13.4402 15.0809C12.1907 15.6133 11.3107 16.8519 11.3107 18.2861C11.3107 20.2093 12.8753 21.7739 14.7984 21.7739C16.2435 21.7739 17.4821 20.8938 18.0036 19.6443C17.6016 19.829 17.1344 19.9268 16.6563 19.9268Z"
                    fill="white" />
                  <path
                    d="M17.9059 36.9634C16.4608 36.9634 15.2982 35.79 15.2982 34.3557C15.2982 33.9863 15.3743 33.6386 15.5155 33.3235C14.592 33.7256 13.9401 34.6491 13.9401 35.7248C13.9401 37.1698 15.1135 38.3324 16.5477 38.3324C17.6234 38.3324 18.5469 37.6805 18.9489 36.757C18.623 36.8873 18.2753 36.9634 17.9059 36.9634Z"
                    fill="white" />
                  <path
                    d="M33.0954 41.8093C35.0216 41.8093 36.5831 40.2477 36.5831 38.3215C36.5831 36.3953 35.0216 34.8338 33.0954 34.8338C31.1692 34.8338 29.6077 36.3953 29.6077 38.3215C29.6077 40.2477 31.1692 41.8093 33.0954 41.8093Z"
                    fill="#6CE2FF" />
                  <path
                    d="M34.9425 39.9513C33.0193 39.9513 31.4547 38.3867 31.4547 36.4636C31.4547 35.9855 31.5525 35.5183 31.7264 35.1054C30.4769 35.6378 29.5968 36.8765 29.5968 38.3107C29.5968 40.2338 31.1614 41.7984 33.0845 41.7984C34.5296 41.7984 35.7682 40.9183 36.2898 39.6688C35.8877 39.8535 35.4314 39.9513 34.9425 39.9513Z"
                    fill="white" />
                  <path
                    d="M27.8063 22.9281C27.9601 21.9804 27.3165 21.0874 26.3688 20.9336C25.421 20.7798 24.5281 21.4234 24.3743 22.3711C24.2205 23.3188 24.864 24.2118 25.8118 24.3656C26.7595 24.5194 27.6525 23.8758 27.8063 22.9281Z"
                    fill="#6CE2FF" />
                  <path
                    d="M42.6785 35.6487C42.798 35.6487 42.9284 35.6161 43.0371 35.5618C43.4391 35.3553 43.602 34.8664 43.4065 34.4644L42.5373 32.726C42.3308 32.3239 41.8419 32.161 41.4399 32.3565C41.0379 32.563 40.8749 33.0519 41.0705 33.4539L41.9397 35.1924C42.0918 35.4857 42.3743 35.6487 42.6785 35.6487Z"
                    fill="white" />
                  <path
                    d="M33.0954 30.4225C33.2149 30.4225 33.3453 30.39 33.4539 30.3356L35.1923 29.4664C35.5944 29.26 35.7573 28.771 35.5618 28.369C35.3553 27.967 34.8664 27.804 34.4644 27.9996L32.726 28.8688C32.3239 29.0753 32.161 29.5642 32.3565 29.9662C32.5087 30.2596 32.802 30.4225 33.0954 30.4225Z"
                    fill="white" />
                  <path
                    d="M8.85515 28.2386C8.9964 28.5211 9.28976 28.6841 9.58312 28.6841C9.70263 28.6841 9.83302 28.6515 9.94167 28.5972C10.3437 28.3908 10.5067 27.9018 10.3111 27.4998L9.44187 25.7614C9.23543 25.3594 8.7465 25.1964 8.34449 25.392C7.94247 25.5984 7.7795 26.0873 7.97507 26.4894L8.85515 28.2386Z"
                    fill="white" />
                  <path
                    d="M22.2845 41.9505L20.5461 42.8197C20.1441 43.0262 19.9811 43.5151 20.1767 43.9171C20.3179 44.1996 20.6113 44.3626 20.9046 44.3626C21.0242 44.3626 21.1545 44.33 21.2632 44.2757L23.0016 43.4064C23.4036 43.2 23.5666 42.7111 23.371 42.3091C23.1755 41.907 22.6865 41.7441 22.2845 41.9505Z"
                    fill="white" />
                  <path
                    d="M23.2189 9.00724L22.3497 8.13802C22.0346 7.82293 21.5131 7.82293 21.198 8.13802C20.8829 8.45311 20.8829 8.97464 21.198 9.28973L22.0672 10.1589C22.2302 10.3219 22.4366 10.398 22.6431 10.398C22.8495 10.398 23.0559 10.3219 23.2189 10.1589C23.5449 9.84385 23.5449 9.32233 23.2189 9.00724Z"
                    fill="white" />
                  <path
                    d="M19.4596 28.1626C19.1445 28.4777 19.1445 28.9992 19.4596 29.3143L20.3288 30.1835C20.4918 30.3465 20.6982 30.4226 20.9047 30.4226C21.1111 30.4226 21.3175 30.3465 21.4805 30.1835C21.7956 29.8684 21.7956 29.3469 21.4805 29.0318L20.6113 28.1626C20.2853 27.8475 19.7747 27.8475 19.4596 28.1626Z"
                    fill="white" />
                  <path
                    d="M29.6729 47.0354V47.9046C29.6729 48.3501 30.0423 48.7195 30.4877 48.7195C30.9332 48.7195 31.3026 48.3501 31.3026 47.9046V47.0354C31.3026 46.5899 30.9332 46.2205 30.4877 46.2205C30.0423 46.2205 29.6729 46.5791 29.6729 47.0354Z"
                    fill="white" />
                  <path
                    d="M25.8374 15.3851L26.7067 14.5159C27.0217 14.2008 27.0217 13.6793 26.7067 13.3642C26.3916 13.0491 25.87 13.0491 25.5549 13.3642L24.6857 14.2334C24.3706 14.5485 24.3706 15.07 24.6857 15.3851C24.8487 15.5481 25.0551 15.6241 25.2616 15.6241C25.468 15.6241 25.6745 15.5372 25.8374 15.3851Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0">
                    <rect width="54" height="54" fill="white" />
                  </clipPath>
                </defs>
              </svg></div>
          </div>
          <div fs-cc="interaction" class="fs-cc-manager_trigger"></div>
        </div>
        <div fs-cc="preferences" fs-cc-scroll="disable" class="fs-cc-prefs_component w-form">
          <form id="cookie-preferences" name="wf-form-Cookie-Preferences" data-name="Cookie Preferences" method="get"
            class="fs-cc-prefs_form">
            <div fs-cc="close" class="fs-cc-prefs_close">
              <div class="fs-cc-prefs_close-icon w-embed"><svg fill="currentColor" aria-hidden="true" focusable="false"
                  viewBox="0 0 16 16">
                  <path
                    d="M9.414 8l4.293-4.293-1.414-1.414L8 6.586 3.707 2.293 2.293 3.707 6.586 8l-4.293 4.293 1.414 1.414L8 9.414l4.293 4.293 1.414-1.414L9.414 8z">
                  </path>
                </svg></div>
            </div>
            <div class="fs-cc-prefs_content">
              <div class="fs-cc-prefs_space-small">
                <div class="fs-cc-prefs_title">Privacy Preference Center</div>
              </div>
              <div class="fs-cc-prefs_space-small">
                <div class="fs-cc-prefs_text">When you visit websites, they may store or retrieve data in your browser.
                  This storage is often necessary for the basic functionality of the website. The storage may be used
                  for marketing, analytics, and personalization of the site, such as storing your preferences. Privacy
                  is important to us, so you have the option of disabling certain types of storage that may not be
                  necessary for the basic functioning of the website. Blocking categories may impact your experience on
                  the website.</div>
              </div>
              <div class="fs-cc-prefs_space-medium"><a fs-cc="deny" href="#"
                  class="fs-cc-prefs_button fs-cc-button-alt w-button">Reject all cookies</a><a fs-cc="allow" href="#"
                  class="fs-cc-prefs_button w-button">Allow all cookies</a></div>
              <div class="fs-cc-prefs_space-small">
                <div class="fs-cc-prefs_title">Manage Consent Preferences by Category</div>
              </div>
              <div class="fs-cc-prefs_option">
                <div class="fs-cc-prefs_toggle-wrapper">
                  <div class="fs-cc-prefs_label">Essential</div>
                  <div class="fs-cc-prefs_text"><strong>Always Active</strong></div>
                </div>
                <div class="fs-cc-prefs_text">These items are required to enable basic website functionality.</div>
              </div>
              <div class="fs-cc-prefs_option">
                <div class="fs-cc-prefs_toggle-wrapper">
                  <div class="fs-cc-prefs_label">Marketing</div><label
                    class="w-checkbox fs-cc-prefs_checkbox-field"><input type="checkbox" id="marketing-2"
                      name="marketing-2" data-name="Marketing 2" fs-cc-checkbox="marketing"
                      class="w-checkbox-input fs-cc-prefs_checkbox" /><span for="marketing-2"
                      class="fs-cc-prefs_checkbox-label w-form-label">Essential</span>
                    <div class="fs-cc-prefs_toggle"></div>
                  </label>
                </div>
                <div class="fs-cc-prefs_text">These items are used to deliver advertising that is more relevant to you
                  and your interests. They may also be used to limit the number of times you see an advertisement and
                  measure the effectiveness of advertising campaigns. Advertising networks usually place them with the
                  website operator’s permission.</div>
              </div>
              <div class="fs-cc-prefs_option">
                <div class="fs-cc-prefs_toggle-wrapper">
                  <div class="fs-cc-prefs_label">Personalization</div><label
                    class="w-checkbox fs-cc-prefs_checkbox-field"><input type="checkbox" id="personalization-2"
                      name="personalization-2" data-name="Personalization 2" fs-cc-checkbox="personalization"
                      class="w-checkbox-input fs-cc-prefs_checkbox" /><span for="personalization-2"
                      class="fs-cc-prefs_checkbox-label w-form-label">Essential</span>
                    <div class="fs-cc-prefs_toggle"></div>
                  </label>
                </div>
                <div class="fs-cc-prefs_text">These items allow the website to remember choices you make (such as your
                  user name, language, or the region you are in) and provide enhanced, more personal features. For
                  example, a website may provide you with local weather reports or traffic news by storing data about
                  your current location.</div>
              </div>
              <div class="fs-cc-prefs_option">
                <div class="fs-cc-prefs_toggle-wrapper">
                  <div class="fs-cc-prefs_label">Analytics</div><label
                    class="w-checkbox fs-cc-prefs_checkbox-field"><input type="checkbox" id="analytics-2"
                      name="analytics-2" data-name="Analytics 2" fs-cc-checkbox="analytics"
                      class="w-checkbox-input fs-cc-prefs_checkbox" /><span for="analytics-2"
                      class="fs-cc-prefs_checkbox-label w-form-label">Essential</span>
                    <div class="fs-cc-prefs_toggle"></div>
                  </label>
                </div>
                <div class="fs-cc-prefs_text">These items help the website operator understand how its website performs,
                  how visitors interact with the site, and whether there may be technical issues. This storage type
                  usually doesn’t collect information that identifies a visitor.</div>
              </div>
              <div class="fs-cc-prefs_buttons-wrapper"><a fs-cc="submit" href="#"
                  class="fs-cc-prefs_button w-button">Confirm my preferences and close</a></div><input type="submit"
                value="Submit" data-wait="Please wait..." class="fs-cc-prefs_submit-hide w-button" />
              <div class="w-embed">
                <style>
                  /* smooth scrolling on iOS devices */
                  .fs-cc-prefs_content {
                    -webkit-overflow-scrolling: touch
                  }
                </style>
              </div>
            </div>
          </form>
          <div class="w-form-done"></div>
          <div class="w-form-fail"></div>
          <div fs-cc="close" class="fs-cc-prefs_overlay"></div>
          <div fs-cc="interaction" class="fs-cc-prefs_trigger"></div>
        </div>
      </div>
    </div>
  </div>
  <script src="../d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c83064.js?site=60e6dc45a4d62517ed5a669f"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
  <script src="../assets.website-files.com/60e6dc45a4d62517ed5a669f/js/webflow.7deb99d39.js"
    type="text/javascript"></script>
  <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  <style>
    .w-webflow-badge {
      display: none !important;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>
  <script>
    $(".bg-video-mask video").each(function () {
      var mv = this;
      mv.setAttribute("playsinline", "");
      mv.setAttribute("muted", "");
      this.play();
    });
    $(".bg-video-mask").click(function () {

      $("video", this)[0].play();

    });
  </script>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBBM9MP" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <script>
< !--EMAIL DOMAINS TO BLOCK-- >
var emailList = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!aol.com)(?!hotmail.co.uk)(?!hotmail.fr)(?!msn.com)(?!yahoo.fr)(?!wanadoo.fr)(?!orange.fr)(?!comcast.net)(?!yahoo.co.uk)(?!yahoo.com.br)(?!yahoo.co.in)(?!live.com)(?!rediffmail.com)(?!free.fr)(?!gmx.de)(?!web.de)(?!yandex.ru)(?!ymail.com)(?!libero.it)(?!outlook.com)(?!uol.com.br)(?!bol.com.br)(?!mail.ru)(?!cox.net)(?!hotmail.it)(?!sbcglobal.net)(?!sfr.fr)(?!live.fr)(?!verizon.net)(?!live.co.uk)(?!googlemail.com)(?!yahoo.es)(?!ig.com.br)(?!live.nl)(?!bigpond.com)(?!terra.com.br)(?!yahoo.it)(?!neuf.fr)(?!yahoo.de)(?!alice.it)(?!rocketmail.com)(?!att.net)(?!laposte.net)(?!facebook.com)(?!bellsouth.net)(?!yahoo.in)(?!hotmail.es)(?!charter.net)(?!yahoo.ca)(?!yahoo.com.au)(?!rambler.ru)(?!hotmail.de)(?!tiscali.it)(?!shaw.ca)(?!yahoo.co.jp)(?!sky.com)(?!earthlink.net)(?!optonline.net)(?!freenet.de)(?!t-online.de)(?!aliceadsl.fr)(?!virgilio.it)(?!home.nl)(?!qq.com)(?!telenet.be)(?!me.com)(?!yahoo.com.ar)(?!tiscali.co.uk)(?!yahoo.com.mx)(?!voila.fr)(?!gmx.net)(?!mail.com)(?!planet.nl)(?!tin.it)(?!live.it)(?!ntlworld.com)(?!arcor.de)(?!yahoo.co.id)(?!frontiernet.net)(?!hetnet.nl)(?!live.com.au)(?!yahoo.com.sg)(?!zonnet.nl)(?!club-internet.fr)(?!juno.com)(?!optusnet.com.au)(?!blueyonder.co.uk)(?!bluewin.ch)(?!skynet.be)(?!sympatico.ca)(?!windstream.net)(?!mac.com)(?!centurytel.net)(?!chello.nl)(?!live.ca)(?!aim.com)(?!bigpond.net.au)([\w-]+\.)+[\w-]{2,4})?$/

      < !--ALERT MESSAGE TO BE SHOWN -->
  var emailAlert = 'Please input a valid work email address (not a Gmail, Outlook, Yahoo, etc.)'

      < !--VALIDATion -->
        $('input[type=submit]').click(function () {
          $("input[type=email]").each(function () {
            var email = $(this).val().toLowerCase();
            if (emailList.test(email)) {
              (this).setCustomValidity('');
            } else {
              (this).setCustomValidity(emailAlert);
            }
          })
        });

  < !--PREVENTS ALERT FROM APPEARING WITH EACH KEYPRESS-- >
      $('input[type=email]').on('input', function () {
        (this).setCustomValidity('');
      });


  < !--TAX CALCULATION LOGIC-- >

  var Webflow = Webflow || [];

    Webflow.push(function () {

      var $country = "GB";
      var $salary = "50000";
      var $currency = "USD";
      var $countries_data = {};

      var pageUrl = location.href;
      var castedPageUrl = pageUrl.toLowerCase();

      if (castedPageUrl.indexOf('country/index.html') != -1) {

        console.log("welcome to country details page");

        $("#Tax_Calculation_Currency").css("opacity", "0");
        $("#Tax_Calculation_Country").css("opacity", "0");
        $("#Tax_Calculation_Salary").css("opacity", "0");
        $("#Tax_Calculation_Salary").val($salary);

        //$("#Tax_Calculation_Currency").text(extractCurrency(String($("#Tax_Calculation_Currency").text()).split('(')));

        $(".tax_dropdown_list_text_only").each((ind, elem) => {
          $(elem).text(extractCurrency(String($(elem).text()).split('(')));
        });

        /***** Set Country Params ******/
        $country = $("#Tax_Calcution_Country_Code_Hidden").text();
        $currency = $("#Tax_Calculation_Currency").text();

        /***** opacity ******/
        $("#Tax_Calculation_Currency").css("opacity", "1");
        $("#Tax_Calculation_Country").css("opacity", "1");
        $("#Tax_Calculation_Salary").css("opacity", "1");

        /*** reset Fields ****/
        resetFields();

        /*** fetch Data ****/
        inputChanged();

      }

      /********* .Country_Nav_Content form *****************/

      $("form[name='email-form']").submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
      });

      /********* tax_dropdown_list_image_text_container *****************/

      $(".tax_dropdown_list_image_text_container").on("click", function (e) {

        $(".tax_dropdown_list").removeClass("w--open");
        $(".tax_dropdown_list").attr("aria-expanded", "false");

        /** update country input *******/

        $("#Tax_Calcution_Country_Code_Hidden").text($(this).find(".tax_dropdown_list_item_code_hidden").text());
        $(".tax_dropdown_text_input_image").attr("src", $(this).find(".tax_dropdown_list_image").attr("src"));
        $(".tax_dropdown_text_input_image").attr("srcset", $(this).find(".tax_dropdown_list_image").attr("src"));
        $(".tax_dropdown_text_input").text($(this).find(".tax_dropdown_list_label").text());

        /*** redirectToUrl ****/
        redirectToUrl();

        /*** reset Fields ****/
        resetFields();

        /*** fetch Data ****/
        inputChanged();

      });


      /********* tax_dropdown_list_text_only *****************/

      $(".tax_dropdown_list_text_only").on("click", function (e) {


        $(".tax_dropdown_currency_list").removeClass("w--open");
        $(".tax_dropdown_collection_currency_list").attr("aria-expanded", "false");

        /** update currency input *******/
        $("#Tax_Calculation_Currency").text($(this).text());

        /*** redirectToUrl ****/
        redirectToUrl();

        /*** reset Fields ****/
        resetFields();

        /*** fetch Data ****/
        inputChanged();

      });

      /********* tax_dropdown_list_text_only *****************/

      $("#Tax_Calculation_Salary").on("blur", function (e) {

        if ($("#Tax_Calculation_Salary").val() != "") {

          $("#Tax_Calculation_Salary").css("border", "0px solid transparent");
          /*** redirectToUrl ****/
          redirectToUrl();
          /*** fetch Data ****/
          inputChanged();
        } else {
          $("#Tax_Calculation_Salary").css("border", "1px solid #d80027");
        }

      });

      /********* extractCurrency *****************/

      function extractCurrency(text) {
        $text = text;
        $text = String($text[1]).replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');
        return $text
      }

      /********* inputChanged *****************/

      function inputChanged() {

        $country = $("#Tax_Calcution_Country_Code_Hidden").text();
        $currency = $("#Tax_Calculation_Currency").text();

        resetFields();

        if ($("#Tax_Calculation_Salary").val() != "") {

          $("#Tax_Calculation_Salary").css("border", "0px");

          $country = $("#Tax_Calcution_Country_Code_Hidden").text();
          $currency = $("#Tax_Calculation_Currency").text();
          $salary = $("#Tax_Calculation_Salary").val();



          $.ajax({
            type: 'get',
            crossDomain: true,
            xhrFields: {
              withCredentials: true
            },
            url: `https://sandbox.remotepass.com/api/eor/quote/export/json/${$salary}/${$country}/${$currency}`,
            dataType: 'json',
            success: function (json) {
              console.log('message: ' + "success" + JSON.stringify(json));
            },
            error: function (error) {
              console.log('message Error' + JSON.stringify(error));
            }
          })
            .done(function (res) {

              console.log("res => ", res);

              if (res.input) {

                $countries_data = res;

                displayData();

                $(".tab_content_left_container").css("opacity", "1");
                $(".tab_content_right_container").css("opacity", "1");

              }
              else {
                console.log(res);
              }
            });

        } else {
          $("#Tax_Calculation_Salary").css("border", "1px solid red");
        }

      }

      /********* displayData *****************/

      function displayData() {

        $currency_code = $countries_data.input.currency.code;

        $currency = $currency_code;

        $alreadyExitLabel = ["cost", "gross", "total_taxes", "net"];

        /**__ Yearly _________________ **/

        /**__ Employer _________________ **/

        $(".tab_content_yearly_container").find(".employer_yearly_cost").text($currency + "
    "+numberWithCommas($countries_data.employer.cost.annual)).css("opacity","1");
    $(".tab_content_yearly_container").find(".employer_yearly_gross").text($currency + "
    "+numberWithCommas($countries_data.employer.gross.annual)).css("opacity","1");
    $(".tab_content_yearly_container").find(".employer_yearly_tax").text($currency + "
    "+numberWithCommas($countries_data.employer.total_taxes.annual)).css("opacity","1");

    $tab_content_left_container = '';

        for (const property in $countries_data.employer) {
          if (!$alreadyExitLabel.includes(property)) {
            if ($countries_data.employer[property].length) {
              $countries_data.employer[property].map((currentItem) => {
                for (const currentItemProperty in currentItem) {
                  $tab_content_left_container += renderItem(currentItemProperty, currentItem[currentItemProperty].annual, $currency_code);
                }
              });
            } else {
              $tab_content_left_container += renderItem(property, $countries_data.employer[property].annual, $currency_code);
            }

          }
        }

        $(".tab_content_yearly_container").find(".tab_content_left_container
          .tab_content_footer").html($tab_content_left_container);

    /**__ Employee _________________ **/
    $(".tab_content_yearly_container").find(".employee_yearly_cost").text($currency + "
    "+numberWithCommas($countries_data.employee.net.annual)).css("opacity","1");
    $(".tab_content_yearly_container").find(".employee_yearly_gross").text($currency + "
    "+numberWithCommas($countries_data.employee.gross.annual)).css("opacity","1");
    $(".tab_content_yearly_container").find(".employee_yearly_tax").text($currency + "
    "+numberWithCommas($countries_data.employee.total_taxes.annual)).css("opacity","1");

    $tab_content_right_container = '';

        for (const property in $countries_data.employee) {
          if (!$alreadyExitLabel.includes(property)) {
            if ($countries_data.employee[property].length) {
              $countries_data.employee[property].map((currentItem) => {
                for (const currentItemProperty in currentItem) {
                  $tab_content_right_container += renderItem(currentItemProperty, currentItem[currentItemProperty].annual, $currency_code);
                }
              });
            } else {
              $tab_content_right_container += renderItem(property, $countries_data.employee[property].annual, $currency_code);
            }

          }
        }

        $(".tab_content_yearly_container").find(".tab_content_right_container
          .tab_content_footer").html($tab_content_right_container);

    /**__ Monthly _________________ **/

    /**__ Employer _________________ **/
    $(".tab_content_monthly_container").find(".employer_monthly_cost").text($currency + "
    "+numberWithCommas($countries_data.employer.cost.monthly)).css("opacity","1");
    $(".tab_content_monthly_container").find(".employer_monthly_gross").text($currency + "
    "+numberWithCommas($countries_data.employer.gross.monthly)).css("opacity","1");
    $(".tab_content_monthly_container").find(".employer_monthly_tax").text($currency + "
    "+numberWithCommas($countries_data.employer.total_taxes.monthly)).css("opacity","1");

    $tab_content_left_container = '';

        for (const property in $countries_data.employer) {
          if (!$alreadyExitLabel.includes(property)) {
            if ($countries_data.employer[property].length) {
              $countries_data.employer[property].map((currentItem) => {
                for (const currentItemProperty in currentItem) {
                  $tab_content_left_container += renderItem(currentItemProperty, currentItem[currentItemProperty].monthly, $currency_code);
                }
              });
            } else {
              $tab_content_left_container += renderItem(property, $countries_data.employer[property].monthly, $currency_code);
            }

          }
        }

        $(".tab_content_monthly_container").find(".tab_content_left_container
          .tab_content_footer").html($tab_content_left_container);

    /**__ Employee _________________ **/
    $(".tab_content_monthly_container").find(".employee_monthly_cost").text($currency + "
    "+numberWithCommas($countries_data.employee.net.monthly)).css("opacity","1");
    $(".tab_content_monthly_container").find(".employee_monthly_gross").text($currency + "
    "+numberWithCommas($countries_data.employee.gross.monthly)).css("opacity","1");
    $(".tab_content_monthly_container").find(".employee_monthly_tax").text($currency + "
    "+numberWithCommas($countries_data.employee.total_taxes.monthly)).css("opacity","1");

    $tab_content_right_container = '';

        for (const property in $countries_data.employee) {
          if (!$alreadyExitLabel.includes(property)) {
            if ($countries_data.employee[property].length) {
              $countries_data.employee[property].map((currentItem) => {
                for (const currentItemProperty in currentItem) {
                  $tab_content_right_container += renderItem(currentItemProperty, currentItem[currentItemProperty].monthly, $currency_code);
                }
              });
            } else {
              $tab_content_right_container += renderItem(property, $countries_data.employee[property].monthly, $currency_code);
            }

          }
        }

        $(".tab_content_monthly_container").find(".tab_content_right_container
          .tab_content_footer").html($tab_content_right_container);


    }

      /********* resetFields *****************/

      function resetFields() {

        /**__ Yearly _________________ **/

        /**__ Employer _________________ **/
        $(".tab_content_yearly_container").find(".employer_yearly_cost").text("").css("opacity", "0");
        $(".tab_content_yearly_container").find(".employer_yearly_gross").text("").css("opacity", "0");
        $(".tab_content_yearly_container").find(".employer_yearly_tax").text("").css("opacity", "0");
        /**__ Employee _________________ **/
        $(".tab_content_yearly_container").find(".employee_yearly_cost").text("").css("opacity", "0");
        $(".tab_content_yearly_container").find(".employee_yearly_gross").text("").css("opacity", "0");
        $(".tab_content_yearly_container").find(".employee_yearly_tax").text("").css("opacity", "0");
        /**__ Footer _________________ **/
        $(".tab_content_yearly_container").find(".tab_content_left_container .tab_content_footer").html("");
        $(".tab_content_yearly_container").find(".tab_content_right_container .tab_content_footer").html("");

        /**__ Monthly _________________ **/

        /**__ Employer _________________ **/
        $(".tab_content_monthly_container").find(".employer_monthly_cost").text("").css("opacity", "0");
        $(".tab_content_monthly_container").find(".employer_monthly_gross").text("").css("opacity", "0");
        $(".tab_content_monthly_container").find(".employer_monthly_tax").text("").css("opacity", "0");
        /**__ Employee _________________ **/
        $(".tab_content_monthly_container").find(".employee_monthly_cost").text("").css("opacity", "0");
        $(".tab_content_monthly_container").find(".employee_monthly_gross").text("").css("opacity", "0");
        $(".tab_content_monthly_container").find(".employee_monthly_tax").text("").css("opacity", "0");
        /**__ Footer _________________ **/
        $(".tab_content_monthly_container").find(".tab_content_left_container .tab_content_footer").html("");
        $(".tab_content_monthly_container").find(".tab_content_right_container .tab_content_footer").html("");

      }

      /********* numberWithCommas *****************/

      function numberWithCommas(num) {
    //return num.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d)) /g, "," ); return num.toLocaleString('en-US'); }
      /********* renderItem *****************/ function renderItem(Label, Cost, Currency) {
          Cost = numberWithCommas(Cost);
          return `<div class="tab_footer_horizental_container">
      <div class="tab_footer_horizental_cost_label">${Label}</div>
      <div class="tab_footer_horizental_cost_value employer_yearly_national_insurance">${Currency} ${Cost}</div>
      </div>`;
        }

        /********* numberWithCommas *****************/

        function redirectToUrl() {
          //console.log("redirectToUrl");
          //window.location.replace("https://www.remotepass.com/demo-request");
          //return false;
        }

      });

      < !--END TAX CALCULATION LOGIC-- >

  </script>
</body>
<!-- Mirrored from www.remotepass.com/contact-us by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 18:14:59 GMT -->

</html>