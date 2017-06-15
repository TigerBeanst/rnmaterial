<?php wp_footer();?>
<footer class="mdl-mini-footer" id="bottom">
		  <div class="mdl-mini-footer--left-section">
		  <div>
              <div class="footer-develop-div">Powered by
                <a href="https://cn.wordpress.org/" target="_blank" class="footer-develop-a">WordPress</a></div>
              <div class="footer-develop-div">Theme -
                <a href="https://github.com/hjthjthjt/rnmaterial" target="_blank" class="footer-develop-a">RnMaterial</a> | <a href="https://jakting.com" target="_blank" class="footer-develop-a">Jartip</a></div>
            </div>
          </div>
          <div class="mdl-mini-footer--right-section">
            <div id="copyright">Copyright&nbsp;©&nbsp;2016&nbsp;-
            <script type="text/javascript">var fd = new Date;
              document.write("&nbsp;" + fd.getFullYear() + "&nbsp;")</script><?php bloginfo("name"); ?>
            <br>本博客使用
            <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh" target="_blank" class="footer-develop-a">CC BY-NC-SA 3.0</a>进行许可</div>
          </div>
        </footer>
        <script>lsloader.load("<?php echo bloginfo('template_url');?>/js/lazyload.min.js", "<?php echo bloginfo('template_url');?>/js/lazyload.min.js")</script>
        <script>lsloader.load("<?php echo bloginfo('template_url');?>/js/js.min.js", "<?php echo bloginfo('template_url');?>/js/js.min.js")</script>
        <script>lsloader.load("<?php echo bloginfo('template_url');?>/js/nprogress.js", "<?php echo bloginfo('template_url');?>/js/nprogress.js")</script>
        <script type="text/ls-javascript" id="NProgress-script">NProgress.configure({
            showSpinner: true
          });
          NProgress.start();
          $('#nprogress .bar').css({
            'background': '#263238'
          });
          $('#nprogress .peg').css({
            'box-shadow': '0 0 10px #263238, 0 0 15px #263238'
          });
          $('#nprogress .spinner-icon').css({
            'border-top-color': '#263238',
            'border-left-color': '#263238'
          });
          setTimeout(function() {
            NProgress.done();
            $('.fade').removeClass('out');
          },
          300);</script>
        <script type="text/ls-javascript" id="search-local-js-script">var searchFunc = function(path, search_id, content_id) {
            'use strict';
            $.ajax({
              url: path,
              dataType: 'xml',
              success: function(xmlResponse) {
                // get the contents from search data
                var datas = $('entry', xmlResponse).map(function() {
                  return {
                    title: $('title', this).text(),
                    content: $('content', this).text(),
                    url: $('url', this).text()
                  };
                }).get();
                var $input = document.getElementById(search_id);
                var $resultContent = document.getElementById(content_id);
                $input.addEventListener('input',
                function() {
                  var str = '<ul class=\"search-result-list\">';
                  var keywords = this.value.trim().toLowerCase().split(/[\s\-]+/);
                  $resultContent.innerHTML = '';
                  if (this.value.trim().length <= 0) {
                    return;
                  }
                  // perform local searching
                  datas.forEach(function(data) {
                    var isMatch = true;
                    var content_index = [];
                    var data_title = data.title.trim().toLowerCase();
                    var data_content = data.content.trim().replace(/<[^>]+>/g, '').toLowerCase();
                    var data_url = data.url;
                    var index_title = -1;
                    var index_content = -1;
                    var first_occur = -1;
                    // only match artiles with not empty titles and contents
                    if (data_title !== '' && data_content !== '') {
                      keywords.forEach(function(keyword, i) {
                        index_title = data_title.indexOf(keyword);
                        index_content = data_content.indexOf(keyword);
                        if (index_title < 0 && index_content < 0) {
                          isMatch = false;
                        } else {
                          if (index_content < 0) {
                            index_content = 0;
                          }
                          if (i === 0) {
                            first_occur = index_content;
                          }
                        }
                      });
                    }
                    // show search results
                    if (isMatch) {
                      str += '<li><a href="' + data_url + '" class="search-result-title" target="_blank">' + data_title;
                      var content = data.content.trim().replace(/<[^>]+>/g, '');
                      if (first_occur >= 0) {
                        // cut out characters
                        var start = first_occur - 6;
                        var end = first_occur + 6;
                        if (start < 0) {
                          start = 0;
                        }
                        if (start === 0) {
                          end = 10;
                        }
                        if (end > content.length) {
                          end = content.length;
                        }
                        var match_content = content.substr(start, end);
                        // highlight all keywords
                        keywords.forEach(function(keyword) {
                          var regS = new RegExp(keyword, 'gi');
                          match_content = match_content.replace(regS, '<em class="search-keyword">' + keyword + '</em>');
                        }) str += '<p class="search-result">' + match_content + '...</p>' + '</a>';
                      }
                    }
                  });
                  $resultContent.innerHTML = str;
                });
              }
            });
          }</script>
        <script type="text/ls-javascript" id="search-input-script">var inputArea = document.querySelector('#search');
          var getSearchFile = function() {
            var path = 'search.xml';
            searchFunc(path, 'search', 'local-search-result');
          }

          if (inputArea) {
            inputArea.onfocus = function() {
              getSearchFile();
            }
          }</script>
        <script>var agent = navigator.userAgent.toLowerCase();
          agent.indexOf("ucbrowser") > 0 && (document.write('<link rel="stylesheet" href="/css/uc.css">'), alert("由于 UC 浏览器使用极旧的内核，而本网站使用了一些新的特性。\n为了您能更好的浏览，推荐使用 Chrome 或 Firefox 浏览器。"))</script>
        <script type="text/ls-javascript" id="window-load">$(window).on('load',
          function() {
            // Post_Toc parent position fixed
            $('.post-toc-wrap').parent('.mdl-menu__container').css('position', 'fixed');
          });</script>
        <script type="text/ls-javascript" id="lazy-load">// Offer LazyLoad
          queue.offer(function() {
            $('.lazy').lazyload({
              effect: 'show'
            });
          });</script>
      </main>
    </div>
  </body>
  
  </html>