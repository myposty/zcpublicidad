<!---------------------------------fbc----------------------------------------------------------------->
<!-- Messenger plugin de chat Code -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your plugin de chat code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="102406381991332">
      </div>
<!---------------------------------------------------------------------------------------------------->