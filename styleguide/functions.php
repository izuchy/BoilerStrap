 <?php
  // Build out URI to reload from form dropdown
  // Need full url for this to work in Opera Mini
  $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";

  if (isset($_POST['sg_uri']) && isset($_POST['sg_section_switcher'])) {
     $pageURL .= $_POST[sg_uri].$_POST[sg_section_switcher];
     $pageURL = htmlspecialchars( filter_var( $pageURL, FILTER_SANITIZE_URL ) );
     header("Location: $pageURL");
  }
 // Display title of each markup samples as a select option
  function listElementsAsOptions ($type) {
    $files = array();
    $handle=opendir($type.'/');
    while (false !== ($file = readdir($handle))):
        if(stristr($file,'.html')):
            $files[] = $file;
        endif;
    endwhile;
echo '<li class="dropdown-item">'.$type.'</li>';
    sort($files);
    foreach ($files as $file):
        $filename = preg_replace("/\.html$/i", "", $file);
        $title = preg_replace("/\-/i", " ", $filename);
        $title = ucwords($title);
        echo '<a class="dropdown-item" href="#sg-'.$filename.'">'.$title.'</a>';
    endforeach;
  }
  // Display title of each markup samples as a select option
  function listMarkupAsOptions ($type) {
    $files = array();
    $handle=opendir('markup/'.$type);
    while (false !== ($file = readdir($handle))):
        if(stristr($file,'.html')):
            $files[] = $file;
        endif;
    endwhile;

    sort($files);
    foreach ($files as $file):
        $filename = preg_replace("/\.html$/i", "", $file);
        $title = preg_replace("/\-/i", " ", $filename);
        $title = ucwords($title);
        echo '<a class="dropdown-item" href="#sg-'.$filename.'">'.$title.'</a>';
    endforeach;
  }
    // Display foundation elements
    function showDocs() {
      $files = array();
      $handle=opendir('docs/');
      while (false !== ($file = readdir($handle))):
          if(stristr($file,'.html')):
              $files[] = $file;
          endif;
      endwhile;

      sort($files);
      foreach ($files as $file):
          $filename = preg_replace("/\.html$/i", "", $file);
          $title = preg_replace("/\-/i", " ", $filename);
          echo '<div class="col-lg-12 sg-section" id="sg-'.$filename.'">';
          echo '<div class="sg-display">';
          echo '<h2 class="sg-h2">'.$title.'</h2>';
          include('docs/'.$file);
          echo '</div><!--/.sg-display-->';
          echo '</div><!--/.sg-section-->';
      endforeach;
    }
  // Display foundation elements
  function showFoundation() {
    $files = array();
    $handle=opendir('foundation/');
    while (false !== ($file = readdir($handle))):
        if(stristr($file,'.html')):
            $files[] = $file;
        endif;
    endwhile;

    sort($files);
    foreach ($files as $file):
        $filename = preg_replace("/\.html$/i", "", $file);
        $title = preg_replace("/\-/i", " ", $filename);
        echo '<div class="col-lg-12 sg-section" id="sg-'.$filename.'">';
        echo '<div class="sg-display">';
        echo '<h2 class="sg-h2">'.$title.'</h2>';
        include('foundation/'.$file);
        echo '</div><!--/.sg-display-->';
        echo '</div><!--/.sg-section-->';
    endforeach;
  }
  // Display markup view & source
  function showMarkup($type) {
    $files = array();
    $handle=opendir('markup/'.$type);
    while (false !== ($file = readdir($handle))):
        if(stristr($file,'.html')):
            $files[] = $file;
        endif;
    endwhile;

    $code_cnt = 1;
    sort($files);
    foreach ($files as $file):
        $filename = preg_replace("/\.html$/i", "", $file);
        $title = preg_replace("/\-/i", " ", $filename);
        //$documentation = 'usage/'.$type.'/'.$file;
        echo '<div class="sg-markup sg-section">';
        echo '<div class="sg-display">';
        echo '<h2 class="sg-h2"><a id="sg-'.$filename.'" class="sg-anchor">'.$title.'</a></h2>';
        //echo '<div class="col-md-10 col-md-offset-1">';
        echo '<div class="row"><div class="col-md-12">';
        include('markup/'.$type.'/'.$file);
        echo '</div>';
        //if (file_exists($documentation)) {
        //  echo '<div class="col-md-4"><div class="well sg-doc">';
        //  echo '<h3 class="sg-h3">Usage Notes</h3>';
        //  include($documentation);
        //  echo '</div></div></div>';
        //}
        echo '</div><!--/.sg-display-->';
        echo '<div class="sg-markup-controls"><button class="btn btn-primary btn-sm sg-btn sg-btn--source" href="#">ソースを見る</button> <a class="sg-btn--top" href="#top">トップに戻る</a> </div>';
        echo '<div class="sg-source sg-animated">';
        echo '<button class="btn btn-default sg-btn sg-btn--select" href="#" data-clipboard-target="#code'.$code_cnt.'">コードをコピー</button>';
        echo '<pre class="prettyprint linenums" id="code'.$code_cnt.'"><code>';
        echo htmlspecialchars(file_get_contents('markup/'.$type.'/'.$file));
        echo '</code></pre>';
        echo '<code style="display:none">';
        echo htmlspecialchars(file_get_contents('markup/'.$type.'/'.$file));
        echo '</code>';
        echo '</div><!--/.sg-source-->';
        //echo '</div><!--/.colmd10-->';
        echo '</div><!--/.sg-section-->';
        $code_cnt++;
    endforeach;
  }
?>
